<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testing Dashboard</title>

    <!-- Core CSS -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <!-- Custom CSS -->
    <style>
        .dashboard-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .chart-container {
            height: 400px;
            width: 100%;
        }

        .data-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .data-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .status-badge {
            padding: 0.5em 1em;
            border-radius: 4px;
            font-weight: 500;
        }
    </style>
</head>

<body class="color-light">
    <!-- Main loader -->
    <div class="dashboard-loader" id="mainLoader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="iq-sidebar sidebar-default" id="mainMenu"></div>

        <!-- Content -->
        <div class="content-page">
            <div class="container-fluid">



                <!-- Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Add this after the header title, inside the card-body div -->
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-3">Testing Dashboard</h4>
                                        <p class="mb-0">Analytics and Overview</p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <!-- Add Year Filter Dropdown -->
                                        <select id="yearFilter" class="form-control" style="width: 120px;">
                                            <option value="">All Years</option>
                                            <?php
                                            $currentYear = date('Y');
                                            for ($year = $currentYear; $year >= $currentYear - 5; $year--) {
                                                echo "<option value='$year'>$year</option>";
                                            }
                                            ?>
                                        </select>
                                        <button class="btn btn-primary refresh-btn ml-2">
                                            <i class="ri-refresh-line mr-1"></i> Refresh Data
                                        </button>
                                        <button class="btn btn-outline-primary export-btn">
                                            <i class="ri-download-line mr-1"></i> Export Data
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards Container -->
                <div id="statsContainer" class="row mt-4">
                    <!-- Total Tests Card -->
                    <div class="col-md-3">
                        <div class="card data-card" id="totalTestsCard">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle p-3 bg-primary-light">
                                        <i class="ri-flask-line text-primary font-size-24"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h2 class="mb-0 total-tests animate-number" data-value="0">0</h2>
                                        <p class="mb-0">Total Tests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Tests Card -->
                    <div class="col-md-3">
                        <div class="card data-card" id="activeTestsCard">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle p-3 bg-success-light">
                                        <i class="ri-pulse-line text-success font-size-24"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h2 class="mb-0 active-tests animate-number" data-value="0">0</h2>
                                        <p class="mb-0">Active Tests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Reviews Card -->
                    <div class="col-md-3">
                        <div class="card data-card" id="pendingReviewsCard">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle p-3 bg-warning-light">
                                        <i class="ri-time-line text-warning font-size-24"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h2 class="mb-0 pending-reviews animate-number" data-value="0">0</h2>
                                        <p class="mb-0">Pending Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Completed Tests Card -->
                    <div class="col-md-3">
                        <div class="card data-card" id="completedTestsCard">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle p-3 bg-info-light">
                                        <i class="ri-check-double-line text-info font-size-24"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h2 class="mb-0 completed-tests animate-number" data-value="0">0</h2>
                                        <p class="mb-0">Completed Tests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Container -->
                <div class="row mt-4">
                    <!-- Status Distribution Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="card-title mb-0">Test Status Distribution</h5>
                                </div>
                                <div id="statusChartDiv" class="chart-container"></div>
                                <div class="loading-overlay">
                                    <div class="spinner-border text-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Trends Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="card-title mb-0">Monthly Test Trends</h5>
                                </div>
                                <div id="trendsChartDiv" class="chart-container"></div>
                                <div class="loading-overlay">
                                    <div class="spinner-border text-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Container -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="card-title mb-0">Recent Tests</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="recentTestsTable" class="table table-striped">
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
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Moment.js -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <!-- DataTables -->
    <script defer src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script defer src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <!-- amCharts -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Dashboard Scripts -->


    <!-- Add this before </body> tag -->
    <script>
        // Global configurations
        const CONFIG = {
            refreshInterval: 300000, // 5 minutes
            animationDuration: 1000,
            pageSize: 10,
            BASE_URL: '<?php echo base_url(); ?>' + 'index.php/'
        };

        // Global chart variables
        let statusChart = null;
        let trendsChart = null;
        let recentTestsTable = null;

        // Cache DOM elements
        const DOM = {
            statsContainer: $('#statsContainer'),
            tableContainer: $('#tableContainer'),
            loadingOverlay: $('.loading-overlay'),
            mainLoader: $('#mainLoader'),
            yearFilter: $('#yearFilter'),
            refreshBtn: $('.refresh-btn')
        };

        // Initialize when document is ready
        $(document).ready(function() {
            initializePage();
            setupEventListeners();
            initializeYearFilter();
        });

        // Initialize page components
        function initializePage() {
            showLoading();
            Promise.all([
                loadMainMenu(),
                loadStatsCards(),
                initializeCharts(),
                initializeDataTable()
            ]).finally(() => {
                hideLoading();
            });
            setupAutoRefresh();
        }

        // Initialize year filter
        function initializeYearFilter() {
            const savedYear = localStorage.getItem('selectedYear');
            if (savedYear) {
                DOM.yearFilter.val(savedYear);
                refreshDashboard();
            }
        }

        // Setup event listeners
        function setupEventListeners() {
            DOM.yearFilter.on('change', function() {
                localStorage.setItem('selectedYear', $(this).val());
                refreshDashboard();
            });

            DOM.refreshBtn.on('click', refreshDashboard);
        }

        // Load main menu
        function loadMainMenu() {
            return $.ajax({
                url: CONFIG.BASE_URL + 'utility/menuController/getMainMenu',
                type: 'GET',
                success: function(response) {
                    $('#mainMenu').html(response);
                }
            });
        }

        // Load statistics cards
        function loadStatsCards() {
            return $.ajax({
                url: CONFIG.BASE_URL + 'dashboard/dashboard/get_stats_cards',
                type: 'GET',
                data: {
                    year: DOM.yearFilter.val()
                },
                success: function(response) {
                    DOM.statsContainer.html(response);
                    animateNumbers();
                }
            });
        }

        // Initialize charts
        function initializeCharts() {
            try {
                initializeStatusChart();
                initializeTrendsChart();
                return loadChartData();
            } catch (error) {
                console.error('Chart initialization failed:', error);
                showError('Failed to initialize charts');
            }
        }

        // Initialize status chart
        function initializeStatusChart() {
            let statusRoot = am5.Root.new("statusChartDiv");
            statusRoot.setThemes([am5themes_Animated.new(statusRoot)]);

            statusChart = statusRoot.container.children.push(
                am5percent.PieChart.new(statusRoot, {
                    layout: statusRoot.verticalLayout,
                    innerRadius: am5.percent(50)
                })
            );

            let series = statusChart.series.push(
                am5percent.PieSeries.new(statusRoot, {
                    name: "Series",
                    valueField: "value",
                    categoryField: "category",
                    endAngle: 270
                })
            );

            series.states.create("hidden", {
                endAngle: -90
            });

            // Add legend
            let legend = statusChart.children.push(am5.Legend.new(statusRoot, {
                centerX: am5.percent(50),
                x: am5.percent(50),
                marginTop: 15,
                marginBottom: 15
            }));
            legend.data.setAll(series.dataItems);
        }

        // Initialize trends chart
        function initializeTrendsChart() {
            let trendsRoot = am5.Root.new("trendsChartDiv");
            trendsRoot.setThemes([am5themes_Animated.new(trendsRoot)]);

            trendsChart = trendsRoot.container.children.push(
                am5xy.XYChart.new(trendsRoot, {
                    panX: false,
                    panY: false,
                    wheelX: "none",
                    wheelY: "none"
                })
            );

            // Add axes
            let yAxis = trendsChart.yAxes.push(
                am5xy.ValueAxis.new(trendsRoot, {
                    renderer: am5xy.AxisRendererY.new(trendsRoot, {})
                })
            );

            let xAxis = trendsChart.xAxes.push(
                am5xy.CategoryAxis.new(trendsRoot, {
                    renderer: am5xy.AxisRendererX.new(trendsRoot, {}),
                    categoryField: "category"
                })
            );

            // Add series
            let series = trendsChart.series.push(
                am5xy.LineSeries.new(trendsRoot, {
                    name: "Tests",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: "value",
                    categoryXField: "category",
                    tooltip: am5.Tooltip.new(trendsRoot, {
                        labelText: "{valueY}"
                    })
                })
            );

            // Add bullets
            series.bullets.push(function() {
                return am5.Bullet.new(trendsRoot, {
                    sprite: am5.Circle.new(trendsRoot, {
                        radius: 5,
                        fill: series.get("fill")
                    })
                });
            });

            // Add legend
            trendsChart.children.push(am5.Legend.new(trendsRoot, {}));
        }

        // Load chart data
        function loadChartData() {
            DOM.loadingOverlay.show();
            return $.ajax({
                url: CONFIG.BASE_URL + 'dashboard/dashboard/get_chart_data',
                type: 'GET',
                data: {
                    year: DOM.yearFilter.val()
                },
                success: function(response) {
                    if (response.success) {
                        updateStatusChart(response.status_data);
                        updateTrendsChart(response.trends_data);
                    }
                },
                error: function() {
                    showError('Failed to load chart data');
                },
                complete: function() {
                    DOM.loadingOverlay.hide();
                }
            });
        }

        // Update status chart
        function updateStatusChart(data) {
            if (statusChart) {
                statusChart.series.getIndex(0).data.setAll(data);
            }
        }

        // Update trends chart
        function updateTrendsChart(data) {
            if (trendsChart) {
                let series = trendsChart.series.getIndex(0);
                series.data.setAll(data);
                trendsChart.xAxes.getIndex(0).data.setAll(data);
            }
        }

        // Initialize DataTable
        function initializeDataTable() {
            if ($.fn.DataTable.isDataTable('#recentTestsTable')) {
                $('#recentTestsTable').DataTable().destroy();
            }

            recentTestsTable = $('#recentTestsTable').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                ajax: {
                    url: CONFIG.BASE_URL + 'dashboard/dashboard/get_table_data',
                    type: 'POST',
                    data: function(d) {
                        d.year = DOM.yearFilter.val();
                        return d;
                    }
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
                        render: function(data) {
                            return data == 1 ?
                                '<span class="badge badge-success">Active</span>' :
                                '<span class="badge badge-warning">Pending</span>';
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
                        orderable: false,
                        render: function(data) {
                            return `
                        <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm" 
                                    onclick="viewTest(${data.testid})" 
                                    title="View">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" 
                                    onclick="editTest(${data.testid})" 
                                    title="Edit">
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
                pageLength: CONFIG.pageSize
            });
        }

        // Animate numbers
        function animateNumbers() {
            $('.animate-number').each(function() {
                const $this = $(this);
                const finalValue = parseInt($this.data('value'));
                $({
                    Counter: 0
                }).animate({
                    Counter: finalValue
                }, {
                    duration: CONFIG.animationDuration,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }

        // Auto refresh setup
        function setupAutoRefresh() {
            setInterval(function() {
                if (!document.hidden) {
                    refreshDashboard();
                }
            }, CONFIG.refreshInterval);
        }

        // Refresh dashboard
        function refreshDashboard() {
            DOM.refreshBtn.prop('disabled', true);
            DOM.yearFilter.prop('disabled', true);
            showLoading();

            Promise.all([
                loadStatsCards(),
                loadChartData(),
                recentTestsTable?.ajax.reload(null, false)
            ]).finally(() => {
                DOM.refreshBtn.prop('disabled', false);
                DOM.yearFilter.prop('disabled', false);
                hideLoading();
            });
        }

        // Reset filters
        function resetFilters() {
            DOM.yearFilter.val('');
            localStorage.removeItem('selectedYear');
            refreshDashboard();
        }

        // Loading state management
        function showLoading() {
            DOM.loadingOverlay.css('display', 'flex');
        }

        function hideLoading() {
            DOM.loadingOverlay.css('display', 'none');
        }

        // Error handling
        function showError(message) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: message,
                timer: 3000,
                showConfirmButton: false
            });
        }

        // Test actions
        function viewTest(testId) {
            window.location.href = CONFIG.BASE_URL + 'test/view/' + testId;
        }

        function editTest(testId) {
            window.location.href = CONFIG.BASE_URL + 'test/edit/' + testId;
        }

        // Cleanup on page unload
        function cleanup() {
            if (statusChart) {
                statusChart.dispose();
            }
            if (trendsChart) {
                trendsChart.dispose();
            }
            if (recentTestsTable) {
                recentTestsTable.destroy();
            }
        }

        window.addEventListener('beforeunload', cleanup);

        // Error boundary
        window.onerror = function(msg, url, lineNo, columnNo, error) {
            console.error('Dashboard Error:', {
                msg,
                url,
                lineNo,
                columnNo,
                error
            });
            showError('An error occurred. Please refresh the page.');
            return false;
        };
    </script>
</body>

</html>