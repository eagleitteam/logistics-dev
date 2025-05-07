<x-admin.layout>
    <x-slot name="title">Fuel Master</x-slot>
    <x-slot name="heading">Fuel Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    {{-- Top bar --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- @can('wards.create') -->
                    <div class="card-header">
                        <div class="row align-items-center" >
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h3><i class="fas fa-gas-pump me-2"></i> Advanced Fuel Management</h3>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFuelModal">
                                        <i class="fas fa-plus me-2"></i>Add Fuel Record
                                    </button>
                                </div>
                            </div>
                    </div>
                <!-- @endcan -->

            </div>
        </div>
    </div>

     {{-- END --}}

     {{-- vehical Number selector --}}
     <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- @can('wards.create') -->
                    <div class="card-header">
                        <div class="row align-items-center" >
                            <div class="row align-items-center">
                                <div class="col-lg-1 ">
                                </div>
                                <div class="col-lg-4">
                                    <label for="status-field" class="form-label">Vehical Number</label>
                                    <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                        <option value="1">135</option>
                                        <option value="2">49845</option>
                                        <option value="3">5+5+62+6</option>
                                        <option value="3">446313</option>
                                        <option value="3">84654</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 ">
                                </div>
                                <div class="col-lg-4 ">
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
                <!-- @endcan -->

            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- vehical Number Display--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- @can('wards.create') -->
                    <div class="card-header">
                        <div class="row align-items-center" >

                                <div>
                                <h4 id="vehicleTitle">Vehicle: MH 04 KF 7256</h4>
                                 <p class="text-muted" id="vehicleLastFuel">Last Fuel: 05 Jan 2025 | Last Odometer: 133,513.2 km</p>
                                </div>


                            </div>
                    </div>
                <!-- @endcan -->

            </div>
        </div>
    </div>
    {{-- END --}}

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
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                        </table>
                    </div>
                </div>
            </div>
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




