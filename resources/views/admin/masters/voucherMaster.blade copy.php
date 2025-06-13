<x-admin.layout>
    <x-slot name="title">Vocher Master</x-slot>
    <x-slot name="heading">Vocher Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    {{-- utility panale --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Total Earnings</p>
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
                            <a href="#" class="text-decoration-underline">View net earnings</a>
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
                            <p class="text-uppercase fw-medium text-muted mb-0">Customers</p>
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
                            <p class="text-uppercase fw-medium text-muted mb-0">Customers</p>
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
                            <p class="text-uppercase fw-medium text-muted mb-0">My Balance</p>
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

        <!-- Chart code Start -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-line" data-colors='["--vz-success"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Monochrome Pie Chart</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="monochrome_pie_chart" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <!-- end col -->
                </div>
        <!-- end row -->


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
                            <i class="ri-user-line me-1 align-middle"></i> Expances
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-loanAdv" role="tab" aria-selected="false">
                            <i class="ri-question-answer-line align-middle me-1"></i>Loans & Advances
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-bankStm" role="tab" aria-selected="false">
                            <i class="ri-question-answer-line align-middle me-1"></i>Bank Statement
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
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                                    Add Income <i class="fa fa-plus"></i>
                                                                </button>
                                                                <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalgridLabel">Add New Income</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="javascript:void(0);">
                                                                                    <div class="row g-3">
                                                                                        <div>
                                                                                            <label for="status-field" class="form-label">Select Income Category</label>
                                                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                <option value=>....</option>
                                                                                                <option value="1">AGN Trip</option>
                                                                                                <option value="2">AGN Invoice</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-xxl-6">
                                                                                            <div>
                                                                                                <label for="firstName" class="form-label">Client Name</label>
                                                                                                <input type="text" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-xxl-6">
                                                                                            <div>
                                                                                                <label for="firstName" class="form-label">Refance No</label>
                                                                                                <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-xxl-6">
                                                                                            <div>
                                                                                                <label for="firstName" class="form-label">Rec. AMT</label>
                                                                                                <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-xxl-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="TripDate" class="form-label">Tran Date</label>
                                                                                                <input type="date" class="form-control" id="TripDate">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div>
                                                                                            <label for="status-field" class="form-label">Select Bank</label>
                                                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                <option value="1">HDFC BANK</option>
                                                                                                <option value="2">AXIS BANK</option>
                                                                                            </select>
                                                                                        </div>
                                                                                         <!--end col-->

                                                                                        <div class="col-lg-12">
                                                                                            <label class="form-label">Short AMT Adusted Agisnt</label>
                                                                                            <div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                                    <label class="form-check-label" for="inlineRadio1">TDS</label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                    <label class="form-check-label" for="inlineRadio2">Balance</label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                                                                    <label class="form-check-label" for="inlineRadio3">ADJ Bad Debts</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-xxl-6">
                                                                                            <div>
                                                                                                <label for="firstName" class="form-label">Diff AMT</label>
                                                                                                <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-xxl-6">
                                                                                            <div>
                                                                                                <label for="lastName" class="form-label">Remark</label>
                                                                                                <input type="text" class="form-control" id="lastName" placeholder="Enter lastname">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-lg-12">
                                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                            <th>Date</th>
                                                            <th>Client Name</th>
                                                            <th>Rec Amt</th>
                                                            <th>Refrance</th>
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
                                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#expanceModalgrid">
                                                                                        Add Expences <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                    <div class="modal fade" id="expanceModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Add New Expences</h5>
                                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form action="javascript:void(0);">
                                                                                                        <div class="row g-3">

                                                                                                            <div class="col-lg-12">
                                                                                                                <label class="form-label">Select Expence Type</label>
                                                                                                                <div>
                                                                                                                    <div class="form-check form-check-inline">
                                                                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                                                        <label class="form-check-label" for="inlineRadio1">AGN Party Nmae</label>
                                                                                                                    </div>
                                                                                                                    <div class="form-check form-check-inline">
                                                                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                                        <label class="form-check-label" for="inlineRadio2">AGN Expence Head</label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Select Expence Category</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value=>....</option>
                                                                                                                    <option value="1">Office EXP</option>
                                                                                                                    <option value="2">Servising EXP</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Select Party Name</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value=>....</option>
                                                                                                                    <option value="1">Satam Motors</option>
                                                                                                                    <option value="2">ABC Tyer</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Select Vehical Number(if Any)</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value=>....</option>
                                                                                                                    <option value="1">MH 04 GS 0065</option>
                                                                                                                    <option value="2">MH 04 GS 6565</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-xxl-6">
                                                                                                                <div>
                                                                                                                    <label for="firstName" class="form-label">Expence AMT</label>
                                                                                                                    <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div class="col-xxl-6">
                                                                                                                <div>
                                                                                                                    <label for="lastName" class="form-label">Description</label>
                                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Enter lastname">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div class="col-xxl-6">
                                                                                                                <div class="mb-3">
                                                                                                                    <label for="TripDate" class="form-label">Tran Date</label>
                                                                                                                    <input type="date" class="form-control" id="TripDate">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Payment Method</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value="1">HDFC BANK</option>
                                                                                                                    <option value="2">AXIS BANK</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                             <!--end col-->


                                                                                                            <div class="col-xxl-6">
                                                                                                                <div>
                                                                                                                    <label for="lastName" class="form-label">Remark</label>
                                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Enter lastname">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <!-- Upload Documents tab pane -->
                                                                                                                <div class="tab-pane fade show active" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-xxl-6">
                                                                                                                            <div class="mb-3">
                                                                                                                                <label for="formFile" class="form-label">Upload Refrance Document</label>
                                                                                                                                <input class="form-control" type="file" id="formFile">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!--end col-->

                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                <!-- end tab pane -->
                                                                                                            <div class="col-lg-12">
                                                                                                                <div class="hstack gap-2 justify-content-end">
                                                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                        </div>
                                                                                                        <!--end row-->
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
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
                                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loanModalgrid">
                                                                                        Add Loan Entry <i class="fa fa-plus"></i>
                                                                                    </button>

                                                                                    <div class="modal fade" id="loanModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Add Loan Entry</h5>
                                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form action="javascript:void(0);">
                                                                                                        <div class="row g-3">

                                                                                                            <div class="col-lg-12">
                                                                                                                <label class="form-label">Select Loan Type</label>
                                                                                                                <div>
                                                                                                                    <div class="form-check form-check-inline">
                                                                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                                                        <label class="form-check-label" for="inlineRadio1">Loan Given</label>
                                                                                                                    </div>
                                                                                                                    <div class="form-check form-check-inline">
                                                                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                                        <label class="form-check-label" for="inlineRadio2">Loan Taken</label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Select Party Name</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value=>....</option>
                                                                                                                    <option value="1">Satam Motors</option>
                                                                                                                    <option value="2">ABC Tyer</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-xxl-6">
                                                                                                                <div class="mb-3">
                                                                                                                    <label for="TripDate" class="form-label">Tran Date</label>
                                                                                                                    <input type="date" class="form-control" id="TripDate">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div class="col-xxl-6">
                                                                                                                <div>
                                                                                                                    <label for="firstName" class="form-label">Loan AMT</label>
                                                                                                                    <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div>
                                                                                                                <label for="status-field" class="form-label">Payment Method</label>
                                                                                                                <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                                    <option value="1">HDFC BANK</option>
                                                                                                                    <option value="2">AXIS BANK</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                             <!--end col-->
                                                                                                             <div class="col-xxl-6">
                                                                                                                <div class="mb-3">
                                                                                                                    <label for="TripDate" class="form-label">Due Date</label>
                                                                                                                    <input type="date" class="form-control" id="TripDate">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-xxl-6">
                                                                                                                <div>
                                                                                                                    <label for="lastName" class="form-label">Description</label>
                                                                                                                    <textarea type="terabox" class="form-control" id="lastName" placeholder="Enter lastname"></textarea>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-12">
                                                                                                                <div class="hstack gap-2 justify-content-end">
                                                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                        </div>
                                                                                                        <!--end row-->
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                {{-- Loan  modal END--}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="">

                                                                          {{-- Advance  modal Start--}}

                                                                          <div class="live-preview">
                                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#advanceModalgrid">
                                                                                Add Advance Entry <i class="fa fa-plus"></i>
                                                                            </button>

                                                                            <div class="modal fade" id="advanceModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalgridLabel">Add Advance Entry</h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form action="javascript:void(0);">
                                                                                                <div class="row g-3">

                                                                                                    <div class="col-lg-12">
                                                                                                        <label class="form-label">Select Advance Type</label>
                                                                                                        <div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                                                <label class="form-check-label" for="inlineRadio1">Advance Given</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                                <label class="form-check-label" for="inlineRadio2">Advance Taken</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                                <label class="form-check-label" for="inlineRadio2">Against Salary</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->

                                                                                                    <div>
                                                                                                        <label for="status-field" class="form-label">Select Name</label>
                                                                                                        <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                            <option value=>....</option>
                                                                                                            <option value="1">Satam Motors</option>
                                                                                                            <option value="2">ABC Tyer</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!--end col-->

                                                                                                    <div class="col-xxl-6">
                                                                                                        <div class="mb-3">
                                                                                                            <label for="TripDate" class="form-label">Tran Date</label>
                                                                                                            <input type="date" class="form-control" id="TripDate">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div class="col-xxl-6">
                                                                                                        <div>
                                                                                                            <label for="firstName" class="form-label">Advance AMT</label>
                                                                                                            <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->

                                                                                                    <div>
                                                                                                        <label for="status-field" class="form-label">Payment Method</label>
                                                                                                        <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                            <option value="1">HDFC BANK</option>
                                                                                                            <option value="2">AXIS BANK</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                     <!--end col-->
                                                                                                     <div class="col-xxl-6">
                                                                                                        <div class="mb-3">
                                                                                                            <label for="TripDate" class="form-label">Due Date</label>
                                                                                                            <input type="date" class="form-control" id="TripDate">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div>
                                                                                                        <label for="status-field" class="form-label">Deduction Month</label>
                                                                                                        <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                                            <option value=>....</option>
                                                                                                            <option value="1">Jan-25</option>
                                                                                                            <option value="2">dis next 3 month</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!--end col-->

                                                                                                    <div class="col-xxl-6">
                                                                                                        <div>
                                                                                                            <label for="lastName" class="form-label">Description</label>
                                                                                                            <textarea type="terabox" class="form-control" id="lastName" placeholder="Enter lastname"></textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->

                                                                                                    <div class="col-lg-12">
                                                                                                        <div class="hstack gap-2 justify-content-end">
                                                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                </div>
                                                                                                <!--end row-->
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
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
                                                                                            <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="edit"></i></button>
                                                                                        @endcan
                                                                                        @can('Vouchermaster.delete')
                                                                                            <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="trash-2"></i> </button>
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
                                                    <div class="row">
                                                    <div class="col-lg-7">
                                                        <header >
                                                            <h4>Bank Statement Transactions</h4>
                                                        </header>
                                                    </div>
                                                        <div class="col-lg-3">
                                                            <label for="status-field" class="form-label">Select Bank Name</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="1">All Bank's</option>
                                                                <option value="2">HDFC</option>
                                                                <option value="3">AXIS</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <label for="status-field" class="form-label">Period:</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="1">Last 30 Days</option>
                                                                <option value="2">This Month</option>
                                                                <option value="3">This Quarter</option>
                                                                <option value="3">This Year</option>
                                                                <option value="3">Custom Rage</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                            <div class="card-header" >
                                                 <div class="row justify-content-center align-items-center" style="--vz-gutter-x: .5rem">


                                                <div class="col-sm-2">
                                                    <div class="">
                                                        <button id="addToTable" class="btn btn-primary" >Add Income <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="">
                                                        <button id="addToTable" class="btn btn-primary" >Add Expence <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="">
                                                        <button id="addToTable" class="btn btn-primary" >Add Loan <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="">
                                                        <button id="addToTable" class="btn btn-primary" >Add Adavnce <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="">
                                                        {{-- Cash Tranjction modal Start--}}

                                                        <div class="live-preview">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cashModalgrid">
                                                                Add Cash Entry <i class="fa fa-plus"></i>
                                                            </button>

                                                            <div class="modal fade" id="cashModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalgridLabel">Add Cash Entry</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="javascript:void(0);">
                                                                                <div class="row g-3">

                                                                                    <div class="col-lg-12">
                                                                                        <label class="form-label">Select Cash Type</label>
                                                                                        <div>
                                                                                            <div class="form-check form-check-inline">
                                                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                                <label class="form-check-label" for="inlineRadio1">Cash Deposite</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                                <label class="form-check-label" for="inlineRadio2">Cash Withdrawal</label>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                    <div class="col-xxl-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="TripDate" class="form-label">Tran Date</label>
                                                                                            <input type="date" class="form-control" id="TripDate">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="firstName" class="form-label">Amount</label>
                                                                                            <input type="number" class="form-control" id="firstName" placeholder="Enter firstname">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div>
                                                                                        <label for="status-field" class="form-label">Bank Name</label>
                                                                                        <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                                            <option value="1">HDFC BANK</option>
                                                                                            <option value="2">AXIS BANK</option>
                                                                                        </select>
                                                                                    </div>
                                                                                     <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Description</label>
                                                                                            <textarea type="terabox" class="form-control" id="lastName" placeholder="Enter lastname"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-lg-12">
                                                                                        <div class="hstack gap-2 justify-content-end">
                                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->
                                                                                </div>
                                                                                <!--end row-->
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Cash Tranjction modal END--}}
                                                    </div>
                                                </div>
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
                                                                    <button class="btn btn-danger rem-element px-2 py-1" title="Delete voucher" data-id="{{ $vehvouchericle->id }}"><i data-feather="trash-2"></i> </button>
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

{{-- Expence radio toggele --}}
{{-- <script>
    function toggleInputFields() {
        const option1Selected = document.getElementById('inlineRadio1').checked;
        document.getElementById('partyNameInput').style.display = option1Selected ? 'block' : 'none';
        document.getElementById('expCatagoryInput').style.display = option1Selected ? 'none' : 'block';
    }
    // Initialize on page load
    document.addEventListener('DOMContentLoaded', toggleInputFields);
    </script> --}}

{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Voucher-Master.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
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

<script>
        <!-- echarts js -->
    <script src="assets/libs/echarts/echarts.min.js"></script>

    <!-- echarts init -->
    <script src="assets/js/pages/echarts.init.js"></script>
</script>

