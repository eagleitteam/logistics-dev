<x-admin.layout>
    <x-slot name="title">Vendor Vehicles Management</x-slot>
    <x-slot name="heading">Vendor Vehicles Management</x-slot>

    {{-- Top bar --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3><i class="fas fa-truck me-2"></i> Vendor Vehicles Management</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicleModal">
                                <i class="fas fa-plus me-2"></i>Add Vehicle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Vendor selector --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('Link-Vehical-With-Vender.index')  }}" method="GET" id="vendorFilterForm">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <label for="vendorSelect" class="form-label">Vendor Name</label>
                            <select class="form-control" id="vendorSelect" name="vendor_id" required>
                                <option value="">Select Vendor</option>
                                @foreach ($Vendor as $vendor)
                                    <option value="{{ optional($vendor)->id }}" {{ ($vendorId == $vendor->id) ? 'Selected':'' }} >{{ optional($vendor)->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-lg-2">
                            <button type="submit" id="searchbtn"  class="btn btn-primary" data-bs-toggle="modal">
                                <i class="fas fa-plus me-2"></i>Search Vehicles
                            </button>
                        </div>
                        
                        
<div class="col-lg-2">
    <a href="{{ route('Link-Vehical-With-Vender.index') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Refresh
    </a>
</div>

                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Vendor Statistics --}}
    <div class="row" id="vendorStatsRow" style="display: block;">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 id="vendorTitle">{{ $vendorhasvehicle[0]->vendor->name ?? 'All' }} Vendor Statistics</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stat-card">
                                <h3>Total Vehicles</h3>
                                <p id="totalVehicles">{{ $totalVehicles }}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-card">
                                <h3>Active Vehicles</h3>
                                <p id="activeVehicles">{{ $activeVehicles }}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-card">
                                <h3>In Maintenance</h3>
                                <p id="maintenanceVehicles">{{ $maintenanceVehicles }}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-card">
                                <h3>Inactive Vehicles</h3>
                                <p id="inactiveVehicles">{{ $inactiveVehicles }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <h5>Vehicle Type Distribution</h5>
                            <div id="typeDistribution" class="row">
                                <!-- Vehicle type distribution will be added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- Vehicles Table --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4>Vendor Vehicles List</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end">
                                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="vendorVehiclesTable" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Vendor Name</th>
                                    <th>Vehicle Type</th>
                                    <th>Vehicle Number</th>
                                    <th>Capacity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be loaded via AJAX -->
                                 <tbody>
                                @foreach ($vendorhasvehicle as $vendorhasvehi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $vendorhasvehi->vendor_id }}</td>
                                        <td>{{ $vendorhasvehi->vehicle_number }}</td>
                                        <td>{{ $vendorhasvehi->vehicle_id  }}</td>
                                        <td>{{ $vendorhasvehi->capacity }}</td>
                                        <td>{{ $vendorhasvehi->status }}</td>
                                        <td>
                                            @can('VendorHasVehicle.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit vendorhasvehicle" data-id="{{ $vendorhasvehi->id }}" data-bs-toggle="modal" data-bs-target="#editVehicleModal"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('VendorHasVehicle.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete vendorhasvehicle" data-id="{{ $vendorhasvehi->id }}"><i data-feather="trash-2"></i> </button>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    <!-- Add Vehicle Modal -->
    <div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVehicleModalLabel">Add New Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="theme-form" name="vendorVehicleForm" id="vendorVehicleForm" enctype="multipart/form-data">
                    @csrf
                
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="vendorNameModal">Vendor Name</label>
                            <select id="vendorNameModal" name="vendor_id"  class="form-control">
                                <option value="">Select Vendor</option>
                                @foreach ($Vendor as $vendor)
                                    <option value="{{ optional($vendor)->id }}">{{ optional($vendor)->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="vehiclesContainer">
                            <div class="vehicle-container card mb-3">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="vehicle-title">Vehicle #1</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="vehicleType1">Vehicle Type</label>
                                                <select id="vehicleType1" name="Vehicle_id[]" class="form-control" >
                                                    <option value="">Select Type</option>
                                                    @foreach ($Vehicle as $VehicleType)
                                                        <option value="{{ optional($VehicleType)->id }}">{{ optional($VehicleType)->type }}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="vehicleNumber1">Vehicle Number</label>
                                                <input type="text" name="vehicle_number[]" id="vehicleNumber1" class="form-control" placeholder="e.g. MH01AB1234" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="capacity1">Capacity (kg)</label>
                                                <input type="number" name="capacity[]" id="capacity1" class="form-control" placeholder="e.g. 1000">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="status1">Status</label>
                                                <select id="status1" name="status[]" class="form-control">
                                                    <option value="active">Active</option>
                                                    <option value="maintenance">Maintenance</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <button type="button" id="addMoreVehicles" class="btn btn-secondary">
                                <i class="fas fa-plus me-2"></i> Add More Vehicles
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="addSubmit">
                            <i class="fas fa-save me-2"></i> Save Vehicles
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Vehicle Modal -->
    <div class="modal fade" id="editVehicleModal" tabindex="-1" aria-labelledby="editVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editVehicleModalLabel">Edit Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="vendorNameModal">Vendor Name</label>
                            <select id="vendorNameModal" name="vendor_id"  class="form-control">
                                <option value="">Select Vendor</option>
                                @foreach ($Vendor as $vendor)
                                    <option value="{{ optional($vendor)->id }}">{{ optional($vendor)->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="vehiclesContainer">
                            <div class="vehicle-container card mb-3">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="vehicle-title">Vehicle #1</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="vehicleType1">Vehicle Type</label>
                                                <select id="vehicleType1" name="Vehicle_id" class="form-control" >
                                                    <option value="">Select Type</option>
                                                    @foreach ($Vehicle as $VehicleType)
                                                        <option value="{{ optional($VehicleType)->id }}">{{ optional($VehicleType)->type }}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="vehicleNumber1">Vehicle Number</label>
                                                <input type="text" name="vehicle_number" id="vehicleNumber1" class="form-control" placeholder="e.g. MH01AB1234" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="capacity1">Capacity (kg)</label>
                                                <input type="number" name="capacity" id="capacity1" class="form-control" placeholder="e.g. 1000">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="status1">Status</label>
                                                <select id="status1" name="status" class="form-control">
                                                    <option value="active">Active</option>
                                                    <option value="maintenance">Maintenance</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <button type="button" id="addMoreVehicles" class="btn btn-secondary">
                                <i class="fas fa-plus me-2"></i> Add More Vehicles
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- CSS -->
<style>
    .stat-card {
        background-color: #fff;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .stat-card h3 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 16px;
    }

    .stat-card p {
        font-size: 24px;
        font-weight: bold;
        color: #3498db;
    }

    .vehicle-type-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        padding-bottom: 8px;
        border-bottom: 1px solid #eee;
    }

    .vehicle-type-name {
        font-weight: 600;
        color: #34495e;
    }

    .vehicle-type-count {
        background-color: #ecf0f1;
        padding: 3px 8px;
        border-radius: 10px;
        font-size: 12px;
    }

    .badge-success {
        background-color: #d4edda;
        color: #155724;
    }

    .badge-warning {
        background-color: #fff3cd;
        color: #856404;
    }

    .badge-danger {
        background-color: #f8d7da;
        color: #721c24;
    }

    .badge-info {
        background-color: #d1ecf1;
        color: #0c5460;
    }
</style>

<!-- add Vendor Vehicle Entry -->
<script>
    $("#vendorVehicleForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
         
        $.ajax({
            url: '{{ route('Link-Vehical-With-Vender.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Link-Vehical-With-Vender.index') }}';
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
    $("#vendorVehiclesTable").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var model_id = $(this).attr("data-id");
        var url = "{{ route('Link-Vehical-With-Vender.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                'model_id': model_id,
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm select[name='vendor_id']").val(data.vendorhasvehicle.vendor_id).trigger('change');
                    $("#editForm select[name='Vehicle_id']").val(data.vendorhasvehicle.vehicle_id).trigger('change');
                    $("#editForm input[name='vehicle_number']").val(data.vendorhasvehicle.vehicle_number);
                    $("#editForm input[name='vehicle_id']").val(data.vendorhasvehicle.vehicle_id);
                    $("#editForm input[name='capacity']").val(data.vendorhasvehicle.capacity);
                    $("#editForm select[name='status']").val(data.vendorhasvehicle.status).trigger('change');

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
            var url = "{{ route('Link-Vehical-With-Vender.update', ':model_id') }}";

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
                            window.location.href = '{{ route('Link-Vehical-With-Vender.index') }}';
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
    $("#vendorVehiclesTable").on("click", ".rem-element", function(e) {
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
                    var url = "{{ route('Link-Vehical-With-Vender.destroy', ':model_id') }}";

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

<!-- Appending the script to add more vehicles dynamically -->
<script>
      // Add more vehicles functionality
        var vehicleCount = 1;
        $('#addMoreVehicles').click(function() {
            vehicleCount++;
            var newVehicle = `
                <div class="vehicle-container card mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="vehicle-title">Vehicle #${vehicleCount}</span>
                            <button type="button" class="btn btn-sm btn-danger remove-vehicle">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="vehicleType${vehicleCount}">Vehicle Type</label>
                                    <select id="vehicleType${vehicleCount}" name="Vehicle_id[]" class="form-control" required>
                                        <option value="">Select Type</option>
                                        @foreach ($Vehicle as $VehicleType)
                                            <option value="{{ optional($VehicleType)->id }}">{{ optional($VehicleType)->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="vehicleNumber${vehicleCount}">Vehicle Number</label>
                                    <input type="text" id="vehicleNumber${vehicleCount}" name="vehicle_number[]" class="form-control" placeholder="e.g. MH01AB1234" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="capacity${vehicleCount}">Capacity (kg)</label>
                                    <input type="number" id="capacity${vehicleCount}" name="capacity[]" class="form-control" placeholder="e.g. 1000" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="status${vehicleCount}">Status</label>
                                    <select id="status${vehicleCount}" name="status[]" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="maintenance">Maintenance</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            $('#vehiclesContainer').append(newVehicle);
        });

        // Remove vehicle
        $(document).on('click', '.remove-vehicle', function() {
            if (confirm('Are you sure you want to remove this vehicle?')) {
                $(this).closest('.vehicle-container').remove();
                // Renumber remaining vehicles
                $('.vehicle-container').each(function(index) {
                    $(this).find('.vehicle-title').text('Vehicle #' + (index + 1));
                });
                vehicleCount = $('.vehicle-container').length;
            }
        });
</script>

<!-- display data as per vender selection -->
<!-- <script>
    // $(document).ready(function() {
    //     // Initialize DataTable with server-rendered data
    //     var table = $('#vendorVehiclesTable').DataTable({
    //         responsive: true,
    //         dom: 'Bfrtip',
    //         buttons: [
    //             'copy', 'csv', 'excel', 'pdf', 'print'
    //         ],
    //         // Use server-rendered data (disable DataTables processing)
    //         processing: false,
    //         serverSide: false,
    //         // Map the columns to your actual data structure
    //         columns: [
    //             { data: 'sr_no' }, // Sr No (auto-generated in loop)
    //             { data: 'vendor_id' }, // Vendor ID
    //             { data: 'vehicle_number' }, // Vehicle Number
    //             { data: 'vehicle_id' }, // Vehicle Type ID
    //             { data: 'capacity' }, // Capacity
    //             { data: 'status' }, // Status
    //             { data: 'actions', orderable: false } // Actions
    //         ]
    //     });

        // Vendor selection change handler
        $('#searchbtn').change(function() {
            var vendorId = $(this).val();
            
            if (vendorId) {
                // Show statistics panel
                $('#vendorStatsRow').show();
                
                // Filter the table to show only selected vendor's vehicles
                table.column(1).search(vendorId).draw();
                
                // Calculate statistics based on filtered data
                updateVendorStatistics(vendorId);
                
                // Update vendor title
                var vendorName = $(this).find('option:selected').text();
                $('#vendorTitle').text(vendorName + ' - Vehicle Statistics');
            } else {
                // Hide statistics panel if no vendor selected
                $('#vendorStatsRow').hide();
                // Show all rows in table
                table.column(1).search('').draw();
                // Reset statistics
                resetStatistics();
            }
        });

        // Function to update vendor statistics
        function updateVendorStatistics(vendorId) {
            // Get all rows (including hidden ones)
            var allRows = table.rows().data();
            
            // Filter rows for the selected vendor
            var filteredRows = allRows.filter(function(row) {
                return vendorId ? row.vendor_id == vendorId : true;
            });
            
            var totalVehicles = filteredRows.count();
            var activeVehicles = 0;
            var maintenanceVehicles = 0;
            var inactiveVehicles = 0;
            var typeDistribution = {};
            
            // Calculate statistics
            filteredRows.each(function(row) {
                var status = row.status.toLowerCase();
                
                // Count statuses
                if (status.includes('active')) {
                    activeVehicles++;
                } else if (status.includes('maintenance')) {
                    maintenanceVehicles++;
                } else if (status.includes('inactive')) {
                    inactiveVehicles++;
                }
                
                // Get vehicle type name (we'll need to map IDs to names)
                var vehicleTypeId = row.vehicle_id;
                var vehicleTypeName = getVehicleTypeName(vehicleTypeId);
                
                // Count vehicle types
                if (!typeDistribution[vehicleTypeName]) {
                    typeDistribution[vehicleTypeName] = 0;
                }
                typeDistribution[vehicleTypeName]++;
            });
            
            // Update statistics display
            $('#totalVehicles').text(totalVehicles);
            $('#activeVehicles').text(activeVehicles);
            $('#maintenanceVehicles').text(maintenanceVehicles);
            $('#inactiveVehicles').text(inactiveVehicles);
            
            // Update type distribution
            updateTypeDistribution(typeDistribution);
        }

        // Helper function to get vehicle type name from ID
        function getVehicleTypeName(vehicleTypeId) {
            // This should match your $Vehicle data structure
            // You might need to pass this from PHP or create a lookup object
            var vehicleTypes = {
                @foreach($Vehicle as $type)
                    {{ $type->id }}: '{{ $type->type }}',
                @endforeach
            };
            return vehicleTypes[vehicleTypeId] || 'Unknown';
        }

        // Function to reset statistics
        function resetStatistics() {
            $('#totalVehicles').text('0');
            $('#activeVehicles').text('0');
            $('#maintenanceVehicles').text('0');
            $('#inactiveVehicles').text('0');
            $('#typeDistribution').html('');
        }

        // Function to update type distribution display
        function updateTypeDistribution(distribution) {
            var typeDistributionHtml = '';
            for (var type in distribution) {
                typeDistributionHtml += `
                    <div class="col-md-3">
                        <div class="vehicle-type-item">
                            <span class="vehicle-type-name">${type}</span>
                            <span class="vehicle-type-count">${distribution[type]}</span>
                        </div>
                    </div>
                `;
            }
            $('#typeDistribution').html(typeDistributionHtml);
        }

        // Search functionality
        $('#searchInput').keyup(function() {
            table.search($(this).val()).draw();
            // Update statistics if a vendor is selected
            if ($('#vendorSelect').val()) {
                updateVendorStatistics($('#vendorSelect').val());
            }
        });

        // Initial statistics calculation for all data
        updateVendorStatistics();
    });
</script> -->

<!-- display data as per vender selection -->
 <script>
$(document).on('change', '#vendorSelect', function () {
    var vendorId = $(this).val();

    if (vendorId) {
        $.ajax({
            url: "{{ route('get_vendor_details') }}",
            type: "GET",
            data: {
                vendorId: vendorId
            },
            success: function(response) {
                if (response.success) {
                   // Set vendor name in the h4 title
                    $('#vendorNameText').text(response.vendorDetails.name);
                   $('#vendorStatsRow').show();
                } else {
                    alert(response.message);
                    // If vendor not selected, hide the stats
                    $('#vendorStatsRow').hide();
                    $('#vendorNameText').text('');
                }
            },
            error: function(xhr) {
                alert("Something went wrong while fetching vendor data.");
                console.error(xhr.responseText);
            }
        });
    }
});
</script>

<script>
$(document).ready(function () {
    const storedVendorId = sessionStorage.getItem('selectedVendorId');
    
    if (storedVendorId) {
        $('#vendorSelect').val(storedVendorId).trigger('change');
        $('#vendorStatsRow').show(); // show stats row if vendor was previously selected
    }
});
</script>

