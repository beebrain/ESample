<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('samplemodel');
        $this->load->model('Sampletestservicemodel');
    }

    public function index()
    {
        $this->load->view('dashboard/dashboard');
    }

    public function get_stats_cards()
    {
        $year = $this->input->get('year');

        // Add year condition to your queries
        $yearCondition = $year ? "AND YEAR(createDate) = " . $this->db->escape($year) : "";

        $data = array(
            'total_tests' => $this->samplemodel->get_total_records($yearCondition),
            'active_tests' => $this->samplemodel->get_total_records(true, $yearCondition),
            'pending_reviews' => $this->samplemodel->get_filtered_records("", true, "", true, $yearCondition),
            'completed_tests' => $this->get_completed_tests_count($yearCondition)
        );

        $this->load->view('dashboard/partials/stats_cards', $data);
    }

    public function get_chart_data()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        try {
            $response = array(
                'success' => true,
                'status_data' => $this->get_status_distribution(),
                'trends_data' => $this->get_monthly_trends()
            );

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => false,
                    'message' => $e->getMessage()
                ]));
        }
    }

    public function get_table_content()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        $this->load->view('dashboard/partials/data_table');
    }

    private function get_status_distribution()
    {
        $year = $this->input->get('year');

        $query = "SELECT temp.status as category, COUNT(*) as value 
                 FROM (
                     SELECT 
                         CASE 
                             WHEN testActive = 1 AND reviewer_confirm IS NOT NULL THEN 'Completed'
                             WHEN testActive = 1 AND reviewer_id IS NOT NULL AND reviewer_confirm IS NULL THEN 'Under Review'
                             WHEN testActive = 1 THEN 'Active'
                             ELSE 'Pending'
                         END AS status
                     FROM es_testapp
                     WHERE 1=1";

        if ($year) {
            $query .= " AND YEAR(createDate) = " . $this->db->escape($year);
        }

        $query .= ") temp GROUP BY temp.status";

        return $this->db->query($query)->result_array();
    }


    private function get_monthly_trends()
    {
        $year = $this->input->get('year');

        $query = "SELECT DATE_FORMAT(createDate, '%Y-%m') as category, 
                        COUNT(*) as value
                 FROM es_testapp 
                 WHERE createDate >= DATE_SUB(NOW(), INTERVAL 6 MONTH)";

        if ($year) {
            $query = "SELECT DATE_FORMAT(createDate, '%Y-%m') as category, 
                            COUNT(*) as value
                     FROM es_testapp 
                     WHERE YEAR(createDate) = " . $this->db->escape($year);
        }

        $query .= " GROUP BY DATE_FORMAT(createDate, '%Y-%m')
                   ORDER BY category ASC";

        return $this->db->query($query)->result_array();
    }



    private function get_completed_tests_count()
    {
        $completed_status = array();
        $all_tests = $this->samplemodel->get_test_status();

        foreach ($all_tests as $test) {
            $status = $this->samplemodel->check_test_completion_and_response($test->testid);
            if ($status && $status->servicesCompleted && $status->userResponseComplete) {
                $completed_status[] = $status;
            }
        }

        return count($completed_status);
    }

    public function get_table_data()
    {
        // Check if this is an AJAX request
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        try {
            // Get posted parameters
            $draw = $this->input->post('draw');
            $start = $this->input->post('start');
            $length = $this->input->post('length');
            $search = $this->input->post('search')['value'];
            $order = $this->input->post('order')[0];
            $year = $this->input->post('year');

            // Get column names for ordering
            $columns = array('testid', 'sampleName', 'senderAgencyname', 'testactive', 'createDate');
            $orderColumn = $columns[$order['column']];
            $orderDir = $order['dir'];

            // Build conditions array
            $conditions = array();
            if ($year) {
                $conditions[] = "YEAR(createDate) = " . $this->db->escape($year);
            }

            // Get data from model
            $records = $this->samplemodel->get_datatable($start, $length, $search, $orderColumn, $orderDir, $conditions);
            $totalRecords = $this->samplemodel->get_total_records();
            $filteredRecords = $this->samplemodel->get_filtered_records($search);

            // Format data for DataTables
            $data = array();
            foreach ($records as $record) {
                $data[] = array(
                    'testid' => $record->testid,
                    'sampleName' => $record->sampleName,
                    'senderAgencyname' => $record->senderAgencyname,
                    'testactive' => $record->testactive,
                    'createDate' => $record->createDate,
                    'actions' => '' // Will be rendered by DataTables
                );
            }

            // Prepare response
            $response = array(
                "draw" => intval($draw),
                "recordsTotal" => $totalRecords,
                "recordsFiltered" => $filteredRecords,
                "data" => $data
            );

            echo json_encode($response);
        } catch (Exception $e) {
            // Log the error
            log_message('error', 'Error in get_table_data: ' . $e->getMessage());

            // Send error response
            echo json_encode([
                "draw" => intval($draw),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => [],
                "error" => "An error occurred while fetching data"
            ]);
        }
    }

    public function export_data()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        // Load PHPExcel library
        $this->load->library('excel');

        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()
            ->setTitle("Dashboard Report")
            ->setSubject("Dashboard Statistics Export")
            ->setDescription("Export of dashboard statistics and metrics");

        // Add data
        $this->add_excel_data($objPHPExcel);

        // Generate filename
        $filename = 'dashboard_report_' . date('Y-m-d_H-i-s') . '.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }
}
