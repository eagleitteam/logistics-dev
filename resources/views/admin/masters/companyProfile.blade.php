<x-admin.layout>
    <x-slot name="title">Company Settings</x-slot>
    <x-slot name="heading">Company Settings</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title"><i class="fas fa-cog me-2"></i> Company Settings</h4>
                            
                        </div>
                    </div>
                
                <div class="card-body">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="companySettingsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="company-info-tab" data-bs-toggle="tab" data-bs-target="#company-info" type="button" role="tab" aria-controls="company-info" aria-selected="true">
                                <i class="fas fa-building me-2"></i>Company Information
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="company-number-tab" data-bs-toggle="tab" data-bs-target="#company-number" type="button" role="tab" aria-controls="company-number" aria-selected="true">
                                <i class="fas fa-building me-2"></i>Billing Number Pre-Fix
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="locations-tab" data-bs-toggle="tab" data-bs-target="#locations" type="button" role="tab" aria-controls="locations" aria-selected="false">
                                <i class="fas fa-map-marker-alt me-2"></i>Locations
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="departments-tab" data-bs-toggle="tab" data-bs-target="#departments" type="button" role="tab" aria-controls="departments" aria-selected="false">
                                <i class="fas fa-sitemap me-2"></i>Departments
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="holidays-tab" data-bs-toggle="tab" data-bs-target="#holidays" type="button" role="tab" aria-controls="holidays" aria-selected="false">
                                <i class="fas fa-calendar-day me-2"></i>Holidays
                            </button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="companySettingsTabContent">
                        <!-- Company Information Tab -->
                        <div class="tab-pane fade show active" id="company-info" role="tabpanel" aria-labelledby="company-info-tab">

                        <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                        @csrf
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">
                                                    <i class="fas fa-info-circle me-2"></i>Basic Information
                                                </h5>
                                                 @can('Companyprofile.create')
                                                    <div>
                                                        <button class="btn btn-primary" id="addSubmit" type="submit">
                                                            <i class="fas fa-save me-2"></i>Save Company Settings
                                                        </button>
                                                    </div>
                                                @endcan
                                            </div>

                                        <div class="card-body">
                                            
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="companyName" class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" id="companyName" name="company_name" value="{{$companyprofile->company_name}}">
                                                        <span class="text-danger invalid company_name_err"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="companyType" class="form-label">Company Type</label>
                                                        <select class="form-select" id="companyType" name="company_type">
                                                            <option value="">Selected ....</option>
                                                            <option value="Private Limited">Private Limited</option>
                                                            <option value="Public Limited">Public Limited</option>
                                                            <option value="LLP">LLP</option>
                                                            <option value="Proprietorship">Proprietorship</option>
                                                        </select>
                                                        <span class="text-danger invalid company_type_err"></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="companyName" class="form-label">Company Registration No</label>
                                                        <input type="text" class="form-control" id="registrationNumber" name="registration_number" value="{{$companyprofile->registration_number}}">
                                                        <span class="text-danger invalid registration_number_err"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="panNumber" class="form-label">PAN Number</label>
                                                        <input type="text" class="form-control" id="panNumber" name="pan_number" value="{{$companyprofile->pan_number}}">
                                                        <span class="text-danger invalid pan_number_err"></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="financialYearStart" class="form-label">GST Status</label>
                                                        <select class="form-select" id="financialYearStart" name="gststatus" value="{{$companyprofile->gststatus}}">
                                                            <option value="" selected>Select...</option>
                                                            <option value="1">Register</option>
                                                            <option value="2">Unregister</option>
                                                            
                                                        </select>
                                                        <span class="text-danger invalid gststatus_err"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="gstin" class="form-label">GSTIN</label>
                                                        <input type="text" class="form-control" id="gstin" name="gstin" value="{{$companyprofile->gstin}}">
                                                    </div>
                                                    <span class="text-danger invalid gstin_err"></span>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="revscharge" class="form-label">Reverse Charge Apply</label>
                                                        <select class="form-select" id="revscharge" name="revscharge" >
                                                            <option value="" selected>Select...</option>
                                                            <option value="1">Apply</option>
                                                            <option value="2">Not-Apply</option>
                                                            
                                                        </select>
                                                        <span class="text-danger invalid revscharge_err"></span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Company Logo , seal , signature upload -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><i class="fas fa-address-card me-2"></i>Document Upload</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Upload Company Logo (PNG Format Only)</label>
                                                    <input class="form-control" type="file" id="companyLogo" name="company_logo">
                                                    <span class="text-danger invalid company_logo_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Upload Company Seal (PNG Format Only)</label>
                                                    <input class="form-control" type="file" id="companySeal" name="company_seal">
                                                    <span class="text-danger invalid company_seal_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Upload signature (PNG Format Only)</label>
                                                    <input class="form-control" type="file" id="companySignature" name="company_signature">
                                                    <span class="text-danger invalid company_signature_err"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end -->
                             <!-- Billing Address  -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><i class="fas fa-address-card me-2"></i>Billing Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="addressLine1" class="form-label">Address Line 1</label>
                                                    <input type="text" class="form-control" id="addressLine1" name="address_line1" value="{{$companyprofile->address_line1}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="addressLine2" class="form-label">Address Line 2</label>
                                                    <input type="text" class="form-control" id="addressLine2" name="address_line2" value="{{$companyprofile->address_line2}}">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="city" name="city" value="{{$companyprofile->city}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="state" class="form-label">State</label>
                                                    <select class="form-select" id="state" name="state">
                                                        <option value="" selected disabled>Choose...</option>
                                                            @foreach ($StateNameWithCode as $StateNameWithCode)
                                                                    <option value="{{ optional($StateNameWithCode)->id }}">{{ optional($StateNameWithCode)->stateName }}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="pinCode" class="form-label">PIN Code</label>
                                                    <input type="text" class="form-control" id="pinCode" name="pin_code" value="{{$companyprofile->pin_code}}">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number" value="{{$companyprofile->phone_number}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{$companyprofile->email}}">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="website" class="form-label">Website</label>
                                                    <input type="url" class="form-control" id="website" name="website" value="{{$companyprofile->website}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- end -->
                            </form>
                        </div>

                        <!-- Invoice & Cash memo number Tab -->
                        <div class="tab-pane fade" id="company-number" role="tabpanel" aria-labelledby="company-number-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-sitemap me-2"></i>Invoice & Cash Memo Prefix</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addPrePostFixModal">
                                                    <i class="fas fa-plus me-2"></i>Add Pre & Post fix
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="prefixTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Year</th>
                                                            <th>Type</th>
                                                            <th>Pre Fix</th>
                                                            <th>Numbering Dig</th>
                                                            <th>Post Fix</th>
                                                            <th>Sample Format</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2023</td>
                                                            <td>Invoice</td>
                                                            <td>INV</td>
                                                            <td>4</td>
                                                            <td>FY23</td>
                                                            <td>INV/0001/FY23</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-prefix" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-prefix" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2023</td>
                                                            <td>Cash Memo</td>
                                                            <td>CM</td>
                                                            <td>5</td>
                                                            <td>23</td>
                                                            <td>CM/00001/23</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-prefix" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-prefix" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Locations Tab -->
                        <div class="tab-pane fade" id="locations" role="tabpanel" aria-labelledby="locations-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-map-marker-alt me-2"></i>Company Locations</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLocationModal">
                                                    <i class="fas fa-plus me-2"></i>Add Location
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="locationsTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Location Code</th>
                                                            <th>Location Name</th>
                                                            <th>Address</th>
                                                            <th>Contact Person</th>
                                                            <th>Phone</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>DEL</td>
                                                            <td>Delhi Head Office</td>
                                                            <td>123 Industrial Area, New Delhi</td>
                                                            <td>Rajesh Kumar</td>
                                                            <td>9876543210</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>MUM</td>
                                                            <td>Mumbai Branch</td>
                                                            <td>456 Business Park, Mumbai</td>
                                                            <td>Priya Sharma</td>
                                                            <td>8765432109</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BLR</td>
                                                            <td>Bangalore Warehouse</td>
                                                            <td>789 Tech Park, Bangalore</td>
                                                            <td>Mohan Singh</td>
                                                            <td>7654321098</td>
                                                            <td><span class="badge bg-warning">Inactive</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Departments Tab -->
                        <div class="tab-pane fade" id="departments" role="tabpanel" aria-labelledby="departments-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-sitemap me-2"></i>Departments</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                                    <i class="fas fa-plus me-2"></i>Add Department
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="departmentsTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Department Code</th>
                                                            <th>Department Name</th>
                                                            <th>Head of Department</th>
                                                            <th>Location</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>OPS</td>
                                                            <td>Operations</td>
                                                            <td>Anita Desai</td>
                                                            <td>DEL, MUM</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>ACC</td>
                                                            <td>Accounts</td>
                                                            <td>Rajesh Kumar</td>
                                                            <td>DEL</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>HR</td>
                                                            <td>Human Resources</td>
                                                            <td>Priya Sharma</td>
                                                            <td>DEL, MUM</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>LOG</td>
                                                            <td>Logistics</td>
                                                            <td>Mohan Singh</td>
                                                            <td>DEL, MUM, BLR</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="4"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="4"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Holidays Tab -->
                        <div class="tab-pane fade" id="holidays" role="tabpanel" aria-labelledby="holidays-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-calendar-day me-2"></i>Holidays</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addHolidayModal">
                                                    <i class="fas fa-plus me-2"></i>Add Holiday
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <label for="holidayYear" class="form-label">Select Year</label>
                                                    <select class="form-select" id="holidayYear">
                                                        <option value="2023" selected>2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="holidaysTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Day</th>
                                                            <th>Holiday Name</th>
                                                            <th>Type</th>
                                                            <th>Location</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>26-Jan-2023</td>
                                                            <td>Thursday</td>
                                                            <td>Republic Day</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>15-Aug-2023</td>
                                                            <td>Tuesday</td>
                                                            <td>Independence Day</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02-Oct-2023</td>
                                                            <td>Monday</td>
                                                            <td>Gandhi Jayanti</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19-Mar-2023</td>
                                                            <td>Sunday</td>
                                                            <td>Holi</td>
                                                            <td><span class="badge bg-info">Regional</span></td>
                                                            <td>DEL, MUM</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="4"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="4"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
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
            </div>
        </div>
    </div>


    <!-- Add Pre & Post Fix Modal -->
    <div class="modal fade" id="addPrePostFixModal" tabindex="-1" aria-labelledby="addPrePostFixModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPrePostFixModalLabel"><i class="fas fa-hashtag me-2"></i>Add Numbering Format</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="prefixYear" class="form-label">Year</label>
                                <input type="text" class="form-control" id="prefixYear" name="year" required maxlength="4">
                            </div>
                            <div class="col-md-6">
                                <label for="prefixType" class="form-label">Type</label>
                                <select class="form-select" id="prefixType" name="type" required>
                                    <option value="">Select Type</option>
                                    <option value="1">Invoice</option>
                                    <option value="2">Cash Memo</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="prefixPre" class="form-label">Pre Fix</label>
                                <input type="text" class="form-control" id="prefixPre" name="prefix_pre" maxlength="8">
                                <small class="text-muted">Max 8 characters</small>
                            </div>
                            <div class="col-md-4">
                                <label for="prefixDigits" class="form-label">Numbering Digits</label>
                                <select class="form-select" id="prefixDigits" name="digits" required>
                                    <option value="3">3 (001)</option>
                                    <option value="4">4 (0001)</option>
                                    <option value="5">5 (00001)</option>
                                    <option value="6">6 (000001)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="prefixPost" class="form-label">Post Fix</label>
                                <input type="text" class="form-control" id="prefixPost" name="prefix_post" maxlength="8">
                                <small class="text-muted">Max 8 characters</small>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <strong>Sample Format:</strong> 
                                <span id="sampleFormat">PRE/0001/POST</span>
                                <span id="formatLength" class="float-end">Length: <span id="lengthCount">12</span>/16 characters</span>
                            </div>
                            <div id="lengthWarning" class="alert alert-danger d-none">
                                Format exceeds 16 characters! Please adjust your pre/post fix.
                            </div>
                        </div>
                    </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="prefixStatus" class="form-label">Status</label>
                                <select class="form-select" id="prefixStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                         @can('Companyprofile.edit')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        @endcan
                         @can('Companyprofile.delete')
                        <button type="submit" class="btn btn-primary">Save Format</button>
                        @endcan
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Location Modal -->
    <div class="modal fade" id="addLocationModal" tabindex="-1" aria-labelledby="addLocationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLocationModalLabel"><i class="fas fa-map-marker-alt me-2"></i>Add Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addLocationForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="locationCode" class="form-label">Location Code</label>
                                <input type="text" class="form-control" id="locationCode" name="location_code" required>
                            </div>
                            <div class="col-md-6">
                                <label for="locationName" class="form-label">Location Name</label>
                                <input type="text" class="form-control" id="locationName" name="location_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="locationAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="locationAddress" name="address" rows="3" required></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="contactPerson" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" name="contact_person" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="contactPhone" name="contact_phone" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="locationStatus" class="form-label">Status</label>
                                <select class="form-select" id="locationStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Department Modal -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDepartmentModalLabel"><i class="fas fa-sitemap me-2"></i>Add Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addDepartmentForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="departmentCode" class="form-label">Department Code</label>
                                <input type="text" class="form-control" id="departmentCode" name="department_code" required>
                            </div>
                            <div class="col-md-6">
                                <label for="departmentName" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="departmentName" name="department_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="headOfDepartment" class="form-label">Head of Department</label>
                                <select class="form-select" id="headOfDepartment" name="head_of_department" required>
                                    <option value="">Select Employee</option>
                                    <option value="1">Anita Desai</option>
                                    <option value="2">Rajesh Kumar</option>
                                    <option value="3">Priya Sharma</option>
                                    <option value="4">Mohan Singh</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="departmentLocations" class="form-label">Locations</label>
                                <select class="form-select" id="departmentLocations" name="locations" multiple required>
                                    <option value="DEL">Delhi (DEL)</option>
                                    <option value="MUM">Mumbai (MUM)</option>
                                    <option value="BLR">Bangalore (BLR)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="departmentStatus" class="form-label">Status</label>
                                <select class="form-select" id="departmentStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Holiday Modal -->
    <div class="modal fade" id="addHolidayModal" tabindex="-1" aria-labelledby="addHolidayModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addHolidayModalLabel"><i class="fas fa-calendar-day me-2"></i>Add Holiday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addHolidayForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="holidayDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="holidayDate" name="holiday_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="holidayName" class="form-label">Holiday Name</label>
                                <input type="text" class="form-control" id="holidayName" name="holiday_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="holidayType" class="form-label">Type</label>
                                <select class="form-select" id="holidayType" name="holiday_type" required>
                                    <option value="national">National</option>
                                    <option value="regional">Regional</option>
                                    <option value="optional">Optional</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="holidayLocations" class="form-label">Applicable Locations</label>
                                <select class="form-select" id="holidayLocations" name="locations" multiple required>
                                    <option value="all" selected>All Locations</option>
                                    <option value="DEL">Delhi (DEL)</option>
                                    <option value="MUM">Mumbai (MUM)</option>
                                    <option value="BLR">Bangalore (BLR)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Holiday</button>
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
        console.log("Form submit triggered "); // ← DEBUG LINE
        alert("Form submit triggered "); // ← DEBUG LINE
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Company-Profile.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Company-Profile.index') }}';
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
        var url = "{{ route('Company-Profile.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.vehicle.id);
                    $("#editForm input[name='type']").val(data.vehicle.type);
                    $("#editForm input[name='description']").val(data.vehicle.description);
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
            var url = "{{ route('Company-Profile.update', ':model_id') }}";

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
                            window.location.href = '{{ route('Company-Profile.index') }}';
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
                    var url = "{{ route('Company-Profile.destroy', ':model_id') }}";

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

<!-- pre fix and post fix format script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get form elements
    const preFixInput = document.getElementById('prefixPre');
    const postFixInput = document.getElementById('prefixPost');
    const digitsSelect = document.getElementById('prefixDigits');
    const sampleFormat = document.getElementById('sampleFormat');
    const lengthCount = document.getElementById('lengthCount');
    const lengthWarning = document.getElementById('lengthWarning');
    const saveBtn = document.getElementById('saveFormatBtn');
    
    // Function to update sample format
    function updateSampleFormat() {
        const preFix = preFixInput.value || 'PRE';
        const postFix = postFixInput.value || 'POST';
        const digits = parseInt(digitsSelect.value) || 4;
        
        // Create sample number with leading zeros
        const sampleNumber = '0'.repeat(digits - 1) + '1';
        
        // Construct full format
        const fullFormat = `${preFix}/${sampleNumber}/${postFix}`;
        const formatLength = fullFormat.length;
        
        // Update display
        sampleFormat.textContent = fullFormat;
        lengthCount.textContent = formatLength;
        
        // Check length limit
        if (formatLength > 16) {
            lengthCount.classList.add('text-danger');
            lengthWarning.classList.remove('d-none');
            saveBtn.disabled = true;
        } else {
            lengthCount.classList.remove('text-danger');
            lengthWarning.classList.add('d-none');
            saveBtn.disabled = false;
        }
        
        // Calculate maximum allowed post-fix length
        const maxPostFixLength = 16 - (preFix.length + digits + 2); // +2 for the slashes
        if (maxPostFixLength < 0) {
            postFixInput.setAttribute('maxlength', '0');
        } else {
            postFixInput.setAttribute('maxlength', maxPostFixLength.toString());
        }
    }
    
    // Add event listeners
    preFixInput.addEventListener('input', updateSampleFormat);
    postFixInput.addEventListener('input', updateSampleFormat);
    digitsSelect.addEventListener('change', updateSampleFormat);
    
    // Initial update
    updateSampleFormat();
});
</script>

<style>
#sampleFormat {
    font-family: monospace;
    font-weight: bold;
}
</style>
