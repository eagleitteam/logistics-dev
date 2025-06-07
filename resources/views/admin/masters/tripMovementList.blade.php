<x-admin.layout>
    <x-slot name="title">Add Vehicles Type Master</x-slot>
    <x-slot name="heading">Add Vehicles Type Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

 
    {{-- Edit Form --}}
    <div class="row" id="editContainer" style="display:none;">
        <div class="col">
            <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h4 class="card-title">Edit Trip Entry Data</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="modal-body">
                            <!-- Row 1 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="trip_count_no">Trip Count No</label>
                                    <input class="form-control" id="trip_count_no" name="trip_count_no" type="text">
                                    <span class="text-danger invalid trip_count_no_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="trip_date">Trip Date</label>
                                    <input class="form-control" id="trip_date" name="trip_date" type="date">
                                    <span class="text-danger invalid trip_date_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="vehicle_id">Vehicle</label>
                                    
                                    <select id="vehicle_id" class="form-select" name="vehicle_id">
                                                        <option value="">Select Vehical Number</option>
                                                         @foreach ($VehicalNumber  as $vehicalNumber)
                                                                <option value="{{ $VehicalNumber->id }}">{{ $VehicalNumber->vehicle_number }}</option>
                                                            @endforeach
                                                    </select>
                                    <span class="text-danger invalid vehicle_id_err"></span>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="vehical_type">Vehicle Type</label>
                                    <input class="form-control" id="vehical_type" name="vehical_type" type="text">
                                    <span class="text-danger invalid vehical_type_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="description">Description</label>
                                    <input class="form-control" id="description" name="description" type="text">
                                    <span class="text-danger invalid description_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="origin">Origin</label>
                                    <input class="form-control" id="origin" name="origin" type="text">
                                    <span class="text-danger invalid origin_err"></span>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="destination">Destination</label>
                                    <input class="form-control" id="destination" name="destination" type="text">
                                    <span class="text-danger invalid destination_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="client_id">Client</label>
                                    <input class="form-control" id="client_id" name="client_id" type="text">
                                    <span class="text-danger invalid client_id_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="driver_id">Driver</label>
                                    <input class="form-control" id="driver_id" name="driver_id" type="text">
                                    <span class="text-danger invalid driver_id_err"></span>
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="per_day_allow">Per Day Allowance</label>
                                    <input class="form-control" id="per_day_allow" name="per_day_allow" type="number">
                                    <span class="text-danger invalid per_day_allow_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="rate">Trip Rate</label>
                                    <input class="form-control" id="rate" name="rate" type="number">
                                    <span class="text-danger invalid rate_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="advance">Advance</label>
                                    <input class="form-control" id="advance" name="advance" type="number">
                                    <span class="text-danger invalid advance_err"></span>
                                </div>
                            </div>

                            <!-- Row 5 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="advance_date">Advance Date</label>
                                    <input class="form-control" id="advance_date" name="advance_date" type="date">
                                    <span class="text-danger invalid advance_date_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="toll">Toll Charges</label>
                                    <input class="form-control" id="toll" name="toll" type="number">
                                    <span class="text-danger invalid toll_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="unloading_charges">Unloading Charges</label>
                                    <input class="form-control" id="unloading_charges" name="unloading_charges" type="number">
                                    <span class="text-danger invalid unloading_charges_err"></span>
                                </div>
                            </div>

                            <!-- Row 6 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="holding_charges">Holding Charges</label>
                                    <input class="form-control" id="holding_charges" name="holding_charges" type="number">
                                    <span class="text-danger invalid holding_charges_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="balance_payment">Balance Payment</label>
                                    <input class="form-control" id="balance_payment" name="balance_payment" type="number">
                                    <span class="text-danger invalid balance_payment_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="vendor_id">Vendor</label>
                                    <input class="form-control" id="vendor_id" name="vendor_id" type="text">
                                    <span class="text-danger invalid vendor_id_err"></span>
                                </div>
                            </div>

                            <!-- Row 7 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="vendor_rate">Vendor Rate</label>
                                    <input class="form-control" id="vendor_rate" name="vendor_rate" type="number">
                                    <span class="text-danger invalid vendor_rate_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="pod_no">POD No</label>
                                    <input class="form-control" id="pod_no" name="pod_no" type="text">
                                    <span class="text-danger invalid pod_no_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="pod_status">POD Status</label>
                                    <input class="form-control" id="pod_status" name="pod_status" type="text">
                                    <span class="text-danger invalid pod_status_err"></span>
                                </div>
                            </div>

                            <!-- Row 8 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="courier_doc_no">Courier Doc No</label>
                                    <input class="form-control" id="courier_doc_no" name="courier_doc_no" type="text">
                                    <span class="text-danger invalid courier_doc_no_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="courier_date">Courier Date</label>
                                    <input class="form-control" id="courier_date" name="courier_date" type="date">
                                    <span class="text-danger invalid courier_date_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="pmt_due_days">Payment Due Days</label>
                                    <input class="form-control" id="pmt_due_days" name="pmt_due_days" type="number">
                                    <span class="text-danger invalid pmt_due_days_err"></span>
                                </div>
                            </div>

                            <!-- Row 9 -->
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label" for="bill_status">Billing Status</label>
                                    <input class="form-control" id="bill_status" name="bill_status" type="text">
                                    <span class="text-danger invalid bill_status_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="invoice_no">Invoice No</label>
                                    <input class="form-control" id="invoice_no" name="invoice_no" type="text">
                                    <span class="text-danger invalid invoice_no_err"></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label" for="invoice_date">Invoice Date</label>
                                    <input class="form-control" id="invoice_date" name="invoice_date" type="date">
                                    <span class="text-danger invalid invoice_date_err"></span>
                                </div>
                            </div>

                            <!-- Final Row -->
                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <label class="col-form-label" for="remark">Remarks</label>
                                    <textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
                                    <span class="text-danger invalid remark_err"></span>
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

    {{-- Main Content --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @can('TripMovement.create')
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <button id="addToTable" class="btn btn-primary" onclick="window.location.href='trip-movement/create';">
                                            Add <i class="fa fa-plus"></i>
                                    </button>
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
                                            <th>Trip Count No</th>
                                            <th>Trip Date</th>
                                            <th>Vehical Number</th>
                                            <th>Vehical Type</th>
                                            
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
                                                <td>{{ optional($movement->VehicalNumber)->vehicle_number }}</td>
                                                <td>{{ $movement->vehicle->type }}</td>
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
                                                <td>
                                                        @php
                                                            $statusMap = [
                                                                1 => 'Pending',
                                                                2 => 'Rec Hard Copy',
                                                                3 => 'Rec Photo Only',
                                                            ];
                                                        @endphp

                                                    {{ $statusMap[$movement->pod_status] ?? 'Unknown' }}
                                            </td>
                                                <td>{{ $movement->courier_doc_no }}</td>
                                                <td>{{ $movement->courier_date }}</td>
                                                <td>{{ $movement->courier_date }}</td>
                                                <td>{{ $movement->invoice_no ? 'Inv Generated' : 'Pending' }}</td>
                                                <td>{{ $movement->invoice_no }}</td>
                                                <td>{{ $movement->invoice_date }}</td>
                                                <td>{{ $movement->remark }}</td>
                                            

                                        <td>
                                             
                                            @can('TripMovement.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $movement->id }}"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('TripMovement.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $movement->id }}"><i data-feather="trash-2"></i> </button>
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


<!-- Edit -->
<script>
    $("#buttons-datatables").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var model_id = $(this).attr("data-id");
        
        var url = "{{ route('tripmovment.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}",
                'model_id': model_id // Only needed if using Option 2
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.movement.id);
                    $("#editForm input[name='trip_count_no']").val(data.movement.trip_count_no);
                    $("#editForm input[name='trip_date']").val(data.movement.trip_date);
                    $("#editForm select[name='vehicle_id']").val(data.movement.vehicle_id).trigger('change');
                    $("#editForm input[name='vehical_type']").val(data.movement.vehical_type);
                    $("#editForm input[name='description']").val(data.movement.description);
                    $("#editForm input[name='origin']").val(data.movement.origin);
                    $("#editForm input[name='destination']").val(data.movement.destination);
                    $("#editForm input[name='client_id']").val(data.movement.client_id);
                    $("#editForm input[name='driver_id']").val(data.movement.driver_id);
                    $("#editForm input[name='per_day_allow']").val(data.movement.per_day_allow);
                    $("#editForm input[name='rate']").val(data.movement.rate);
                    $("#editForm input[name='advance']").val(data.movement.advance);
                    $("#editForm input[name='advance_date']").val(data.movement.advance_date);
                    $("#editForm input[name='toll']").val(data.movement.toll);
                    $("#editForm input[name='unloading_charges']").val(data.movement.unloading_charges);
                    $("#editForm input[name='holding_charges']").val(data.movement.holding_charges);
                    $("#editForm input[name='balance_payment']").val(data.movement.balance_payment);
                    $("#editForm input[name='vendor_id']").val(data.movement.vendor_id);
                    $("#editForm input[name='vendor_rate']").val(data.movement.vendor_rate);
                    $("#editForm input[name='pod_no']").val(data.movement.pod_no);
                    $("#editForm input[name='pod_status']").val(data.movement.pod_status);
                    $("#editForm input[name='courier_doc_no']").val(data.movement.courier_doc_no);
                    $("#editForm input[name='courier_date']").val(data.movement.courier_date);
                    $("#editForm input[name='pmt_due_days']").val(data.movement.pmt_due_days);
                    $("#editForm input[name='bill_status']").val(data.movement.bill_status);
                    $("#editForm input[name='invoice_no']").val(data.movement.invoice_no);
                    $("#editForm input[name='invoice_date']").val(data.movement.invoice_date);
                    $("#editForm textarea[name='remark']").val(data.movement.remark);

                    $("#editContainer").show();
                    $("#editForm").show();
                    $("#editSubmit").show();
                    $("#addToTable").hide();
                    $("#btnCancel").show();

                    // Reset errors
                    resetErrors();
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
            var url = "{{ route('tripmovment.update', ':model_id') }}";

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
                            window.location.href = '{{ route('tripmovment.index') }}';
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
                    var url = "{{ route('tripmovment.destroy', ':model_id') }}";

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

<!-- <script>
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

</script> -->

<!-- <script>
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
</script> -->
