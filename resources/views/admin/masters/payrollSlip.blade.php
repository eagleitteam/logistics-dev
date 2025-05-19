<x-admin.layout>
    <x-slot name="title">Payroll Processing</x-slot>
    <x-slot name="heading">Payroll Processing</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-calculator me-2"></i> Payroll Processing</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#processPayrollModal">
                            <i class="fas fa-calculator me-2"></i> Process Payroll
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs Section -->
                    <ul class="nav nav-tabs" id="payrollTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="current-tab" data-bs-toggle="tab" data-bs-target="#current-payroll" type="button" role="tab">Current Payroll</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="past-tab" data-bs-toggle="tab" data-bs-target="#past-payrolls" type="button" role="tab">Past Payrolls</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bonus-tab" data-bs-toggle="tab" data-bs-target="#bonus" type="button" role="tab">Bonus Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="advances-tab" data-bs-toggle="tab" data-bs-target="#advances" type="button" role="tab">Advances</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reimbursements-tab" data-bs-toggle="tab" data-bs-target="#reimbursements" type="button" role="tab">Reimbursements</button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="payrollTabsContent">
                        <!-- Current Payroll Tab -->
                        <div class="tab-pane fade show active" id="current-payroll" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="payPeriod" class="form-label">Pay Period</label>
                                        <input type="text" class="form-control" id="payPeriod" placeholder="Select pay period">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="paymentDate" class="form-label">Payment Date</label>
                                        <input type="date" class="form-control" id="paymentDate">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="employeeTypeFilter" class="form-label">Employee Type</label>
                                        <select class="form-select" id="employeeTypeFilter">
                                            <option>All Employees</option>
                                            <option>Office Staff</option>
                                            <option>Drivers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-end">
                                    <button class="btn btn-primary"><i class="fas fa-filter me-2"></i> Filter</button>
                                </div>
                            </div>
                            
                            <div class="table-responsive mt-3">
                                <table id="currentPayrollTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Basic Salary</th>
                                            <th>Allowances</th>
                                            <th>Deductions</th>
                                            <th>Net Pay</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" checked></td>
                                            <td>EMP001</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>₹25,000</td>
                                            <td>₹3,500</td>
                                            <td>₹2,800</td>
                                            <td>₹25,700</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-salary-slip="EMP001"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" checked></td>
                                            <td>EMP002</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>₹18,000</td>
                                            <td>₹7,200</td>
                                            <td>₹1,500</td>
                                            <td>₹23,700</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-salary-slip="EMP002"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>EMP003</td>
                                            <td>Priya Sharma</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>₹22,000</td>
                                            <td>₹3,000</td>
                                            <td>₹2,500</td>
                                            <td>₹22,500</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-salary-slip="EMP003"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>EMP004</td>
                                            <td>Vijay Patel</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>₹17,000</td>
                                            <td>₹6,800</td>
                                            <td>₹2,000</td>
                                            <td>₹21,800</td>
                                            <td><span class="badge bg-danger">Rejected</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-salary-slip="EMP004"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <button class="btn btn-success me-2"><i class="fas fa-check me-2"></i> Approve Selected</button>
                                    <button class="btn btn-danger"><i class="fas fa-times me-2"></i> Reject Selected</button>
                                </div>
                                <div>
                                    <button class="btn btn-primary"><i class="fas fa-paper-plane me-2"></i> Process Payments</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Past Payrolls Tab -->
                        <div class="tab-pane fade" id="past-payrolls" role="tabpanel">
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectMonth" class="form-label">Select Month</label>
                                        <select class="form-select" id="selectMonth">
                                            <option>June 2023</option>
                                            <option>May 2023</option>
                                            <option>April 2023</option>
                                            <option>March 2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="employeeTypePast" class="form-label">Employee Type</label>
                                        <select class="form-select" id="employeeTypePast">
                                            <option>All</option>
                                            <option>Office Staff</option>
                                            <option>Drivers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="paymentStatus" class="form-label">Payment Status</label>
                                        <select class="form-select" id="paymentStatus">
                                            <option>All</option>
                                            <option>Paid</option>
                                            <option>Pending</option>
                                            <option>Failed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-end">
                                    <button class="btn btn-primary"><i class="fas fa-filter me-2"></i> Filter</button>
                                </div>
                            </div>
                            
                            <div class="table-responsive mt-3">
                                <table id="pastPayrollTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Payroll ID</th>
                                            <th>Period</th>
                                            <th>Processed On</th>
                                            <th>Employees</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PR-2023-06</td>
                                            <td>June 2023</td>
                                            <td>05/07/2023</td>
                                            <td>87</td>
                                            <td>₹1,245,800</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PR-2023-05</td>
                                            <td>May 2023</td>
                                            <td>05/06/2023</td>
                                            <td>85</td>
                                            <td>₹1,112,500</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PR-2023-04</td>
                                            <td>April 2023</td>
                                            <td>05/05/2023</td>
                                            <td>83</td>
                                            <td>₹1,087,300</td>
                                            <td><span class="badge bg-success">Completed</span></td>
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
                        
                        <!-- Bonus Management Tab -->
                        <div class="tab-pane fade" id="bonus" role="tabpanel">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="fas fa-gift me-2"></i> Festival Bonus Management</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bonusType" class="form-label">Bonus Type</label>
                                                <select class="form-select" id="bonusType">
                                                    <option>Diwali Bonus</option>
                                                    <option>Annual Bonus</option>
                                                    <option>Performance Bonus</option>
                                                    <option>Custom Bonus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bonusYear" class="form-label">Bonus Year</label>
                                                <select class="form-select" id="bonusYear">
                                                    <option>2023</option>
                                                    <option>2022</option>
                                                    <option>2021</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="calculationMethod" class="form-label">Calculation Method</label>
                                                <select class="form-select" id="calculationMethod">
                                                    <option>Percentage of Basic</option>
                                                    <option>Fixed Amount</option>
                                                    <option>Days Worked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bonusAmount" class="form-label">Bonus Amount/Percentage</label>
                                                <input type="text" class="form-control" id="bonusAmount" placeholder="E.g. 20% or 5000">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bonusPaymentDate" class="form-label">Payment Date</label>
                                                <input type="date" class="form-control" id="bonusPaymentDate">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label class="form-label">Applicable To</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="allEmployees" checked>
                                            <label class="form-check-label" for="allEmployees">All Employees</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="officeStaff">
                                            <label class="form-check-label" for="officeStaff">Office Staff Only</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="driversOnly">
                                            <label class="form-check-label" for="driversOnly">Drivers Only</label>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-primary"><i class="fas fa-calculator me-2"></i> Calculate Bonus</button>
                                        <button class="btn btn-success"><i class="fas fa-paper-plane me-2"></i> Process Bonus Payments</button>
                                        <button class="btn btn-info"><i class="fas fa-file-export me-2"></i> Export Bonus List</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive mt-4">
                                <table id="bonusTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Basic Salary</th>
                                            <th>Bonus Type</th>
                                            <th>Bonus Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>EMP001</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>₹25,000</td>
                                            <td>Diwali Bonus</td>
                                            <td>₹5,000</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP002</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>₹18,000</td>
                                            <td>Diwali Bonus</td>
                                            <td>₹3,600</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP003</td>
                                            <td>Priya Sharma</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>₹22,000</td>
                                            <td>Diwali Bonus</td>
                                            <td>₹4,400</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Advances Tab -->
                        <div class="tab-pane fade" id="advances" role="tabpanel">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="fas fa-hand-holding-usd me-2"></i> Employee Advances</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="advanceEmployee" class="form-label">Employee</label>
                                                <select class="form-select" id="advanceEmployee">
                                                    <option>Select Employee</option>
                                                    <option>Rajesh Kumar (EMP001)</option>
                                                    <option>Mohan Singh (EMP002)</option>
                                                    <option>Priya Sharma (EMP003)</option>
                                                    <option>Vijay Patel (EMP004)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="advanceAmount" class="form-label">Advance Amount</label>
                                                <input type="number" class="form-control" id="advanceAmount" placeholder="Enter amount">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="requestDate" class="form-label">Request Date</label>
                                                <input type="date" class="form-control" id="requestDate">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="repaymentMonths" class="form-label">Repayment Months</label>
                                                <select class="form-select" id="repaymentMonths">
                                                    <option>1 Month</option>
                                                    <option>2 Months</option>
                                                    <option>3 Months</option>
                                                    <option>6 Months</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label for="advanceReason" class="form-label">Reason</label>
                                        <textarea class="form-control" id="advanceReason" rows="3" placeholder="Enter reason for advance"></textarea>
                                    </div>
                                    
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-primary"><i class="fas fa-plus me-2"></i> Add Advance</button>
                                        <button class="btn btn-success"><i class="fas fa-file-export me-2"></i> Export Advances</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive mt-4">
                                <table id="advancesTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Advance ID</th>
                                            <th>Employee</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Request Date</th>
                                            <th>Deduction/Month</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ADV-2023-001</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>₹15,000</td>
                                            <td>15/05/2023</td>
                                            <td>₹5,000</td>
                                            <td>₹5,000</td>
                                            <td><span class="badge bg-info">In Progress</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ADV-2023-002</td>
                                            <td>Vijay Patel</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>₹10,000</td>
                                            <td>20/06/2023</td>
                                            <td>₹3,333</td>
                                            <td>₹10,000</td>
                                            <td><span class="badge bg-info">In Progress</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ADV-2023-003</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>₹20,000</td>
                                            <td>10/04/2023</td>
                                            <td>₹5,000</td>
                                            <td>₹0</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Reimbursements Tab -->
                        <div class="tab-pane fade" id="reimbursements" role="tabpanel">
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i> Reimbursement management functionality will be added in the next update.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Process Payroll Modal -->
    <div class="modal fade" id="processPayrollModal" tabindex="-1" aria-labelledby="processPayrollModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="processPayrollModalLabel"><i class="fas fa-calculator me-2"></i> Process Payroll</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="processPayrollForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payrollMonth" class="form-label">Payroll Month</label>
                                    <select class="form-select" id="payrollMonth" required>
                                        <option value="">Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payrollYear" class="form-label">Payroll Year</label>
                                    <select class="form-select" id="payrollYear" required>
                                        <option value="">Select Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="paymentDate" class="form-label">Payment Date</label>
                                    <input type="date" class="form-control" id="paymentDate" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="employeeType" class="form-label">Employee Type</label>
                                    <select class="form-select" id="employeeType" required>
                                        <option value="">Select Type</option>
                                        <option value="all">All Employees</option>
                                        <option value="office">Office Staff</option>
                                        <option value="driver">Drivers</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="payrollNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="payrollNotes" rows="3"></textarea>
                        </div>
                        
                        <div class="alert alert-warning mt-3">
                            <i class="fas fa-exclamation-triangle me-2"></i> Processing payroll will lock the current period for changes. Please verify all data before proceeding.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="processPayrollBtn">Process Payroll</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Salary Slip Modal -->
    <div class="modal fade" id="salarySlipModal" tabindex="-1" aria-labelledby="salarySlipModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="salarySlipModalLabel">Salary Slip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h3>ABC Logistics Pvt. Ltd.</h3>
                                <p class="text-muted">123 Industrial Area, New Delhi - 110020</p>
                                <p class="text-muted">GSTIN: 07AABCU9603R1ZM</p>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <p><strong>Employee ID:</strong> EMP002</p>
                                    <p><strong>Name:</strong> Mohan Singh</p>
                                    <p><strong>Designation:</strong> Driver</p>
                                    <p><strong>PAN:</strong> BNZPS1234F</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p><strong>Pay Period:</strong> June 2023</p>
                                    <p><strong>Payment Date:</strong> 05/07/2023</p>
                                    <p><strong>Bank Account:</strong> 1234567890</p>
                                    <p><strong>IFSC:</strong> SBIN0001234</p>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Earnings</th>
                                            <th>Amount (₹)</th>
                                            <th>Deductions</th>
                                            <th>Amount (₹)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basic Salary</td>
                                            <td>18,000.00</td>
                                            <td>Professional Tax</td>
                                            <td>200.00</td>
                                        </tr>
                                        <tr>
                                            <td>Dearness Allowance</td>
                                            <td>3,600.00</td>
                                            <td>TDS</td>
                                            <td>300.00</td>
                                        </tr>
                                        <tr>
                                            <td>Driver Allowance</td>
                                            <td>2,500.00</td>
                                            <td>Advance Deduction</td>
                                            <td>1,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Per Day Allowance (25 days)</td>
                                            <td>3,750.00</td>
                                            <td>Absent Deduction (1 day)</td>
                                            <td>692.31</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly Expenses</td>
                                            <td>3,600.00</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-active">
                                            <td><strong>Total Earnings</strong></td>
                                            <td><strong>31,450.00</strong></td>
                                            <td><strong>Total Deductions</strong></td>
                                            <td><strong>2,192.31</strong></td>
                                        </tr>
                                        <tr class="table-active">
                                            <td colspan="3"><strong>Net Pay</strong></td>
                                            <td><strong>29,257.69</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <p class="mt-3"><strong>Amount in Words:</strong> Twenty Nine Thousand Two Hundred Fifty Seven Rupees and Sixty Nine Paise Only</p>
                            
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="border-top text-center pt-2">
                                        <p>Employee Signature</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border-top text-center pt-2">
                                        <p>For ABC Logistics Pvt. Ltd.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success"><i class="fas fa-download me-2"></i> Download PDF</button>
                    <button class="btn btn-primary"><i class="fas fa-print me-2"></i> Print</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- Include required scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Initialize date pickers
    flatpickr("#payPeriod", {
        mode: "range",
        dateFormat: "Y-m-d",
        defaultDate: ["2023-06-01", "2023-06-30"]
    });

    // Initialize DataTables
    $(document).ready(function() {
        $('#currentPayrollTable, #pastPayrollTable, #bonusTable, #advancesTable').DataTable({
            responsive: true
        });
    });

    // Salary slip modal trigger
    $(document).on('click', '[data-salary-slip]', function() {
        $('#salarySlipModal').modal('show');
    });

    // Process payroll form submission
    $('#processPayrollForm').submit(function(e) {
        e.preventDefault();
        $('#processPayrollBtn').prop('disabled', true);
        
        // Here you would typically send data to server via AJAX
        // This is a mock implementation
        setTimeout(function() {
            $('#processPayrollBtn').prop('disabled', false);
            $('#processPayrollModal').modal('hide');
            
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Payroll Processed',
                text: 'Payroll for the selected period has been processed successfully.',
                confirmButtonText: 'OK'
            });
            
            // Reset form
            $('#processPayrollForm')[0].reset();
        }, 1500);
    });

    // AJAX for saving advance
    $('#advanceForm').submit(function(e) {
        e.preventDefault();
        $('#saveAdvanceBtn').prop('disabled', true);
        
        var formData = {
            employee_id: $('#advanceEmployee').val(),
            amount: $('#advanceAmount').val(),
            request_date: $('#requestDate').val(),
            repayment_months: $('#repaymentMonths').val(),
            reason: $('#advanceReason').val()
        };
        
        $.ajax({
            url: '/api/payroll/advances',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content