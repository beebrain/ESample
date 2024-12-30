<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title mb-0">Recent Tests</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm" onclick="exportTableData()">
                        <i class="fas fa-download mr-1"></i> Export
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Test ID</th>
                            <th>Sample Name</th>
                            <th>Agency</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: BASE_URL + 'dashboard/dashboard/get_table_data',
                type: 'POST'
            },
            columns: [{
                    data: 'testid'
                },
                {
                    data: 'sampleName'
                },
                {
                    data: 'senderAgencyname'
                },
                {
                    data: 'testactive',
                    render: function(data, type, row) {
                        if (data == 1) {
                            return '<span class="badge badge-success">Active</span>';
                        }
                        return '<span class="badge badge-warning">Pending</span>';
                    }
                },
                {
                    data: 'createDate',
                    render: function(data) {
                        return moment(data).format('YYYY-MM-DD');
                    }
                },
                {
                    data: null,
                    render: function(data) {
                        return `
                        <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm" onclick="viewTest(${data.testid})">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="editTest(${data.testid})">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    `;
                    }
                }
            ],
            order: [
                [4, 'desc']
            ],
            pageLength: 10,
            language: {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>'
            },
            drawCallback: function() {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    });

    function viewTest(testId) {
        window.location.href = BASE_URL + 'test/view/' + testId;
    }

    function editTest(testId) {
        window.location.href = BASE_URL + 'test/edit/' + testId;
    }

    function exportTableData() {
        window.location.href = BASE_URL + '/dashboard/dashboard/export_data';
    }