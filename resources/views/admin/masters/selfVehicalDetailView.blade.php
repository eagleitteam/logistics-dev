<x-admin.layout>
    <x-slot name="title">Self Vehical's Master</x-slot>
    <x-slot name="heading">Self Vehical's Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <!-- Add Form -->
    <div class="row" id="addContainer" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label class="col-form-label" for="vehicle_number">Vehicle Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="vehicle_number" name="vehicle_number" type="text"
                                    placeholder="Enter Vehicle Number">
                                <span class="text-danger invalid vehicle_number_err"></span>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="name">Select Vehical Type<span class="text-danger">*</span></label>
                                <select class="form-control" id="vehicle_id" name="vehicle_id">
                                    <option value="">Select Vehical Type</option>
                                    @foreach ($vehicalTypes as $vehicalType)
                                        <option value="{{ $vehicalType->id }}">{{ $vehicalType->type }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger invalid vehicle_id_err"></span>
                            </div>

                            <div class="col-md-4">
                                <label for="FormSelectBankType" class="form-label">Fule Type<span
                                        class="text-danger">*</span></label>
                                <select id="fule_type"  name="fule_type" class="form-select" data-choices
                                    data-choices-sorting="true">
                                    <option>Select from list</option>
                                    <option value="1">Diesel</option>
                                    <option value="2">CNG</option>
                                    <option value="3">Electrcal</option>
                                </select>
                                <span class="text-danger invalid fule_type_err"></span>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="register_date" class="form-label">Register Date</label>
                                    <input type="date" class="form-control" id="register_date" name="register_date">
                                    <span class="text-danger invalid register_date_err"></span>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">
                                <label class="col-form-label" for="chassis_num">Chassis Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="chassis_num" name="chassis_num" type="text"
                                    placeholder="Enter Chassis Number">
                                <span class="text-danger invalid chassis_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="eng_num">Engine Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="eng_num" name="eng_num" type="text"
                                    placeholder="Enter Engine Number">
                                <span class="text-danger invalid eng_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="model_num">Model Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="model_num" name="model_num" type="text"
                                    placeholder="Enter Model Number">
                                <span class="text-danger invalid model_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="toll_stm">Toll STM Link With </label>
                                <input class="form-control" id="toll_stm" name="toll_stm" type="text"
                                    placeholder="Enter Refrance Toll STM Link With">
                                <span class="text-danger invalid toll_stm_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="remark">Remark </label>
                                <input class="form-control" id="remark" name="remark" type="text"
                                    placeholder="Enter Remarks">
                                <span class="text-danger invalid remark_err"></span>
                            </div>
                            <br><br><br>
                            {{-- Start Tab Menu --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <header class="card-header">
                                        <h5 class="mb-3">Other Details tabs</h5>
                                    </header>
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3 justify-content-between w-100"
                                                role="tablist">
                                                <li class="nav-item ">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#arrow-fitness" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-home-variant"></i></span>
                                                        <span class="d-none  d-sm-block">Fitness</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-tax"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-account"></i></span>
                                                        <span class="d-none  d-sm-block">Tax</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-insurance"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Insurance</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-permit"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-puc"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">PUC Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab"
                                                        href="#arrow-NationalPermit" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">National Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-loanDetails"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Loan Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted ">
                                                {{-- Fitness Tab --}}
                                                <div class="tab-pane active" id="arrow-fitness" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_s_d" name="f_s_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_e_d" name="f_e_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Upload Fitness
                                                                Document (PDF)</label>
                                                            <input class="form-control" type="file" id="File" name="file">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                {{-- Tax Tab --}}
                                                <div class="tab-pane " id="arrow-tax" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="tax_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="tax_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Tax
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="tax_file">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Insurance Tab --}}
                                                <div class="tab-pane " id="arrow-insurance" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="insurance_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="insurance_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="insuranceName" class="form-label">Insurance
                                                                    Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="insuranceName" name="insurance_company_name">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload
                                                                    Insurance Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="insurance_document">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- PUC Tab --}}
                                                <div class="tab-pane " id="arrow-puc" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="puc_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="puc_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload PUC
                                                                    (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="puc_file">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                {{-- PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-permit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="permit_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="permit_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Permit
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="permit_document">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- NATIONAL PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-NationalPermit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    Start Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="national_permit_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    END Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="national_permit_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload National
                                                                    Permit Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="national_permit_file">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Loan Details Tab --}}
                                                <div class="tab-pane " id="arrow-loanDetails" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="loan_start_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="loan_end_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Bank
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="TripDate" name="bank_name">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan
                                                                    AMT</label>
                                                                <input type="number" class="form-control" id="TripDate" name="loan_amt">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Count</label>
                                                                <input type="number" class="form-control" id="TripDate" name="emi_count">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI AMT</label>
                                                                <input type="number" class="form-control" id="TripDate" name="emi_amt">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate" name="emi_date">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Loan
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile" name="loan_document">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div>
                            </div>
                            <!--end col-->

                            {{-- End Tab Menu --}}
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success" id="addSubmit">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Edit Form --}}
    <div class="row" id="editContainer" style="display:none;">
        <div class="col">
            <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h4 class="card-title">Edit Self Vehical Details</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label class="col-form-label" for="vehicle_number">Vehicle Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="vehicle_number" name="vehicle_number" type="text"
                                    placeholder="Enter Vehicle Number">
                                <span class="text-danger invalid vehicle_number_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="vehicle_type">Vehicle Type <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="vehicle_type" name="vehicle_type" type="text"
                                    placeholder="Enter Vehicle Type">
                                <span class="text-danger invalid vehicle_type_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="FormSelectBankType" class="form-label">Fule Type<span
                                        class="text-danger">*</span></label>
                                <select id="fule_type" name="fule_type" class="form-select" data-choices
                                    data-choices-sorting="true">
                                    <option>Select from list</option>
                                    <option value="1">Diesel</option>
                                    <option value="2">CNG</option>
                                    <option value="3">Electrcal</option>
                                </select>
                                <span class="text-danger invalid fule_type_err"></span>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="TripDate" class="form-label">Register Date</label>
                                    <input type="date" class="form-control" id="register_date" name="register_date">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">
                                <label class="col-form-label" for="chassis_num">Chassis Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="chassis_num" name="chassis_num" type="text"
                                    placeholder="Enter Chassis Number">
                                <span class="text-danger invalid chassis_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="eng_num">Engine Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="eng_num" name="eng_num" type="text"
                                    placeholder="Enter Engine Number">
                                <span class="text-danger invalid eng_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="model_num">Model Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="model_num" name="model_num" type="text"
                                    placeholder="Enter Model Number">
                                <span class="text-danger invalid model_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="toll_stm">Toll STM Link With </label>
                                <input class="form-control" id="toll_stm" name="toll_stm" type="text"
                                    placeholder="Enter Toll STM Link With">
                                <span class="text-danger invalid toll_stm_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="remark">Remark </label>
                                <input class="form-control" id="remark" name="remark" type="text"
                                    placeholder="Enter Remarkss">
                                <span class="text-danger invalid remark_err"></span>
                            </div>
                            <br><br><br>
                            {{-- Start Tab Menu --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <header class="card-header">
                                        <h5 class="mb-3">Other Details tabs</h5>
                                    </header>
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3 justify-content-between w-100"
                                                role="tablist">
                                                <li class="nav-item ">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#arrow-fitness" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-home-variant"></i></span>
                                                        <span class="d-none  d-sm-block">Fitness</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-tax"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-account"></i></span>
                                                        <span class="d-none  d-sm-block">Tax</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-insurance"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Insurance</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-permit"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-puc"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">PUC Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab"
                                                        href="#arrow-NationalPermit" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">National Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-loanDetails"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Loan Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted ">
                                                {{-- Fitness Tab --}}
                                                <div class="tab-pane active" id="arrow-fitness" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_s_d" name="f_s_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_e_d" name="f_e_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Upload Fitness
                                                                Document (PDF)</label>
                                                            <input class="form-control" type="file" id="file" name="file">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                {{-- Tax Tab --}}
                                                <div class="tab-pane " id="arrow-tax" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Tax
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Insurance Tab --}}
                                                <div class="tab-pane " id="arrow-insurance" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="insuranceName" class="form-label">Insurance
                                                                    Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="insuranceName">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload
                                                                    Insurance Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- PUC Tab --}}
                                                <div class="tab-pane " id="arrow-puc" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload PUC
                                                                    (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                {{-- PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-permit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Permit
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- NATIONAL PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-NationalPermit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    Start Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    END Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload National
                                                                    Permit Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Loan Details Tab --}}
                                                <div class="tab-pane " id="arrow-loanDetails" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Bank
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan
                                                                    AMT</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Count</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI AMT</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Loan
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                    </div>

                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-primary" id="editSubmit">Submit</button>
                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                </div>
                </section>
            </form>
        </div>
    </div>

    {{-- view Form --}}
    <div class="row" id="viewContainer" style="display:none;">
        <div class="col">
            <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h4 class="card-title">Edit Self Vehical Details</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label class="col-form-label" for="vehicle_number">Vehicle Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="vehicle_number" name="vehicle_number" type="text"
                                    placeholder="Enter Vehicle Number">
                                <span class="text-danger invalid vehicle_number_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="vehicle_type">Vehicle Type <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="vehicle_type" name="vehicle_type" type="text"
                                    placeholder="Enter Vehicle Type">
                                <span class="text-danger invalid vehicle_type_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="FormSelectBankType" class="form-label">Fule Type<span
                                        class="text-danger">*</span></label>
                                <select id="fule_type" name="fule_type" class="form-select" data-choices
                                    data-choices-sorting="true">
                                    <option>Select from list</option>
                                    <option value="1">Diesel</option>
                                    <option value="2">CNG</option>
                                    <option value="3">Electrcal</option>
                                </select>
                                <span class="text-danger invalid fule_type_err"></span>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="TripDate" class="form-label">Register Date</label>
                                    <input type="date" class="form-control" id="register_date" name="register_date">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">
                                <label class="col-form-label" for="chassis_num">Chassis Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="chassis_num" name="chassis_num" type="text"
                                    placeholder="Enter Chassis Number">
                                <span class="text-danger invalid chassis_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="eng_num">Engine Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="eng_num" name="eng_num" type="text"
                                    placeholder="Enter Engine Number">
                                <span class="text-danger invalid eng_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="model_num">Model Number <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="model_num" name="model_num" type="text"
                                    placeholder="Enter Model Number">
                                <span class="text-danger invalid model_num_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="toll_stm">Toll STM Link With </label>
                                <input class="form-control" id="toll_stm" name="toll_stm" type="text"
                                    placeholder="Enter Toll STM Link With">
                                <span class="text-danger invalid toll_stm_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="remark">Remark </label>
                                <input class="form-control" id="remark" name="remark" type="text"
                                    placeholder="Enter Remarkss">
                                <span class="text-danger invalid remark_err"></span>
                            </div>
                            <br><br><br>
                            {{-- Start Tab Menu --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <header class="card-header">
                                        <h5 class="mb-3">Other Details tabs</h5>
                                    </header>
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3 justify-content-between w-100"
                                                role="tablist">
                                                <li class="nav-item ">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#arrow-fitness" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-home-variant"></i></span>
                                                        <span class="d-none  d-sm-block">Fitness</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-tax"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-account"></i></span>
                                                        <span class="d-none  d-sm-block">Tax</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-insurance"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Insurance</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-permit"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-puc"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">PUC Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab"
                                                        href="#arrow-NationalPermit" role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">National Permit Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#arrow-loanDetails"
                                                        role="tab">
                                                        <span class="d-block  d-sm-none"><i
                                                                class="mdi mdi-email"></i></span>
                                                        <span class="d-none  d-sm-block">Loan Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted ">
                                                {{-- Fitness Tab --}}
                                                <div class="tab-pane active" id="arrow-fitness" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_s_d" name="f_s_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Fitness END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="f_e_d" name="f_e_d">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Upload Fitness
                                                                Document (PDF)</label>
                                                            <input class="form-control" type="file" id="file" name="file">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                {{-- Tax Tab --}}
                                                <div class="tab-pane " id="arrow-tax" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">TAX END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Tax
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Insurance Tab --}}
                                                <div class="tab-pane " id="arrow-insurance" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Insurance END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="insuranceName" class="form-label">Insurance
                                                                    Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="insuranceName">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload
                                                                    Insurance Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- PUC Tab --}}
                                                <div class="tab-pane " id="arrow-puc" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PUC END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload PUC
                                                                    (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                {{-- PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-permit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">PERMIT END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Permit
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- NATIONAL PERMIT Tab --}}
                                                <div class="tab-pane " id="arrow-NationalPermit" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    Start Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">National Permit
                                                                    END Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload National
                                                                    Permit Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>

                                                {{-- Loan Details Tab --}}
                                                <div class="tab-pane " id="arrow-loanDetails" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan Start
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan END
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Bank
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">Loan
                                                                    AMT</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Count</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI AMT</label>
                                                                <input type="number" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="TripDate" class="form-label">EMI
                                                                    Date</label>
                                                                <input type="date" class="form-control" id="TripDate">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Upload Loan
                                                                    Document (PDF)</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                    </div>

                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-primary" id="editSubmit">Submit</button>
                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                </div>
                </section>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                 @can('selfVehicle.create')
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                <button id="btnCancel" class="btn btn-danger" style="display:none;">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endcan
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Vehical Number</th>
                                    <th>Vehicle Type</th>
                                    <th>Fule Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($selfVehicals as $selfVehical)
                                    @php
                                       
                                        $fuelType = '';
                                        if($selfVehical->fule_type == 1)
                                            $fuelType = 'Diesel';
                                        elseif($selfVehical->fule_type == 2)
                                            $fuelType = 'CNG';
                                        elseif($selfVehical->fule_type == 3)
                                            $fuelType = 'Electric';
                                    @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <!-- <td>{{ $selfVehical?->vehicle_number }}</td> -->
                                    <td>{{ $selfVehical?->vehicleNumber?->vehicle_number }}</td>
                                    <td>{{ $selfVehical?->vehicleType?->type }}</td>
                                    <td>{{ $fuelType }}</td>
                                    <td>
                                        @can('selfVehicle.edit')
                                        <button class="edit-element btn btn-success px-2 py-1" title="View Vehicle Details"
                                            data-id="{{ $selfVehical->id }}"><i data-feather="eye"></i></button>
                                         @endcan
                                        @can('selfVehicle.edit')
                                        <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle Entry"
                                            data-id="{{ $selfVehical->id }}"><i data-feather="edit"></i></button>
                                         @endcan
                                            @can('selfVehicle.delete')
                                        <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle Entry"
                                            data-id="{{ $selfVehical->id }}"><i data-feather="trash-2"></i> </button>
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




</x-admin.layout>


{{-- Add --}}
<script>
    $("#addForm").submit(function (e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('selfVehicle.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('selfVehicle.index') }}';
                        });
                else
                    swal("Error!", data.error2, "error");
            },
            statusCode: {
                422: function (responseObject, textStatus, jqXHR) {
                    $("#addSubmit").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function (responseObject, textStatus, errorThrown) {
                    $("#addSubmit").prop('disabled', false);
                    swal("Error occured!", "Something went wrong please try again", "error");
                }
            }
        });

    });
</script>


<!-- Edit -->
<script>
    $("#buttons-datatables").on("click", ".edit-element", function (e) {
        e.preventDefault();
        var model_id = $(this).attr("data-id");
        var url = "{{ route('selfVehicle.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function (data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.selfVehicle.id);
                    $("#editForm input[name='vehicle_number']").val(data.selfVehicle.vehicle_number);
                    $("#editForm input[name='vehicle_type']").val(data.selfVehicle.vehicle_type);
                    $("#editForm select[name='fule_type']").val(data.selfVehicle.fule_type);
                    $("#editForm input[name='register_date']").val(data.selfVehicle.register_date);
                    $("#editForm input[name='chassis_num']").val(data.selfVehicle.chassis_num);
                    $("#editForm input[name='eng_num']").val(data.selfVehicle.eng_num);
                    $("#editForm input[name='model_num']").val(data.selfVehicle.model_num);
                    $("#editForm input[name='toll_stm']").val(data.selfVehicle.toll_stm);
                    $("#editForm input[name='remark']").val(data.selfVehicle.remark);
                    $("#editForm input[name='f_s_d']").val(data.selfVehicle.f_s_d);
                    $("#editForm input[name='f_e_d']").val(data.selfVehicle.f_e_d);
                    $("#editForm input[name='file']").val(data.selfVehicle.file);
                } else {
                    alert(data.error);
                }
            },
            error: function (error, jqXHR, textStatus, errorThrown) {
                alert("Something went wrong");
            },
        });
    });
</script>


<!-- Update -->
<script>
    $(document).ready(function () {
        $("#editForm").submit(function (e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('selfVehicle.update', ':model_id') }}";

            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#editSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                            .then((action) => {
                                window.location.href = '{{ route('selfVehicle.index') }}';
                            });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function (responseObject, textStatus, jqXHR) {
                        $("#editSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function (responseObject, textStatus, errorThrown) {
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
    $("#buttons-datatables").on("click", ".rem-element", function (e) {
        e.preventDefault();
        swal({
            title: "Are you sure to delete this vehicle type?",
            icon: "warning",
            buttons: ["Cancel", "Confirm"],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('selfVehicle.destroy', ':model_id') }}";

                    $.ajax({
                        url: url.replace(':model_id', model_id),
                        type: 'POST',
                        data: {
                            '_method': "DELETE",
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function (data, textStatus, jqXHR) {
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
                        error: function (error, jqXHR, textStatus, errorThrown) {
                            swal("Error!", "Something went wrong", "error");
                        },
                    });
                }
            });
    });
</script>
