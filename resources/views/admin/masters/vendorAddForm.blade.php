<x-admin.layout>
    <x-slot name="title">Add Vendor Form</x-slot>
    <x-slot name="heading">Add Vendor Form</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}



                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">


                            <div class="card-body">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="companyNameinput" class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" placeholder="Company Name" id="companyNameinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="gstNoinput" class="form-label">GST NO</label>
                                                    <input type="number" class="form-control" placeholder="GST NUMBER" id="gstNoinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="contactPersoninput" class="form-label">Contact Person Name</label>
                                                    <input type="text" class="form-control" placeholder="Contact Person Name" id="contactPersoninput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="contactNoinput" class="form-label">Contact Number</label>
                                                    <input type="number" class="form-control" placeholder="Contact Number" id="contactNoinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="altContactinput" class="form-label">Alternet Contact Number</label>
                                                    <input type="number" class="form-control" placeholder="Alternet Contact Number" id="altContactinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="address1ControlTextarea" class="form-label">Full Address</label>
                                                    <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="citynameInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" placeholder="Enter your city" id="citynameInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="pinCodeinput" class="form-label">PIN Code</label>
                                                    <input type="number" class="form-control" placeholder="Pin Code" id="pinCodeinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">State</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Choose...</option>
                                                        <option>Maharashtra</option>
                                                        <option>Goa</option>
                                                        <option>Karnataka</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">TDS Applicable</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                        <option selected>Choose...</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="tdsRateinput" class="form-label">TDS %</label>
                                                    <input type="number" class="form-control" placeholder="TDS %" id="tdsRateinput">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="card-header align-items-center d-flex justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <h4 class="card-title mb-0">Add Vehical Number + Type</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="card-body">
                                            <div class="row" id="vehicleContainer">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="vehicalNoinput" class="form-label">Vehical Number</label>
                                                    <input type="text" class="form-control" placeholder="MH 04 GS 0065" id="vehicalNoinput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="vehicalTypeinput" class="form-label">Vehical Type</label>
                                                    <input type="text" class="form-control" placeholder="FT / PICKUP" id="vehicalTypeinput">
                                                </div>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-start">
                                                <button type="button" class="btn btn-primary" id="addVehicleBtn">Add More Vehical Number</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>


                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!--end row-->



</x-admin.layout>

{{-- Add More Vehical Number --}}
<script>
    document.getElementById('addVehicleBtn').addEventListener('click', function () {
        const container = document.getElementById('vehicleContainer');

        // Create Vehical Number input
        const vehicalNumberDiv = document.createElement('div');
        vehicalNumberDiv.className = 'col-md-6';
        vehicalNumberDiv.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Vehical Number</label>
                <input type="text" class="form-control" placeholder="MH 04 GS 0065">
            </div>
        `;

        // Create Vehical Type input
        const vehicalTypeDiv = document.createElement('div');
        vehicalTypeDiv.className = 'col-md-6';
        vehicalTypeDiv.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Vehical Type</label>
                <input type="text" class="form-control" placeholder="FT / PICKUP">
            </div>
        `;

        // Append both to container
        container.appendChild(vehicalNumberDiv);
        container.appendChild(vehicalTypeDiv);
    });
</script>


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
                    $("#editForm input[name='edit_model_id']").val(data.ward.id);
                    $("#editForm input[name='name']").val(data.ward.name);
                    $("#editForm input[name='initial']").val(data.ward.initial);
                } else {
                    alert(data.error);
                }
            },
            error: function(error, jqXHR, textStatus, errorThrown) {
                alert("Some thing went wrong");
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
            //
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
                        swal("Error occured!", "Something went wrong please try again", "error");
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
                title: "Are you sure to delete this ward?",
                // text: "Make sure if you have filled Vendor details before proceeding further",
                icon: "info",
                buttons: ["Cancel", "Confirm"]
            })
            .then((justTransfer) => {
                if (justTransfer) {
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
