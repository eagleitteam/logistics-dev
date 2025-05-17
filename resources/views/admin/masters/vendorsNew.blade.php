<x-admin.layout>
    <x-slot name="title">vendors</x-slot>
    <x-slot name="heading">vendors</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <!-- Add Form -->
    <div class="row" id="addContainer" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Company Name" id="name">
                                    <span class="text-danger invalid name_err"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gstNoInput" class="form-label">GST NO <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="gst_no" placeholder="22AAAAA0000A1Z5" id="gstNoInput"  >
                                    <span class="text-danger invalid gst_no_err"></span>

                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactPersonInput" class="form-label">Contact Person Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="contact_name" placeholder="Contact Person Name" id="contactPersonInput" >
                                    <div class="invalid-feedback">Please provide contact person name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactNoInput" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="contact_no" placeholder="Contact Number" id="contactNoInput" >
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="altContactInput" class="form-label">Alternate Contact Number</label>
                                    <input type="tel" class="form-control" name="alternate_contact_no" placeholder="Alternate Contact Number" id="altContactInput" >
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="emailInput" >
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="addressInput" class="form-label">Full Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="vendor_address" placeholder="Address" id="addressInput" >
                                    <div class="invalid-feedback">Please provide the full address.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cityInput" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your city" id="cityInput" >
                                    <div class="invalid-feedback">Please provide the city name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pinCodeInput" class="form-label">PIN Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Pin Code" id="pinCodeInput" >
                                    <div class="invalid-feedback">Please provide a valid 6-digit PIN code.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="stateInput" class="form-label">State <span class="text-danger">*</span></label>
                                    <select id="stateInput" class="form-select" name="state" >
                                        <option value="" selected disabled>Choose...</option>
                                        @foreach ($StateNameWithCode as $StateNameWithCode)
                                                <option value="{{ optional($StateNameWithCode)->id }}">{{ optional($StateNameWithCode)->stateName }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a state.</div>
                                </div>
                            </div>

                            <!-- TDS Information -->
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tdsApplicableInput" class="form-label">TDS Applicable <span class="text-danger">*</span></label>
                                    <select id="tdsApplicableInput" class="form-select" name="tds_applicable" >
                                        <option value="" selected >Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <div class="invalid-feedback">Please select TDS applicability.</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tdsRateInput" class="form-label">TDS %</label>
                                    <input type="number" class="form-control" name="tds_rate" placeholder="TDS %" id="tdsRateInput" min="0" max="100" step="0.01">
                                    <div class="invalid-feedback">TDS rate must be between 0 and 100.</div>
                                </div>
                            </div>
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
                        <h4 class="card-title">Edit Ward</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Company Name" id="name">
                                    <span class="text-danger invalid name_err"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gstNoInput" class="form-label">GST NO <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="gst_no" placeholder="22AAAAA0000A1Z5" id="gstNoInput"  >
                                    <span class="text-danger invalid gst_no_err"></span>

                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactPersonInput" class="form-label">Contact Person Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="contact_name" placeholder="Contact Person Name" id="contactPersonInput" >
                                    <div class="invalid-feedback">Please provide contact person name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactNoInput" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="contact_no" placeholder="Contact Number" id="contactNoInput" pattern="[0-9]{10}" >
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="altContactInput" class="form-label">Alternate Contact Number</label>
                                    <input type="tel" class="form-control" name="alternate_contact_no" placeholder="Alternate Contact Number" id="altContactInput" pattern="[0-9]{10}">
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="emailInput" >
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="addressInput" class="form-label">Full Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="vendor_address" placeholder="Address" id="addressInput" >
                                    <div class="invalid-feedback">Please provide the full address.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cityInput" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your city" id="cityInput" >
                                    <div class="invalid-feedback">Please provide the city name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pinCodeInput" class="form-label">PIN Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Pin Code" id="pinCodeInput" pattern="[0-9]{6}" >
                                    <div class="invalid-feedback">Please provide a valid 6-digit PIN code.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="stateInput" class="form-label">State <span class="text-danger">*</span></label>
                                    <select id="stateInput" class="form-select" name="state" >
                                        <option value="" selected disabled>Choose...</option>
                                            @foreach ($StateNameWithCode as $StateNameWithCode)
                                                    <option value="{{ optional($StateNameWithCode)->id }}">{{ optional($StateNameWithCode)->stateName }}</option>
                                            @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a state.</div>
                                </div>
                            </div>

                            <!-- TDS Information -->
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tdsApplicableInput" class="form-label">TDS Applicable <span class="text-danger">*</span></label>
                                    <select id="tdsApplicableInput" class="form-select" name="tds_applicable" >
                                        <option value="" selected>Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <div class="invalid-feedback">Please select TDS applicability.</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tdsRateInput" class="form-label">TDS %</label>
                                    <input type="number" class="form-control" name="tds_rate" placeholder="TDS %" id="tdsRateInput" min="0" max="100" step="0.01">
                                    <div class="invalid-feedback">TDS rate must be between 0 and 100.</div>
                                </div>
                            </div>
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
                @can('vendors.create')
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
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Company Name</th>
                                    <th>GST No.</th>
                                    <th>Contact Person Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendors as $vendor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $vendor->name }}</td>
                                        <td>{{ $vendor->gst_no }}</td>
                                        <td>{{ $vendor->contact_no }}</td>
                                        <td>
                                            @can('vendors.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vendor" data-id="{{ $vendor->id }}"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('vendors.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vendor" data-id="{{ $vendor->id }}"><i data-feather="trash-2"></i> </button>
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
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('vendors.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('vendors.index') }}';
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
        var url = "{{ route('vendors.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.vendor.id);
                    $("#editForm input[name='name']").val(data.vendor.name);
                    $("#editForm input[name='vendor_address']").val(data.vendor.vendor_address);
                    $("#editForm input[name='gst_no']").val(data.vendor.gst_no);
                    $("#editForm input[name='tds_applicable']").val(data.vendor.tds_applicable);
                    $("#editForm input[name='tds_rate']").val(data.vendor.tds_rate);
                    $("#editForm input[name='contact_name']").val(data.vendor.contact_name);
                    $("#editForm input[name='contact_no']").val(data.vendor.contact_no);
                    $("#editForm input[name='alternate_contact_no']").val(data.vendor.alternate_contact_no);
                    $("#editForm input[name='email']").val(data.vendor.email);
                    $("#editForm input[name='city']").val(data.vendor.city);
                    $("#editForm input[name='pincode']").val(data.vendor.pincode);
                    $("#editForm input[name='state']").val(data.vendor.state);



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
            var url = "{{ route('vendors.update', ':model_id') }}";

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
                            window.location.href = '{{ route('vendors.index') }}';
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
                title: "Are you sure to delete this Vendor?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('vendors.destroy', ':model_id') }}";

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




