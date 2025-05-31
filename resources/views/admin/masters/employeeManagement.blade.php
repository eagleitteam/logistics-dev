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
                            
                            
                            <!-- Employees Table -->
                             <div class="card-body">
                    
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Frist Name</th>
                                            <th>Last Name</th>
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
                                        @foreach ($employeemanagements as $employee)
                                        <tr>
                                                <td>{{ $employee->emp_id }}</td>
                                                <td>{{ $employee->first_name }}</td>
                                                <td>{{ $employee->last_name }}</td>
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
                                                @if($employee->status == '1')
                                                <span class="badge bg-success">Active</span>
                                                @elseif($employee->status == '3')
                                                <span class="badge bg-warning">On Leave</span>
                                                @elseif($employee->status == '2')
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @can('Employeemanagement.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" data-bs-target="#editEmployeeModal" title="Edit employee" data-id="{{ $employee->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                @endcan
                                                @can('Employeemanagement.delete')
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
                    <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="employeeType" class="form-label">Employee Type</label>
                                    <select class="form-select" id="employeeType" name="type" >
                                        <option value="">Select Type</option>
                                        <option value="office">Office Staff</option>
                                        <option value="driver">Driver</option>
                                    </select>
                                    <span class="text-danger invalid type_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="employeeId" class="form-label">Employee ID</label>
                                    <input type="text" class="form-control" id="employeeId" name="emp_id" >
                                    <span class="text-danger invalid emp_id_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" >
                                    <span class="text-danger invalid first_name_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" >
                                    <span class="text-danger invalid last_name_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="joiningDate" class="form-label">Joining Date</label>
                                    <input type="date" class="form-control" id="joiningDate" name="joining_date" >
                                    <span class="text-danger invalid joining_date_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="basicSalary" class="form-label">Basic Salary</label>
                                    <input type="number" class="form-control" id="basicSalary" name="basic_salary" >
                                    <span class="text-danger invalid basic_salary_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" id="mobileNumber" name="contact_number" >
                                    <span class="text-danger invalid contact_number_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <span class="text-danger invalid email_err"></span>
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
                                    <span class="text-danger invalid department_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation">
                                    <span class="text-danger invalid designation_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                    <span class="text-danger invalid address_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="bankName" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bankName" name="bank_name">
                                    <span class="text-danger invalid bank_name_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="accountNumber" class="form-label">Account Number</label>
                                    <input type="text" class="form-control" id="accountNumber" name="account_number">
                                    <span class="text-danger invalid account_number_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ifscCode" class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifscCode" name="ifsc_code">
                                    <span class="text-danger invalid ifsc_code_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" id="branch" name="branch">
                                    <span class="text-danger invalid branch_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="panNumber" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="panNumber" name="pan_number">
                                    <span class="text-danger invalid pan_number_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="note" class="form-label">Note</label>
                                    <input type="text" class="form-control" id="note" name="note">
                                    <span class="text-danger invalid note_err"></span>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" id="addSubmit" class="btn btn-primary">Save Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    
    
            <!-- Edit Vehicle Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEmployeeModalLabel">Edit Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                    <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="employeeType" class="form-label">Employee Type</label>
                                    <select class="form-select" id="employeeType" name="type" >
                                        <option value="">Select Type</option>
                                        <option value="office">Office Staff</option>
                                        <option value="driver">Driver</option>
                                    </select>
                                    <span class="text-danger invalid type_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="employeeId" class="form-label">Employee ID</label>
                                    <input type="text" class="form-control" id="employeeId" name="emp_id" >
                                    <span class="text-danger invalid emp_id_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" >
                                    <span class="text-danger invalid first_name_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" >
                                    <span class="text-danger invalid last_name_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="joiningDate" class="form-label">Joining Date</label>
                                    <input type="date" class="form-control" id="joiningDate" name="joining_date" >
                                    <span class="text-danger invalid joining_date_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="basicSalary" class="form-label">Basic Salary</label>
                                    <input type="number" class="form-control" id="basicSalary" name="basic_salary" >
                                    <span class="text-danger invalid basic_salary_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" id="mobileNumber" name="contact_number" >
                                    <span class="text-danger invalid contact_number_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <span class="text-danger invalid email_err"></span>
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
                                    <span class="text-danger invalid department_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation">
                                    <span class="text-danger invalid designation_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                    <span class="text-danger invalid address_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="bankName" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bankName" name="bank_name">
                                    <span class="text-danger invalid bank_name_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="accountNumber" class="form-label">Account Number</label>
                                    <input type="text" class="form-control" id="accountNumber" name="account_number">
                                    <span class="text-danger invalid account_number_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ifscCode" class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifscCode" name="ifsc_code">
                                    <span class="text-danger invalid ifsc_code_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" id="branch" name="branch">
                                    <span class="text-danger invalid branch_err"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="panNumber" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="panNumber" name="pan_number">
                                    <span class="text-danger invalid pan_number_err"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="note" class="form-label">Note</label>
                                    <input type="text" class="form-control" id="note" name="note">
                                    <span class="text-danger invalid note_err"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-8">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status">
                                        <option value=" ">selected ...</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">On Leave</option>
                                        
                                    </select>
                                    <span class="text-danger invalid status_err"></span>
                                </div>
                                
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="editSubmit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
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
            url: '{{ route('Employee-Management.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Employee-Management.index') }}';
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
        
        $("#editEmployeeModal").modal('show');
        var url = "{{ route('Employee-Management.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                'model_id': model_id,
                '_token': "{{ csrf_token() }}"
                
            },
            success: function(data, textStatus, jqXHR) {
                // editFormBehaviour();
                
                if (!data.error) {
                    
                    // Populate form fields with data
                $("#editForm input[name='edit_model_id']").val(data.employeemanagement.id);
                $("#editForm input[name='type']").val(data.employeemanagement.type);
                $("#editForm input[name='emp_id']").val(data.employeemanagement.emp_id);
                $("#editForm input[name='first_name']").val(data.employeemanagement.first_name);
                $("#editForm input[name='last_name']").val(data.employeemanagement.last_name);
                $("#editForm input[name='joining_date']").val(data.employeemanagement.joining_date);
                $("#editForm input[name='basic_salary']").val(data.employeemanagement.basic_salary);
                $("#editForm input[name='contact_number']").val(data.employeemanagement.contact_number);
                $("#editForm input[name='email']").val(data.employeemanagement.email);
                $("#editForm input[name='department']").val(data.employeemanagement.department);
                $("#editForm input[name='designation']").val(data.employeemanagement.designation);
                $("#editForm input[name='address']").val(data.employeemanagement.address);
                $("#editForm input[name='bank_name']").val(data.employeemanagement.bank_name);
                $("#editForm input[name='account_number']").val(data.employeemanagement.account_number);
                $("#editForm input[name='ifsc_code']").val(data.employeemanagement.ifsc_code);
                $("#editForm input[name='pan_number']").val(data.employeemanagement.pan_number);
                $("#editForm input[name='branch']").val(data.employeemanagement.branch);
                $("#editForm input[name='note']").val(data.employeemanagement.note);
                $("#editForm input[name='status']").val(data.employeemanagement.status);
                //  Set status dropdown
                $("#status").val(data.employeemanagement.status);
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
            var url = "{{ route('Employee-Management.update', ':model_id') }}";

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
                            window.location.href = '{{ route('Employee-Management.index') }}';
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
                    var url = "{{ route('Employee-Management.destroy', ':model_id') }}";

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