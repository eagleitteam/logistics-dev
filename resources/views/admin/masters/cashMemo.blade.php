<x-admin.layout>
    <x-slot name="title">Cash Memo Management</x-slot>
    <x-slot name="heading">Cash Memo Management</x-slot>

    {{-- Top bar --}}
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="mb-0"><i class="fas fa-receipt me-2"></i> Cash Memo Management System</h3>
                        </div>
                        @can('CashMemo.create')
                        <div class="col-md-6 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMemoModal">
                                <i class="fas fa-plus me-2"></i>Add Cash Memo
                            </button>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filter Section --}}
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header p-3">
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

    {{-- Summary Section --}}
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 class="mb-1" id="vehicleTitle">Total Cash Memos: <span id="totalMemos">5</span></h4>
                            <p class="text-muted mb-0" id="amountSummary">Total Amount: ₹53,570.00 | Pending: ₹15,700.00</p>
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

    {{-- Main Table --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table id="cash-memo-datatable" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>Sr No</th>
                                    <th>Memo No</th>
                                    <th>Date</th>
                                    <th>Client Name</th>
                                    <th>Vehicle No</th>
                                    <th>Vehicle Type</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Rate</th>
                                    <th>All Exp</th>
                                    <th>Adv AMT</th>
                                    <th>Adv Date</th>
                                    <th>Bal Amt</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cashmemo as $memo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $memo->memo_no }}</td>
                                    <td>{{ $memo->memo_date }}</td>
                                    <td>{{ $memo->client_name }}</td>
                                    <td>{{ $memo->vehicle_no }}</td>
                                    <td>{{ $memo->vehicle_type }}</td>
                                    <td>{{ $memo->origin }}</td>
                                    <td>{{ $memo->destination }}</td>
                                    <td>{{ $memo->rate }}</td>
                                    <td>{{ $memo->toll_charges }}</td>
                                    <td>{{ $memo->advance_amount }}</td>
                                    <td>{{ $memo->advance_date }}</td>
                                    <td>{{ $memo->balance_amount }}</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>{{ $memo->note }}</td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            @can('CashMemo.edit')
                                            <button class="btn btn-sm btn-info view-btn" data-bs-toggle="modal" title="Edit memo" data-id="{{ $memo->id }}" data-bs-target="#viewMemoModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @endcan
                                            @can('CashMemo.edit')
                                            <button class="btn btn-sm btn-warning edit-btn" data-bs-toggle="modal" title="Edit memo" data-id="{{ $memo->id }}" data-bs-target="#editMemoModal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            @endcan
                                            @can('CashMemo.delete')
                                            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $memo->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="memoNo" class="form-label">Cash Memo No</label>
                                <input type="text" class="form-control" id="memoNo" name="memo_no" value="CM-2023-106" readonly>
                                <span class="text-danger invalid memo_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="memoDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="memoDate" name="memo_date" >
                                <span class="text-danger invalid memo_date_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="clientName" name="client_name" >
                                <span class="text-danger invalid client_name_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicleNo" class="form-label">Vehicle Number</label>
                                <input type="text" class="form-control" id="vehicleNo" name="vehicle_no" >
                                <span class="text-danger invalid vehicle_no_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicleType" class="form-label">Vehicle Type</label>
                                <select class="form-select" id="vehicleType" name="vehicle_type" >
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
                                <input type="text" class="form-control" id="origin" name="origin" >
                                <span class="text-danger invalid origin_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" >
                                <span class="text-danger invalid destination_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="rate" class="form-label">Rate</label>
                                <input type="number" class="form-control" id="rate" name="rate" >
                                <span class="text-danger invalid rate_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="toll" class="form-label">Toll Charges</label>
                                <input type="number" class="form-control" id="toll" name="toll_charges" value="0">
                                <span class="text-danger invalid toll_charges_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="unloading" class="form-label">Loading / Unloading Charges</label>
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
                            <div class="col-md-4">
                                <label for="edit-advance-date" class="form-label">Advance Date</label>
                                <input type="date" class="form-control" id="edit-advance-date" name="advance_date">
                                <span class="text-danger invalid advance_date_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="edit-status" class="form-label">Status</label>
                                <select class="form-select" id="edit-status" name="payment_status">
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                    <option value="partial">Partial</option>
                                </select>
                                <span class="text-danger invalid payment_status_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="advanceAmount" class="form-label">Balance Amount</label>
                                <input type="number" class="form-control" id="advanceAmount" name="balance_amount" value="0">
                                <span class="text-danger invalid balance_amount_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="destination" class="form-label">Note</label>
                                <input type="text" class="form-control" id="destination" name="note">
                                <span class="text-danger invalid note_err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="addSubmit" class="btn btn-primary">Save Cash Memo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- View Memo Modal --}}
<div class="modal fade" id="viewMemoModal" tabindex="-1" aria-labelledby="viewMemoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="viewMemoModalLabel">Cash Memo Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="position-relative">
                    <div class="receipt-container">
                        <!-- Company Logo with absolute positioning -->
                        <div class="position-absolute" style="left: 20px; top: 20px; width: 100px;">
                            @if($Companyprofile?->company_logo)
                                <img src="{{ asset('storage\uploads\companies_documents\Avinash_Logistics_Pvt__Ltd_\logo_Avinash_Logistics_Pvt__Ltd_.png') }}" 
                                    alt="Company Logo" 
                                    style="max-height: 180px; width: auto; max-width: 100%; object-fit: contain; border: 1px solid #ddd; padding: 5px;">
                            @else
                                <div style="display:none;"></div>
                            @endif
                        </div>
                        
                        <!-- Main centered content -->
                        <div class="text-center mx-auto" style="max-width: 80%;">
                            <!-- Company name -->
                            <h4 class="text-primary fw-bold">{{$Companyprofile?->company_name }}</h4>
                            
                            <!-- Company details -->
                            <p class="text-muted small mb-1">{{$Companyprofile?->address_line1}}, {{$Companyprofile?->address_line2}}</p>
                            <p class="text-muted small mb-1">{{$Companyprofile?->city}}, {{$Companyprofile?->pin_code}}, {{$Companyprofile?->state}}</p>
                            <p class="text-muted small mb-1">GSTIN: {{$Companyprofile?->gstin}} | PAN NO: {{$Companyprofile?->pan_number}}</p>
                            
                            <!-- Receipt title -->
                            <div class="mt-3">
                                <h5 class="fw-semibold">CASH MEMO RECEIPT</h5>
                                <hr class="border-primary opacity-50 mx-auto" style="width: 50%;">
                            </div>
                        </div>

                        <div class="row mb-3 mt-4">
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
                                <div class="text-center" style="width: 200px; position: relative; padding-bottom: 30px;">
                                    <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 80%;">
                                        <div class="border-bottom border-dark mx-auto" style="width: 100%;"></div>
                                        <p class="text-muted small mb-0 mt-2">Receiver's Signature</p>
                                        </div>
                                    </div>
                            <div class="text-center" style="width: 200px; position: relative;">
                                <img src="{{ asset('storage\uploads\companies_documents\Avinash_Logistics_Pvt__Ltd_\seal_Avinash_Logistics_Pvt__Ltd_.png') }}" alt="Signature" style="height: 80px; margin-bottom: 5px;">
                                <img src="{{ asset('storage\uploads\companies_documents\Avinash_Logistics_Pvt__Ltd_\signature_Avinash_Logistics_Pvt__Ltd_.png') }}" alt="Company Seal" style="height: 61px; position: absolute; top: 6px; right: 38px; opacity: 0.9;">
                                <p class="text-muted small mb-0">{{$Companyprofile?->company_type}} Signatory</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-3">
                <button type="button" class="btn btn-success" onclick="printCashMemo()">
                    <i class="fas fa-print me-2"></i>Print
                </button>
                <button type="button" class="btn btn-info" onclick="emailCashMemo()">
                    <i class="fas fa-envelope me-2"></i>Email
                </button>
                <button type="button" class="btn btn-primary" onclick="downloadPDF()">
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
            <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                <section class="card">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMemoModalLabel">Edit Cash Memo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                    <!-- <input type="hidden" id="edit-memo-id" name="id"> -->
                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
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
                            <div class="col-md-4">
                                <label for="edit-status" class="form-label">Status</label>
                                <select class="form-select" id="edit-status" name="payment_status">
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                    <option value="partial">Partial</option>
                                </select>
                                <span class="text-danger invalid payment_status_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="advanceAmount" class="form-label">Balance Amount</label>
                                <input type="number" class="form-control" id="advanceAmount" name="balance_amount" value="0">
                                <span class="text-danger invalid balance_amount_err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="editSubmit" class="btn btn-primary">Update Cash Memo</button>
                    </div>
                
            </div>
            </section>
            </form>
        </div>
    </div>
</x-admin.layout>

{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Cash-Memo.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Cash-Memo.index') }}';
                    });
                else
                    swal("Error!", data.error2, "error");
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $("#addSubmit").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $("#addSubmit").prop('disabled', false);
                    swal("Error occured!", "Something went wrong please try again", "error");
                }
            }
        });

    });
</script>

<!-- Edit -->
<script>
    $("#cash-memo-datatable").on("click", ".edit-btn", function(e) {
        e.preventDefault();
        var model_id = $(this).attr("data-id");
        var url = "{{ route('Cash-Memo.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                'model_id': model_id,
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    
                    $("#editForm input[name='edit_model_id']").val(data.memo.id);
                    $("#editForm input[name='memo_no']").val(data.memo.memo_no);
                    $("#editForm input[name='memo_date']").val(data.memo.memo_date);
                    $("#editForm input[name='client_name']").val(data.memo.client_name);
                    $("#editForm input[name='vehicle_no']").val(data.memo.vehicle_no);
                    $("#editForm input[name='vehicle_type']").val(data.memo.vehicle_type);
                    $("#editForm input[name='challan_no']").val(data.memo.challan_no);
                    $("#editForm input[name='origin']").val(data.memo.origin);
                    $("#editForm input[name='destination']").val(data.memo.destination);
                    $("#editForm input[name='rate']").val(data.memo.rate);
                    $("#editForm input[name='toll_charges']").val(data.memo.toll_charges);
                    $("#editForm input[name='unloading_charges']").val(data.memo.unloading_charges);
                    $("#editForm input[name='handling_charges']").val(data.memo.handling_charges);
                    $("#editForm input[name='other_expenses']").val(data.memo.other_expenses);
                    $("#editForm input[name='advance_amount']").val(data.memo.advance_amount);
                    $("#editForm input[name='advance_date']").val(data.memo.advance_date);
                    $("#editForm input[name='balance_amount']").val(data.memo.balance_amount);
                    $("#editForm input[name='status']").val(data.memo.status);
                    $("#editForm input[name='note']").val(data.memo.note);
                } else {
                    alert(data.error);
                }
            },
            error: function(error, jqXHR, textStatus, errorThrown) {
                alert("Something went wrong");
            },
        });
    });
</script>


<!-- Update -->
<script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
           
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('Cash-Memo.update', ':model_id') }}";

            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#editSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('Cash-Memo.index') }}';
                        });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        $("#editSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        $("#editSubmit").prop('disabled', false);
                        swal("Error occurred!", "Something went wrong please try again", "error");
                    }
                }
            });
        });
    });
</script>

<!-- Delete -->
<script>
    $("#cash-memo-datatable").on("click", ".delete-btn", function(e) {
        e.preventDefault();
        swal({
                title: "Are you sure to delete this Cash Memo Entry?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    alert(model_id);
                    var url = "{{ route('Cash-Memo.destroy', ':model_id') }}";

                    $.ajax({
                        url: url.replace(':model_id', model_id),
                        type: 'POST',
                        data: {
                            'model_id': model_id,
                            '_method': "DELETE",
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(data, textStatus, jqXHR) {
                            if (!data.error && !data.error2) {
                                swal("Success!", data.success, "success")
                                    .then((action) => {
                                        window.location.reload();
                                    });
                            } else {
                                if (data.error) {
                                    swal("Error!", data.error, "error");
                                } else {
                                    swal("Error!", data.error2, "error");
                                }
                            }
                        },
                        error: function(error, jqXHR, textStatus, errorThrown) {
                            swal("Error!", "Something went wrong", "error");
                        },
                    });
                }
            });
    });
</script>


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

<!-- print -->
 <script>
        // Print Function with better formatting
        function printCashMemo() {
            // Get the modal content
            const modalContent = document.querySelector('#viewMemoModal .modal-content');
            
            // Create a new window for printing
            const printWindow = window.open('', '', 'width=900,height=650');
            
            // Write the modal content to the new window
            printWindow.document.write(`
                <html>
                    <head>
                        <title>Cash Memo - ${document.getElementById('view-memo-no').textContent}</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
                        <style>
                            @page {
                                size: A4;
                                margin: 10mm 15mm;
                            }
                            @media print {
                                body {
                                    padding: 0;
                                    margin: 0;
                                    background: white;
                                    font-size: 12pt;
                                }
                                .modal-content {
                                    border: none;
                                    box-shadow: none;
                                    width: 100%;
                                }
                                .receipt-container {
                                    padding: 0 !important;
                                }
                                .no-print {
                                    display: none !important;
                                }
                                .table {
                                    page-break-inside: avoid;
                                }
                                .card {
                                    border: 1px solid #ddd !important;
                                }
                                .position-absolute {
                                    position: relative !important;
                                    left: 0 !important;
                                    top: 0 !important;
                                    margin-bottom: 15px;
                                }
                                .text-center.mx-auto {
                                    width: 100% !important;
                                    max-width: 100% !important;
                                }
                            }
                            @media screen {
                                body {
                                    padding: 20px;
                                    background: #f8f9fa;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container-fluid">
                            ${modalContent.innerHTML}
                        </div>
<script>
                    window.onload = function() {
                        // Remove modal-specific classes before printing
                        document.querySelector('.modal-content').classList.remove('modal-content');
                        setTimeout(function() {
                            window.print();
                            setTimeout(function() {
                                window.close();
                            }, 500);
                        }, 300);
                    };
                <\/script>
            </body>
        </html>
    `);
    printWindow.document.close();
}

// Enhanced PDF Download Function
function downloadPDF() {
    // Get the modal content element
    const element = document.querySelector('#viewMemoModal .modal-body');
    
    // Create a clone to modify for PDF
    const elementClone = element.cloneNode(true);
    
    // Adjust elements for PDF
    const logo = elementClone.querySelector('.position-absolute');
    if (logo) {
        logo.style.position = 'relative';
        logo.style.left = '0';
        logo.style.top = '0';
        logo.style.marginBottom = '15px';
        logo.style.width = '100px';
    }
    
    // Configuration for html2pdf
    const opt = {
        margin: [15, 10, 15, 10], // top, right, bottom, left
        filename: `cash_memo_${document.getElementById('view-memo-no').textContent.trim()}.pdf`,
        image: { 
            type: 'jpeg', 
            quality: 0.98 
        },
        html2canvas: { 
            scale: 2,
            logging: false,
            useCORS: true,
            allowTaint: true,
            scrollX: 0,
            scrollY: 0,
            windowWidth: document.documentElement.offsetWidth
        },
        jsPDF: { 
            unit: 'mm', 
            format: 'a4', 
            orientation: 'portrait',
            compress: true
        },
        pagebreak: {
            mode: ['avoid-all', 'css', 'legacy']
        }
    };
    
    // Load html2pdf library dynamically if not already loaded
    if (typeof html2pdf !== 'undefined') {
        generatePDF(elementClone, opt);
    } else {
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js';
        script.onload = function() {
            generatePDF(elementClone, opt);
        };
        document.head.appendChild(script);
    }
    
    function generatePDF(element, options) {
        // Show loading indicator
        const loadingToast = new bootstrap.Toast(document.createElement('div'));
        loadingToast._element.classList.add('toast', 'align-items-center', 'text-white', 'bg-primary');
        loadingToast._element.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    Generating PDF...
                </div>
            </div>
        `;
        document.body.appendChild(loadingToast._element);
        loadingToast.show();
        
        // Generate PDF
        html2pdf()
            .set(options)
            .from(element)
            .toPdf()
            .get('pdf')
            .then(function(pdf) {
                // Add watermark or other PDF modifications if needed
                const totalPages = pdf.internal.getNumberOfPages();
                for (let i = 1; i <= totalPages; i++) {
                    pdf.setPage(i);
                    pdf.setFontSize(8);
                    pdf.setTextColor(150);
                    pdf.text(`Page ${i} of ${totalPages}`, pdf.internal.pageSize.getWidth() - 20, pdf.internal.pageSize.getHeight() - 10);
                }
            })
            .save()
            .then(() => {
                loadingToast.hide();
                loadingToast._element.remove();
            })
            .catch(err => {
                console.error('PDF generation error:', err);
                loadingToast.hide();
                loadingToast._element.remove();
                alert('Error generating PDF. Please try again.');
            });
    }
}

// Enhanced Email Function
function emailCashMemo() {
    // Create a temporary element to get clean text
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = document.querySelector('#viewMemoModal .modal-body').innerHTML;
    
    // Remove buttons and other non-essential elements
    const elementsToRemove = tempDiv.querySelectorAll('button, .no-email');
    elementsToRemove.forEach(el => el.remove());
    
    // Get clean text
    const memoText = tempDiv.textContent
        .replace(/\s+/g, ' ')
        .trim();
    
    const memoNo = document.getElementById('view-memo-no').textContent.trim();
    const subject = `Cash Memo ${memoNo}`;
    const body = `Please find attached the cash memo details:\n\n${memoText}\n\nThank you.`;
    
    // Open email client
    window.location.href = `mailto:?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
}
</script>