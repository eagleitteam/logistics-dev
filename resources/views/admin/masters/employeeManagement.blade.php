<x-admin.layout>
    <x-slot name="title">Employee Management</x-slot>
    <x-slot name="heading">Employee Management</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-users me-2"></i> Employee Management</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                            <i class="fas fa-plus me-2"></i>Add Employee
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs Section -->
                    <ul class="nav nav-tabs" id="employeeTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-employees" type="button" role="tab">All Employees</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office-staff" type="button" role="tab">Office Staff</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="drivers-tab" data-bs-toggle="tab" data-bs-target="#drivers" type="button" role="tab">Drivers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="inactive-tab" data-bs-toggle="tab" data-bs-target="#inactive" type="button" role="tab">Inactive</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="employeeTabsContent">
                        <div class="tab-pane fade show active" id="all-employees" role="tabpanel">
                            <!-- Filter Section -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label class="form-label">Search</label>
                                    <input type="text" class="form-control" placeholder="Search employees...">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Department</label>
                                    <select class="form-select">
                                        <option>All Departments</option>
                                        <option>Operations</option>
                                        <option>Accounts</option>
                                        <option>HR</option>
                                        <option>Logistics</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Location</label>
                                    <select class="form-select">
                                        <option>All Locations</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Bangalore</option>
                                        <option>Hyderabad</option>
                                    </select>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button class="btn btn-primary w-100">
                                        <i class="fas fa-filter me-2"></i>Filter
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Employees Table -->
                            <div class="table-responsive">
                                <table id="employees-table" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Department</th>
                                            <th>Joining Date</th>
                                            <th>Basic Salary</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                        <tr>
                                                <td>{{ $employee->emp_id }}</td>
                                                <td>{{ $employee->name }}</td>
                                            <td>
                                                @if($employee->type == 'office')
                                                <span class="badge bg-primary">Office Staff</span>
                                                @else
                                                <span class="badge bg-warning">Driver</span>
                                                @endif
                                            </td>
                                            <td>{{ $employee->department }}</td>
                                            <td>{{ $employee->joining_date }}</td>
                                            <td>₹{{ number_format($employee->basic_salary, 2) }}</td>
                                            <td>{{ $employee->contact_number }}</td>
                                            <td>
                                                @if($employee->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                                @elseif($employee->status == 'on_leave')
                                                <span class="badge bg-warning">On Leave</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @can('Employee.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit employee" data-id="{{ $employee->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                @endcan
                                                @can('Employee.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete employee" data-id="{{ $employee->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Other tabs content would go here -->
                        <div class="tab-pane fade" id="office-staff" role="tabpanel">
                            <!-- Office staff content -->
                        </div>
                        
                        <div class="tab-pane fade" id="drivers" role="tabpanel">
                            <!-- Drivers content -->
                        </div>
                        
                        <div class="tab-pane fade" id="inactive" role="tabpanel">
                            <!-- Inactive employees content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel"><i class="fas fa-user-plus me-2"></i>Add Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="employeeForm" method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="employeeType" class="form-label">Employee Type</label>
                                <select class="form-select" id="employeeType" name="type" required>
                                    <option value="">Select Type</option>
                                    <option value="office">Office Staff</option>
                                    <option value="driver">Driver</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="employeeId" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="employeeId" name="emp_id" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="joiningDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="joiningDate" name="joining_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="basicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" id="basicSalary" name="basic_salary" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="mobileNumber" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobileNumber" name="contact_number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department" name="department">
                                    <option value="Operations">Operations</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="HR">HR</option>
                                    <option value="Logistics">Logistics</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation">
                            </div>
                        </div>
                        
                        <!-- Driver Specific Fields -->
                        <div id="driverFields" style="display: none;">
                            <h5 class="mb-3"><i class="fas fa-truck me-2"></i>Driver Specific Information</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="licenseNumber" class="form-label">License Number</label>
                                    <input type="text" class="form-control" id="licenseNumber" name="license_number">
                                </div>
                                <div class="col-md-6">
                                    <label for="licenseExpiry" class="form-label">License Expiry</label>
                                    <input type="date" class="form-control" id="licenseExpiry" name="license_expiry">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="expenseAllowance" class="form-label">Monthly Expense Allowance</label>
                                    <input type="number" class="form-control" id="expenseAllowance" name="expense_allowance">
                                </div>
                                <div class="col-md-6">
                                    <label for="perDayAllowance" class="form-label">Per Day Allowance</label>
                                    <input type="number" class="form-control" id="perDayAllowance" name="per_day_allowance">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="assignedVehicle" class="form-label">Assigned Vehicle</label>
                                    <input type="text" class="form-control" id="assignedVehicle" name="assigned_vehicle" placeholder="Vehicle number">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="bankName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="bankName" name="bank_name">
                            </div>
                            <div class="col-md-6">
                                <label for="accountNumber" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="accountNumber" name="account_number">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ifscCode" class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" id="ifscCode" name="ifsc_code">
                            </div>
                            <div class="col-md-6">
                                <label for="panNumber" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="panNumber" name="pan_number">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Employee Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <!-- Similar structure to add modal but for editing -->
    </div>
</x-admin.layout>

<script>
    // Employee Type Toggle
    document.getElementById('employeeType').addEventListener('change', function() {
        const driverFields = document.getElementById('driverFields');
        if (this.value === 'driver') {
            driverFields.style.display = 'block';
        } else {
            driverFields.style.display = 'none';
        }
    });

    // Initialize DataTable
    $(document).ready(function() {
        $('#employees-table').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
    });

    // AJAX for adding employee
    $("#employeeForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: xhr.responseJSON.message || 'Something went wrong!'
                });
            }
        });
    });

    // Edit Employee
    $(document).on('click', '.edit-element', function() {
        var employeeId = $(this).data('id');
        
        $.ajax({
            url: '/employees/' + employeeId + '/edit',
            type: 'GET',
            success: function(response) {
                // Populate the edit modal with response data
                $('#editEmployeeModal').modal('show');
                // Fill form fields with response data
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to fetch employee data'
                });
            }
        });
    });

    // Delete Employee
    $(document).on('click', '.rem-element', function() {
        var employeeId = $(this).data('id');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/employees/' + employeeId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire(
                            'Deleted!',
                            'Employee has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'Failed to delete employee.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>