<x-admin.layout>
    <x-slot name="title">Employee Management</x-slot>
    <x-slot name="heading">Employee Management</x-slot>

    <div class="container-fluid py-3">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-users me-2 text-primary"></i>Employee Management
                            </h4>
                            @can('Employeemanagement.delete')
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                                    <i class="fas fa-plus me-2"></i>Add Employee
                                </button>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Tabs Section -->
                        <ul class="nav nav-tabs mb-4" id="employeeTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-employees" type="button" role="tab">
                                    All Employees (Active)
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office-staff" type="button" role="tab">
                                    Office Staff (Active)
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="drivers-tab" data-bs-toggle="tab" data-bs-target="#drivers" type="button" role="tab">
                                    Drivers
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="inactive-tab" data-bs-toggle="tab" data-bs-target="#inactive" type="button" role="tab">
                                    All Inactive
                                </button>
                            </li>
                        </ul>
                        
                        <!-- Tab Content -->
                        <div class="tab-content" id="employeeTabsContent">
                            <div class="tab-pane fade show active" id="all-employees" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                        <thead class="table-light">
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
                                                @foreach ($allActive as $person)
                                                <tr>
                                                    <td>
                                                        @if(isset($person->emp_id))
                                                            <span class="badge bg-primary">Employee</span>
                                                        @else
                                                            <span class="badge bg-warning">Driver</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->emp_id))
                                                            {{ $person->emp_id }}
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->first_name))
                                                            {{ $person->first_name }} {{ $person->last_name }}
                                                        @else
                                                            {{ $person->f_name }} {{ $person->l_name }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->contact_number))
                                                            {{ $person->contact_number }}
                                                        @else
                                                            {{ $person->mobile_no }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        ₹{{ number_format($person->basic_salary, 2) }}
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="office-staff" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                        <thead class="table-light">
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
                                            @foreach ($activeEmployees as $employee)
                                                <tr>
                                                    <td>{{ $employee->emp_id }}</td>
                                                    <td>{{ $employee->first_name }}</td>
                                                    <td>{{ $employee->last_name }}</td>
                                                    <td>
                                                        <span class="badge bg-primary">Office Staff</span>
                                                    </td>
                                                    <td>{{ $employee->department }}</td>
                                                    <td>{{ $employee->joining_date }}</td>
                                                    <td>₹{{ number_format($employee->basic_salary, 2) }}</td>
                                                    <td>{{ $employee->contact_number }}</td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                    <td>
                                                        @can('Employeemanagement.edit')
                                                        <button class="edit-element btn btn-secondary px-2 py-1" title="Edit employee" data-id="{{ $employee->id }}" data-bs-toggle="modal" data-bs-target="#editEmployeeModal">
                                                            <i data-feather="edit"></i>
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
                            
                            <div class="tab-pane fade" id="drivers" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                        <thead class="table-light">
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
                                                @foreach ($activeDrivers as $driver)
                                                <tr>
                                                    <td>{{ $driver->f_name }} {{ $driver->l_name }}</td>
                                                    <td>{{ $driver->mobile_no }}</td>
                                                    <td>{{ $driver->joining_date }}</td>
                                                    <td>₹{{ number_format($driver->basic_salary, 2) }}</td>
                                                    <td>{{ $driver->alternate_contact_no }}</td>
                                                    <td>
                                                        @if($driver->status == '1')
                                                        <span class="badge bg-success">Active</span>
                                                        @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @can('Driver.edit')
                                                        <button class="edit-driver btn btn-secondary px-2 py-1" title="Edit driver" data-id="{{ $driver->id }}" data-bs-toggle="modal" data-bs-target="#editDriverModal">
                                                            <i data-feather="edit"></i>
                                                        </button>
                                                        @endcan
                                                        @can('Driver.delete')
                                                        <button class="btn btn-danger rem-driver px-2 py-1" title="Delete driver" data-id="{{ $driver->id }}">
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
                            
                            <div class="tab-pane fade" id="inactive" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                                        <thead class="table-light">
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
                                                @foreach ($inactive as $person)
                                                <tr>
                                                    <td>
                                                        @if(isset($person->emp_id))
                                                            <span class="badge bg-primary">Employee</span>
                                                        @else
                                                            <span class="badge bg-warning">Driver</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->emp_id))
                                                            {{ $person->emp_id }}
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->first_name))
                                                            {{ $person->first_name }} {{ $person->last_name }}
                                                        @else
                                                            {{ $person->f_name }} {{ $person->l_name }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->contact_number))
                                                            {{ $person->contact_number }}
                                                        @else
                                                            {{ $person->mobile_no }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($person->status == '1')
                                                            <span class="badge bg-success">Active</span>
                                                        @elseif($person->status == '3')
                                                            <span class="badge bg-warning">On Leave</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(isset($person->emp_id))
                                                            <!-- Employee actions -->
                                                            @can('Employeemanagement.edit')
                                                            <button class="edit-element btn btn-secondary px-2 py-1" data-id="{{ $person->id }}">
                                                                <i data-feather="edit"></i>
                                                            </button>
                                                            @endcan
                                                        @else
                                                            <!-- Driver actions -->
                                                            @can('Driver.edit')
                                                            <button class="edit-driver btn btn-secondary px-2 py-1" data-id="{{ $person->id }}">
                                                                <i data-feather="edit"></i>
                                                            </button>
                                                            @endcan
                                                        @endif
                                                        
                                                        @if(isset($person->emp_id))
                                                            @can('Employeemanagement.delete')
                                                            <button class="btn btn-danger rem-element px-2 py-1" data-id="{{ $person->id }}">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                            @endcan
                                                        @else
                                                            @can('Driver.delete')
                                                            <button class="btn btn-danger rem-driver px-2 py-1" data-id="{{ $person->id }}">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                            @endcan
                                                        @endif
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
            </div>
        </div>
    </div>

    <!-- Add Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addEmployeeModalLabel">
                        <i class="fas fa-user-plus me-2"></i>Add Employee
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf
                        
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="employeeType" class="form-label">Employee Type</label>
                                <select class="form-select" id="employeeType" name="type" >
                                    <option value="">Select Type</option>
                                    <option value="1">Office Staff</option>
                                    <option value="2">Driver</option>
                                </select>
                                <span class="text-danger invalid type_err"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="employeeId" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="employeeId" name="emp_id" >
                                <span class="text-danger invalid type_err"></span>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" >
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" >
                            </div>
                            
                            <div class="col-md-6">
                                <label for="joiningDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="joiningDate" name="joining_date" >
                            </div>
                            <div class="col-md-6">
                                <label for="basicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" id="basicSalary" name="basic_salary" >
                            </div>
                            
                            <div class="col-md-6">
                                <label for="mobileNumber" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobileNumber" name="contact_number" >
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department" name="department" >
                                    <option value="Operations">Operations</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="HR">HR</option>
                                    <option value="Logistics">Logistics</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" >
                            </div>
                            
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="bankName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="bankName" name="bank_name">
                            </div>
                            <div class="col-md-6">
                                <label for="accountNumber" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="accountNumber" name="account_number">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="ifscCode" class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" id="ifscCode" name="ifsc_code">
                            </div>
                            <div class="col-md-6">
                                <label for="branch" class="form-label">Branch</label>
                                <input type="text" class="form-control" id="branch" name="branch">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="panNumber" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="panNumber" name="pan_number">
                            </div>
                            <div class="col-md-6">
                                <label for="note" class="form-label">Note</label>
                                <input type="text" class="form-control" id="note" name="note">
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

    <!-- Edit Employee Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editEmployeeModalLabel">
                        <i class="fas fa-user-edit me-2"></i>Edit Employee
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-horizontal form-bordered" method="post" id="editForm">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="editEmployeeType" class="form-label">Employee Type</label>
                                <select class="form-select" id="editEmployeeType" name="type" >
                                    <option value="">Select Type</option>
                                    <option value="1">Office Staff</option>
                                    <option value="2">Driver</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editEmployeeId" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="editEmployeeId" name="emp_id" >
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="editFirstName" name="first_name" >
                            </div>
                            <div class="col-md-6">
                                <label for="editLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="editLastName" name="last_name" >
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editJoiningDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="editJoiningDate" name="joining_date" >
                            </div>
                            <div class="col-md-6">
                                <label for="editBasicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" id="editBasicSalary" name="basic_salary" >
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editMobileNumber" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="editMobileNumber" name="contact_number" >
                            </div>
                            <div class="col-md-6">
                                <label for="editEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editEmail" name="email">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editDepartment" class="form-label">Department</label>
                                <select class="form-select" id="editDepartment" name="department" >
                                    <option value="Operations">Operations</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="HR">HR</option>
                                    <option value="Logistics">Logistics</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editDesignation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="editDesignation" name="designation" >
                            </div>
                            
                            <div class="col-12">
                                <label for="editAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="editAddress" name="address" rows="3"></textarea>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editBankName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="editBankName" name="bank_name">
                            </div>
                            <div class="col-md-6">
                                <label for="editAccountNumber" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="editAccountNumber" name="account_number">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editIfscCode" class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" id="editIfscCode" name="ifsc_code">
                            </div>
                            <div class="col-md-6">
                                <label for="editBranch" class="form-label">Branch</label>
                                <input type="text" class="form-control" id="editBranch" name="branch">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="editPanNumber" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="editPanNumber" name="pan_number">
                            </div>
                            <div class="col-md-6">
                                <label for="editNote" class="form-label">Note</label>
                                <input type="text" class="form-control" id="editNote" name="note">
                            </div>
                            
                            <div class="col-md-8">
                                <label for="editStatus" class="form-label">Status</label>
                                <select class="form-select" id="editStatus" name="status" >
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="3">On Leave</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" id="editSubmit">Save Changes</button>
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
        
        // $("#editEmployeeModal").modal('show');
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
                $("#editForm select[name='type']").val(data.employeemanagement.type);
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
                $("#editForm select[name='status']").val(data.employeemanagement.status);
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
            alert(model_id);

            var url = "{{ route('Employee-Management.update', ':model_id') }}";
            url = url.replace(':model_id', model_id);

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
                    alert(model_id);
                    var url = "{{ route('Employee-Management.destroy', ':model_id') }}";
                    
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