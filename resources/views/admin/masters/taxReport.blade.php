<x-admin.layout>
    <x-slot name="title">Tax Reports</x-slot>
    <x-slot name="heading">Tax Reports</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-file-alt me-2"></i> Tax Reports</h4>
                        <div class="header-actions">
                            <button class="btn btn-primary"><i class="fas fa-file-pdf me-2"></i> Generate PDF</button>
                            <button class="btn btn-success"><i class="fas fa-file-excel me-2"></i> Export Excel</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="taxReportsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tds-tab" data-bs-toggle="tab" data-bs-target="#tds-reports" type="button" role="tab">TDS Reports</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pt-tab" data-bs-toggle="tab" data-bs-target="#pt-reports" type="button" role="tab">Professional Tax</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="esi-tab" data-bs-toggle="tab" data-bs-target="#esi-reports" type="button" role="tab">ESI Reports</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pf-tab" data-bs-toggle="tab" data-bs-target="#pf-reports" type="button" role="tab">PF Reports</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="taxfiling-tab" data-bs-toggle="tab" data-bs-target="#tax-filing" type="button" role="tab">Tax Filing</button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="taxReportsTabContent">
                        <!-- TDS Reports Tab -->
                        <div class="tab-pane fade show active" id="tds-reports" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-row mb-4">
                                        <div class="col-md-4">
                                            <label for="financialYear" class="form-label">Financial Year</label>
                                            <select class="form-select" id="financialYear">
                                                <option>2023-2024</option>
                                                <option>2022-2023</option>
                                                <option>2021-2022</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="quarter" class="form-label">Quarter</label>
                                            <select class="form-select" id="quarter">
                                                <option>All Quarters</option>
                                                <option>Q1 (Apr-Jun)</option>
                                                <option>Q2 (Jul-Sep)</option>
                                                <option>Q3 (Oct-Dec)</option>
                                                <option>Q4 (Jan-Mar)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="employeeType" class="form-label">Employee Type</label>
                                            <select class="form-select" id="employeeType">
                                                <option>All Employees</option>
                                                <option>Office Staff</option>
                                                <option>Drivers</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5><i class="fas fa-chart-line me-2"></i> TDS Deduction Trends</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="tdsTrendChart" height="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Quarter</th>
                                                    <th>Employees</th>
                                                    <th>Total Salary</th>
                                                    <th>TDS Deducted</th>
                                                    <th>TDS Deposited</th>
                                                    <th>Challan No.</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Q1 (Apr-Jun 2023)</td>
                                                    <td>87</td>
                                                    <td>₹3,678,000</td>
                                                    <td>₹183,900</td>
                                                    <td>₹183,900</td>
                                                    <td>CH2023061234</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Q4 (Jan-Mar 2023)</td>
                                                    <td>85</td>
                                                    <td>₹3,337,500</td>
                                                    <td>₹166,875</td>
                                                    <td>₹166,875</td>
                                                    <td>CH2023035678</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Professional Tax Tab -->
                        <div class="tab-pane fade" id="pt-reports" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-row mb-4">
                                        <div class="col-md-6">
                                            <label for="ptFinancialYear" class="form-label">Financial Year</label>
                                            <select class="form-select" id="ptFinancialYear">
                                                <option>2023-2024</option>
                                                <option>2022-2023</option>
                                                <option>2021-2022</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ptMonth" class="form-label">Month</label>
                                            <select class="form-select" id="ptMonth">
                                                <option>All Months</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Month</th>
                                                    <th>Employees</th>
                                                    <th>Professional Tax</th>
                                                    <th>Deposited</th>
                                                    <th>Challan No.</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>June 2023</td>
                                                    <td>87</td>
                                                    <td>₹17,400</td>
                                                    <td>₹17,400</td>
                                                    <td>PT2023061234</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 2023</td>
                                                    <td>85</td>
                                                    <td>₹17,000</td>
                                                    <td>₹17,000</td>
                                                    <td>PT2023055678</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- ESI Reports Tab -->
                        <div class="tab-pane fade" id="esi-reports" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i> ESI Reports will be displayed here
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PF Reports Tab -->
                        <div class="tab-pane fade" id="pf-reports" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i> PF Reports will be displayed here
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tax Filing Tab -->
                        <div class="tab-pane fade" id="tax-filing" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i> Tax Filing information will be displayed here
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Initialize TDS Trend Chart
    document.addEventListener('DOMContentLoaded', function() {
        const tdsTrendCtx = document.getElementById('tdsTrendChart').getContext('2d');
        const tdsTrendChart = new Chart(tdsTrendCtx, {
            type: 'bar',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                    label: 'TDS Deducted',
                    data: [183900, 175600, 192300, 166875],
                    backgroundColor: '#3498db'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
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

    // AJAX for TDS Reports
    $(document).ready(function() {
        $('#financialYear, #quarter, #employeeType').change(function() {
            // Here you would typically make an AJAX call to fetch filtered data
            // For demonstration, we'll just show a loading message
            console.log('Filters changed - would fetch new data');
            
            // Example AJAX call structure:
            /*
            $.ajax({
                url: '{{ route("tax.getTdsReports") }}',
                type: 'GET',
                data: {
                    financialYear: $('#financialYear').val(),
                    quarter: $('#quarter').val(),
                    employeeType: $('#employeeType').val()
                },
                success: function(data) {
                    // Update the table and chart with new data
                    console.log('Data received:', data);
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
            */
        });
    });

    // AJAX for Professional Tax Reports
    $(document).ready(function() {
        $('#ptFinancialYear, #ptMonth').change(function() {
            // Here you would typically make an AJAX call to fetch filtered data
            console.log('PT filters changed - would fetch new data');
            
            // Example AJAX call structure:
            /*
            $.ajax({
                url: '{{ route("tax.getPtReports") }}',
                type: 'GET',
                data: {
                    financialYear: $('#ptFinancialYear').val(),
                    month: $('#ptMonth').val()
                },
                success: function(data) {
                    // Update the table with new data
                    console.log('PT Data received:', data);
                },
                error: function(error) {
                    console.error('Error fetching PT data:', error);
                }
            });
            */
        });
    });
</script>