<x-admin.layout>
    <x-slot name="title">Cash Memo Management</x-slot>
    <x-slot name="heading">Cash Memo Management</x-slot>

    {{-- Top bar --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3><i class="fas fa-receipt me-2"></i> Cash Memo Management System</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMemoModal">
                                <i class="fas fa-plus me-2"></i>Add Cash Memo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Filter Section --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <label for="vehicle-filter" class="form-label">Vehicle Number</label>
                            <select class="form-control" data-choices data-choices-search-false name="vehicle-filter" id="vehicle-filter">
                                <option value="">All Vehicles</option>
                                <option value="MH12 AB 1234">MH12 AB 1234</option>
                                <option value="DL4C CD 5678">DL4C CD 5678</option>
                                <option value="KA03 EF 9012">KA03 EF 9012</option>
                            </select>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <label for="status-filter" class="form-label">Status:</label>
                            <select class="form-control" data-choices data-choices-search-false name="status-filter" id="status-filter">
                                <option value="">All Status</option>
                                <option value="paid">Paid</option>
                                <option value="pending">Pending</option>
                                <option value="partial">Partial</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Summary Section --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 id="vehicleTitle">Total Cash Memos: <span id="totalMemos">5</span></h4>
                            <p class="text-muted" id="amountSummary">Total Amount: ₹53,570.00 | Pending: ₹15,700.00</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary"><i class="fas fa-file-excel me-2"></i>Export</button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fas fa-print me-2"></i>Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Main Table --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="cash-memo-datatable" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>Memo No</th>
                                    <th>Date</th>
                                    <th>Client Name</th>
                                    <th>Vehicle No</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CM-2023-105</td>
                                    <td>15 Oct 2023</td>
                                    <td>ABC Corporation</td>
                                    <td>MH12 AB 1234</td>
                                    <td>₹12,750.00</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-info view-btn" data-bs-toggle="modal" data-bs-target="#viewMemoModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#editMemoModal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CM-2023-104</td>
                                    <td>14 Oct 2023</td>
                                    <td>XYZ Logistics</td>
                                    <td>DL4C CD 5678</td>
                                    <td>₹8,450.00</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-info view-btn" data-bs-toggle="modal" data-bs-target="#viewMemoModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#editMemoModal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CM-2023-103</td>
                                    <td>13 Oct 2023</td>
                                    <td>Global Traders</td>
                                    <td>KA03 EF 9012</td>
                                    <td>₹15,320.00</td>
                                    <td><span class="badge bg-primary">Partial</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-info view-btn" data-bs-toggle="modal" data-bs-target="#viewMemoModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#editMemoModal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Memo Modal --}}
    <div class="modal fade" id="addMemoModal" tabindex="-1" aria-labelledby="addMemoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemoModalLabel">Add New Cash Memo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addMemoForm">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="memoNo" class="form-label">Cash Memo No</label>
                                <input type="text" class="form-control" id="memoNo" name="memo_no" value="CM-2023-106" readonly>
                                <span class="text-danger invalid memo_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="memoDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="memoDate" name="memo_date" required>
                                <span class="text-danger invalid memo_date_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="clientName" name="client_name" required>
                                <span class="text-danger invalid client_name_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicleNo" class="form-label">Vehicle Number</label>
                                <input type="text" class="form-control" id="vehicleNo" name="vehicle_no" required>
                                <span class="text-danger invalid vehicle_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicleType" class="form-label">Vehicle Type</label>
                                <select class="form-select" id="vehicleType" name="vehicle_type" required>
                                    <option value="">Select Vehicle Type</option>
                                    <option>Open Truck</option>
                                    <option>Container</option>
                                    <option>Trailer</option>
                                </select>
                                <span class="text-danger invalid vehicle_type_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="challanNo" class="form-label">Challan No</label>
                                <input type="text" class="form-control" id="challanNo" name="challan_no">
                                <span class="text-danger invalid challan_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="origin" class="form-label">Origin From</label>
                                <input type="text" class="form-control" id="origin" name="origin" required>
                                <span class="text-danger invalid origin_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" required>
                                <span class="text-danger invalid destination_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="rate" class="form-label">Rate</label>
                                <input type="number" class="form-control" id="rate" name="rate" required>
                                <span class="text-danger invalid rate_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="toll" class="form-label">Toll Charges</label>
                                <input type="number" class="form-control" id="toll" name="toll_charges" value="0">
                                <span class="text-danger invalid toll_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="unloading" class="form-label">Unloading Charges</label>
                                <input type="number" class="form-control" id="unloading" name="unloading_charges" value="0">
                                <span class="text-danger invalid unloading_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="handling" class="form-label">Handling Charges</label>
                                <input type="number" class="form-control" id="handling" name="handling_charges" value="0">
                                <span class="text-danger invalid handling_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="otherExpenses" class="form-label">Other Expenses</label>
                                <input type="number" class="form-control" id="otherExpenses" name="other_expenses" value="0">
                                <span class="text-danger invalid other_expenses_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="advanceAmount" class="form-label">Advance Amount</label>
                                <input type="number" class="form-control" id="advanceAmount" name="advance_amount" value="0">
                                <span class="text-danger invalid advance_amount_err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Cash Memo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- View Memo Modal --}}
    <div class="modal fade" id="viewMemoModal" tabindex="-1" aria-labelledby="viewMemoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewMemoModalLabel">Cash Memo Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="receipt-container p-4">
                        <div class="text-center mb-4">
                            <h4 class="text-primary fw-bold">SPEEDLINE TRANSPORT SOLUTIONS</h4>
                            <p class="text-muted small">123 Transport Nagar, Mumbai - 400001 | GSTIN: 27ABCDE1234F1Z5</p>
                            <h5 class="fw-semibold">CASH MEMO RECEIPT</h5>
                            <hr class="border-primary opacity-50">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p class="text-muted small mb-1">Memo No.</p>
                                <p class="fw-semibold" id="view-memo-no">CM-2023-105</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-muted small mb-1">Date</p>
                                <p class="fw-semibold" id="view-date">15 Oct 2023</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-muted small mb-1">Challan No.</p>
                                <p class="fw-semibold" id="view-challan-no">CH-2023-105</p>
                            </div>
                        </div>

                        <div class="card bg-light p-3 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-muted small mb-1">Client Name</p>
                                    <p class="fw-semibold" id="view-client-name">ABC Corporation</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted small mb-1">Vehicle No.</p>
                                    <p class="fw-semibold" id="view-vehicle-no">MH12 AB 1234</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <p class="text-muted small mb-1">Vehicle Type</p>
                                    <p class="fw-semibold" id="view-vehicle-type">20ft Container</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted small mb-1">Status</p>
                                    <span class="badge bg-success" id="view-status">Paid</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Origin From</p>
                                <p class="fw-semibold" id="view-origin">Mumbai Port</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Destination</p>
                                <p class="fw-semibold" id="view-destination">Delhi Warehouse</p>
                            </div>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-sm table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Description</th>
                                        <th class="text-end">Amount (₹)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Transportation Rate</td>
                                        <td class="text-end" id="view-rate">10,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Toll Charges</td>
                                        <td class="text-end" id="view-toll">1,250.00</td>
                                    </tr>
                                    <tr>
                                        <td>Unloading Charges</td>
                                        <td class="text-end" id="view-unloading">750.00</td>
                                    </tr>
                                    <tr>
                                        <td>Handling Charges</td>
                                        <td class="text-end" id="view-handling">500.00</td>
                                    </tr>
                                    <tr>
                                        <td>Other Expenses</td>
                                        <td class="text-end" id="view-other-expenses">250.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card bg-light p-3 mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Total Amount:</span>
                                <span class="fw-bold text-primary" id="view-total-amount">₹12,750.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Advance Paid (<span id="view-advance-date">10 Oct 2023</span>):</span>
                                <span class="fw-semibold" id="view-advance-amount">₹5,000.00</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="fw-semibold">Balance Amount:</span>
                                <span class="fw-bold text-primary" id="view-balance-amount">₹7,750.00</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small fw-semibold mb-2">Terms & Conditions:</p>
                            <ol class="text-muted small ps-3">
                                <li>Payment is due within 15 days from the date of invoice.</li>
                                <li>Interest @18% p.a. will be charged on overdue payments.</li>
                                <li>Goods transported at owner's risk.</li>
                                <li>All disputes subject to Mumbai jurisdiction only.</li>
                                <li>Original receipt must be produced for any claims.</li>
                            </ol>
                        </div>

                        <div class="d-flex justify-content-between pt-3 border-top">
                            <div class="text-center" style="width: 200px;">
                                <div class="border-top border-dark mx-auto mb-2" style="width: 80%;"></div>
                                <p class="text-muted small mb-0">Receiver's Signature</p>
                            </div>
                            <div class="text-center" style="width: 200px;">
                                <div class="border-top border-dark mx-auto mb-2" style="width: 80%;"></div>
                                <p class="text-muted small mb-0">Authorized Signatory</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">
                        <i class="fas fa-print me-2"></i>Print
                    </button>
                    <button type="button" class="btn btn-info">
                        <i class="fas fa-envelope me-2"></i>Email
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Memo Modal --}}
    <div class="modal fade" id="editMemoModal" tabindex="-1" aria-labelledby="editMemoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMemoModalLabel">Edit Cash Memo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editMemoForm">
                    <input type="hidden" id="edit-memo-id" name="id">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit-memo-no" class="form-label">Cash Memo No</label>
                                <input type="text" class="form-control" id="edit-memo-no" name="memo_no" readonly>
                                <span class="text-danger invalid memo_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-memo-date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="edit-memo-date" name="memo_date" required>
                                <span class="text-danger invalid memo_date_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-client-name" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="edit-client-name" name="client_name" required>
                                <span class="text-danger invalid client_name_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-vehicle-no" class="form-label">Vehicle Number</label>
                                <input type="text" class="form-control" id="edit-vehicle-no" name="vehicle_no" required>
                                <span class="text-danger invalid vehicle_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-vehicle-type" class="form-label">Vehicle Type</label>
                                <select class="form-select" id="edit-vehicle-type" name="vehicle_type" required>
                                    <option value="">Select Vehicle Type</option>
                                    <option>Open Truck</option>
                                    <option>Container</option>
                                    <option>Trailer</option>
                                </select>
                                <span class="text-danger invalid vehicle_type_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-challan-no" class="form-label">Challan No</label>
                                <input type="text" class="form-control" id="edit-challan-no" name="challan_no">
                                <span class="text-danger invalid challan_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-origin" class="form-label">Origin From</label>
                                <input type="text" class="form-control" id="edit-origin" name="origin" required>
                                <span class="text-danger invalid origin_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="edit-destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="edit-destination" name="destination" required>
                                <span class="text-danger invalid destination_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-rate" class="form-label">Rate</label>
                                <input type="number" class="form-control" id="edit-rate" name="rate" required>
                                <span class="text-danger invalid rate_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-toll" class="form-label">Toll Charges</label>
                                <input type="number" class="form-control" id="edit-toll" name="toll_charges">
                                <span class="text-danger invalid toll_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-unloading" class="form-label">Unloading Charges</label>
                                <input type="number" class="form-control" id="edit-unloading" name="unloading_charges">
                                <span class="text-danger invalid unloading_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-handling" class="form-label">Handling Charges</label>
                                <input type="number" class="form-control" id="edit-handling" name="handling_charges">
                                <span class="text-danger invalid handling_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-other-expenses" class="form-label">Other Expenses</label>
                                <input type="number" class="form-control" id="edit-other-expenses" name="other_expenses">
                                <span class="text-danger invalid other_expenses_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-advance-amount" class="form-label">Advance Amount</label>
                                <input type="number" class="form-control" id="edit-advance-amount" name="advance_amount">
                                <span class="text-danger invalid advance_amount_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-advance-date" class="form-label">Advance Date</label>
                                <input type="date" class="form-control" id="edit-advance-date" name="advance_date">
                                <span class="text-danger invalid advance_date_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-status" class="form-label">Status</label>
                                <select class="form-select" id="edit-status" name="status">
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                    <option value="partial">Partial</option>
                                </select>
                                <span class="text-danger invalid status_err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Cash Memo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#cash-memo-datatable').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // Set today's date as default for add form
        $('#memoDate').val(new Date().toISOString().split('T')[0]);

        // View button click handler
        $('.view-btn').click(function() {
            // In a real application, you would fetch data based on the memo ID
            // This is just a demonstration with static data
            const memoId = $(this).closest('tr').find('td:first').text();
            
            // Sample data - in real app you would get this via AJAX
            const memoData = {
                'CM-2023-105': {
                    memoNo: 'CM-2023-105',
                    date: '15 Oct 2023',
                    clientName: 'ABC Corporation',
                    vehicleNo: 'MH12 AB 1234',
                    vehicleType: '20ft Container',
                    origin: 'Mumbai Port',
                    destination: 'Delhi Warehouse',
                    challanNo: 'CH-2023-105',
                    rate: '10,000.00',
                    toll: '1,250.00',
                    unloading: '750.00',
                    handling: '500.00',
                    otherExpenses: '250.00',
                    advanceAmount: '5,000.00',
                    advanceDate: '10 Oct 2023',
                    totalAmount: '12,750.00',
                    balanceAmount: '7,750.00',
                    status: 'paid'
                },
                'CM-2023-104': {
                    memoNo: 'CM-2023-104',
                    date: '14 Oct 2023',
                    clientName: 'XYZ Logistics',
                    vehicleNo: 'DL4C CD 5678',
                    vehicleType: 'Trailer',
                    origin: 'Chennai Port',
                    destination: 'Bangalore Warehouse',
                    challanNo: 'CH-2023-104',
                    rate: '7,000.00',
                    toll: '800.00',
                    unloading: '450.00',
                    handling: '200.00',
                    otherExpenses: '0.00',
                    advanceAmount: '3,000.00',
                    advanceDate: '12 Oct 2023',
                    totalAmount: '8,450.00',
                    balanceAmount: '5,450.00',
                    status: 'pending'
                },
                'CM-2023-103': {
                    memoNo: 'CM-2023-103',
                    date: '13 Oct 2023',
                    clientName: 'Global Traders',
                    vehicleNo: 'KA03 EF 9012',
                    vehicleType: 'Open Truck',
                    origin: 'Kolkata',
                    destination: 'Hyderabad',
                    challanNo: 'CH-2023-103',
                    rate: '12,000.00',
                    toll: '2,000.00',
                    unloading: '800.00',
                    handling: '400.00',
                    otherExpenses: '120.00',
                    advanceAmount: '8,000.00',
                    advanceDate: '10 Oct 2023',
                    totalAmount: '15,320.00',
                    balanceAmount: '7,320.00',
                    status: 'partial'
                }
            };

            const memo = memoData[memoId];
            
            // Populate view modal
            $('#view-memo-no').text(memo.memoNo);
            $('#view-date').text(memo.date);
            $('#view-challan-no').text(memo.challanNo);
            $('#view-client-name').text(memo.clientName);
            $('#view-vehicle-no').text(memo.vehicleNo);
            $('#view-vehicle-type').text(memo.vehicleType);
            $('#view-origin').text(memo.origin);
            $('#view-destination').text(memo.destination);
            $('#view-rate').text(memo.rate);
            $('#view-toll').text(memo.toll);
            $('#view-unloading').text(memo.unloading);
            $('#view-handling').text(memo.handling);
            $('#view-other-expenses').text(memo.otherExpenses);
            $('#view-total-amount').text(`₹${memo.totalAmount}`);
            $('#view-advance-date').text(memo.advanceDate);
            $('#view-advance-amount').text(`₹${memo.advanceAmount}`);
            $('#view-balance-amount').text(`₹${memo.balanceAmount}`);
            
            // Update status badge
            const statusBadge = $('#view-status');
            statusBadge.removeClass('bg-success bg-warning bg-primary');
            if (memo.status === 'paid') {
                statusBadge.addClass('bg-success').text('Paid');
            } else if (memo.status === 'pending') {
                statusBadge.addClass('bg-warning text-dark').text('Pending');
            } else {
                statusBadge.addClass('bg-primary').text('Partial');
            }
        });

        // Edit button click handler
        $('.edit-btn').click(function() {
            const memoId = $(this).closest('tr').find('td:first').text();
            
            // Sample data - in real app you would get this via AJAX
            const memoData = {
                'CM-2023-105': {
                    id: 1,
                    memoNo: 'CM-2023-105',
                    date: '2023-10-15',
                    clientName: 'ABC Corporation',
                    vehicleNo: 'MH12 AB 1234',
                    vehicleType: 'Container',
                    origin: 'Mumbai Port',
                    destination: 'Delhi Warehouse',
                    challanNo: 'CH-2023-105',
                    rate: '10000',
                    toll: '1250',
                    unloading: '750',
                    handling: '500',
                    otherExpenses: '250',
                    advanceAmount: '5000',
                    advanceDate: '2023-10-10',
                    status: 'paid'
                }
            };

            const memo = memoData[memoId];
            
            // Populate edit form
            $('#edit-memo-id').val(memo.id);
            $('#edit-memo-no').val(memo.memoNo);
            $('#edit-memo-date').val(memo.date);
            $('#edit-client-name').val(memo.clientName);
            $('#edit-vehicle-no').val(memo.vehicleNo);
            $('#edit-vehicle-type').val(memo.vehicleType);
            $('#edit-origin').val(memo.origin);
            $('#edit-destination').val(memo.destination);
            $('#edit-challan-no').val(memo.challanNo);
            $('#edit-rate').val(memo.rate);
            $('#edit-toll').val(memo.toll);
            $('#edit-unloading').val(memo.unloading);
            $('#edit-handling').val(memo.handling);
            $('#edit-other-expenses').val(memo.otherExpenses);
            $('#edit-advance-amount').val(memo.advanceAmount);
            $('#edit-advance-date').val(memo.advanceDate);
            $('#edit-status').val(memo.status);
        });

        // Delete button click handler
        $('.delete-btn').click(function() {
            const memoId = $(this).closest('tr').find('td:first').text();
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // In a real application, you would make an AJAX call here
                    Swal.fire(
                        'Deleted!',
                        'Your cash memo has been deleted.',
                        'success'
                    ).then(() => {
                        // Reload or remove the row
                        $(this).closest('tr').remove();
                    });
                }
            });
        });

        // Add form submission
        $('#addMemoForm').submit(function(e) {
            e.preventDefault();
            // In a real application, you would make an AJAX call here
            Swal.fire(
                'Success!',
                'New cash memo has been added.',
                'success'
            ).then(() => {
                $('#addMemoModal').modal('hide');
                this.reset();
                // Reload the table or add the new row
            });
        });

        // Edit form submission
        $('#editMemoForm').submit(function(e) {
            e.preventDefault();
            // In a real application, you would make an AJAX call here
            Swal.fire(
                'Success!',
                'Cash memo has been updated.',
                'success'
            ).then(() => {
                $('#editMemoModal').modal('hide');
                // Reload the table or update the row
            });
        });

        // Filter functionality
        $('#vehicle-filter, #status-filter').change(function() {
            // In a real application, you would filter the table data
            const vehicle = $('#vehicle-filter').val();
            const status = $('#status-filter').val();
            
            // This is just a demonstration - in real app you would reload the table with filtered data
            console.log(`Filtering by vehicle: ${vehicle}, status: ${status}`);
        });
    });
</script>