<x-admin.layout>
    <x-slot name="title">Add Client Details</x-slot>
    <x-slot name="heading">Add Client Details</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}



                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">

                            <div class="card-body">
                                    <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="companyNameinput" class="form-label">Client Company Name</label>
                                                    <input type="text" class="form-control" placeholder="Client Company Name" id="companyNameinput" name="name">
                                                    <span class="text-danger invalid name_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="gstNoinput" class="form-label">GST NO</label>
                                                    <input type="text" class="form-control" placeholder="GST NUMBER" id="gstNoinput" name="gst_no">
                                                    <span class="text-danger invalid gst_no_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="contactNameinput" class="form-label">Contact Person Name</label>
                                                    <input type="text" class="form-control" placeholder="Company Name" id="contactNameinput" name="contact_person">
                                                    <span class="text-danger invalid contact_person_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="contactNOinput" class="form-label">Contact Number</label>
                                                    <input type="number" class="form-control" placeholder="Contact Number" id="contactNOinput" name="contact_number">
                                                    <span class="text-danger invalid contact_number_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="altContactinput" class="form-label">Alternet Contact Number</label>
                                                    <input type="number" class="form-control" placeholder="GST NUMBER" id="altContactinput" name="alternate_contact_no">
                                                    <span class="text-danger invalid alternate_contact_no_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput" name="email">
                                                    <span class="text-danger invalid email_err"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="address1ControlTextarea" class="form-label">Billing Address</label>
                                                    <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea" name="billing_address">
                                                    <span class="text-danger invalid billing_address_err"></span>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="cityInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" placeholder="Enter your city" id="cityInput" name="city">
                                                    <span class="text-danger invalid city_err"></span>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="pinCodeinput" class="form-label">PIN Code</label>
                                                    <input type="number" class="form-control" placeholder="Pin Code" id="pinCodeinput" name="pincode">
                                                    <span class="text-danger invalid pincode_err"></span>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">State</label>
                                                    <select id="ForminputState" class="form-select" name="state">
                                                        <option selected>Choose...</option>
                                                        <option>Maharashtra</option>
                                                        <option>Goa</option>
                                                        <option>Karnataka</option>
                                                    </select>
                                                    <span class="text-danger invalid state_err"></span>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Billing Type</label>
                                                    <select id="ForminputState" class="form-select" name="billing_type">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Immediate</option>
                                                        <option value="2">Month End</option>
                                                        <option value="3">Respestive Period</option>
                                                    </select>
                                                    <span class="text-danger invalid billing_type_err"></span>

                                                </div>
                                            </div>
                                            <!--end col-->
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

{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('clients.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('clients.index') }}';
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
        var url = "{{ route('clients.edit', ':model_id') }}";

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
            var url = "{{ route('clients.update', ':model_id') }}";
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
                            window.location.href = '{{ route('clients.index') }}';
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
                    var url = "{{ route('clients.destroy', ':model_id') }}";

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
