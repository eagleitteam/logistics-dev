<x-admin.layout>
    <x-slot name="title">Trip Movement List Master</x-slot>
    <x-slot name="heading">Trip Movement List Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @can('TripMovement.create')
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <!-- <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                      -->
                                    <a href="{{ route('trip-movement.create') }}" class="btn btn-primary">
                                        Add New Entry<i class="fa fa-plus"></i>
                                    </a>
                                   
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
                                    <th>Trip Count No</th>
                                    <th>Trip Date</th>
                                    <th>Vehical Number</th>
                                    <th>Vehical Type</th>
                                    <th>Vehical description</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Client Name</th> 
                                    <th>Driver Name</th>
                                    <th>P.D. Allowance</th>
                                    <th>Trip Cost</th>
                                    <th>ADV REC</th>
                                    <th>Rec Date</th>
                                    <th>Toll</th>
                                    <th>Unloading</th>
                                    <th>Holding</th>
                                    <th>Balance PMT</th>
                                    <th>Vender Name</th>
                                    <th>Vendor Cost</th>
                                    <th>POD NO</th>
                                    <th>POD Status</th>
                                    <th>Couier DOC No</th>
                                    <th>Courier Date</th>
                                    <th>PMT Due Days</th>
                                    <th>Billing Status</th>
                                    <th>Invoice No</th>
                                    <th>Invoice Date</th>
                                    <th>Note /  Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trip_movement as $movement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $movement->trip_count_no }}</td>
                                        <td>{{ $movement->trip_date }}</td>
                                        <td>{{ $movement->vehicalNumber->vehicle_number }}</td>
                                        <td>{{ $movement->vehicle->type }}</td>
                                        <td>{{ $movement->description }}</td>
                                        <td>{{ $movement->description }}</td>
                                        <td>{{ $movement->origin }}</td>
                                        <td>{{ $movement->destination }}</td>
                                        <td>{{ $movement->client->name }}</td>
                                        <td>{{ $movement->driver->f_name }}</td>
                                        <td>{{ $movement->per_day_allow }}</td>
                                        <td>{{ $movement->rate }}</td>
                                        <td>{{ $movement->advance }}</td>
                                        <td>{{ $movement->advance_date }}</td>
                                        <td>{{ $movement->toll }}</td>
                                        <td>{{ $movement->unloading_charges }}</td>
                                        <td>{{ $movement->holding_charges }}</td>
                                        <td>{{ $movement->balance_payment }}</td>
                                        <td>{{ optional($movement->Vendor)->name ?? '-' }}</td>
                                        <td>{{ $movement->vendor_rate }}</td>
                                        <td>{{ $movement->pod_no }}</td>
                                        <td>{{ $movement->pod_status }}</td>
                                        <td>{{ $movement->courier_doc_no }}</td>
                                        <td>{{ $movement->courier_date }}</td>
                                        <td>{{ $movement->courier_date }}</td>
                                        <td>{{ $movement->bill_status }}</td>
                                        <td>{{ $movement->invoice_no }}</td>
                                        <td>{{ $movement->invoice_date }}</td>
                                        <td>{{ $movement->remark }}</td>
                                        <td>
                                             
                                                @can('TripMovement.view')
                                                    <button class="btn btn-info view-element px-2 py-1" title="View TripMovement" data-id="{{ $movement->id }}">
                                                        <i data-feather="eye"></i>
                                                    </button>
                                                @endcan
                                                @can('TripMovement.edit')
                                                    <button class="btn btn-secondary edit-element px-2 py-1" title="Edit TripMovement" data-id="{{ $movement->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>
                                                @endcan
                                                @can('TripMovement.delete')
                                                    <button class="btn btn-danger rem-element px-2 py-1" title="Delete TripMovement" data-id="{{ $movement->id }}">
                                                        <i data-feather="trash-2"></i>
                                                    </button>
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

    <!-- Edit Trip Movement Modal -->
<div class="modal fade" id="editTripModal" tabindex="-1" aria-labelledby="editTripModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="editForm" class="theme-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="edit_model_id" name="edit_model_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTripModalLabel">Edit Trip Movement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    

                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Trip Count No</label>
                            <input type="text" name="trip_count_no" id="edit_trip_count_no" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Trip Date</label>
                            <input type="date" name="trip_date" id="edit_trip_date" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Vehicle</label>
                            <input type="text" name="vehicle_id" id="edit_vehicle_id" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Vehicle Type</label>
                            <input type="text" name="vehical_type" id="edit_vehical_type" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" id="edit_description" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Origin</label>
                            <input type="text" name="origin" id="edit_origin" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Destination</label>
                            <input type="text" name="destination" id="edit_destination" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Client</label>
                            <input type="text" name="client_id" id="edit_client_id" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Driver</label>
                            <input type="text" name="driver_id" id="edit_driver_id" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Per Day Allowance</label>
                            <input type="number" name="per_day_allow" id="edit_per_day_allow" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Trip Rate</label>
                            <input type="number" name="rate" id="edit_rate" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Advance</label>
                            <input type="number" name="advance" id="edit_advance" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Advance Date</label>
                            <input type="date" name="advance_date" id="edit_advance_date" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Toll Charges</label>
                            <input type="number" name="toll" id="edit_toll" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Unloading Charges</label>
                            <input type="number" name="unloading_charges" id="edit_unloading_charges" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Holding Charges</label>
                            <input type="number" name="holding_charges" id="edit_holding_charges" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Balance Payment</label>
                            <input type="number" name="balance_payment" id="edit_balance_payment" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Vendor</label>
                            <input type="text" name="vendor_id" id="edit_vendor_id" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Vendor Rate</label>
                            <input type="number" name="vendor_rate" id="edit_vendor_rate" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">POD No</label>
                            <input type="text" name="pod_no" id="edit_pod_no" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">POD Status</label>
                            <input type="text" name="pod_status" id="edit_pod_status" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Courier Doc No</label>
                            <input type="text" name="courier_doc_no" id="edit_courier_doc_no" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Courier Date</label>
                            <input type="date" name="courier_date" id="edit_courier_date" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Payment Due Days</label>
                            <input type="number" name="pmt_due_days" id="edit_pmt_due_days" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Billing Status</label>
                            <input type="text" name="bill_status" id="edit_bill_status" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Invoice No</label>
                            <input type="text" name="invoice_no" id="edit_invoice_no" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Invoice Date</label>
                            <input type="date" name="invoice_date" id="edit_invoice_date" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Remarks</label>
                            <textarea name="remark" id="edit_remark" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer" id="editModalFooter">
                    
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    
                    <button type="submit" class="btn btn-primary" id="editSubmit">
                        <i class="fas fa-save me-2"></i> Update Trip
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- End Edit Trip Movement Modal -->







</x-admin.layout>

<!-- Edit -->
<script>
            $("#buttons-datatables").on("click", ".edit-element", function(e) {
            e.preventDefault();
            var model_id = $(this).data("id");
            var url = "{{ route('trip-movement.edit', ':id') }}".replace(":id", model_id);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    if (!data.error) {
                        $("#edit_model_id").val(data.id);
                        $("#edit_trip_count_no").val(data.trip_count_no);
                        $("#edit_trip_date").val(data.trip_date);
                        $("#edit_vehicle_id").val(data.vehicle_id);
                        $("#edit_vehical_type").val(data.vehical_type);
                        $("#edit_description").val(data.description);
                        $("#edit_origin").val(data.origin);
                        $("#edit_destination").val(data.destination);
                        $("#edit_client_id").val(data.client_id);
                        $("#edit_driver_id").val(data.driver_id);
                        $("#edit_per_day_allow").val(data.per_day_allow);
                        $("#edit_rate").val(data.rate);
                        $("#edit_advance").val(data.advance);
                        $("#edit_advance_date").val(data.advance_date);
                        $("#edit_toll").val(data.toll);
                        $("#edit_unloading_charges").val(data.unloading_charges);
                        $("#edit_holding_charges").val(data.holding_charges);
                        $("#edit_balance_payment").val(data.balance_payment);
                        $("#edit_vendor_id").val(data.vendor_id);
                        $("#edit_vendor_rate").val(data.vendor_rate);
                        $("#edit_pod_no").val(data.pod_no);
                        $("#edit_pod_status").val(data.pod_status);
                        $("#edit_courier_doc_no").val(data.courier_doc_no);
                        $("#edit_courier_date").val(data.courier_date);
                        $("#edit_pmt_due_days").val(data.pmt_due_days);
                        $("#edit_bill_status").val(data.bill_status);
                        $("#edit_invoice_no").val(data.invoice_no);
                        $("#edit_invoice_date").val(data.invoice_date);
                        $("#edit_remark").val(data.remark);

                        $('#editTripModal').modal('show');
                        // Enable all fields for edit mode
                        $('#editForm input, #editForm select, #editForm textarea').prop('readonly', false).prop('disabled', false);
                        $('#editSubmit').show();
                        $('#editModalFooter .btn-primary').show();

                    } else {
                        swal("Error!", data.error, "error");
                    }
                },
                error: function() {
                    swal("Error!", "Something went wrong while loading data.", "error");
                }
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
            var url = "{{ route('trip-movement.update', ':model_id') }}";

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
                            window.location.href = '{{ route('trip-movement.index') }}';
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
                title: "Are you sure to delete this Vehical Entry?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    alert(model_id);
                    var url = "{{ route('trip-movement.destroy', ':model_id') }}";

                    $.ajax({
                        url: url.replace(':model_id', model_id),
                        type: 'POST',
                        data: {
                            'model_id': model_id,
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


<!-- JavaScript to Handle View Mode -->

<script>
            $("#buttons-datatables").on("click", ".view-element", function(e) {
            e.preventDefault();
            var model_id = $(this).data("id");
            var url = "{{ route('trip-movement.edit', ':id') }}".replace(":id", model_id);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    if (!data.error) {
                        // Fill all fields (same as edit)
                        $("#edit_model_id").val(data.id);
                        $("#edit_trip_count_no").val(data.trip_count_no);
                        $("#edit_trip_date").val(data.trip_date);
                        $("#edit_vehicle_id").val(data.vehicle_id);
                        $("#edit_vehical_type").val(data.vehical_type);
                        $("#edit_description").val(data.description);
                        $("#edit_origin").val(data.origin);
                        $("#edit_destination").val(data.destination);
                        $("#edit_client_id").val(data.client_id);
                        $("#edit_driver_id").val(data.driver_id);
                        $("#edit_per_day_allow").val(data.per_day_allow);
                        $("#edit_rate").val(data.rate);
                        $("#edit_advance").val(data.advance);
                        $("#edit_advance_date").val(data.advance_date);
                        $("#edit_toll").val(data.toll);
                        $("#edit_unloading_charges").val(data.unloading_charges);
                        $("#edit_holding_charges").val(data.holding_charges);
                        $("#edit_balance_payment").val(data.balance_payment);
                        $("#edit_vendor_id").val(data.vendor_id);
                        $("#edit_vendor_rate").val(data.vendor_rate);
                        $("#edit_pod_no").val(data.pod_no);
                        $("#edit_pod_status").val(data.pod_status);
                        $("#edit_courier_doc_no").val(data.courier_doc_no);
                        $("#edit_courier_date").val(data.courier_date);
                        $("#edit_pmt_due_days").val(data.pmt_due_days);
                        $("#edit_bill_status").val(data.bill_status);
                        $("#edit_invoice_no").val(data.invoice_no);
                        $("#edit_invoice_date").val(data.invoice_date);
                        $("#edit_remark").val(data.remark);

                        // Set all fields to readonly or disabled
                        $('#editForm input, #editForm select, #editForm textarea').prop('readonly', true).prop('disabled', true);
                        $('#editSubmit').hide();
                        $('#editModalFooter .btn-primary').hide();

                        $('#editTripModal').modal('show');
                    } else {
                        swal("Error!", data.error, "error");
                    }
                },
                error: function() {
                    swal("Error!", "Something went wrong while fetching view data.", "error");
                }
            });
        });

</script>

<script>
    // Trigger when user clicks "Edit" from the View modal
    $("#viewToEditBtn").on("click", function () {
        var model_id = $('#view_model_id').val(); // assuming this is set in your view modal
        $('#viewTripModal').modal('hide'); // Close view modal
        openEditModal(model_id); // Open edit modal with same ID
    });

    // Function to load Edit modal
    function openEditModal(model_id) {
        var url = "{{ route('trip-movement.edit', ':model_id') }}".replace(':model_id', model_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                'model_id': model_id,
                '_token': "{{ csrf_token() }}"
            },
            success: function (data) {
                if (!data.error) {
                    // Populate edit modal fields
                    $('#edit_model_id').val(model_id);
                    
                    $('#edit_trip_count_no').val(data.trip_movement.trip_count_no);
                    $('#edit_trip_date').val(data.trip_movement.trip_date);
                    $('#edit_vehicle_id').val(data.trip_movement.vehicle_id);
                    $('#edit_vehical_type').val(data.trip_movement.vehical_type);
                    $('#edit_description').val(data.trip_movement.description);
                    $('#edit_origin').val(data.trip_movement.origin);
                    $('#edit_destination').val(data.trip_movement.destination);
                    $('#edit_client_id').val(data.trip_movement.client_id);
                    $('#edit_driver_id').val(data.trip_movement.driver_id);
                    $('#edit_per_day_allow').val(data.trip_movement.per_day_allow);
                    $('#edit_rate').val(data.trip_movement.rate);
                    $('#edit_advance').val(data.trip_movement.advance);
                    $('#edit_advance_date').val(data.trip_movement.advance_date);
                    $('#edit_toll').val(data.trip_movement.toll);
                    $('#edit_unloading_charges').val(data.trip_movement.unloading_charges);
                    $('#edit_holding_charges').val(data.trip_movement.holding_charges);
                    $('#edit_balance_payment').val(data.trip_movement.balance_payment);
                    $('#edit_vendor_id').val(data.trip_movement.vendor_id);
                    $('#edit_vendor_rate').val(data.trip_movement.vendor_rate);
                    $('#edit_pod_no').val(data.trip_movement.pod_no);
                    $('#edit_pod_status').val(data.trip_movement.pod_status);
                    $('#edit_courier_doc_no').val(data.trip_movement.courier_doc_no);
                    $('#edit_courier_date').val(data.trip_movement.courier_date);
                    $('#edit_pmt_due_days').val(data.trip_movement.pmt_due_days);
                    $('#edit_bill_status').val(data.trip_movement.bill_status);
                    $('#edit_invoice_no').val(data.trip_movement.invoice_no);
                    $('#edit_invoice_date').val(data.trip_movement.invoice_date);
                    $('#edit_remark').val(data.trip_movement.remark);

                    $('#editTripModal').modal('show'); // Open edit modal
                } else {
                    alert(data.error);
                }
            },
            error: function () {
                alert("Something went wrong while opening edit modal.");
            }
        });
    }
</script>
