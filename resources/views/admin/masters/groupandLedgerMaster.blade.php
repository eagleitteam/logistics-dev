<x-admin.layout>
    <x-slot name="title">Group & Ledger Master</x-slot>
    <x-slot name="heading">Group & Ledger Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    {{-- Add Ledger Form --}}
    <div class="row" id="addLedgerContainer" style="display: none">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addLedgerForm" id="addLedgerForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="ledger" />
                    <div class="card-body">
                        <h4 class="mb-3">Add Ledger</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="ledger_name" class="form-label">Ledger Name</label>
                                <input type="text" class="form-control" id="ledger_name" name="ledger_name" placeholder="Enter Ledger Name" />
                            </div>
                                <div class="col-md-4">
                                    <label for="Category" class="form-label">Group Category</label>
                                    <select class="form-select" name="Category" id="Category">
                                        <option value="">Select...</option>
                                        <option value="1">Master Group</option>
                                        <option value="2">Group</option>
                                        <option value="3">SubGroup</option>
                                    </select>
                                    <span class="text-danger invalid Category_err"></span>
                                </div>

                                <div class="col-md-4">
                                    <label for="ref_name" class="form-label">Select Name</label>
                                    <select class="form-select" name="ref_name" id="ref_name">
                                        <option value="">Select Client</option>
                                        <option value="1">B/S -> Assets</option>
                                        <option value="2">B/S -> Liabilities</option>
                                        <option value="3">P & L -> Income</option>
                                        <option value="4">P & L -> Expense</option>
                                    </select>
                                </div>


                            <div class="col-md-4">
                                <label for="recincomeamt" class="form-label">Opening AMT</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="openingamt"
                                    name="openingamt"
                                    placeholder="Enter Opening Amount"
                                />
                            </div>
                            <div class="col-md-4">
                                <label for="tranDate" class="form-label">DR / CR</label>
                                <select class="form-select" name="dr_cr" id="dr_cr">
                                        <option value="">Select...</option>
                                        <option value="1">Debit</option>
                                        <option value="2">Credit</option>
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <label for="status-field" class="form-label">Opening Year</label>
                                <select class="form-select" name="opening_year" id="opening_year">
                                    <option value="">Select...</option>
                                    <option value="1">21-22</option>
                                    <option value="2">22-23</option>
                                    <option value="3">23-24</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addLedgerSubmit" >
                                Submit
                            </button>
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelLedger" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Ledger Form End --}}

    {{-- Add Group Form --}}
    <div class="row" id="addGroupContainer" style="display: none">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addGroupForm" id="addGroupForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="group" />
                    <div class="card-body">
                        <h4 class="mb-3">Add Group</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="group_name" class="form-label">Group Name</label>
                                <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter Group Name" />
                            </div>
                                <div class="col-md-4">
                                    <label for="Master_Category" class="form-label">Master Category</label>
                                    <select class="form-select" name="master_group_id" id="master_group_id">
                                        <option value="">Select Master Group</option>
                                        @foreach($masterGroups as $masterGroup)
                                            <option value="{{ $masterGroup->id }}">{{ $masterGroup->master_group_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger invalid Master_Category_err"></span>
                                </div>

                               
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addGroupSubmit" >
                                Submit
                            </button>   
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelGroup" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Group Form End --}}

    {{-- Add Sub- Group Form --}}
    <div class="row" id="addSubGroupContainer" style="display: none">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addSubGroupForm" id="addSubGroupForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_type" value="sub_group" />
                    <div class="card-body">
                        <h4 class="mb-3">Add Sub Group</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="Subgroup_name" class="form-label">Sub-Group Name</label>
                                <input type="text" class="form-control" id="Subgroup_name" name="Subgroup_name" placeholder="Enter Sub-Group Name" />
                            </div>
                                <div class="col-md-4">
                                    <label for="Master_Category" class="form-label"> Category</label>
                                    <select class="form-select" name="master_group_id" id="master_group_id">
                                        <option value="">Select Group</option>
                                        <option value="1">Under Group</option>
                                        <option value="2">Under Sub-Group</option>
                                    </select>
                                    <span class="text-danger invalid Master_Category_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="Master_Category" class="form-label">Name List</label>
                                    <select class="form-select" name="name_list" id="name_list">
                                        <option value="">Select Group</option>
                                        <option value="1">Under Group</option>
                                        <option value="2">Under Sub-Group</option>
                                    </select>
                                    <span class="text-danger invalid name_list_err"></span>
                                </div>

                               
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-success" id="addSubGroupSubmit" >
                                Submit
                            </button>   
                            <button type="reset" id="resetfrom" class="btn btn-warning">Reset</button>
                            <button type="button" id="btnCancelSubGroup" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Sub- Group Form End --}}

    {{-- Heading Tab --}}

    <div class="col-md-12">
        
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul
                    class="nav nav-tabs nav-justified nav-border-top nav-border-top-success mb-3"
                    role="tablist"
                >
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            data-bs-toggle="tab"
                            href="#nav-border-justified-ledger"
                            role="tab"
                            aria-selected="false"
                        >
                            <i class="ri-home-5-line align-middle me-1"></i> Create Ledger
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#nav-border-justified-group"
                            role="tab"
                            aria-selected="false"
                        >
                            <i class="ri-user-line me-1 align-middle"></i> Create Group
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#nav-border-justified-subgroup"
                            role="tab"
                            aria-selected="false"
                        >
                            <i class="ri-question-answer-line align-middle me-1"></i> Create SubGroup
                        </a>
                    </li>
                </ul>

                {{-- Tab Contaion --}}
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="nav-border-justified-ledger" role="tabpanel">
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
                                                            <h4>Add New Ledger</h4>
                                                        </header>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="">
                                                        {{-- Ledger modal Start--}}
                                                        <div class="live-preview">
                                                            <button
                                                                type="button"
                                                                id="addLedger"
                                                                class="btn btn-primary"
                                                                data-bs-target="#exampleModalgrid"
                                                            >
                                                                <i class="fa fa-plus"></i> Add Ledger
                                                            </button>
                                                        </div>
                                                        {{-- Ledger modal END--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                id="buttons-datatables"
                                                class="table table-bordered nowrap align-middle"
                                                style="width:100%"
                                            >
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
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav-border-justified-group" role="tabpanel">
                        {{-- Group Table --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    @can('Vouchermaster.create')
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <div class="">
                                                        <header>
                                                            <h4>Create Group Master</h4>
                                                        </header>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="">
                                                        {{-- Group modal Start--}}

                                                        <div class="live-preview">
                                                            <button
                                                                type="button"
                                                                id="addGroup"
                                                                class="btn btn-primary"
                                                                data-bs-target="#expanceModalgrid"
                                                            >
                                                                Add Group <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>

                                                        {{-- Group modal END--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                id="buttons-datatables"
                                                class="table table-bordered nowrap align-middle"
                                                style="width:100%"
                                            >
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
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav-border-justified-subgroup" role="tabpanel">
                        {{-- Subgroup Table --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    @can('Vouchermaster.create')
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="">
                                                        <header>
                                                            <h4>Add New Subgroup</h4>
                                                        </header>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="">
                                                        {{-- Subgroup modal Start--}}

                                                        <div class="live-preview">
                                                            <button
                                                                type="button"
                                                                class="btn btn-primary"
                                                                id="addSubGroup"
                                                                data-bs-target="#loanModalgrid"
                                                            >
                                                                Add Subgroup <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>

                                                        {{-- Subgroup modal END--}}
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    @endcan
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                id="buttons-datatables"
                                                class="table table-bordered nowrap align-middle"
                                                style="width:100%"
                                            >
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
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
    </div>
    <!--end col-->
</x-admin.layout>

<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

{{-- Add & Cancel Btn controler for all --}}
<script>
        $(document).ready(function () {

            // ---------------------- Ledger Container ----------------------
            function setupLedgerContainer() {
                $("#addLedger").on("click", function () {
                    $("#addLedgerContainer").slideDown();
                    $("#addLedger").slideUp();
                    $("#btnCancelLedger").show();
                });

                $("#btnCancelLedger").on("click", function (e) {
                    e.preventDefault();
                    $("#addLedgerForm")[0].reset(); // <-- Correct form reference
                    clearErrors("#addLedgerForm");
                    $("#addLedgerContainer").slideUp();
                    $("#addLedger").slideDown();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#addLedgerForm")[0].reset();
                    clearErrors("#addLedgerForm");
                });
            }

            // ---------------------- Group Container ----------------------
            function setupGroupContainer() {
                $("#addGroup").on("click", function () {
                    $("#addGroupContainer").slideDown();
                    $("#addGroupSubmit").slideUp();
                    $("#btnCancelGroup").show();
                });

                $("#btnCancelGroup").on("click", function (e) {
                    e.preventDefault();
                    $("#addGroupForm")[0].reset();
                    clearErrors("#addGroupForm");
                    $("#addGroupContainer").slideUp();
                    $("#addGroup").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#addGroupForm")[0].reset();
                    clearErrors("#addGroupForm");
                });
                
            }

            // ---------------------- Sub-Group Container ----------------------
            function setupSubGroupContainer() {
                $("#addSubGroup").on("click", function () {
                    $("#addSubGroupContainer").slideDown();
                    $("#addSubGroup").slideUp();
                    $("#btnCancelSubGroup").show();
                });

                $("#btnCancelSubGroup").on("click", function (e) {
                    e.preventDefault();
                    $("#addSubGroupForm")[0].reset();
                    clearErrors("#addSubGroupForm");
                    $("#addSubGroupContainer").slideUp();
                    $("#addSubGroup").show();
                });

                $("#resetfrom").on("click", function (e) {
                    e.preventDefault();
                    $("#addSubGroupForm")[0].reset();
                    clearErrors("#addSubGroupForm");
                });
                
            }

            
            setupLedgerContainer();
            setupGroupContainer(); 
            setupSubGroupContainer(); 
 
        });

</script>

{{-- When switching tabs, hide all add-form containers --}}
<script>
            // When switching tabs, hide all add-form containers
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
            // Hide all Add Form containers on tab change
            $("#addLedgerContainer, #addGroupContainer, #addSubGroupContainer").slideUp();


            // Optionally show all add buttons again (since form is hidden)
            $("#addLedger, #addGroup, #addSubGroup").slideDown();

            // Optional: Reset all forms if you want to clear data too
            $("#addLedgerForm, #addGroupForm, #subGroupForm").each(function () {
                this.reset();
            });

            // Clear validation errors
            clearErrors("#addLedgerForm");
            clearErrors("#addGroupForm");
            clearErrors("#subGroupForm");

        });

</script>

<script>
    function clearErrors(formSelector) {
        // Clear text inside span with error classes
        $(formSelector).find('.text-danger.invalid').text('');

        // Remove error highlight class from form controls
        $(formSelector).find('.is-invalid').removeClass('is-invalid');
    }
</script>

{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Ledger-Master.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Ledger-Master.index') }}';
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
        var url = "{{ route('Ledger-Master.edit', ':model_id') }}";

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
            var url = "{{ route('Ledger-Master.update', ':model_id') }}";

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
                            window.location.href = '{{ route('Ledger-Master.index') }}';
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
                title: "Are you sure to delete this vehicle type?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('Ledger-Master.destroy', ':model_id') }}";

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




