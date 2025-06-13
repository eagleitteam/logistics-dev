<x-admin.layout>
    <x-slot name="title">Receipt & Payment Master</x-slot>
    <x-slot name="heading">Receipt & Payment Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    {{-- utility panale --}}
    <div class="row" id="utilityContainer" style="display:flex;">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Total Income</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                            <a href="#" class="text-decoration-underline">See details</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-success-subtle rounded fs-3">
                                <i class="bx bx-dollar-circle text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Total Expense</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M</h4>
                            <a href="#" class="text-decoration-underline">See details</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-warning-subtle rounded fs-3">
                                <i class="bx bx-user-circle text-warning"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Total Advance & Loan</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M</h4>
                            <a href="#" class="text-decoration-underline">See details</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-warning-subtle rounded fs-3">
                                <i class="bx bx-user-circle text-warning"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">My Bank Balance</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-muted fs-14 mb-0">
                                +0.00 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">0</span>k</h4>
                            <a href="#" class="text-decoration-underline">Withdraw money</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle rounded fs-3">
                                <i class="bx bx-wallet text-primary"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> 
    <!-- end row -->

    {{-- Add Income Form --}}
    <div class="row" id="addIncomeContainer" style="display: none;">
        <div class="col-sm-12">
            
            <div class="card">
                <form class="theme-form" name="addIncomeForm" id="addIncomeForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="income">
                    <div class="card-body">
                        <h4 class="mb-3">Add Income</h4>
                        <div class="row g-3">
                            <div class="col-md-2">
                                <label for="income_Category" class="form-label">Income Category</label>
                                <select class="form-select" name="income_Category" id="income_Category"  >
                                    <option value="">Select...</option>
                                    <option value="1">PMT AGN Trip</option>
                                    <option value="2">PMT AGN Invoice</option>
                                    <option value="3">On Account</option>
                                </select>
                                <span class="text-danger invalid description_err"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="client_id" class="form-label">Client Name</label>
                                <select class="form-select" name="client_id" id="client_id"  >
                                    <option value="">Select Client</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="tranDate" class="form-label">Transaction Date</label>
                                <input type="date" class="form-control" id="tranDate" name="tranDate">
                            </div>

                            <div class="col-md-2">
                                <label for="recincomeamt" class="form-label">Rec. AMT</label>
                                <input type="number" class="form-control" id="recincomeamt" name="recincomeamt" placeholder="Enter Amount">
                            </div>

                            <div class="col-md-2">
                                <label for="status-field" class="form-label">Select Bank</label>
                                <select class="form-select" name="bank_id" id="bank_id" >
                                    <option value="">Select...</option>
                                    <option value="1">Bank A</option>
                                    <option value="2">Bank B</option>
                                </select>
                            </div>

                            <div class="col-md-4 d-flex align-items-end gap-2">
                                <button type="button" class="btn btn-success" id="updateInvData" style="display: none;">Fetch Pending Invoice</button>
                                <button type="button" class="btn btn-success" id="updateTripData" style="display: none;">Fetch Pending Trip</button>
                            </div>
                        </div>

                        <!-- Invoice Table -->
                        <div class="row mt-4" id="updateInvTable" style="display: none;">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Inv Date</th>
                                                <th>Inv Number</th>
                                                <th>Inv Balance Amt</th>
                                                <th>Adj Payment</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody id="invoiceTableBody">
                                            <!-- Dynamic rows -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Trip Table -->
                        <div class="row mt-4" id="updateTripTable" style="display: none;">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Trip Date</th>
                                                <th>Trip Number</th>
                                                <th>Vehicle Number</th>
                                                <th>Origin</th>
                                                <th>Destination</th>
                                                <th>Trip Balance Amt</th>
                                                <th>Adj Payment</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tripTableBody">
                                            <!-- Dynamic rows -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Difference Alert -->
                        <div id="diffAlert" class="alert alert-warning mt-3" style="display: none;">
                            <strong>Difference Amount:</strong> <span id="diffAmount"></span>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addIncomeSubmit" style="display: none;">Submit</button>
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelIncome" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Income Form End --}}

    

    {{-- Add Exp PMT Form --}}
    <div class="row" id="expPMTContainer" style="display: none;">
        <div class="col-sm-12">
            
            <div class="card">
                <form class="theme-form" name="expPMTForm" id="expPMTForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="expense">
                    <div class="card-body">
                        <h4 class="mb-3">Add Payment AGN Expense</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exp_ledger_name" class="form-label">Exp Ledger Name</label>
                                <select class="form-select" name="exp_ledger_name" id="exp_ledger_name"  >
                                    <option value="">Select...</option>
                                    <option value="1">Rent</option>
                                    <option value="2">Tea</option>
                                    <option value="3">Repairing</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="TripDate" class="form-label">Tran Date</label>
                                <input type="date" class="form-control" id="TripDate" name="TripDate">
                            </div>

                            <div class="col-md-2">
                                <label for="paidamt" class="form-label">Paid AMT</label>
                                <input type="number" class="form-control" id="paidamt" name="paidamt" placeholder="Enter Amount">
                            </div>

                            <div class="col-md-2">
                                <label for="status-field" class="form-label">Select Bank</label>
                                <select class="form-select" name="bank_name" id="status-field"   >
                                    <option value="">Select...</option>
                                    <option value="1">Bank A</option>
                                    <option value="2">Bank B</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="remark" class="form-label">Note</label>
                                <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Note">
                            </div>

                            
                        </div>

                        
                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addExpPMTSubmit" >Submit</button>
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelExpPMT" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Exp PMT Form End --}}

    {{-- Add Loan PMT Form --}}
    <div class="row" id="loanContainer" style="display: none;">
        <div class="col-sm-12">
            
            <div class="card">
                <form class="theme-form" name="loanForm" id="loanForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="loan">
                    <div class="card-body">
                        <h4 class="mb-3">Add Loan Entry</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="loan_type" class="form-label">Select Loan Type</label>
                                <select class="form-select" name="loan_type" id="loan_type"  >
                                    <option value="">Select...</option>
                                    <option value="1">Loan Given</option>
                                    <option value="2">Loan Taken</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="vendor_id" class="form-label">Select Party Name</label>
                                <select class="form-select" name="vendor_id" id="vendor_id"  >
                                    <option value="">Select...</option>
                                    <option value="1">XYZ..</option>
                                    <option value="2">ABC...</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="tranDate" class="form-label">Tran Date</label>
                                <input type="date" class="form-control" id="tranDate" name="tranDate">
                            </div>

                            <div class="col-md-2">
                                <label for="loanAMT" class="form-label">Loan AMT</label>
                                <input type="number" class="form-control" id="loanAMT" name="loanAMT" placeholder="Enter Amount">
                            </div>

                            <div class="col-md-2">
                                <label for="status-field" class="form-label">Select Bank</label>
                                <select class="form-select" name="bank_name" id="status-field"   >
                                    <option value="">Select...</option>
                                    <option value="1">Bank A</option>
                                    <option value="2">Bank B</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="due_date" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="due_date" name="due_date">
                            </div>
                            <div class="col-md-2">
                                <label for="remark" class="form-label">Discription</label>
                                <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Discription">
                            </div>

                            
                        </div>

                        
                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addLoanSubmit" >Submit</button>
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelLoan" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Loan PMT Form End --}}

    {{-- Add Advance PMT Form --}}
    <div class="row" id="advanceContainer" style="display: none;">
        <div class="col-sm-12">
            
            <div class="card">
                <form class="theme-form" name="advanceForm" id="advanceForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="advance">

                    <div class="card-body">
                        <h4 class="mb-3">Add Advance Entry</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="loan_type" class="form-label">Select Advance Type</label>
                                <select class="form-select" name="loan_type" id="loan_type"  >
                                    <option value="">Select...</option>
                                    <option value="1">Advance Taken</option>
                                    <option value="2">Adv Against Salary</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="staff_type" class="form-label">Select Staff Type</label>
                                <select class="form-select" name="staff_type" id="staff_type"  >
                                    <option value="">Select...</option>
                                    <option value="1">Driver</option>
                                    <option value="2">Employee</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="form-label">Select Name</label>
                                <select class="form-select" name="name" id="name"  >
                                    <option value="">Select...</option>
                                    <option value="1">Driver</option>
                                    <option value="2">Employee</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="TripDate" class="form-label">Tran Date</label>
                                <input type="date" class="form-control" id="TripDate" name="TripDate">
                            </div>

                            <div class="col-md-2">
                                <label for="advanceamt" class="form-label">Advance AMT</label>
                                <input type="number" class="form-control" id="advanceamt" name="advanceamt" placeholder="Enter Amount">
                            </div>

                            <div class="col-md-2">
                                <label for="status-field" class="form-label">Select Bank</label>
                                <select class="form-select" name="bank_name" id="status-field"   >
                                    <option value="">Select...</option>
                                    <option value="1">Bank A</option>
                                    <option value="2">Bank B</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="adjmonth" class="form-label">Adj Agn Month</label>
                                <input type="date" class="form-control" id="adjmonth" name="adjmonth">
                            </div>
                            <div class="col-md-2">
                                <label for="remark" class="form-label">Discription</label>
                                <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Discription">
                            </div>

                            
                        </div>

                        
                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="loanSubmit" >Submit</button>
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelAdvance" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Advance PMT Form End --}}

    {{-- Add Cash PMT Form --}}
    <div class="row" id="cashContainer" style="display: none;">
        <div class="col-sm-12">
            
            <div class="card">
                <form class="theme-form" name="cashForm" id="cashForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="cash">

                    <div class="card-body">
                        <h4 class="mb-3">Add Cash Entry</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="cash_type" class="form-label">Select Cash Type</label>
                                <select class="form-select" name="cash_type" id="cash_type"  >
                                    <option value="">Select...</option>
                                    <option value="1">Cash Deposite</option>
                                    <option value="2">Cash Withdrawal</option>
                                </select>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="tranDate" class="form-label">Tran Date</label>
                                <input type="date" class="form-control" id="tranDate" name="tranDate">
                            </div>

                            <div class="col-md-2">
                                <label for="cashamt" class="form-label">Cash AMT</label>
                                <input type="number" class="form-control" id="cashamt" name="cashamt" placeholder="Enter Amount">
                            </div>

                            <div class="col-md-2">
                                <label for="status-field" class="form-label">Select Bank</label>
                                <select class="form-select" name="bank_name" id="status-field"   >
                                    <option value="">Select...</option>
                                    <option value="1">Bank A</option>
                                    <option value="2">Bank B</option>
                                </select>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="remark" class="form-label">Discription</label>
                                <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Discription">
                            </div>

                            
                        </div>

                        
                        <div class="card-footer d-flex justify-content-between">
                            <div>
                                <button type="submit" class="btn btn-success" id="cashSubmit" >Submit</button>
                                <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                                <button type="button" id="btnCancelCash" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Cash PMT Form End --}}
        

    {{-- Heading Tab --}}

    <div class="col-md-12 ">
        <h5 class="mb-3">Select Your Respective Tab</h5>
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified nav-border-top nav-border-top-success mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-justified-income" role="tab" aria-selected="false">
                            <i class="ri-home-5-line align-middle me-1"></i> Income
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-expence" role="tab" aria-selected="false">
                            <i class="ri-user-line me-1 align-middle"></i> Expances Payements
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-loanAdv" role="tab" aria-selected="false">
                            <i class="ri-question-answer-line align-middle me-1"></i>Loans & Advances PMT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-bankStm" role="tab" aria-selected="false">
                            <i class="ri-question-answer-line align-middle me-1"></i>Bank Entries 
                        </a>
                    </li>
                </ul>


                {{-- Tab Contaion --}}
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="nav-border-justified-income" role="tabpanel">

                        {{-- Income Table --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        @can('Vouchermaster.create')
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="">
                                                            <header>
                                                                <h4>Income Transactions</h4>
                                                            </header>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="">
                                                            {{-- income modal Start--}}
                                                            <div class="live-preview">
                                                                <button type="button" id="addIncome" class="btn btn-primary"  data-bs-target="#exampleModalgrid">
                                                                    <i class="fa fa-plus"></i> Add Income 
                                                                </button>
                                                                
                                                            </div>
                                                            {{-- income modal END--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No.</th>
                                                            <th>Income Category</th>
                                                            <th>Tran Date</th>
                                                            <th>Amout</th>
                                                            <th>Client Name</th>
                                                            <th>Trip ID</th>
                                                            <th>Trip No</th>
                                                            <th>Adj PMT</th>
                                                            <th>Remark</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($incomes as $income)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                @php
                                                                    $incomeCategoryLabels = [
                                                                        1 => 'PMT AGN Trip',
                                                                        2 => 'PMT AGN Invoice',
                                                                        3 => 'On Account',
                                                                    ];
                                                                @endphp
                                                                <td>{{ $incomeCategoryLabels[$income->income_Category] ?? 'Unknown' }}</td>
                                                                <td>{{ $income->tranDate }}</td>
                                                                <td>{{ $income->recincomeamt }}</td>
                                                                <td>{{ $income->client->name ?? 'N/A' }}</td>
                                                                <td>{{ $income->trip_ids }}</td>
                                                                <td>{{ $income->trip_no }}</td>
                                                                <td>{{ $income->adj_pmt }}</td>
                                                                <td>{{ $income->remark }}</td>
                                                                <td>
                                                                    @can('Vouchermaster.edit')
                                                                        <button class="edit-element btn btn-secondary px-2 py-1" title="Edit voucher" data-id="{{ $income->id }}"><i data-feather="edit"></i></button>
                                                                    @endcan
                                                                    @can('Vouchermaster.delete')
                                                                        <button class="btn btn-danger rem-element px-2 py-1" title="Delete voucher" data-id="{{ $income->id }}"><i data-feather="trash-2"></i> </button>
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="tab-pane" id="nav-border-justified-expence" role="tabpanel">

                      {{-- Expence Table --}}

                          <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            @can('Vouchermaster.create')
                                                                <div class="card-header">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <div class="">
                                                                                <header>
                                                                                    <h4>Expence Transactions</h4>
                                                                                </header>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="">

                                                                                 {{-- Expence modal Start--}}

                                                                                 <div class="live-preview">
                                                                                    <button type="button" id="addExpPMT" class="btn btn-primary"  data-bs-target="#expanceModalgrid">
                                                                                        Add Expences <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                    
                                                                                </div>

                                                                                {{-- Expence modal END--}}

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endcan
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Sr No.</th>
                                                                                <th>Date</th>
                                                                                <th>Category</th>
                                                                                <th>Description</th>
                                                                                <th>EXP Amt</th>
                                                                                <th>Refrance</th>
                                                                                <th>PMT Mode</th>
                                                                                <th>Bank Name</th>
                                                                                <th>Reamrk</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($vouchermasters as $voucher)
                                                                                <tr>
                                                                                    <td>{{ $loop->iteration }}</td>
                                                                                    <td>{{ $voucher->type }}</td>
                                                                                    <td>{{ $voucher->description }}</td>
                                                                                    <td>
                                                                                        @can('Vouchermaster.edit')
                                                                                            <button class="edit-element btn btn-secondary px-2 py-1" title="Edit voucher" data-id="{{ $voucher->id }}"><i data-feather="edit"></i></button>
                                                                                        @endcan
                                                                                        @can('Vouchermaster.delete')
                                                                                            <button class="btn btn-danger rem-element px-2 py-1" title="Delete voucher" data-id="{{ $voucher->id }}"><i data-feather="trash-2"></i> </button>
                                                                                        @endcan
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                        </div>
                    <div class="tab-pane" id="nav-border-justified-loanAdv" role="tabpanel">

                                                {{-- Loand & Advances Table --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            @can('Vouchermaster.create')
                                                                <div class="card-header">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="">
                                                                                <header>
                                                                                    <h4>Loan And Advance Transactions</h4>
                                                                                </header>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="">

                                                                                 {{-- Loan  modal Start--}}

                                                                                 <div class="live-preview">
                                                                                    <button type="button" class="btn btn-primary" id="addloan" data-bs-target="#loanModalgrid">
                                                                                        Add Loan Entry <i class="fa fa-plus"></i>
                                                                                    </button>

                                                                                    
                                                                                </div>

                                                                                {{-- Loan  modal END--}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="">

                                                                          {{-- Advance  modal Start--}}

                                                                          <div class="live-preview">
                                                                            <button type="button" class="btn btn-primary" id="add_advance" data-bs-target="#advanceModalgrid">
                                                                                Add Advance Entry <i class="fa fa-plus"></i>
                                                                            </button>

                                                                            
                                                                        </div>

                                                                        {{-- Advance  modal END--}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endcan
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Sr No.</th>
                                                                                <th>Date</th>
                                                                                <th>Party Name</th>
                                                                                <th>Type</th>
                                                                                <th>Description</th>
                                                                                <th>Adj Month</th>
                                                                                <th>AMT</th>
                                                                                <th>Reamrk</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($vouchermasters as $voucher)
                                                                                <tr>
                                                                                    <td>{{ $loop->iteration }}</td>
                                                                                    <td>{{ $voucher->type }}</td>
                                                                                    <td>{{ $voucher->description }}</td>
                                                                                    <td>
                                                                                        @can('Vouchermaster.edit')
                                                                                            <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $voucher->id }}"><i data-feather="edit"></i></button>
                                                                                        @endcan
                                                                                        @can('Vouchermaster.delete')
                                                                                            <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $voucher->id }}"><i data-feather="trash-2"></i> </button>
                                                                                        @endcan
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                    </div>
                    <div class="tab-pane" id="nav-border-justified-bankStm" role="tabpanel">

                        {{-- Bank Statement Table --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    @can('Vouchermaster.create')
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Heading -->
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <header>
                                                                <h4 class="mb-0">Bank Statement Transactions</h4>
                                                            </header>
                                                        </div>
                                                    </div>

                                                    <!-- Dropdowns and Add Button -->
                                                    <div class="row align-items-end">
                                                        <!-- Bank Name -->
                                                        <div class="col-lg-4">
                                                            <label for="bank_name" class="form-label">Select Bank Name</label>
                                                            <select class="form-control" name="bank_name" id="bank_name" required>
                                                                <option value="1">All Bank's</option>
                                                                <option value="2">HDFC</option>
                                                                <option value="3">AXIS</option>
                                                            </select>
                                                        </div>

                                                        <!-- Period -->
                                                        <div class="col-lg-4">
                                                            <label for="period" class="form-label">Period:</label>
                                                            <select class="form-control" name="period" id="period" required>
                                                                <option value="1">Last 30 Days</option>
                                                                <option value="2">This Month</option>
                                                                <option value="3">This Quarter</option>
                                                                <option value="4">This Year</option>
                                                                <option value="5">Custom Range</option>
                                                            </select>
                                                        </div>

                                                        <!-- Add Button -->
                                                        <div class="col-lg-4 text-end">
                                                            <button type="button" class="btn btn-primary mt-3" id="addcash" data-bs-target="#cashModalgrid">
                                                                <i class="fa fa-plus"></i> Add Cash Entry
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endcan
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Debit</th>
                                                        <th>Credit</th>
                                                        <th>Balance</th>
                                                        <th>Category</th>
                                                        <th>Reamrk</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($vouchermasters as $voucher)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $voucher->type }}</td>
                                                            <td>{{ $voucher->description }}</td>
                                                            <td>
                                                                @can('Vouchermaster.edit')
                                                                    <button class="edit-element btn btn-secondary px-2 py-1" title="Edit voucher" data-id="{{ $voucher->id }}"><i data-feather="edit"></i></button>
                                                                @endcan
                                                                @can('Vouchermaster.delete')
                                                                    <button class="btn btn-danger rem-element px-2 py-1" title="Delete voucher" data-id="{{ $voucher->id }}"><i data-feather="trash-2"></i> </button>
                                                                @endcan
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


</div>
                </div>
            </div><!-- end card-body -->
        </div>
    </div>
    <!--end col-->


</x-admin.layout>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

{{-- Add & Cancel Btn controler for all --}}
<script>
        $(document).ready(function () {
            
            // ---------------------- Income Container ----------------------
            function setupIncomeContainer() {
                $("#addIncome").on("click", function () {
                    $("#addIncomeContainer").slideDown();
                    $("#utilityContainer").slideUp();
                    $("#addIncome").slideUp();
                    $("#btnCancel").show();
                });

                $("#btnCancelIncome").on("click", function (e) {
                    e.preventDefault();
                    $("#addIncomeForm")[0].reset(); // <-- Correct form reference
                    clearErrors("#addIncomeForm");
                    $("#addIncomeContainer").slideUp();
                    $("#utilityContainer").slideDown();
                    $("#addIncome").slideDown();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#addIncomeForm")[0].reset();
                    clearErrors("#addIncomeForm");
                });
            }

            // ---------------------- Expense Container ----------------------
            function setupExpenseContainer() {
                $("#addExpPMT").on("click", function () {
                    $("#expPMTContainer").slideDown();
                    $("#utilityContainer").slideUp();
                    $("#addExpPMT").slideUp();
                    $("#btnCancel").show();
                });

                $("#btnCancelExpPMT").on("click", function (e) {
                    e.preventDefault();
                    $("#expPMTForm")[0].reset();
                    clearErrors("#expPMTForm");
                    $("#expPMTContainer").slideUp();
                    $("#utilityContainer").slideDown();
                    $("#addExpPMT").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#expPMTForm")[0].reset();
                    clearErrors("#expPMTForm");
                });
                
            }

            // ---------------------- Loan Container ----------------------
            function setupLoanContainer() {
                $("#addloan").on("click", function () {
                    $("#loanContainer").slideDown();
                    $("#utilityContainer").slideUp();
                    $("#addloan").slideUp();
                    $("#btnCancel").show();
                });

                $("#btnCancelLoan").on("click", function (e) {
                    e.preventDefault();
                    $("#loanForm")[0].reset();
                    clearErrors("#loanForm");
                    $("#loanContainer").slideUp();
                    $("#utilityContainer").slideDown();
                    $("#addloan").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#loanForm")[0].reset();
                    clearErrors("#loanForm");
                });
                
            }

             // ---------------------- Advance Container ----------------------
            function setupAdvanceContainer() {
                $("#add_advance").on("click", function () {
                    $("#advanceContainer").slideDown();
                    $("#utilityContainer").slideUp();
                    $("#add_advance").slideUp();
                    $("#btnCancel").show();
                });

                $("#btnCancelAdvance").on("click", function (e) {
                    e.preventDefault();
                    $("#advanceForm")[0].reset();
                    clearErrors("#advanceForm");
                    $("#advanceContainer").slideUp();
                    $("#utilityContainer").slideDown();
                    $("#add_advance").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#advanceForm")[0].reset();
                    clearErrors("#advanceForm");
                });
                
            }


             // ---------------------- Cash Container ----------------------
            function setupCashContainer() {
                $("#addcash").on("click", function () {
                    $("#cashContainer").slideDown();
                    $("#utilityContainer").slideUp();
                    $("#addcash").slideUp();
                    $("#btnCancel").show();
                });

                $("#btnCancelCash").on("click", function (e) {
                    e.preventDefault();
                    $("#cashForm")[0].reset();
                    clearErrors("#cashForm");
                    $("#cashContainer").slideUp();
                    $("#utilityContainer").slideDown();
                    $("#addcash").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#cashForm")[0].reset();
                    clearErrors("#cashForm");
                });
                
            }

            // ---------------------- Utility Functions ----------------------
            function clearErrors(formSelector) {
                $(`${formSelector} .invalid`).text("");
                $(`${formSelector} .form-control`).removeClass("is-invalid");
            }

            // ---------------------- Initialization ----------------------
            setupIncomeContainer();
            setupExpenseContainer(); 
            setupLoanContainer(); 
            setupAdvanceContainer(); 
            setupCashContainer(); 
        });

</script>

{{-- When switching tabs, hide all add-form containers --}}
<script>
            // When switching tabs, hide all add-form containers
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
            // Hide all Add Form containers on tab change
            $("#addIncomeContainer, #expPMTContainer, #loanContainer, #advanceContainer, #cashContainer").slideUp();

            // Also show the utility container back if needed
            $("#utilityContainer").slideDown();

            // Optionally show all add buttons again (since form is hidden)
            $("#addIncome, #addExpPMT, #addloan, #add_advance, #addcash").slideDown();

            // Optional: Reset all forms if you want to clear data too
            $("#addIncomeForm, #expPMTForm, #loanForm, #advanceForm, #cashForm").each(function () {
                this.reset();
            });

            // Clear validation errors
            clearErrors("#addIncomeForm");
            clearErrors("#expPMTForm");
            clearErrors("#loanForm");
            clearErrors("#advanceForm");
            clearErrors("#cashForm");
        });

</script>

{{-- Show/Hide Update and Trip Data Buttons based on selection --}}

<script>
    $(document).ready(function () {
        $('#income_Category, #client_id').on('change keyup', function () {  
            var selectedStatus = $('#income_Category').val();
            var clientName = $('#client_id').val().trim();

            // Hide both buttons initially
            $('#updateInvData, #updateTripData').hide();

            // Show Trip button if either status is '1' OR client name is not empty
            if (selectedStatus === '1' && clientName !== '') {
                
                $('#updateTripData').show();
                
            }

            // Show Invoice button if either status is '2' OR client name is not empty
            if (selectedStatus === '2' && clientName !== '') {
                
                $('#updateInvData').show();
            }
        });
    });
</script>

    {{-- Show Update Invoice Table on button click --}}
    <script>
                var invoiceData = [
                { date: '2025-06-10', number: 'INV001', balance: 5000 },
                { date: '2025-06-11', number: 'INV002', balance: 7000 },
            ];

            $('#updateInvData').on('click', function () {
                $('#invoiceTableBody').empty();
                

                invoiceData.forEach((item, index) => {
                    $('#invoiceTableBody').append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${item.date}</td>
                            <td>${item.number}</td>
                            <td>${item.balance}</td>
                            <td>
                                <input type="number" class="form-control adj-input" data-index="${index}" value="0" min="0">
                            </td>
                            <td>
                                <input type="text" name="adjNote${index}" class="form-control adj-note" placeholder="Note">
                            </td>
                        </tr>
                    `);
                });

                $('#updateTripTable').slideUp();
                $('#addSubmit').hide();
                $('#updateInvTable').slideDown();
                
            });


    </script>

    {{-- Show Update Trip Table on button click --}}
    <script>
                var tripData = [
                { date: '2025-06-10', number: 'TRIP001', vehicle: 'V001', origin: 'Location A', destination: 'Location B', balance: 5000 },
                { date: '2025-06-11', number: 'TRIP002', vehicle: 'V002', origin: 'Location C', destination: 'Location D', balance: 7000 },
            ];

            $('#updateTripData').on('click', function () {
                $('#tripTableBody').empty();
                $('#updateInvData').hide();

                tripData.forEach((item, index) => {
                    $('#tripTableBody').append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${item.date}</td>
                            <td>${item.number}</td>
                            <td>${item.vehicle}</td>
                            <td>${item.origin}</td>
                            <td>${item.destination}</td>
                            <td>${item.balance}</td>
                            <td>
                                <input type="number" name="adjPMT${index}" class="form-control adj-input" data-index="${index}" value="0" min="0">
                            </td>
                            <td>
                                <input type="text" name="adjNote${index}" class="form-control adj-note" placeholder="Note">
                            </td>
                        </tr>
                    `);
                });

                $('#updateInvTable').slideUp();
                $('#addSubmit').hide();
                $('#updateTripTable').slideDown();
                
            });


    </script>


    <!-- Calculate Total of Adj Inputs and Show Difference -->

    <script>
            $(document).on('input', '.adj-input, #recincomeamt', function () {
            var totalAdj = 0;

            $('.adj-input').each(function () {
                totalAdj += parseFloat($(this).val()) || 0;
            });

            var recIncome = parseFloat($('#recincomeamt').val()) || 0;
            var diff = recIncome - totalAdj;

            if (diff === 0) {
                $('#diffAlert').hide();
                $('#addIncomeSubmit').show();
            } else {
                $('#diffAmount').text(diff.toFixed(2));
                $('#diffAlert').show();
            }
        });

    </script>




{{-- Expence radio toggele --}}
    {{--<script>
        function toggleInputFields() {
            const option1Selected = document.getElementById('inlineRadio1').checked;
            document.getElementById('partyNameInput').style.display = option1Selected ? 'block' : 'none';
            document.getElementById('expCatagoryInput').style.display = option1Selected ? 'none' : 'block';
        }
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', toggleInputFields);
        </script> --}}


    {{-- Add Income --}}
    <!-- <script>
        $("#addIncomeForm").submit(function(e) {
            e.preventDefault();
            $("#addIncomeSubmit").prop('disabled', true);

            var formdata = new FormData(this);
            $.ajax({
                url: '{{ route('Voucher-Master.store') }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#addIncomeSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('Voucher-Master.index') }}';
                        });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        $("#addIncomeSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        $("#addIncomeSubmit").prop('disabled', false);
                        swal("Error occured!", "Something went wrong please try again", "error");
                    }
                }
            });

        });
    </script> -->

        <script>
                function handleFormSubmit(formId, submitBtnId) {
                    $(formId).submit(function (e) {
                        e.preventDefault();
                        $(submitBtnId).prop('disabled', true);

                        var formdata = new FormData(this);
                        console.log(formdata);
                        $.ajax({
                            url: '{{ route('Voucher-Master.store') }}',
                            type: 'POST',
                            data: formdata,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $(submitBtnId).prop('disabled', false);
                                if (!data.error2) {
                                    swal("Successful!", data.success, "success").then(() => {
                                        window.location.href = '{{ route('Voucher-Master.index') }}';
                                    });
                                } else {
                                    swal("Error!", data.error2, "error");
                                }
                            },
                            statusCode: {
                                422: function (responseObject) {
                                    $(submitBtnId).prop('disabled', false);
                                    resetErrors();
                                    printErrMsg(responseObject.responseJSON.errors);
                                },
                                500: function () {
                                    $(submitBtnId).prop('disabled', false);
                                    swal("Error occurred!", "Something went wrong, please try again", "error");
                                }
                            }
                        });
                    });
                }

                // Initialize form submissions
                $(document).ready(function () {
                    handleFormSubmit("#addIncomeForm", "#addIncomeSubmit");
                    handleFormSubmit("#addExpenseForm", "#addExpenseSubmit");
                    handleFormSubmit("#loanForm", "#addLoanSubmit");
                    handleFormSubmit("#cashForm", "#cashSubmit");
                });
        </script>



    <!-- Edit -->
    <script>
        $("#buttons-datatables").on("click", ".edit-element", function(e) {
            e.preventDefault();
            var model_id = $(this).attr("data-id");
            var url = "{{ route('Voucher-Master.edit', ':model_id') }}";

            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'GET',
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success: function(data, textStatus, jqXHR) {
                    editFormBehaviour();
                    if (!data.error) {
                        $("#editForm input[name='edit_model_id']").val(data.vehicle.id);
                        $("#editForm input[name='type']").val(data.vehicle.type);
                        $("#editForm input[name='description']").val(data.vehicle.description);
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
                var url = "{{ route('Voucher-Master.update', ':model_id') }}";

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
                                window.location.href = '{{ route('Voucher-Master.index') }}';
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
        $("#buttons-datatables").on("click", ".rem-element", function(e) {
            e.preventDefault();
            swal({
                    title: "Are you sure to delete this Voucher-Master type?",
                    icon: "warning",
                    buttons: ["Cancel", "Confirm"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var model_id = $(this).attr("data-id");
                        var url = "{{ route('Voucher-Master.destroy', ':model_id') }}";

                        $.ajax({
                            url: url.replace(':model_id', model_id),
                            type: 'POST',
                            data: {
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



