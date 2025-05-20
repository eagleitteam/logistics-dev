<x-admin.layout>
    <x-slot name="title">Expense Tracking Report</x-slot>
    <x-slot name="heading">Expense Tracking Report</x-slot>

    {{-- Filter Section --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <label for="period-filter" class="form-label">Period</label>
                            <select class="form-select" id="period-filter">
                                <option value="this_month">This Month</option>
                                <option value="last_month">Last Month</option>
                                <option value="this_quarter">This Quarter</option>
                                <option value="this_year">This Year</option>
                                <option value="custom">Custom Range</option>
                            </select>
                        </div>
                        <div class="col-md-3" id="custom-date-range" style="display:none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start-date" class="form-label">From</label>
                                    <input type="date" class="form-control" id="start-date">
                                </div>
                                <div class="col-md-6">
                                    <label for="end-date" class="form-label">To</label>
                                    <input type="date" class="form-control" id="end-date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="master-group-filter" class="form-label">Master Group</label>
                            <select class="form-select" id="master-group-filter">
                                <option value="">All Master Groups</option>
                                <option value="operating">Operating Expenses</option>
                                <option value="administrative">Administrative Expenses</option>
                                <option value="financial">Financial Expenses</option>
                            </select>
                        </div>
                        <div class="col-md-3 text-end">
                            <button class="btn btn-primary mt-4" id="apply-filters">
                                <i class="fas fa-filter me-2"></i>Apply Filters
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Summary Cards --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-primary bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Total Expenses</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="187254.32">0</span></h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="fas fa-arrow-up align-middle"></i> 12.5%
                            </span> vs previous period</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                                    <i class="fas fa-receipt text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-success bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Budget Utilization</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="72">0</span>%</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                <i class="fas fa-check-circle align-middle"></i> On track
                            </span></p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success-subtle rounded-circle fs-2">
                                    <i class="fas fa-chart-pie text-success"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-warning bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Top Expense Group</p>
                            <h2 class="mt-4 ff-secondary fw-semibold">Transport</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-warning mb-0">
                                <i class="fas fa-exclamation-triangle align-middle"></i> 28% of total
                            </span></p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle rounded-circle fs-2">
                                    <i class="fas fa-truck text-warning"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-info bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Avg. Daily Expense</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="6241.81">0</span></h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-info mb-0">
                                <i class="fas fa-info-circle align-middle"></i> 5.2% variance
                            </span></p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                    <i class="fas fa-calendar-day text-info"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="row">
        {{-- Expense Breakdown Chart --}}
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Expense Breakdown by Master Group</h4>
                        <div class="dropdown">
                            <button class="btn btn-soft-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-download me-2"></i>Export
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">PDF</a></li>
                                <li><a class="dropdown-item" href="#">Excel</a></li>
                                <li><a class="dropdown-item" href="#">CSV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="expense-treemap" style="min-height: 350px;"></div>
                </div>
            </div>
        </div>

        {{-- Expense Trend Chart --}}
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Monthly Expense Trend</h4>
                        <div class="dropdown">
                            <button class="btn btn-soft-primary btn-sm" type="button" id="trend-period-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-calendar-alt me-2"></i>Last 12 Months
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item trend-period" href="#" data-value="3">Last 3 Months</a></li>
                                <li><a class="dropdown-item trend-period" href="#" data-value="6">Last 6 Months</a></li>
                                <li><a class="dropdown-item trend-period active" href="#" data-value="12">Last 12 Months</a></li>
                                <li><a class="dropdown-item trend-period" href="#" data-value="24">Last 2 Years</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="expense-trend-chart" style="min-height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Detailed Expense Table --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Detailed Expense Report</h4>
                        <div>
                            <button class="btn btn-soft-primary btn-sm me-2" id="toggle-hierarchy">
                                <i class="fas fa-sitemap me-2"></i>Toggle Hierarchy
                            </button>
                            <button class="btn btn-soft-success btn-sm" id="expand-all">
                                <i class="fas fa-expand me-2"></i>Expand All
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="expense-datatable" class="table table-bordered table-hover align-middle" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th width="30px"></th>
                                    <th>Expense Category</th>
                                    <th class="text-end">Budget</th>
                                    <th class="text-end">Actual</th>
                                    <th class="text-end">Variance</th>
                                    <th class="text-end">% of Total</th>
                                    <th class="text-end">Last Period</th>
                                    <th class="text-end">YoY Change</th>
                                    <th width="80px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Master Group: Operating Expenses --}}
                                <tr data-level="0" data-id="master-1" data-parent="">
                                    <td><i class="fas fa-folder-open text-warning"></i></td>
                                    <td><strong>Operating Expenses</strong></td>
                                    <td class="text-end">450,000.00</td>
                                    <td class="text-end">387,254.32</td>
                                    <td class="text-end text-success">-62,745.68</td>
                                    <td class="text-end">48.7%</td>
                                    <td class="text-end">412,587.45</td>
                                    <td class="text-end text-success">-6.1%</td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                {{-- Group: Transportation --}}
                                <tr data-level="1" data-id="group-1" data-parent="master-1" class="collapsed" style="display: none;">
                                    <td><i class="fas fa-folder text-info"></i></td>
                                    <td class="ps-4"><strong>Transportation</strong></td>
                                    <td class="text-end">150,000.00</td>
                                    <td class="text-end">142,587.65</td>
                                    <td class="text-end text-success">-7,412.35</td>
                                    <td class="text-end">18.2%</td>
                                    <td class="text-end">135,487.32</td>
                                    <td class="text-end text-danger">+5.2%</td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                {{-- Subgroup: Fuel --}}
                                <tr data-level="2" data-id="subgroup-1" data-parent="group-1" class="collapsed" style="display: none;">
                                    <td><i class="fas fa-folder text-secondary"></i></td>
                                    <td class="ps-5">Fuel</td>
                                    <td class="text-end">75,000.00</td>
                                    <td class="text-end">78,542.31</td>
                                    <td class="text-end text-danger">+3,542.31</td>
                                    <td class="text-end">10.0%</td>
                                    <td class="text-end">72,654.87</td>
                                    <td class="text-end text-danger">+8.1%</td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                {{-- Ledger: Diesel --}}
                                <tr data-level="3" data-id="ledger-1" data-parent="subgroup-1" class="collapsed" style="display: none;">
                                    <td><i class="fas fa-file-alt text-muted"></i></td>
                                    <td class="ps-6">Diesel</td>
                                    <td class="text-end">50,000.00</td>
                                    <td class="text-end">52,487.65</td>
                                    <td class="text-end text-danger">+2,487.65</td>
                                    <td class="text-end">6.7%</td>
                                    <td class="text-end">48,754.32</td>
                                    <td class="text-end text-danger">+7.7%</td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                {{-- Ledger: Petrol --}}
                                <tr data-level="3" data-id="ledger-2" data-parent="subgroup-1" class="collapsed" style="display: none;">
                                    <td><i class="fas fa-file-alt text-muted"></i></td>
                                    <td class="ps-6">Petrol</td>
                                    <td class="text-end">25,000.00</td>
                                    <td class="text-end">26,054.66</td>
                                    <td class="text-end text-danger">+1,054.66</td>
                                    <td class="text-end">3.3%</td>
                                    <td class="text-end">23,900.55</td>
                                    <td class="text-end text-danger">+9.0%</td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                {{-- More rows would follow the same pattern --}}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Expense Details Modal --}}
    <div class="modal fade" id="expenseDetailModal" tabindex="-1" aria-labelledby="expenseDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="expenseDetailModalLabel">Expense Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Expense Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th width="40%">Category:</th>
                                                    <td id="detail-category">Diesel (Transportation > Fuel)</td>
                                                </tr>
                                                <tr>
                                                    <th>Budget:</th>
                                                    <td id="detail-budget">₹50,000.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Actual:</th>
                                                    <td id="detail-actual">₹52,487.65</td>
                                                </tr>
                                                <tr>
                                                    <th>Variance:</th>
                                                    <td id="detail-variance" class="text-danger">+₹2,487.65 (5.0%)</td>
                                                </tr>
                                                <tr>
                                                    <th>% of Total:</th>
                                                    <td id="detail-percent">6.7%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Historical Comparison</h6>
                                </div>
                                <div class="card-body">
                                    <div id="expense-history-chart" style="min-height: 250px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="card-title mb-0">Transaction Details</h6>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-download me-1"></i> Export
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Voucher No</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15 Jan 2024</td>
                                                    <td>FV-2024-0015</td>
                                                    <td>Diesel for Truck MH04 AB 1234</td>
                                                    <td class="text-end">8,745.00</td>
                                                </tr>
                                                <tr>
                                                    <td>10 Jan 2024</td>
                                                    <td>FV-2024-0010</td>
                                                    <td>Diesel for Truck MH04 CD 5678</td>
                                                    <td class="text-end">9,325.00</td>
                                                </tr>
                                                <tr>
                                                    <td>05 Jan 2024</td>
                                                    <td>FV-2024-0005</td>
                                                    <td>Diesel for Truck MH04 EF 9012</td>
                                                    <td class="text-end">7,854.00</td>
                                                </tr>
                                                <tr>
                                                    <td>02 Jan 2024</td>
                                                    <td>FV-2024-0002</td>
                                                    <td>Diesel for Truck MH04 GH 3456</td>
                                                    <td class="text-end">8,125.00</td>
                                                </tr>
                                                <tr>
                                                    <td>28 Dec 2023</td>
                                                    <td>FV-2023-1256</td>
                                                    <td>Diesel for Truck MH04 IJ 7890</td>
                                                    <td class="text-end">7,985.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="table-active">
                                                    <th colspan="3">Total</th>
                                                    <th class="text-end">52,487.65</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Generate Report</button>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- Charting Libraries -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#expense-datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ordering: false,
            paging: false,
            info: false
        });

        // Initialize Treemap Chart
        const treemapChart = echarts.init(document.getElementById('expense-treemap'));
        
        const treemapOption = {
            tooltip: {
                formatter: function(info) {
                    const value = info.value;
                    const treePathInfo = info.treePathInfo;
                    const treePath = [];
                    
                    for (let i = 1; i < treePathInfo.length; i++) {
                        treePath.push(treePathInfo[i].name);
                    }
                    
                    return [
                        '<div style="font-size:14px;color:#666;font-weight:400;line-height:1;">' + treePath.join(' > ') + '</div>',
                        'Amount: <b>₹' + value.toLocaleString('en-IN') + '</b>',
                        'Percentage: <b>' + Math.round(value / 187254.32 * 100) + '% of total</b>'
                    ].join('<br>');
                }
            },
            series: [{
                name: 'Expenses',
                type: 'treemap',
                visibleMin: 300,
                data: [{
                    name: 'Operating',
                    value: 87254.32,
                    itemStyle: {
                        color: '#4b84ff'
                    },
                    children: [{
                        name: 'Transport',
                        value: 42587.65,
                        itemStyle: {
                            color: '#6c9bff'
                        },
                        children: [{
                            name: 'Fuel',
                            value: 28542.31,
                            itemStyle: {
                                color: '#8db1ff'
                            },
                            children: [{
                                name: 'Diesel',
                                value: 18487.65,
                                itemStyle: {
                                    color: '#afc8ff'
                                }
                            }, {
                                name: 'Petrol',
                                value: 10054.66,
                                itemStyle: {
                                    color: '#afc8ff'
                                }
                            }]
                        }, {
                            name: 'Maintenance',
                            value: 14045.66,
                            itemStyle: {
                                color: '#8db1ff'
                            }
                        }]
                    }, {
                        name: 'Salaries',
                        value: 44666.67,
                        itemStyle: {
                            color: '#6c9bff'
                        }
                    }]
                }, {
                    name: 'Administrative',
                    value: 65432.10,
                    itemStyle: {
                        color: '#36b37e'
                    },
                    children: [{
                        name: 'Office Supplies',
                        value: 15432.10,
                        itemStyle: {
                            color: '#5bc28d'
                        }
                    }, {
                        name: 'Utilities',
                        value: 25000.00,
                        itemStyle: {
                            color: '#5bc28d'
                        }
                    }, {
                        name: 'Communication',
                        value: 25000.00,
                        itemStyle: {
                            color: '#5bc28d'
                        }
                    }]
                }, {
                    name: 'Financial',
                    value: 34567.90,
                    itemStyle: {
                        color: '#ffab00'
                    },
                    children: [{
                        name: 'Interest',
                        value: 24567.90,
                        itemStyle: {
                            color: '#ffc400'
                        }
                    }, {
                        name: 'Bank Charges',
                        value: 10000.00,
                        itemStyle: {
                            color: '#ffc400'
                        }
                    }]
                }],
                breadcrumb: {
                    show: false
                },
                label: {
                    show: true,
                    formatter: '{b}'
                },
                upperLabel: {
                    show: true,
                    height: 30
                },
                levels: [
                    {
                        itemStyle: {
                            borderColor: '#fff',
                            borderWidth: 2,
                            gapWidth: 2
                        }
                    },
                    {
                        itemStyle: {
                            borderColor: '#fff',
                            borderWidth: 2,
                            gapWidth: 2
                        }
                    },
                    {
                        itemStyle: {
                            borderColor: '#fff',
                            borderWidth: 1,
                            gapWidth: 1
                        }
                    },
                    {
                        itemStyle: {
                            borderColor: '#fff',
                            borderWidth: 1,
                            gapWidth: 1
                        }
                    }
                ]
            }]
        };
        
        treemapChart.setOption(treemapOption);
        
        // Initialize Trend Chart
        const trendChart = new ApexCharts(document.querySelector("#expense-trend-chart"), {
            series: [{
                name: 'Expenses',
                data: [125487, 118754, 142587, 156842, 132458, 145872, 165487, 158742, 172587, 165842, 187254, 175487]
            }],
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                    show: false
                }
            },
            colors: ['#4b84ff'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.1,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return '₹' + (value / 1000).toFixed(0) + 'K';
                    }
                }
            },
            tooltip: {
                y: {
                    formatter: function(value) {
                        return '₹' + value.toLocaleString('en-IN');
                    }
                }
            }
        });
        
        trendChart.render();
        
        // Initialize History Chart in Modal
        const historyChart = new ApexCharts(document.querySelector("#expense-history-chart"), {
            series: [{
                name: 'Current Year',
                data: [38457, 42587, 48754, 45214, 52487, 48754, 45214, 48754, 52487, 48754, 45214, 52487]
            }, {
                name: 'Previous Year',
                data: [35487, 38754, 42587, 38754, 45214, 42587, 38754, 42587, 45214, 42587, 38754, 45214]
            }],
            chart: {
                height: 250,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            colors: ['#4b84ff', '#dfe6f5'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: [2, 2]
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return '₹' + (value / 1000).toFixed(0) + 'K';
                    }
                }
            },
            tooltip: {
                y: {
                    formatter: function(value) {
                        return '₹' + value.toLocaleString('en-IN');
                    }
                }
            },
            legend: {
                position: 'top'
            }
        });
        
        historyChart.render();
        
        // Toggle custom date range
        $('#period-filter').change(function() {
            if ($(this).val() === 'custom') {
                $('#custom-date-range').show();
            } else {
                $('#custom-date-range').hide();
            }
        });
        
        // Table hierarchy functionality
        $('#toggle-hierarchy').click(function() {
            $('tr[data-level="1"], tr[data-level="2"], tr[data-level="3"]').toggle();
        });
        
        $('#expand-all').click(function() {
            $('tr.collapsed').show();
        });
        
        // Handle row clicks for hierarchy
        $('#expense-datatable').on('click', 'tr[data-level="0"], tr[data-level="1"], tr[data-level="2"]', function() {
            const id = $(this).data('id');
            const level = $(this).data('level');
            const nextLevel = level + 1;
            
            // Toggle children
            $(`tr[data-level="${nextLevel}"][data-parent="${id}"]`).toggleClass('collapsed');
            
            // Toggle icon
            const icon = $(this).find('i');
            if (icon.hasClass('fa-folder')) {
                icon.removeClass('fa-folder').addClass('fa-folder-open');
            } else if (icon.hasClass('fa-folder-open')) {
                icon.removeClass('fa-folder-open').addClass('fa-folder');
            }
        });
        
        // Handle view details button
        $('#expense-datatable').on('click', '.btn-soft-primary', function() {
            $('#expenseDetailModal').modal('show');
        });
        
        // Counter animation for summary cards
        $('.counter-value').each(function() {
            const $this = $(this);
            const target = $this.data('target');
            const suffix = $this.text().match(/\D+$/)?.[0] || '';
            
            $({ countNum: 0 }).animate({
                countNum: target
            }, {
                duration: 1500,
                easing: 'swing',
                step: function() {
                    if (suffix === '%') {
                        $this.text(Math.floor(this.countNum) + suffix);
                    } else {
                        $this.text('₹' + Math.floor(this.countNum).toLocaleString('en-IN') + suffix);
                    }
                }
            });
        });
        
        // Resize charts on window resize
        $(window).resize(function() {
            treemapChart.resize();
            trendChart.updateOptions({
                chart: {
                    height: 350
                }
            });
        });
    });
</script>