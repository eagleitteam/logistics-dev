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
