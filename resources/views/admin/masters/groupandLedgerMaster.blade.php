<x-admin.layout>
    <x-slot name="title">Add Group , Sub-Group & Ledger Master</x-slot>
    <x-slot name="heading">Add Group , Sub-Group & Ledger Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    <!-- Add Form -->
                                            <!--Wizard col-->
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Select Tab As Per Your Requriments</h4>
                                                    </div>
                                                    <!-- end card header -->


                                                    <div class="card-body">
                                                        <form action="#" class="form-steps" autocomplete="off">

                                                            {{-- Start Tab Heading --}}
                                                            <div class="step-arrow-nav mb-4">
                                                                <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link done" id="steparrow-groupUnderMaster-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-groupUnderMaster-info" type="button" role="tab" aria-controls="steparrow-groupUnderMaster-info" aria-selected="true"> (1) Create Group Under Master's</button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link done" id="steparrow-subGroup-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-subGroup-info" type="button" role="tab" aria-controls="steparrow-subGroup-info" aria-selected="true"> (2) Create Sub Group Under Group</button>
                                                                    </li>
                                                                    <li class="nav-item" role="presentation">
                                                                        <button class="nav-link active" id="steparrow-ledgerUnderGroup-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-ledgerUnderGroup-info" type="button" role="tab" aria-controls="steparrow-ledgerUnderGroup-info" aria-selected="true"> (3) Create Ledger Under Sub-Group</button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            {{-- End Tab Heading --}}


                                                            <!-- Create Group Under Master's Details tab pane -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade" id="steparrow-groupUnderMaster-info" role="tabpanel" aria-labelledby="steparrow-groupUnderMaster-info-tab">
                                                                    <div>
                                                                         <!-- Add Form -->
                                                                             <div class="row" id="addContainer" style="display:none;">
                                                                        <div class="row">
                                                                             <div class="card">
                                                                                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Select Master Head First</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Master Selector --}}

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label for="ForminputState" class="form-label">Master Heads</label>
                                                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                                                        <option selected>Choose...</option>
                                                                                        <option>B/S -> Assets</option>
                                                                                        <option>B/S -> Lablites</option>
                                                                                        <option>P & L -> Income</option>
                                                                                        <option>P & L -> Expensec</option>
                                                                                        <option>Trial B/S -> Debit</option>
                                                                                        <option>Trial B/S -> Credit</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Create Your Group Below Under Above Selected Master Head</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Enter Group Name --}}
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label" for="steparrow-gen-info-email-input">Enter Your Group Name</label>
                                                                                    <input type="text" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter Your Group Name" required >
                                                                                    <div class="invalid-feedback">Please Enter Your Group Name</div>
                                                                                </div>
                                                                            </div>
                                                                             <!--end col-->
                                                                        </form>
                                                                        </div>
                                                                         {{-- Sumit Reset BTN --}}
                                                                                <div class="card-footer">
                                                                                    <button type="submit" class="btn btn-success" id="addSubmit">Submit</button>
                                                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                                                </div>
                                                                            <!--end col-->
                                                                    </div>
                                                                </div>


                                                                    </div>

                                                                      {{-- Table List --}}

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <!-- @can('wards.create') -->
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
                                                                                <!-- @endcan -->
                                                                                <div class="card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Sr No.</th>
                                                                                                    <th>Master Head</th>
                                                                                                    <th>Group Name</th>
                                                                                                    <th>Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                @foreach ($vehicles as $vehicle)
                                                                                                    <tr>
                                                                                                        <td>{{ $loop->iteration }}</td>
                                                                                                        <td>{{ $vehicle->type }}</td>
                                                                                                        <td>{{ $vehicle->description }}</td>
                                                                                                        <td>
                                                                                                            <!-- @can('wards.edit') -->
                                                                                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="edit"></i></button>
                                                                                                            <!-- @endcan
                                                                                                            @can('wards.delete') -->
                                                                                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="trash-2"></i> </button>
                                                                                                            <!-- @endcan -->
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- END  Table List --}}
                                                                </div>
                                                                <!-- end tab pane -->



                                                            </div>
                                                            <!-- END Create Group Under Master's Details tab pane -->

                                                            <!-- Create Sub Group Under Group tab pane -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade" id="steparrow-subGroup-info" role="tabpanel" aria-labelledby="steparrow-subGroup-info-tab">
                                                                    <div>
                                                                         <!-- Add Form -->
                                                                             <div class="row" id="addContainer" style="display:none;">
                                                                        <div class="row">
                                                                             <div class="card">
                                                                                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Select Group Name First</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Master Selector --}}

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label for="ForminputState" class="form-label">Group Name</label>
                                                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                                                        <option selected>Choose...</option>
                                                                                        <option>B/S -> Assets -> Fixed Asset</option>
                                                                                        <option>B/S -> Lablites</option>
                                                                                        <option>P & L -> Income</option>
                                                                                        <option>P & L -> Expensec</option>
                                                                                        <option>Trial B/S -> Debit</option>
                                                                                        <option>Trial B/S -> Credit</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Create Your Sub-Group Below Under Above Selected Group Head</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Enter Group Name --}}
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label" for="steparrow-gen-info-email-input">Enter Your Sub-Group Name</label>
                                                                                    <input type="text" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter Your Group Name" required >
                                                                                    <div class="invalid-feedback">Please Enter Your Sub-Group Name</div>
                                                                                </div>
                                                                            </div>
                                                                             <!--end col-->
                                                                        </form>
                                                                        </div>
                                                                         {{-- Sumit Reset BTN --}}
                                                                                <div class="card-footer">
                                                                                    <button type="submit" class="btn btn-success" id="addSubmit">Submit</button>
                                                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                                                </div>
                                                                            <!--end col-->
                                                                    </div>
                                                                </div>


                                                                    </div>

                                                                      {{-- Table List --}}

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <!-- @can('wards.create') -->
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
                                                                                <!-- @endcan -->
                                                                                <div class="card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Sr No.</th>
                                                                                                    <th>Group Name</th>
                                                                                                    <th>Sub-Group Name</th>
                                                                                                    <th>Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                @foreach ($vehicles as $vehicle)
                                                                                                    <tr>
                                                                                                        <td>{{ $loop->iteration }}</td>
                                                                                                        <td>{{ $vehicle->type }}</td>
                                                                                                        <td>{{ $vehicle->description }}</td>
                                                                                                        <td>
                                                                                                            <!-- @can('wards.edit') -->
                                                                                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="edit"></i></button>
                                                                                                            <!-- @endcan
                                                                                                            @can('wards.delete') -->
                                                                                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="trash-2"></i> </button>
                                                                                                            <!-- @endcan -->
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- END  Table List --}}
                                                                </div>
                                                                <!-- end tab pane -->



                                                            </div>

                                                            <!-- END Sub Group Under Group tab pane -->

                                                            <!-- Create Ledger Under Group tab pane -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade" id="steparrow-ledgerUnderGroup-info" role="tabpanel" aria-labelledby="steparrow-ledgerUnderGroup-info-tab">
                                                                    <div>
                                                                         <!-- Add Form -->
                                                                             <div class="row" id="addContainer" style="display:none;">
                                                                        <div class="row">
                                                                             <div class="card">
                                                                                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Select Group Head First</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Group Selector --}}

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label for="ForminputState" class="form-label">Group Heads</label>
                                                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                                                        <option selected>Choose...</option>
                                                                                        <option>B/S -> Assets -> Group1 -> Group5</option>
                                                                                        <option>B/S -> Lablites</option>
                                                                                        <option>P & L -> Income</option>
                                                                                        <option>P & L -> Expensec</option>
                                                                                        <option>Trial B/S -> Debit</option>
                                                                                        <option>Trial B/S -> Credit</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            {{-- Heading --}}
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h4 class="card-title mb-0">Create Your Ledger Below Under Above Selected Group Head</h4>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Enter Group Name --}}
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label" for="steparrow-gen-info-email-input">Enter Your Ledger Name</label>
                                                                                    <input type="text" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter Your Ledger Name" required >
                                                                                    <div class="invalid-feedback">Please Enter Your Group Name</div>
                                                                                </div>
                                                                            </div>
                                                                             <!--end col-->
                                                                        </form>
                                                                        </div>
                                                                         {{-- Sumit Reset BTN --}}
                                                                                <div class="card-footer">
                                                                                    <button type="submit" class="btn btn-success" id="addSubmit">Submit</button>
                                                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                                                </div>
                                                                            <!--end col-->
                                                                    </div>
                                                                </div>


                                                                    </div>

                                                                      {{-- Table List --}}

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <!-- @can('wards.create') -->
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
                                                                                <!-- @endcan -->
                                                                                <div class="card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Sr No.</th>
                                                                                                    <th>Group Name</th>
                                                                                                    <th>Ledger Name</th>
                                                                                                    <th>Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                @foreach ($vehicles as $vehicle)
                                                                                                    <tr>
                                                                                                        <td>{{ $loop->iteration }}</td>
                                                                                                        <td>{{ $vehicle->type }}</td>
                                                                                                        <td>{{ $vehicle->description }}</td>
                                                                                                        <td>
                                                                                                            <!-- @can('wards.edit') -->
                                                                                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="edit"></i></button>
                                                                                                            <!-- @endcan
                                                                                                            @can('wards.delete') -->
                                                                                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $vehicle->id }}"><i data-feather="trash-2"></i> </button>
                                                                                                            <!-- @endcan -->
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- END  Table List --}}
                                                                </div>
                                                                <!-- end tab pane -->



                                                            </div>
                                                            <!-- END Create Ledger Under Group tab  pane -->

                                                            </div>
                                                            <!--end col-->
                                                        </form>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
<!-- END Add Form -->

    {{-- Edit Form --}}


    {{-- Table data Display --}}


</x-admin.layout>


{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('vehicle.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('vehicle.index') }}';
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
        var url = "{{ route('vehicle.edit', ':model_id') }}";

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
            var url = "{{ route('vehicle.update', ':model_id') }}";

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
                            window.location.href = '{{ route('vehicle.index') }}';
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
                    var url = "{{ route('vehicle.destroy', ':model_id') }}";

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




