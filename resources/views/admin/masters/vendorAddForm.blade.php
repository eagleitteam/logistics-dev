<x-admin.layout>
    <x-slot name="title">Add Vendor Form</x-slot>
    <x-slot name="heading">Add Vendor Form</x-slot>

    <div class="row">
        <div class="col-xxl-8">
            <div class="card">
                <div class="card-body">
                    <form id="vendorForm" novalidate>
                        @csrf
                        <div class="row">
                            <!-- Company Information -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="companyNameInput" class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Company Name" id="companyNameInput" required>
                                    <div class="invalid-feedback">Please provide a valid company name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gstNoInput" class="form-label">GST NO <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="gst_no" placeholder="22AAAAA0000A1Z5" id="gstNoInput" pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$" required>
                                    <div class="invalid-feedback">Please enter a valid 15-digit GST number.</div>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactPersonInput" class="form-label">Contact Person Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="contact_name" placeholder="Contact Person Name" id="contactPersonInput" required>
                                    <div class="invalid-feedback">Please provide contact person name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contactNoInput" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="contact_no" placeholder="Contact Number" id="contactNoInput" pattern="[0-9]{10}" required>
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="altContactInput" class="form-label">Alternate Contact Number</label>
                                    <input type="tel" class="form-control" name="alternate_contact" placeholder="Alternate Contact Number" id="altContactInput" pattern="[0-9]{10}">
                                    <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="emailInput" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="addressInput" class="form-label">Full Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="vendor_address" placeholder="Address" id="addressInput" required>
                                    <div class="invalid-feedback">Please provide the full address.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cityInput" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your city" id="cityInput" required>
                                    <div class="invalid-feedback">Please provide the city name.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pinCodeInput" class="form-label">PIN Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Pin Code" id="pinCodeInput" pattern="[0-9]{6}" required>
                                    <div class="invalid-feedback">Please provide a valid 6-digit PIN code.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="stateInput" class="form-label">State <span class="text-danger">*</span></label>
                                    <select id="stateInput" class="form-select" name="state" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <!-- Add more states as needed -->
                                    </select>
                                    <div class="invalid-feedback">Please select a state.</div>
                                </div>
                            </div>

                            <!-- TDS Information -->
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tdsApplicableInput" class="form-label">TDS Applicable <span class="text-danger">*</span></label>
                                    <select id="tdsApplicableInput" class="form-select" name="tds_applicable" required>
                                        <option value="" selected disabled>Choose...</option>
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

                            <!-- Vehicle Information -->
                            <div class="col-md-12 mt-4">
                                <div class="card-header align-items-center d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="card-title mb-0">Vehicle Information</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row" id="vehicleContainer">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="vehicleNoInput_1" class="form-label">Vehicle Number</label>
                                                <input type="text" class="form-control vehicle-number" name="vehicle_no" name="vehicles[0][number]" placeholder="MH 04 GS 0065" id="vehicleNoInput_1" pattern="[A-Z]{2}\s[0-9]{1,2}\s[A-Z]{1,2}\s[0-9]{4}">
                                                <div class="invalid-feedback">Format: MH 04 GS 0065</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="vehicleTypeInput_1" class="form-label">Vehicle Type</label>
                                                <select class="form-select vehicle-type" name="vehicles[0][type]" id="vehicleTypeInput_1">
                                                    <option value="" selected disabled>Select Type</option>
                                                    <option value="FT">FT</option>
                                                    <option value="PICKUP">PICKUP</option>
                                                    <option value="TRUCK">TRUCK</option>
                                                    <option value="TRAILER">TRAILER</option>
                                                    <option value="TEMPO">TEMPO</option>
                                                </select>
                                                <div class="invalid-feedback">Please select vehicle type.</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="text-start">
                                            <button type="button" class="btn btn-outline-primary" id="addVehicleBtn">
                                                <i class="ri-add-line align-middle me-1"></i> Add Another Vehicle
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Submission -->
                            <div class="col-lg-12 mt-4">
                                <div class="text-end">
                                    <button type="reset" class="btn btn-light me-2">Reset</button>
                                    <button type="submit" class="btn btn-primary">
                                        <span id="submitBtnText">Submit</span>
                                        <span id="submitSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle"
                            style="width:100%">
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
                                        <!-- @can('wards.edit') -->
                                        <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vendor"
                                            data-id="{{ $vendor->id }}"><i data-feather="edit"></i></button>
                                        <!-- @endcan
                                            @can('wards.delete') -->
                                        <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vendor"
                                            data-id="{{ $vendor->id }}"><i data-feather="trash-2"></i> </button>
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
</x-admin.layout>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('vendorForm');
    const tdsApplicable = document.getElementById('tdsApplicableInput');
    const tdsRate = document.getElementById('tdsRateInput');
    const addVehicleBtn = document.getElementById('addVehicleBtn');
    const vehicleContainer = document.getElementById('vehicleContainer');
    const submitBtn = form.querySelector('button[type="submit"]');
    const submitBtnText = document.getElementById('submitBtnText');
    const submitSpinner = document.getElementById('submitSpinner');

    let vehicleCount = 1;

    // TDS Applicable change handler
    tdsApplicable.addEventListener('change', function() {
        if (this.value === '1') {
            tdsRate.required = true;
            tdsRate.closest('.mb-3').style.display = 'block';
        } else {
            tdsRate.required = false;
            tdsRate.closest('.mb-3').style.display = 'block'; // Keep visible but not required
        }
    });

    // Add vehicle fields
    addVehicleBtn.addEventListener('click', function() {
        vehicleCount++;

        const vehicleDiv = document.createElement('div');
        vehicleDiv.className = 'row vehicle-entry mt-2';
        vehicleDiv.innerHTML = `
            <div class="col-md-5">
                <div class="mb-3">
                    <input type="text" class="form-control vehicle-number" name="vehicles[${vehicleCount}][number]" placeholder="MH 04 GS 0065" pattern="[A-Z]{2}\\s[0-9]{1,2}\\s[A-Z]{1,2}\\s[0-9]{4}">
                    <div class="invalid-feedback">Format: MH 04 GS 0065</div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <select class="form-select vehicle-type" name="vehicles[${vehicleCount}][type]">
                        <option value="" selected disabled>Select Type</option>
                        <option value="FT">FT</option>
                        <option value="PICKUP">PICKUP</option>
                        <option value="TRUCK">TRUCK</option>
                        <option value="TRAILER">TRAILER</option>
                        <option value="TEMPO">TEMPO</option>
                    </select>
                    <div class="invalid-feedback">Please select vehicle type.</div>
                </div>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-danger remove-vehicle-btn">
                    <i class="ri-delete-bin-line"></i>
                </button>
            </div>
        `;

        vehicleContainer.appendChild(vehicleDiv);

        // Add event listener to the new remove button
        vehicleDiv.querySelector('.remove-vehicle-btn').addEventListener('click', function() {
            vehicleContainer.removeChild(vehicleDiv);
        });
    });

    // Form validation
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtnText.textContent = 'Processing...';
        submitSpinner.classList.remove('d-none');

        // Simulate form submission (replace with actual AJAX call)
        setTimeout(() => {
            // Here you would typically make an AJAX call to submit the form
            console.log('Form data:', new FormData(form));

            // Show success message
            toastr.success('Vendor added successfully!', 'Success');

            // Reset form and loading state
            form.reset();
            form.classList.remove('was-validated');
            submitBtn.disabled = false;
            submitBtnText.textContent = 'Submit';
            submitSpinner.classList.add('d-none');

            // Optionally redirect or do something else
            // window.location.href = '/vendors';
        }, 1500);
    });

    // Real-time validation for GST number
    document.getElementById('gstNoInput').addEventListener('input', function(e) {
        this.value = this.value.toUpperCase();
    });

    // Real-time validation for vehicle numbers
    vehicleContainer.addEventListener('input', function(e) {
        if (e.target.classList.contains('vehicle-number')) {
            e.target.value = e.target.value.toUpperCase();
        }
    });
});

// Initialize toastr for notifications (make sure to include toastr CSS/JS in your layout)
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "5000"
};
</script>

<style>
    .vehicle-entry {
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }
    .remove-vehicle-btn {
        margin-top: 8px;
    }
    .was-validated .form-control:invalid,
    .was-validated .form-select:invalid {
        border-color: #dc3545;
    }
    .invalid-feedback {
        display: none;
    }
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-select:invalid ~ .invalid-feedback {
        display: block;
    }
</style>

{{-- Add --}}
<script>
    $("#addForm").submit(function (e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('vendor.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function (data) {
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
        var url = "{{ route('vendor.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function (data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.Vendor.id);
                    $("#editForm input[name='name']").val(data.Vendor.name);
                    $("#editForm input[name='vendor_address']").val(data.Vendor.vendor_address);
                    $("#editForm select[name='gst_no']").val(data.Vendor.gst_no);
                    $("#editForm input[name='tds_applicable']").val(data.Vendor.tds_applicable);
                    $("#editForm input[name='tds_rate']").val(data.Vendor.tds_rate);
                    $("#editForm input[name='contact_name']").val(data.Vendor.contact_name);
                    $("#editForm input[name='contact_no']").val(data.Vendor.contact_no);
                    $("#editForm input[name='email']").val(data.Vendor.email);
                    // $("#editForm input[name='remark']").val(data.Vendor.remark);
                    // $("#editForm input[name='f_s_d']").val(data.Vendor.f_s_d);
                    // $("#editForm input[name='f_e_d']").val(data.Vendor.f_e_d);
                    // $("#editForm input[name='file']").val(data.Vendor.file);
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
            var url = "{{ route('vendor.update', ':model_id') }}";

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
                                window.location.href = '{{ route('vendor.index') }}';
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
                    var url = "{{ route('vendor.destroy', ':model_id') }}";

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