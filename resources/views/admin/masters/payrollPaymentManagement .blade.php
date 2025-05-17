<x-admin.layout>
    <x-slot name="title">Payment Management</x-slot>
    <x-slot name="heading">Payment Management</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-rupee-sign me-2"></i> Payment Management</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
                            <i class="fas fa-plus me-2"></i>Add Payment
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="salary-tab" data-bs-toggle="tab" data-bs-target="#salary-payments" type="button" role="tab">Salary Payments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bonus-tab" data-bs-toggle="tab" data-bs-target="#bonus-payments" type="button" role="tab">Bonus Payments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="advance-tab" data-bs-toggle="tab" data-bs-target="#advance-payments" type="button" role="tab">Advance Payments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reimbursement-tab" data-bs-toggle="tab" data-bs-target="#reimbursement-payments" type="button" role="tab">Reimbursements</button>
                        </li>
                    </ul>
                    
                    <!-- Tabs Content -->
                    <div class="tab-content" id="paymentTabsContent">
                        <!-- Salary Payments Tab -->
                        <div class="tab-pane fade show active" id="salary-payments" role="tabpanel">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="salaryMonth" class="form-label">Payment Month</label>
                                    <select class="form-select" id="salaryMonth">
                                        <option>June 2023</option>
                                        <option>May 2023</option>
                                        <option>April 2023</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="paymentMethod" class="form-label">Payment Method</label>
                                    <select class="form-select" id="paymentMethod">
                                        <option>All Methods</option>
                                        <option>Bank Transfer</option>
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="paymentStatus" class="form-label">Payment Status</label>
                                    <select class="form-select" id="paymentStatus">
                                        <option>All Statuses</option>
                                        <option>Success</option>
                                        <option>Pending</option>
                                        <option>Failed</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Employee</th>
                                            <th>Type</th>
                                            <th>Month</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reference</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PAY-2023-001</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>June 2023</td>
                                            <td>₹25,700</td>
                                            <td>Bank Transfer</td>
                                            <td>05/07/2023</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>UTR123456789</td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PAY-2023-002</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>June 2023</td>
                                            <td>₹23,700</td>
                                            <td>Bank Transfer</td>
                                            <td>05/07/2023</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>UTR123456788</td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PAY-2023-003</td>
                                            <td>Priya Sharma</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>June 2023</td>
                                            <td>₹22,500</td>
                                            <td>Bank Transfer</td>
                                            <td>05/07/2023</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>UTR123456787</td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-redo"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Bonus Payments Tab -->
                        <div class="tab-pane fade" id="bonus-payments" role="tabpanel">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="bonusType" class="form-label">Bonus Type</label>
                                    <select class="form-select" id="bonusType">
                                        <option>All Types</option>
                                        <option>Diwali Bonus</option>
                                        <option>Annual Bonus</option>
                                        <option>Performance Bonus</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="bonusYear" class="form-label">Payment Year</label>
                                    <select class="form-select" id="bonusYear">
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="bonusStatus" class="form-label">Payment Status</label>
                                    <select class="form-select" id="bonusStatus">
                                        <option>All Statuses</option>
                                        <option>Success</option>
                                        <option>Pending</option>
                                        <option>Failed</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Employee</th>
                                            <th>Type</th>
                                            <th>Bonus Type</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reference</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PAY-BON-2022-001</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>Diwali Bonus</td>
                                            <td>₹5,000</td>
                                            <td>Bank Transfer</td>
                                            <td>10/11/2022</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>UTR987654321</td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PAY-BON-2022-002</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>Diwali Bonus</td>
                                            <td>₹3,600</td>
                                            <td>Bank Transfer</td>
                                            <td>10/11/2022</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>UTR987654322</td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Advance Payments Tab -->
                        <div class="tab-pane fade" id="advance-payments" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered nowrap align-middle" style="width:100%">
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
                                            <th>Action</th>
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
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
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
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Reimbursement Payments Tab -->
                        <div class="tab-pane fade" id="reimbursement-payments" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Reimbursement ID</th>
                                            <th>Employee</th>
                                            <th>Type</th>
                                            <th>Expense Type</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>REIMB-2023-001</td>
                                            <td>Rajesh Kumar</td>
                                            <td><span class="badge bg-primary">Office Staff</span></td>
                                            <td>Travel</td>
                                            <td>₹5,200</td>
                                            <td>10/06/2023</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>REIMB-2023-002</td>
                                            <td>Mohan Singh</td>
                                            <td><span class="badge bg-warning">Driver</span></td>
                                            <td>Fuel</td>
                                            <td>₹8,750</td>
                                            <td>15/06/2023</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i></button>
                                            </td>
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
    
    <!-- Add Payment Modal -->
    <div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPaymentModalLabel"><i class="fas fa-rupee-sign me-2"></i>Add Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="theme-form" name="addPaymentForm" id="addPaymentForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="paymentType" class="form-label">Payment Type</label>
                                <select class="form-select" name="payment_type" id="paymentType" required>
                                    <option value="">Select Type</option>
                                    <option value="salary">Salary</option>
                                    <option value="bonus">Bonus</option>
                                    <option value="advance">Advance</option>
                                    <option value="reimbursement">Reimbursement</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="paymentDate" class="form-label">Payment Date</label>
                                <input type="date" class="form-control" name="payment_date" id="paymentDate" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="employeeSelect" class="form-label">Employee</label>
                                <select class="form-select" name="employee_id" id="employeeSelect" required>
                                    <option value="">Select Employee</option>
                                    <option value="1">Rajesh Kumar (EMP001)</option>
                                    <option value="2">Mohan Singh (EMP002)</option>
                                    <option value="3">Priya Sharma (EMP003)</option>
                                    <option value="4">Vijay Patel (EMP004)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="paymentMethod" class="form-label">Payment Method</label>
                                <select class="form-select" name="payment_method" id="paymentMethod" required>
                                    <option value="">Select Method</option>
                                    <option value="bank">Bank Transfer</option>
                                    <option value="cash">Cash</option>
                                    <option value="cheque">Cheque</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row" id="salaryFields">
                            <div class="col-md-6 mb-3">
                                <label for="salaryMonth" class="form-label">Salary Month</label>
                                <input type="month" class="form-control" name="salary_month" id="salaryMonth">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="salaryAmount" class="form-label">Salary Amount</label>
                                <input type="number" class="form-control" name="salary_amount" id="salaryAmount">
                            </div>
                        </div>
                        
                        <div class="row" id="bonusFields" style="display:none;">
                            <div class="col-md-6 mb-3">
                                <label for="bonusType" class="form-label">Bonus Type</label>
                                <select class="form-select" name="bonus_type" id="bonusType">
                                    <option value="">Select Bonus Type</option>
                                    <option value="diwali">Diwali Bonus</option>
                                    <option value="annual">Annual Bonus</option>
                                    <option value="performance">Performance Bonus</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="bonusAmount" class="form-label">Bonus Amount</label>
                                <input type="number" class="form-control" name="bonus_amount" id="bonusAmount">
                            </div>
                        </div>
                        
                        <div class="row" id="advanceFields" style="display:none;">
                            <div class="col-md-6 mb-3">
                                <label for="advanceAmount" class="form-label">Advance Amount</label>
                                <input type="number" class="form-control" name="advance_amount" id="advanceAmount">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="repaymentMonths" class="form-label">Repayment Months</label>
                                <select class="form-select" name="repayment_months" id="repaymentMonths">
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="6">6 Months</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row" id="reimbursementFields" style="display:none;">
                            <div class="col-md-6 mb-3">
                                <label for="expenseType" class="form-label">Expense Type</label>
                                <select class="form-select" name="expense_type" id="expenseType">
                                    <option value="">Select Expense Type</option>
                                    <option value="travel">Travel</option>
                                    <option value="fuel">Fuel</option>
                                    <option value="food">Food</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="reimbursementAmount" class="form-label">Amount</label>
                                <input type="number" class="form-control" name="reimbursement_amount" id="reimbursementAmount">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="paymentNotes" class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" id="paymentNotes" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="savePayment">Save Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Payment Details Modal -->
    <div class="modal fade" id="paymentDetailsModal" tabindex="-1" aria-labelledby="paymentDetailsModalLabel" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentDetailsModalLabel"><i class="fas fa-rupee-sign me-2"></i>Payment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Payment ID:</strong> <span id="detailPaymentId">PAY-2023-001</span></p>
                            <p><strong>Employee:</strong> <span id="detailEmployee">Rajesh Kumar (EMP001)</span></p>
                            <p><strong>Type:</strong> <span id="detailType">Salary</span></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Payment Date:</strong> <span id="detailPaymentDate">05/07/2023</span></p>
                            <p><strong>Status:</strong> <span id="detailStatus" class="badge bg-success">Paid</span></p>
                            <p><strong>Reference:</strong> <span id="detailReference">UTR123456789</span></p>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Amount:</strong> <span id="detailAmount">₹25,700.00</span></p>
                            <p><strong>Payment Method:</strong> <span id="detailMethod">Bank Transfer</span></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Period:</strong> <span id="detailPeriod">June 2023</span></p>
                            <p><strong>Processed By:</strong> <span id="detailProcessedBy">Admin User</span></p>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Bank Details:</strong></label>
                        <div class="card p-3 bg-light">
                            <p class="mb-1"><strong>Bank Name:</strong> <span id="detailBankName">State Bank of India</span></p>
                            <p class="mb-1"><strong>Account Number:</strong> <span id="detailAccountNumber">1234567890</span></p>
                            <p class="mb-0"><strong>IFSC Code:</strong> <span id="detailIfscCode">SBIN0001234</span></p>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Notes:</strong></label>
                        <div class="card p-3 bg-light">
                            <p class="mb-0" id="detailNotes">June 2023 salary payment processed successfully</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success"><i class="fas fa-download me-2"></i>Download Receipt</button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print me-2"></i>Print</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Show/hide fields based on payment type
        document.getElementById('paymentType').addEventListener('change', function() {
            const type = this.value;
            
            // Hide all fields first
            document.getElementById('salaryFields').style.display = 'none';
            document.getElementById('bonusFields').style.display = 'none';
            document.getElementById('advanceFields').style.display = 'none';
            document.getElementById('reimbursementFields').style.display = 'none';
            
            // Show relevant fields
            if (type === 'salary') {
                document.getElementById('salaryFields').style.display = 'block';
            } else if (type === 'bonus') {
                document.getElementById('bonusFields').style.display = 'block';
            } else if (type === 'advance') {
                document.getElementById('advanceFields').style.display = 'block';
            } else if (type === 'reimbursement') {
                document.getElementById('reimbursementFields').style.display = 'block';
            }
        });
        
        // View payment details
        document.querySelectorAll('.btn-secondary').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.innerHTML.includes('fa-eye')) {
                    // Get payment details (in a real app, this would come from an API)
                    const row = this.closest('tr');
                    const paymentId = row.cells[0].textContent;
                    const employee = row.cells[1].textContent;
                    const paymentType = row.cells[2].textContent.includes('Office') ? 'Salary' : 'Bonus';
                    const amount = row.cells[4].textContent;
                    const method = row.cells[5].textContent;
                    const date = row.cells[6].textContent;
                    const status = row.cells[7].textContent.includes('Paid') ? 'Paid' : 'Pending';
                    const reference = row.cells[8].textContent;
                    
                    // Set modal content
                    document.getElementById('detailPaymentId').textContent = paymentId;
                    document.getElementById('detailEmployee').textContent = employee;
                    document.getElementById('detailType').textContent = paymentType;
                    document.getElementById('detailAmount').textContent = amount;
                    document.getElementById('detailMethod').textContent = method;
                    document.getElementById('detailPaymentDate').textContent = date;
                    document.getElementById('detailStatus').textContent = status;
                    document.getElementById('detailStatus').className = status === 'Paid' ? 'badge bg-success' : 'badge bg-warning';
                    document.getElementById('detailReference').textContent = reference;
                    document.getElementById('detailPeriod').textContent = row.cells[3].textContent;
                    
                    // Show modal
                    var modal = new bootstrap.Modal(document.getElementById('paymentDetailsModal'));
                    modal.show();
                }
            });
        });
        
        // AJAX form submission for adding payment
        document.getElementById('addPaymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('savePayment').disabled = true;
            
            var formdata = new FormData(this);
            $.ajax({
                url: '{{ route("payments.store") }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    document.getElementById('savePayment').disabled = false;
                    if (!data.error2) {
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.reload();
                        });
                    } else {
                        swal("Error!", data.error2, "error");
                    }
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        document.getElementById('savePayment').disabled = false;
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        document.getElementById('savePayment').disabled = false;
                        swal("Error occurred!", "Something went wrong please try again", "error");
                    }
                }
            });
        });
    </script>
</x-admin.layout>