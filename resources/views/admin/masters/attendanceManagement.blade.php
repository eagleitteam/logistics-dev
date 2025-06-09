<x-admin.layout>
    <x-slot name="title">Attendance Management</x-slot>
    <x-slot name="heading">Attendance Management</x-slot>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-calendar-check me-2"></i> Attendance Management</h4>
                        <div>
                            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#markAttendanceModal">
                                <i class="fas fa-calendar-plus me-2"></i>Mark Attendance
                            </button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bulkAttendanceModal">
                                <i class="fas fa-calendar-alt me-2"></i>Bulk Update
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Enhanced Filter Section -->
                    <div class="row mb-4 g-3">
                        <div class="col-md-2">
                            <label for="yearSelect" class="form-label">Year</label>
                            <select class="form-select" id="yearSelect">
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="monthSelect" class="form-label">Month</label>
                            <select class="form-select" id="monthSelect">
                                <option value="">All Months</option>
                                <option>June 2023</option>
                                <option>May 2023</option>
                                <option>April 2023</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="employeeType" class="form-label">Employee Type</label>
                            <select class="form-select" id="employeeType">
                                <option value="">All Employees</option>
                                <option>Office Staff</option>
                                <option>Drivers</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="departmentSelect" class="form-label">Department</label>
                            <select class="form-select" id="departmentSelect">
                                <option value="">All Departments</option>
                                <option>Operations</option>
                                <option>Accounts</option>
                                <option>HR</option>
                                <option>Logistics</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="statusSelect" class="form-label">Status</label>
                            <select class="form-select" id="statusSelect">
                                <option value="">All Statuses</option>
                                <option>Present</option>
                                <option>Absent</option>
                                <option>On Leave</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button class="btn btn-outline-primary w-100" id="applyFilters">
                                <i class="fas fa-filter me-2"></i>Apply
                            </button>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="attendanceTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="office-tab" data-bs-toggle="tab" data-bs-target="#officeAttendance" type="button" role="tab">
                                <i class="fas fa-users me-1"></i> Office Staff
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="driver-tab" data-bs-toggle="tab" data-bs-target="#driverAttendance" type="button" role="tab">
                                <i class="fas fa-truck me-1"></i> Drivers
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#attendanceReports" type="button" role="tab">
                                <i class="fas fa-chart-bar me-1"></i> Reports
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leaveManagement" type="button" role="tab">
                                <i class="fas fa-calendar-minus me-1"></i> Leave Management
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#attendanceSettings" type="button" role="tab">
                                <i class="fas fa-cog me-1"></i> Settings
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content pt-3" id="attendanceTabContent">
                        <!-- Office Staff Attendance -->
                        <div class="tab-pane fade show active" id="officeAttendance" role="tabpanel">
                            <div class="table-responsive">
                                <table id="officeAttendanceTable" class="table table-hover table-bordered nowrap align-middle" style="width:100%">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Working Days</th>
                                            <th>Present</th>
                                            <th>Absent</th>
                                            <th>Leave</th>
                                            <th>Paid Leave</th>
                                            <th>Attendance %</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>EMP001</td>
                                            <td>Rajesh Kumar</td>
                                            <td>Accounts</td>
                                            <td>26</td>
                                            <td>24</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 92.3%" aria-valuenow="92.3" aria-valuemin="0" aria-valuemax="100">92.3%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP001" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP001">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP003</td>
                                            <td>Priya Sharma</td>
                                            <td>HR</td>
                                            <td>26</td>
                                            <td>25</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 96.2%" aria-valuenow="96.2" aria-valuemin="0" aria-valuemax="100">96.2%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP003" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP003">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP005</td>
                                            <td>Anita Desai</td>
                                            <td>Operations</td>
                                            <td>26</td>
                                            <td>22</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 84.6%" aria-valuenow="84.6" aria-valuemin="0" aria-valuemax="100">84.6%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP005" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP005">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Driver Attendance -->
                        <div class="tab-pane fade" id="driverAttendance" role="tabpanel">
                            <div class="table-responsive">
                                <table id="driverAttendanceTable" class="table table-hover table-bordered nowrap align-middle" style="width:100%">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Vehicle</th>
                                            <th>Working Days</th>
                                            <th>Present</th>
                                            <th>Absent</th>
                                            <th>Leave</th>
                                            <th>Paid Leave</th>
                                            <th>Allowance Days</th>
                                            <th>Attendance %</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>EMP002</td>
                                            <td>Mohan Singh</td>
                                            <td>Truck (DL1AB1234)</td>
                                            <td>26</td>
                                            <td>25</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>25</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 96.2%" aria-valuenow="96.2" aria-valuemin="0" aria-valuemax="100">96.2%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP002" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP002">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP004</td>
                                            <td>Vijay Patel</td>
                                            <td>Mini Truck (DL1CD5678)</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td>6</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 76.9%" aria-valuenow="76.9" aria-valuemin="0" aria-valuemax="100">76.9%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP004" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP004">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EMP006</td>
                                            <td>Sanjay Gupta</td>
                                            <td>Tempo (DL1EF9012)</td>
                                            <td>26</td>
                                            <td>23</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>23</td>
                                            <td>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 88.5%" aria-valuenow="88.5" aria-valuemin="0" aria-valuemax="100">88.5%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-primary view-details-btn me-1" data-employee-id="EMP006" data-month="6" data-year="2023">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning edit-attendance-btn" data-employee-id="EMP006">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Attendance Reports -->
                        <div class="tab-pane fade" id="attendanceReports" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-header bg-white">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Attendance Overview (Last 6 Months)</h5>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="reportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-download me-1"></i> Export
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="reportDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i>PDF</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2"></i>Excel</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv me-2"></i>CSV</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container" style="height: 350px;">
                                                <canvas id="attendanceTrendChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white">
                                            <h5 class="mb-0"><i class="fas fa-users me-2"></i>Office Staff Attendance</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container" style="height: 250px;">
                                                <canvas id="officeAttendanceChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="badge bg-success rounded-pill">95% Present</span>
                                                </div>
                                                <div class="col-4">
                                                    <span class="badge bg-danger rounded-pill">3% Absent</span>
                                                </div>
                                                <div class="col-4">
                                                    <span class="badge bg-warning rounded-pill">2% Leave</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white">
                                            <h5 class="mb-0"><i class="fas fa-truck me-2"></i>Driver Attendance</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container" style="height: 250px;">
                                                <canvas id="driverAttendanceChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="badge bg-success rounded-pill">89% Present</span>
                                                </div>
                                                <div class="col-4">
                                                    <span class="badge bg-danger rounded-pill">8% Absent</span>
                                                </div>
                                                <div class="col-4">
                                                    <span class="badge bg-info rounded-pill">3% On Route</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-header bg-white">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0"><i class="fas fa-table me-2"></i>Monthly Attendance Summary</h5>
                                                <div>
                                                    <button class="btn btn-sm btn-outline-primary me-2">
                                                        <i class="fas fa-print me-1"></i> Print
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success">
                                                        <i class="fas fa-download me-1"></i> Export
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Month</th>
                                                            <th>Working Days</th>
                                                            <th>Office Staff Present</th>
                                                            <th>Office Staff Absent</th>
                                                            <th>Drivers Present</th>
                                                            <th>Drivers Absent</th>
                                                            <th>Total Attendance %</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>June 2023</td>
                                                            <td>26</td>
                                                            <td>95%</td>
                                                            <td>5%</td>
                                                            <td>89%</td>
                                                            <td>11%</td>
                                                            <td>
                                                                <div class="progress" style="height: 20px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 2023</td>
                                                            <td>26</td>
                                                            <td>94%</td>
                                                            <td>6%</td>
                                                            <td>87%</td>
                                                            <td>13%</td>
                                                            <td>
                                                                <div class="progress" style="height: 20px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>April 2023</td>
                                                            <td>24</td>
                                                            <td>96%</td>
                                                            <td>4%</td>
                                                            <td>90%</td>
                                                            <td>10%</td>
                                                            <td>
                                                                <div class="progress" style="height: 20px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">93%</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-download"></i></button>
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

                        <!-- Leave Management -->
                        <div class="tab-pane fade" id="leaveManagement" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-header bg-white">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0"><i class="fas fa-calendar-minus me-2"></i>Leave Management</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLeaveModal">
                                                    <i class="fas fa-plus me-2"></i>Add Leave
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered" id="leaveManagementTable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Employee ID</th>
                                                            <th>Name</th>
                                                            <th>Leave Type</th>
                                                            <th>From Date</th>
                                                            <th>To Date</th>
                                                            <th>Days</th>
                                                            <th>Paid Leave</th>
                                                            <th>Reason</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>EMP003</td>
                                                            <td>Priya Sharma</td>
                                                            <td>Sick Leave</td>
                                                            <td>15/06/2023</td>
                                                            <td>16/06/2023</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>Fever</td>
                                                            <td><span class="badge bg-success rounded-pill">Approved</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button class="btn btn-sm btn-primary me-1"><i class="fas fa-eye"></i></button>
                                                                    <button class="btn btn-sm btn-success me-1"><i class="fas fa-edit"></i></button>
                                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP005</td>
                                                            <td>Anita Desai</td>
                                                            <td>Casual Leave</td>
                                                            <td>05/06/2023</td>
                                                            <td>07/06/2023</td>
                                                            <td>3</td>
                                                            <td>No</td>
                                                            <td>Family function</td>
                                                            <td><span class="badge bg-success rounded-pill">Approved</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button class="btn btn-sm btn-primary me-1"><i class="fas fa-eye"></i></button>
                                                                    <button class="btn btn-sm btn-success me-1"><i class="fas fa-edit"></i></button>
                                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP006</td>
                                                            <td>Sanjay Gupta</td>
                                                            <td>Earned Leave</td>
                                                            <td>20/06/2023</td>
                                                            <td>20/06/2023</td>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Personal work</td>
                                                            <td><span class="badge bg-warning rounded-pill">Pending</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button class="btn btn-sm btn-primary me-1"><i class="fas fa-eye"></i></button>
                                                                    <button class="btn btn-sm btn-success me-1"><i class="fas fa-edit"></i></button>
                                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Leave Balance Summary -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-header bg-white">
                                            <h5 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Leave Balance Summary</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Employee ID</th>
                                                            <th>Name</th>
                                                            <th>Department</th>
                                                            <th>Sick Leave</th>
                                                            <th>Casual Leave</th>
                                                            <th>Earned Leave</th>
                                                            <th>Paid Leave</th>
                                                            <th>Total Leaves</th>
                                                            <th>Leaves Taken</th>
                                                            <th>Balance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>EMP001</td>
                                                            <td>Rajesh Kumar</td>
                                                            <td>Accounts</td>
                                                            <td>5/5</td>
                                                            <td>7/7</td>
                                                            <td>12/15</td>
                                                            <td>5/5</td>
                                                            <td>32</td>
                                                            <td>3</td>
                                                            <td>29</td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP003</td>
                                                            <td>Priya Sharma</td>
                                                            <td>HR</td>
                                                            <td>4/5</td>
                                                            <td>5/7</td>
                                                            <td>10/15</td>
                                                            <td>3/5</td>
                                                            <td>32</td>
                                                            <td>8</td>
                                                            <td>24</td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP005</td>
                                                            <td>Anita Desai</td>
                                                            <td>Operations</td>
                                                            <td>3/5</td>
                                                            <td>6/7</td>
                                                            <td>14/15</td>
                                                            <td>4/5</td>
                                                            <td>32</td>
                                                            <td>4</td>
                                                            <td>28</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Attendance Settings -->
                        <div class="tab-pane fade" id="attendanceSettings" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-header bg-white">
                                            <h5 class="mb-0"><i class="fas fa-cog me-2"></i>Attendance Settings</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="attendanceSettingsForm">
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-header bg-light">
                                                                <h6 class="mb-0">Working Days Configuration</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Weekly Working Days</label>
                                                                    <div class="d-flex flex-wrap">
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="monday" checked>
                                                                            <label class="form-check-label" for="monday">Monday</label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="tuesday" checked>
                                                                            <label class="form-check-label" for="tuesday">Tuesday</label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="wednesday" checked>
                                                                            <label class="form-check-label" for="wednesday">Wednesday</label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="thursday" checked>
                                                                            <label class="form-check-label" for="thursday">Thursday</label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="friday" checked>
                                                                            <label class="form-check-label" for="friday">Friday</label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="saturday">
                                                                            <label class="form-check-label" for="saturday">Saturday</label>
                                                                        </div>
                                                                        <div class="form-check mb-2">
                                                                            <input class="form-check-input" type="checkbox" id="sunday">
                                                                            <label class="form-check-label" for="sunday">Sunday</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="mb-3">
                                                                    <label for="workingHours" class="form-label">Daily Working Hours</label>
                                                                    <input type="number" class="form-control" id="workingHours" value="8" min="1" max="24">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-header bg-light">
                                                                <h6 class="mb-0">Leave Policy</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="mb-3">
                                                                    <label for="sickLeave" class="form-label">Sick Leave (per year)</label>
                                                                    <input type="number" class="form-control" id="sickLeave" value="5" min="0">
                                                                </div>
                                                                
                                                                <div class="mb-3">
                                                                    <label for="casualLeave" class="form-label">Casual Leave (per year)</label>
                                                                    <input type="number" class="form-control" id="casualLeave" value="7" min="0">
                                                                </div>
                                                                
                                                                <div class="mb-3">
                                                                    <label for="earnedLeave" class="form-label">Earned Leave (per year)</label>
                                                                    <input type="number" class="form-control" id="earnedLeave" value="15" min="0">
                                                                </div>
                                                                
                                                                <div class="mb-3">
                                                                    <label for="paidLeave" class="form-label">Paid Leave (per year)</label>
                                                                    <input type="number" class="form-control" id="paidLeave" value="5" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-sm">
                                                            <div class="card-header bg-light">
                                                                <h6 class="mb-0">Holiday Calendar</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Select Year</label>
                                                                    <select class="form-select" id="holidayYear">
                                                                        <option>2023</option>
                                                                        <option>2024</option>
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered" id="holidayTable">
                                                                        <thead class="table-light">
                                                                            <tr>
                                                                                <th>Date</th>
                                                                                <th>Day</th>
                                                                                <th>Holiday Name</th>
                                                                                <th>Type</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>26-Jan-2023</td>
                                                                                <td>Thursday</td>
                                                                                <td>Republic Day</td>
                                                                                <td>National Holiday</td>
                                                                                <td>
                                                                                    <button class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fas fa-trash"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>15-Aug-2023</td>
                                                                                <td>Tuesday</td>
                                                                                <td>Independence Day</td>
                                                                                <td>National Holiday</td>
                                                                                <td>
                                                                                    <button class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fas fa-trash"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02-Oct-2023</td>
                                                                                <td>Monday</td>
                                                                                <td>Gandhi Jayanti</td>
                                                                                <td>National Holiday</td>
                                                                                <td>
                                                                                    <button class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fas fa-trash"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                
                                                                <div class="mt-3">
                                                                    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addHolidayModal">
                                                                        <i class="fas fa-plus me-2"></i>Add Holiday
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mt-4">
                                                    <div class="col-md-12 text-end">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fas fa-save me-2"></i>Save Settings
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
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

    <!-- Mark Attendance Modal -->
    <div class="modal fade" id="markAttendanceModal" tabindex="-1" aria-labelledby="markAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="markAttendanceModalLabel"><i class="fas fa-calendar-plus me-2"></i>Mark Attendance</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="attendanceForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="attendanceDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="attendanceDate" name="attendance_date" required>
                            </div>
                            <div class="col-md-3">
                                <label for="employee_type" class="form-label">Employee Type</label>
                                <select class="form-select" id="employee_type" name="employee_type" required>
                                    <option value="">Select Type</option>
                                    <option value="1">Office Staff</option>
                                    <option value="2">Drivers</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="attendanceDepartment" class="form-label">Department</label>
                                <select class="form-select" id="attendanceDepartment" name="department">
                                    <option value="">All Departments</option>
                                    <option value="operations">Operations</option>
                                    <option value="accounts">Accounts</option>
                                    <option value="hr">HR</option>
                                    <option value="logistics">Logistics</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="attendanceStatus" class="form-label">Default Status</label>
                                <select class="form-select" id="attendanceStatus" name="default_status">
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                    <option value="Leave">Leave</option>
                                    <option value="Half Day">Half Day</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="attendance-table" class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th width="5%">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="selectAllEmployees">
                                            </div>
                                        </th>
                                        <th width="15%">Employee ID</th>
                                        <th width="20%">Name</th>
                                        <th width="15%">Type</th>
                                        <th width="15%">Department</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input employee-checkbox" type="checkbox" name="employees[]" value="EMP001">
                                            </div>
                                        </td>
                                        <td>EMP001</td>
                                        <td>Rajesh Kumar</td>
                                        <td>Office Staff</td>
                                        <td>Accounts</td>
                                        <td>
                                            <select class="form-select form-select-sm attendance-status" name="status[EMP001]">
                                                <option value="Present">Present</option>
                                                <option value="Absent">Absent</option>
                                                <option value="Leave">Leave</option>
                                                <option value="Half Day">Half Day</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="remarks[EMP001]">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input employee-checkbox" type="checkbox" name="employees[]" value="EMP002">
                                            </div>
                                        </td>
                                        <td>EMP002</td>
                                        <td>Mohan Singh</td>
                                        <td>Driver</td>
                                        <td>Logistics</td>
                                        <td>
                                            <select class="form-select form-select-sm attendance-status" name="status[EMP002]">
                                                <option value="Present">Present</option>
                                                <option value="Absent">Absent</option>
                                                <option value="Leave">Leave</option>
                                                <option value="Half Day">Half Day</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="remarks[EMP002]">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Attendance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bulk Attendance Update Modal -->
    <div class="modal fade" id="bulkAttendanceModal" tabindex="-1" aria-labelledby="bulkAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="bulkAttendanceModalLabel"><i class="fas fa-calendar-alt me-2"></i>Bulk Attendance Update</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bulkAttendanceForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="bulkFromDate" class="form-label">From Date</label>
                                <input type="date" class="form-control" id="bulkFromDate" name="from_date" required>
                            </div>
                            <div class="col-md-3">
                                <label for="bulkToDate" class="form-label">To Date</label>
                                <input type="date" class="form-control" id="bulkToDate" name="to_date" required>
                            </div>
                            <div class="col-md-3">
                                <label for="bulkEmployeeType" class="form-label">Employee Type</label>
                                <select class="form-select" id="bulkEmployeeType" name="employee_type" required>
                                    <option value="">Select Type</option>
                                    <option value="1">Office Staff</option>
                                    <option value="2">Drivers</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="bulkStatus" class="form-label">Status</label>
                                <select class="form-select" id="bulkStatus" name="status" required>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                    <option value="Leave">Leave</option>
                                    <option value="Half Day">Half Day</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="bulkDepartment" class="form-label">Department</label>
                                <select class="form-select" id="bulkDepartment" name="department">
                                    <option value="">All Departments</option>
                                    <option value="operations">Operations</option>
                                    <option value="accounts">Accounts</option>
                                    <option value="hr">HR</option>
                                    <option value="logistics">Logistics</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="bulkRemarks" class="form-label">Remarks</label>
                                <input type="text" class="form-control" id="bulkRemarks" name="remarks">
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Select Employees</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bulkAttendanceTable" class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th width="5%">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="selectAllBulkEmployees">
                                                    </div>
                                                </th>
                                                <th width="15%">Employee ID</th>
                                                <th width="25%">Name</th>
                                                <th width="15%">Type</th>
                                                <th width="20%">Department</th>
                                                <th width="20%">Current Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input bulk-employee-checkbox" type="checkbox" name="bulk_employees[]" value="EMP001">
                                                    </div>
                                                </td>
                                                <td>EMP001</td>
                                                <td>Rajesh Kumar</td>
                                                <td>Office Staff</td>
                                                <td>Accounts</td>
                                                <td><span class="badge bg-success">Present</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input bulk-employee-checkbox" type="checkbox" name="bulk_employees[]" value="EMP002">
                                                    </div>
                                                </td>
                                                <td>EMP002</td>
                                                <td>Mohan Singh</td>
                                                <td>Driver</td>
                                                <td>Logistics</td>
                                                <td><span class="badge bg-success">Present</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i> This will update attendance records for all selected employees from <span id="bulkDateRange"></span> to <span id="bulkStatusText"></span> status.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Attendance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Leave Modal -->
    <div class="modal fade" id="addLeaveModal" tabindex="-1" aria-labelledby="addLeaveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addLeaveModalLabel"><i class="fas fa-calendar-plus me-2"></i>Add Leave</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="leaveForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="leaveEmployee" class="form-label">Employee</label>
                                <select class="form-select" id="leaveEmployee" name="employee_id" required>
                                    <option value="">Select Employee</option>
                                    <option value="EMP001">Rajesh Kumar (EMP001)</option>
                                    <option value="EMP002">Mohan Singh (EMP002)</option>
                                    <option value="EMP003">Priya Sharma (EMP003)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="leaveType" class="form-label">Leave Type</label>
                                <select class="form-select" id="leaveType" name="leave_type" required>
                                    <option value="">Select Leave Type</option>
                                    <option value="Sick Leave">Sick Leave</option>
                                    <option value="Casual Leave">Casual Leave</option>
                                    <option value="Earned Leave">Earned Leave</option>
                                    <option value="Paid Leave">Paid Leave</option>
                                    <option value="Unpaid Leave">Unpaid Leave</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="leaveFromDate" class="form-label">From Date</label>
                                <input type="date" class="form-control" id="leaveFromDate" name="from_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="leaveToDate" class="form-label">To Date</label>
                                <input type="date" class="form-control" id="leaveToDate" name="to_date" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="leaveDays" class="form-label">Total Days</label>
                                <input type="number" class="form-control" id="leaveDays" name="days" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Paid Leave</label>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="paidLeave" name="paid_leave">
                                    <label class="form-check-label" for="paidLeave">Mark as paid leave</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="leaveReason" class="form-label">Reason</label>
                            <textarea class="form-control" id="leaveReason" name="reason" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="leaveAttachment" class="form-label">Attachment (if any)</label>
                            <input class="form-control" type="file" id="leaveAttachment" name="attachment">
                        </div>
                        
                        <div class="alert alert-info">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="fas fa-info-circle fa-2x"></i>
                                </div>
                                <div>
                                    <strong>Leave Balance:</strong>
                                    <div id="leaveBalanceInfo">Please select an employee to view leave balance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit Leave</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Holiday Modal -->
    <div class="modal fade" id="addHolidayModal" tabindex="-1" aria-labelledby="addHolidayModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addHolidayModalLabel"><i class="fas fa-calendar-day me-2"></i>Add Holiday</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="holidayForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="holidayDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="holidayDate" name="date" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="holidayName" class="form-label">Holiday Name</label>
                            <input type="text" class="form-control" id="holidayName" name="name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="holidayType" class="form-label">Holiday Type</label>
                            <select class="form-select" id="holidayType" name="type" required>
                                <option value="National Holiday">National Holiday</option>
                                <option value="Regional Holiday">Regional Holiday</option>
                                <option value="Company Holiday">Company Holiday</option>
                                <option value="Optional Holiday">Optional Holiday</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="holidayDescription" class="form-label">Description (Optional)</label>
                            <textarea class="form-control" id="holidayDescription" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Attendance Details Modal -->
    <div class="modal fade" id="viewAttendanceModal" tabindex="-1" aria-labelledby="viewAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="viewAttendanceModalLabel"><i class="fas fa-calendar-alt me-2"></i>Attendance Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Employee ID:</strong> <span id="detailEmpId">EMP001</span></p>
                                            <p><strong>Name:</strong> <span id="detailEmpName">Rajesh Kumar</span></p>
                                            <p><strong>Department:</strong> <span id="detailEmpDept">Accounts</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Employee Type:</strong> <span id="detailEmpType">Office Staff</span></p>
                                            <p><strong>Month:</strong> <span id="detailMonth">June 2023</span></p>
                                            <p><strong>Working Days:</strong> <span id="detailWorkingDays">26</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row h-100">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100 bg-success bg-opacity-10">
                                        <div class="card-body text-center">
                                            <h6 class="text-success">Present Days</h6>
                                            <h2 class="text-success" id="detailPresentDays">24</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100 bg-danger bg-opacity-10">
                                        <div class="card-body text-center">
                                            <h6 class="text-danger">Absent Days</h6>
                                            <h2 class="text-danger" id="detailAbsentDays">2</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 bg-primary bg-opacity-10">
                                        <div class="card-body text-center">
                                            <h6 class="text-primary">Attendance %</h6>
                                            <h2 class="text-primary" id="detailAttendancePercent">92.3%</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Daily Attendance Record</h6>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-download me-1"></i> Export
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i>PDF</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2"></i>Excel</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv me-2"></i>CSV</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="dailyAttendanceTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Day</th>
                                                    <th>Status</th>
                                                    <th>Check In</th>
                                                    <th>Check Out</th>
                                                    <th>Working Hours</th>
                                                    <th>Remarks</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01/06/2023</td>
                                                    <td>Thursday</td>
                                                    <td><span class="badge bg-success">Present</span></td>
                                                    <td>09:05 AM</td>
                                                    <td>06:15 PM</td>
                                                    <td>8.5</td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02/06/2023</td>
                                                    <td>Friday</td>
                                                    <td><span class="badge bg-success">Present</span></td>
                                                    <td>09:15 AM</td>
                                                    <td>05:45 PM</td>
                                                    <td>8.0</td>
                                                    <td>Late arrival</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>05/06/2023</td>
                                                    <td>Monday</td>
                                                    <td><span class="badge bg-danger">Absent</span></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>0.0</td>
                                                    <td>Personal work</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>06/06/2023</td>
                                                    <td>Tuesday</td>
                                                    <td><span class="badge bg-success">Present</span></td>
                                                    <td>08:55 AM</td>
                                                    <td>06:30 PM</td>
                                                    <td>9.0</td>
                                                    <td>Overtime</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Monthly Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container" style="height: 250px;">
                                        <canvas id="employeeMonthlyChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Leave History (Last 6 Months)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Month</th>
                                                    <th>Sick Leave</th>
                                                    <th>Casual Leave</th>
                                                    <th>Earned Leave</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>June 2023</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>May 2023</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>April 2023</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-download me-2"></i>Download Report</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Attendance Modal -->
    <div class="modal fade" id="editAttendanceModal" tabindex="-1" aria-labelledby="editAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editAttendanceModalLabel"><i class="fas fa-edit me-2"></i>Edit Attendance</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editAttendanceForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><strong>Employee ID:</strong> <span id="editEmpId">EMP001</span></p>
                                <p><strong>Name:</strong> <span id="editEmpName">Rajesh Kumar</span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Date:</strong> <span id="editAttendanceDate">01/06/2023</span></p>
                                <p><strong>Day:</strong> <span id="editAttendanceDay">Monday</span></p>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="editAttendanceStatus" class="form-label">Status</label>
                            <select class="form-select" id="editAttendanceStatus" name="status" required>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                                <option value="Leave">Leave</option>
                                <option value="Half Day">Half Day</option>
                            </select>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editCheckIn" class="form-label">Check In</label>
                                <input type="time" class="form-control" id="editCheckIn" name="check_in">
                            </div>
                            <div class="col-md-6">
                                <label for="editCheckOut" class="form-label">Check Out</label>
                                <input type="time" class="form-control" id="editCheckOut" name="check_out">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="editRemarks" class="form-label">Remarks</label>
                            <textarea class="form-control" id="editRemarks" name="remarks" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>

<script>
    // Initialize DataTables with enhanced features
    $(document).ready(function() {
        // Main attendance tables
        $('#officeAttendanceTable, #driverAttendanceTable').DataTable({
            responsive: true,
            dom: '<"top"fB>rt<"bottom"lip><"clear">',
            buttons: [
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel me-2"></i>Excel',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf me-2"></i>PDF',
                    className: 'btn btn-danger btn-sm'
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print me-2"></i>Print',
                    className: 'btn btn-secondary btn-sm'
                }
            ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search...",
                lengthMenu: "_MENU_ records per page"
            }
        });
        
        // Leave management table
        $('#leaveManagementTable').DataTable({
            responsive: true,
            order: [[3, 'desc']] // Sort by from date descending
        });
        
        // Holiday table
        $('#holidayTable').DataTable({
            responsive: true,
            order: [[0, 'asc']] // Sort by date ascending
        });
        
        // Daily attendance table in view modal
        $('#dailyAttendanceTable').DataTable({
            responsive: true,
            order: [[0, 'asc']], // Sort by date ascending
            dom: '<"top">rt<"bottom"lip><"clear">',
            paging: false
        });
    });

    // Initialize charts
    function initCharts() {
        // Attendance Trend Chart
        const attendanceTrendCtx = document.getElementById('attendanceTrendChart').getContext('2d');
        const attendanceTrendChart = new Chart(attendanceTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Office Staff',
                        data: [94, 93, 95, 96, 94, 95],
                        borderColor: '#3498db',
                        backgroundColor: 'rgba(52, 152, 219, 0.1)',
                        tension: 0.3,
                        fill: true,
                        borderWidth: 2,
                        pointBackgroundColor: '#3498db',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    },
                    {
                        label: 'Drivers',
                        data: [85, 86, 88, 90, 87, 89],
                        borderColor: '#f39c12',
                        backgroundColor: 'rgba(243, 156, 18, 0.1)',
                        tension: 0.3,
                        fill: true,
                        borderWidth: 2,
                        pointBackgroundColor: '#f39c12',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    },
                    {
                        label: 'Overall',
                        data: [89, 89, 91, 93, 90, 92],
                        borderColor: '#2ecc71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        tension: 0.3,
                        fill: true,
                        borderWidth: 2,
                        pointBackgroundColor: '#2ecc71',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 80,
                        max: 100,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        },
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw + '%';
                            }
                        },
                        backgroundColor: '#2c3e50',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 6
                    },
                    legend: {
                        position: 'top',
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            font: {
                                size: 12
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });

        // Office Attendance Chart
        const officeAttendanceCtx = document.getElementById('officeAttendanceChart').getContext('2d');
        const officeAttendanceChart = new Chart(officeAttendanceCtx, {
            type: 'doughnut',
            data: {
                labels: ['Present', 'Absent', 'Leave'],
                datasets: [{
                    data: [95, 3, 2],
                    backgroundColor: [
                        '#2ecc71',
                        '#e74c3c',
                        '#f39c12'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        },
                        backgroundColor: '#2c3e50',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 6
                    }
                }
            }
        });

        // Driver Attendance Chart
        const driverAttendanceCtx = document.getElementById('driverAttendanceChart').getContext('2d');
        const driverAttendanceChart = new Chart(driverAttendanceCtx, {
            type: 'doughnut',
            data: {
                labels: ['Present', 'Absent', 'On Route'],
                datasets: [{
                    data: [89, 8, 3],
                    backgroundColor: [
                        '#2ecc71',
                        '#e74c3c',
                        '#3498db'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        },
                        backgroundColor: '#2c3e50',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 6
                    }
                }
            }
        });

        // Employee Monthly Chart in view modal
        const employeeMonthlyCtx = document.getElementById('employeeMonthlyChart').getContext('2d');
        const employeeMonthlyChart = new Chart(employeeMonthlyCtx, {
            type: 'bar',
            data: {
                labels: ['Present', 'Absent', 'Leave', 'Half Day'],
                datasets: [{
                    label: 'June 2023',
                    data: [24, 2, 0, 0],
                    backgroundColor: [
                        '#2ecc71',
                        '#e74c3c',
                        '#f39c12',
                        '#3498db'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        },
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#2c3e50',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 6
                    }
                }
            }
        });
    }

    // Initialize charts when page loads
    document.addEventListener('DOMContentLoaded', function() {
        initCharts();
    });

    // AJAX form submission for attendance
    $("#attendanceForm").submit(function(e) {
        e.preventDefault();
        $(".btn-primary[type='submit']").prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Saving...');

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false).html('Save Attendance');
                if (!data.error) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                        showConfirmButton: true,
                        timer: 2000
                    }).then((result) => {
                        $('#markAttendanceModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Save Attendance');
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Save Attendance');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred!',
                        text: 'Something went wrong please try again',
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    // Bulk attendance form submission
    $("#bulkAttendanceForm").submit(function(e) {
        e.preventDefault();
        $(".btn-primary[type='submit']").prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Updating...');

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}', // update
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false).html('Update Attendance');
                if (!data.error) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                        showConfirmButton: true,
                        timer: 2000
                    }).then((result) => {
                        $('#bulkAttendanceModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Update Attendance');
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Update Attendance');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred!',
                        text: 'Something went wrong please try again',
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    // Leave form submission
    $("#leaveForm").submit(function(e) {
        e.preventDefault();
        $(".btn-primary[type='submit']").prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Submitting...');

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}', // leave
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false).html('Submit Leave');
                if (!data.error) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                        showConfirmButton: true,
                        timer: 2000
                    }).then((result) => {
                        $('#addLeaveModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Submit Leave');
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Submit Leave');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred!',
                        text: 'Something went wrong please try again',
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    // Holiday form submission
    $("#holidayForm").submit(function(e) {
        e.preventDefault();
        $(".btn-primary[type='submit']").prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Adding...');

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}', // holiday
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false).html('Add Holiday');
                if (!data.error) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                        showConfirmButton: true,
                        timer: 2000
                    }).then((result) => {
                        $('#addHolidayModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Add Holiday');
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Add Holiday');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred!',
                        text: 'Something went wrong please try again',
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    // Edit attendance form submission
    $("#editAttendanceForm").submit(function(e) {
        e.preventDefault();
        $(".btn-primary[type='submit']").prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Saving...');

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}', // update
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false).html('Save Changes');
                if (!data.error) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.success,
                        showConfirmButton: true,
                        timer: 2000
                    }).then((result) => {
                        $('#editAttendanceModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Save Changes');
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false).html('Save Changes');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error occurred!',
                        text: 'Something went wrong please try again',
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    // View attendance details
    $(document).on('click', '.view-details-btn', function() {
        var employeeId = $(this).data('employee-id');
        var month = $(this).data('month');
        var year = $(this).data('year');
        
        // Show loading state
        $('#viewAttendanceModal').modal('show');
        $('#viewAttendanceModal .modal-body').html('<div class="text-center py-5"><i class="fas fa-spinner fa-spin fa-3x"></i><p class="mt-3">Loading attendance details...</p></div>');
        
        // Fetch data via AJAX
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}',
            type: 'GET',
            data: {
                employee_id: employeeId,
                month: month,
                year: year
            },
            success: function(data) {
                if (!data.error) {
                    // Update modal with fetched data
                    $('#detailEmpId').text(data.employee_id);
                    $('#detailEmpName').text(data.name);
                    $('#detailEmpDept').text(data.department);
                    $('#detailEmpType').text(data.employee_type);
                    $('#detailMonth').text(data.month + ' ' + data.year);
                    $('#detailWorkingDays').text(data.working_days);
                    $('#detailPresentDays').text(data.present_days);
                    $('#detailAbsentDays').text(data.absent_days);
                    $('#detailAttendancePercent').text(data.attendance_percent + '%');
                    
                    // Update daily attendance table
                    var dailyTable = $('#dailyAttendanceTable').DataTable();
                    dailyTable.clear();
                    $.each(data.daily_attendance, function(index, record) {
                        dailyTable.row.add([
                            record.date,
                            record.day,
                            '<span class="badge bg-' + record.status_class + '">' + record.status + '</span>',
                            record.check_in || '-',
                            record.check_out || '-',
                            record.working_hours,
                            record.remarks,
                            '<button class="btn btn-sm btn-outline-primary edit-daily-btn" data-id="' + record.id + '"><i class="fas fa-edit"></i></button>'
                        ]);
                    });
                    dailyTable.draw();
                    
                    // Update charts
                    updateEmployeeChart(data.chart_data);
                    
                    // Show the actual content
                    $('#viewAttendanceModal .modal-body').html($('#viewAttendanceModal .modal-body').html());
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                    $('#viewAttendanceModal').modal('hide');
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error occurred!',
                    text: 'Something went wrong while fetching attendance details',
                    showConfirmButton: true
                });
                $('#viewAttendanceModal').modal('hide');
            }
        });
    });

    // Function to update employee chart
    function updateEmployeeChart(chartData) {
        const ctx = document.getElementById('employeeMonthlyChart').getContext('2d');
        if (window.employeeMonthlyChart) {
            window.employeeMonthlyChart.destroy();
        }
        
        window.employeeMonthlyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Monthly Summary',
                    data: chartData.data,
                    backgroundColor: chartData.backgroundColor,
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        },
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#2c3e50',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 6
                    }
                }
            }
        });
    }

    // Edit daily attendance
    $(document).on('click', '.edit-daily-btn', function() {
        var recordId = $(this).data('id');
        
        // Fetch record data via AJAX
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}',
            type: 'GET',
            data: {
                id: recordId
            },
            success: function(data) {
                if (!data.error) {
                    // Populate edit form
                    $('#editEmpId').text(data.employee_id);
                    $('#editEmpName').text(data.employee_name);
                    $('#editAttendanceDate').text(data.date);
                    $('#editAttendanceDay').text(data.day);
                    $('#editAttendanceStatus').val(data.status);
                    $('#editCheckIn').val(data.check_in);
                    $('#editCheckOut').val(data.check_out);
                    $('#editRemarks').val(data.remarks);
                    
                    // Set record ID in form
                    $('#editAttendanceForm').append('<input type="hidden" name="id" value="' + data.id + '">');
                    
                    // Show edit modal
                    $('#editAttendanceModal').modal('show');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error occurred!',
                    text: 'Something went wrong while fetching record details',
                    showConfirmButton: true
                });
            }
        });
    });

    // Select all employees in mark attendance
    $('#selectAllEmployees').change(function() {
        $('.employee-checkbox').prop('checked', $(this).prop('checked'));
    });

    // Select all employees in bulk attendance
    $('#selectAllBulkEmployees').change(function() {
        $('.bulk-employee-checkbox').prop('checked', $(this).prop('checked'));
    });

    // Update bulk attendance summary
    $('#bulkFromDate, #bulkToDate, #bulkStatus').change(function() {
        var fromDate = $('#bulkFromDate').val();
        var toDate = $('#bulkToDate').val();
        var status = $('#bulkStatus option:selected').text();
        
        if (fromDate && toDate) {
            $('#bulkDateRange').text(fromDate + ' to ' + toDate);
            $('#bulkStatusText').text(status.toLowerCase());
        }
    });

    // Calculate leave days
    $('#leaveFromDate, #leaveToDate').change(function() {
        var fromDate = new Date($('#leaveFromDate').val());
        var toDate = new Date($('#leaveToDate').val());
        
        if (fromDate && toDate) {
            // Calculate difference in days
            var diffTime = Math.abs(toDate - fromDate);
            var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // +1 to include both start and end dates
            
            $('#leaveDays').val(diffDays);
        }
    });

    // Fetch leave balance when employee is selected
    $('#leaveEmployee').change(function() {
        var employeeId = $(this).val();
        
        if (employeeId) {
            // Fetch leave balance via AJAX
            $.ajax({
                url: '{{ route("Attendance-Management.store") }}', // balace leave
                type: 'GET',
                data: {
                    employee_id: employeeId
                },
                success: function(data) {
                    if (!data.error) {
                        var balanceInfo = '<ul class="list-unstyled mb-0">';
                        balanceInfo += '<li><strong>Sick Leave:</strong> ' + data.sick_leave_used + '/' + data.sick_leave_total + ' days</li>';
                        balanceInfo += '<li><strong>Casual Leave:</strong> ' + data.casual_leave_used + '/' + data.casual_leave_total + ' days</li>';
                        balanceInfo += '<li><strong>Earned Leave:</strong> ' + data.earned_leave_used + '/' + data.earned_leave_total + ' days</li>';
                        balanceInfo += '<li><strong>Paid Leave:</strong> ' + data.paid_leave_used + '/' + data.paid_leave_total + ' days</li>';
                        balanceInfo += '</ul>';
                        
                        $('#leaveBalanceInfo').html(balanceInfo);
                    } else {
                        $('#leaveBalanceInfo').html('<div class="text-danger">' + data.error + '</div>');
                    }
                },
                error: function() {
                    $('#leaveBalanceInfo').html('<div class="text-danger">Error fetching leave balance</div>');
                }
            });
        } else {
            $('#leaveBalanceInfo').html('Please select an employee to view leave balance');
        }
    });

    // Apply filters
    $('#applyFilters').click(function() {
        var year = $('#yearSelect').val();
        var month = $('#monthSelect').val();
        var employeeType = $('#employeeType').val();
        var department = $('#departmentSelect').val();
        var status = $('#statusSelect').val();
        
        // Show loading state
        var currentTab = $('.nav-tabs .nav-link.active').attr('id');
        $('#' + currentTab.replace('-tab', '')).html('<div class="text-center py-5"><i class="fas fa-spinner fa-spin fa-3x"></i><p class="mt-3">Loading data...</p></div>');
        
        // Fetch filtered data via AJAX 
        $.ajax({
            url: '{{ route("Attendance-Management.store") }}',
            type: 'GET',
            data: {
                year: year,
                month: month,
                employee_type: employeeType,
                department: department,
                status: status
            },
            success: function(data) {
                if (!data.error) {
                    // Update the active tab content
                    if (currentTab === 'office-tab') {
                        $('#officeAttendance').html(data.office_view);
                        $('#officeAttendanceTable').DataTable({
                            responsive: true,
                            dom: '<"top"fB>rt<"bottom"lip><"clear">',
                            buttons: [
                                {
                                    extend: 'excel',
                                    text: '<i class="fas fa-file-excel me-2"></i>Excel',
                                    className: 'btn btn-success btn-sm'
                                },
                                {
                                    extend: 'pdf',
                                    text: '<i class="fas fa-file-pdf me-2"></i>PDF',
                                    className: 'btn btn-danger btn-sm'
                                },
                                {
                                    extend: 'print',
                                    text: '<i class="fas fa-print me-2"></i>Print',
                                    className: 'btn btn-secondary btn-sm'
                                }
                            ]
                        });
                    } else if (currentTab === 'driver-tab') {
                        $('#driverAttendance').html(data.driver_view);
                        $('#driverAttendanceTable').DataTable({
                            responsive: true,
                            dom: '<"top"fB>rt<"bottom"lip><"clear">',
                            buttons: [
                                {
                                    extend: 'excel',
                                    text: '<i class="fas fa-file-excel me-2"></i>Excel',
                                    className: 'btn btn-success btn-sm'
                                },
                                {
                                    extend: 'pdf',
                                    text: '<i class="fas fa-file-pdf me-2"></i>PDF',
                                    className: 'btn btn-danger btn-sm'
                                },
                                {
                                    extend: 'print',
                                    text: '<i class="fas fa-print me-2"></i>Print',
                                    className: 'btn btn-secondary btn-sm'
                                }
                            ]
                        });
                    } else if (currentTab === 'reports-tab') {
                        $('#attendanceReports').html(data.reports_view);
                        initCharts(); // Reinitialize charts
                    } else if (currentTab === 'leave-tab') {
                        $('#leaveManagement').html(data.leave_view);
                        $('#leaveManagementTable').DataTable({
                            responsive: true,
                            order: [[3, 'desc']]
                        });
                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.error,
                        showConfirmButton: true
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error occurred!',
                    text: 'Something went wrong while filtering data',
                    showConfirmButton: true
                });
            }
        });
    });

    // Set default attendance date to today
    $('#markAttendanceModal').on('show.bs.modal', function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
        var yyyy = today.getFullYear();
        
        today = yyyy + '-' + mm + '-' + dd;
        $('#attendanceDate').val(today);
    });

    // Set default bulk dates
    $('#bulkAttendanceModal').on('show.bs.modal', function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        
        $('#bulkFromDate').val(yyyy + '-' + mm + '-' + dd);
        $('#bulkToDate').val(yyyy + '-' + mm + '-' + dd);
        $('#bulkDateRange').text($('#bulkFromDate').val() + ' to ' + $('#bulkToDate').val());
        $('#bulkStatusText').text($('#bulkStatus option:selected').text().toLowerCase());
    });

    // Set default leave dates
    $('#addLeaveModal').on('show.bs.modal', function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        
        $('#leaveFromDate').val(yyyy + '-' + mm + '-' + dd);
        $('#leaveToDate').val(yyyy + '-' + mm + '-' + dd);
        $('#leaveDays').val(1);
    });

    // Set default holiday date
    $('#addHolidayModal').on('show.bs.modal', function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        
        $('#holidayDate').val(yyyy + '-' + mm + '-' + dd);
    });

    // Helper function to reset error messages
    function resetErrors() {
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
    }

    // Helper function to display error messages
    function printErrMsg(errors) {
        $.each(errors, function(key, value) {
            var element = $('[name="' + key + '"]');
            element.addClass('is-invalid');
            element.after('<div class="invalid-feedback">' + value + '</div>');
        });
    }

    // Initialize tooltips
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    });
</script>