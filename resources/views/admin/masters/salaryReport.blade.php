<x-admin.layout>
    <x-slot name="title">Salary Reports</x-slot>
    <x-slot name="heading">Salary Reports</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-file-invoice-dollar me-2"></i> Salary Reports</h4>
                        <div class="header-actions">
                            <button class="btn btn-primary"><i class="fas fa-file-pdf me-2"></i> Generate PDF</button>
                            <button class="btn btn-success"><i class="fas fa-file-excel me-2"></i> Export Excel</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Report Filters -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label for="reportType" class="form-label">Report Type</label>
                            <select class="form-select" id="reportType">
                                <option>Monthly Salary Report</option>
                                <option>Annual Salary Report</option>
                                <option>Department-wise Report</option>
                                <option>Employee Type Report</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="reportPeriod" class="form-label">Select Month/Year</label>
                            <input type="text" class="form-control" id="reportPeriod" placeholder="Select period">
                        </div>
                        <div class="col-md-3">
                            <label for="employeeType" class="form-label">Employee Type</label>
                            <select class="form-select" id="employeeType">
                                <option>All Employees</option>
                                <option>Office Staff</option>
                                <option>Drivers</option>
                            </select>
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button class="btn btn-primary w-100"><i class="fas fa-filter me-2"></i>Generate</button>
                        </div>
                    </div>
                    
                    <!-- Salary Distribution Chart -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5><i class="fas fa-chart-bar me-2"></i>Salary Distribution - June 2023</h5>
                                        <div>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-download"></i></button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-ellipsis-v"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="salaryDistributionChart" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Salary Report Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5><i class="fas fa-table me-2"></i>Salary Report Summary</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Employees</th>
                                                    <th>Basic Salary</th>
                                                    <th>Allowances</th>
                                                    <th>Deductions</th>
                                                    <th>Net Pay</th>
                                                    <th>% of Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Operations</td>
                                                    <td>25</td>
                                                    <td>₹625,000</td>
                                                    <td>₹87,500</td>
                                                    <td>₹70,000</td>
                                                    <td>₹642,500</td>
                                                    <td>51.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>Accounts</td>
                                                    <td>8</td>
                                                    <td>₹200,000</td>
                                                    <td>₹28,000</td>
                                                    <td>₹22,400</td>
                                                    <td>₹205,600</td>
                                                    <td>16.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>HR</td>
                                                    <td>5</td>
                                                    <td>₹125,000</td>
                                                    <td>₹17,500</td>
                                                    <td>₹14,000</td>
                                                    <td>₹128,500</td>
                                                    <td>10.3%</td>
                                                </tr>
                                                <tr>
                                                    <td>Logistics</td>
                                                    <td>52</td>
                                                    <td>₹884,000</td>
                                                    <td>₹187,400</td>
                                                    <td>₹78,000</td>
                                                    <td>₹993,400</td>
                                                    <td>79.7%</td>
                                                </tr>
                                                <tr class="table-active">
                                                    <td><strong>Total</strong></td>
                                                    <td><strong>87</strong></td>
                                                    <td><strong>₹1,834,000</strong></td>
                                                    <td><strong>₹320,400</strong></td>
                                                    <td><strong>₹184,400</strong></td>
                                                    <td><strong>₹1,970,000</strong></td>
                                                    <td><strong>100%</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize date picker
        flatpickr("#reportPeriod", {
            dateFormat: "F Y",
            defaultDate: "June 2023"
        });

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Salary Distribution Chart
            const salaryDistributionCtx = document.getElementById('salaryDistributionChart').getContext('2d');
            const salaryDistributionChart = new Chart(salaryDistributionCtx, {
                type: 'bar',
                data: {
                    labels: ['Operations', 'Accounts', 'HR', 'Logistics'],
                    datasets: [{
                        label: 'Basic Salary',
                        data: [625000, 200000, 125000, 884000],
                        backgroundColor: '#3498db'
                    }, {
                        label: 'Allowances',
                        data: [87500, 28000, 17500, 187400],
                        backgroundColor: '#f39c12'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return '₹' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ₹' + context.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        });

        // AJAX form submission for generating reports
        $(document).ready(function() {
            $(".card-header button.btn-primary").click(function(e) {
                e.preventDefault();
                
                // Get form data
                const reportType = $("#reportType").val();
                const reportPeriod = $("#reportPeriod").val();
                const employeeType = $("#employeeType").val();
                
                // Show loading indicator
                const btn = $(this);
                btn.html('<i class="fas fa-spinner fa-spin me-2"></i>Generating...');
                btn.prop('disabled', true);
                
                // AJAX request
                $.ajax({
                    url: '{{ route("Salary-Report.index") }}',
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'report_type': reportType,
                        'report_period': reportPeriod,
                        'employee_type': employeeType
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update chart data
                            if (salaryDistributionChart) {
                                salaryDistributionChart.data.labels = response.data.labels;
                                salaryDistributionChart.data.datasets[0].data = response.data.basic_salary;
                                salaryDistributionChart.data.datasets[1].data = response.data.allowances;
                                salaryDistributionChart.update();
                            }
                            
                            // Update table data
                            // You would typically update the table here with the new data
                            
                            // Show success message
                            toastr.success('Report generated successfully');
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('Error generating report');
                    },
                    complete: function() {
                        btn.html('<i class="fas fa-filter me-2"></i>Generate');
                        btn.prop('disabled', false);
                    }
                });
            });
            
            // PDF and Excel export buttons
            $(".card-header button.btn-primary").click(function() {
                // PDF generation
                window.location.href = '{{ route("Salary-Report.index") }}?type=' + $("#reportType").val() + 
                    '&period=' + $("#reportPeriod").val() + '&employee_type=' + $("#employeeType").val();
            });
            
            $(".card-header button.btn-success").click(function() {
                // Excel export
                window.location.href = '{{ route("Salary-Report.index") }}?type=' + $("#reportType").val() + 
                    '&period=' + $("#reportPeriod").val() + '&employee_type=' + $("#employeeType").val();
            });
        });
    </script>
</x-admin.layout>