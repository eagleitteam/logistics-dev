<x-admin.layout>
    <x-slot name="title">Attendance Management</x-slot>
    <x-slot name="heading">Attendance Management</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-calendar-check me-2"></i> Attendance Management</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#markAttendanceModal">
                            <i class="fas fa-calendar-plus me-2"></i>Mark Attendance
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Filter Section -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <label for="monthSelect" class="form-label">Month</label>
                            <select class="form-select" id="monthSelect">
                                <option>June 2023</option>
                                <option>May 2023</option>
                                <option>April 2023</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="employeeType" class="form-label">Employee Type</label>
                            <select class="form-select" id="employeeType">
                                <option>All Employees</option>
                                <option>Office Staff</option>
                                <option>Drivers</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="departmentSelect" class="form-label">Department</label>
                            <select class="form-select" id="departmentSelect">
                                <option>All Departments</option>
                                <option>Operations</option>
                                <option>Accounts</option>
                                <option>HR</option>
                                <option>Logistics</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="statusSelect" class="form-label">Status</label>
                            <select class="form-select" id="statusSelect">
                                <option>All Statuses</option>
                                <option>Present</option>
                                <option>Absent</option>
                                <option>On Leave</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="attendanceTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="office-tab" data-bs-toggle="tab" data-bs-target="#officeAttendance" type="button" role="tab">Office Staff</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="driver-tab" data-bs-toggle="tab" data-bs-target="#driverAttendance" type="button" role="tab">Drivers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#attendanceReports" type="button" role="tab">Reports</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leaveManagement" type="button" role="tab">Leave Management</button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="attendanceTabContent">
                        <!-- Office Staff Attendance -->
                        <div class="tab-pane fade show active" id="officeAttendance" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table id="officeAttendanceTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Working Days</th>
                                            <th>Present</th>
                                            <th>Absent</th>
                                            <th>Leave</th>
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
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Driver Attendance -->
                        <div class="tab-pane fade" id="driverAttendance" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table id="driverAttendanceTable" class="table table-bordered nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Vehicle</th>
                                            <th>Working Days</th>
                                            <th>Present</th>
                                            <th>Absent</th>
                                            <th>Leave</th>
                                            <th>Allowance Days</th>
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
                                            <td>25</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
                                            <td>20</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
                                            <td>23</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fas fa-chart-line me-2"></i>Attendance Overview (Last 6 Months)</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="attendanceTrendChart" height="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fas fa-users me-2"></i>Office Staff Attendance</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="officeAttendanceChart" height="250"></canvas>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <span class="badge bg-success">95% Attendance Rate</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fas fa-truck me-2"></i>Driver Attendance</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="driverAttendanceChart" height="250"></canvas>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <span class="badge bg-warning">89% Attendance Rate</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fas fa-table me-2"></i>Monthly Attendance Summary</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
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
                                                            <td>92%</td>
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
                                                            <td>90%</td>
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
                                                            <td>93%</td>
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
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fas fa-calendar-minus me-2"></i>Leave Management</h5>
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-plus me-2"></i>Add Leave</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Employee ID</th>
                                                            <th>Name</th>
                                                            <th>Leave Type</th>
                                                            <th>From Date</th>
                                                            <th>To Date</th>
                                                            <th>Days</th>
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
                                                            <td>Fever</td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP005</td>
                                                            <td>Anita Desai</td>
                                                            <td>Casual Leave</td>
                                                            <td>05/06/2023</td>
                                                            <td>07/06/2023</td>
                                                            <td>3</td>
                                                            <td>Family function</td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>EMP006</td>
                                                            <td>Sanjay Gupta</td>
                                                            <td>Earned Leave</td>
                                                            <td>20/06/2023</td>
                                                            <td>20/06/2023</td>
                                                            <td>1</td>
                                                            <td>Personal work</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
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
    
    <!-- Mark Attendance Modal -->
    <div class="modal fade" id="markAttendanceModal" tabindex="-1" aria-labelledby="markAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="markAttendanceModalLabel"><i class="fas fa-calendar-plus me-2"></i>Mark Attendance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="attendanceForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label for="attendanceDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="attendanceDate" name="date" required>
                            </div>
                            <div class="col-md-4">
                                <label for="attendanceEmployeeType" class="form-label">Employee Type</label>
                                <select class="form-select" id="attendanceEmployeeType" name="employee_type" required>
                                    <option value="">All Employees</option>
                                    <option value="office">Office Staff</option>
                                    <option value="driver">Drivers</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="attendanceDepartment" class="form-label">Department</label>
                                <select class="form-select" id="attendanceDepartment" name="department">
                                    <option value="">All Departments</option>
                                    <option value="operations">Operations</option>
                                    <option value="accounts">Accounts</option>
                                    <option value="hr">HR</option>
                                    <option value="logistics">Logistics</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EMP001</td>
                                        <td>Rajesh Kumar</td>
                                        <td><span class="badge bg-primary">Office Staff</span></td>
                                        <td>Accounts</td>
                                        <td>
                                            <select class="form-select" name="status[EMP001]">
                                                <option value="present">Present</option>
                                                <option value="absent">Absent</option>
                                                <option value="leave">Leave</option>
                                                <option value="halfday">Half Day</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="remarks[EMP001]" placeholder="Remarks">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP002</td>
                                        <td>Mohan Singh</td>
                                        <td><span class="badge bg-warning">Driver</span></td>
                                        <td>Logistics</td>
                                        <td>
                                            <select class="form-select" name="status[EMP002]">
                                                <option value="present">Present</option>
                                                <option value="absent">Absent</option>
                                                <option value="leave">Leave</option>
                                                <option value="onroute">On Route</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="remarks[EMP002]" placeholder="Remarks">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP003</td>
                                        <td>Priya Sharma</td>
                                        <td><span class="badge bg-primary">Office Staff</span></td>
                                        <td>HR</td>
                                        <td>
                                            <select class="form-select" name="status[EMP003]">
                                                <option value="present">Present</option>
                                                <option value="absent">Absent</option>
                                                <option value="leave" selected>Leave</option>
                                                <option value="halfday">Half Day</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="remarks[EMP003]" placeholder="Remarks" value="Sick leave">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP004</td>
                                        <td>Vijay Patel</td>
                                        <td><span class="badge bg-warning">Driver</span></td>
                                        <td>Logistics</td>
                                        <td>
                                            <select class="form-select" name="status[EMP004]">
                                                <option value="present">Present</option>
                                                <option value="absent" selected>Absent</option>
                                                <option value="leave">Leave</option>
                                                <option value="onroute">On Route</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="remarks[EMP004]" placeholder="Remarks">
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
    
    <!-- View Attendance Details Modal -->
    <div class="modal fade" id="viewAttendanceModal" tabindex="-1" aria-labelledby="viewAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewAttendanceModalLabel"><i class="fas fa-calendar-alt me-2"></i>Attendance Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Employee ID:</strong> EMP001</p>
                            <p><strong>Name:</strong> Rajesh Kumar</p>
                            <p><strong>Department:</strong> Accounts</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Employee Type:</strong> Office Staff</p>
                            <p><strong>Month:</strong> June 2023</p>
                            <p><strong>Total Working Days:</strong> 26</p>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/06/2023</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>02/06/2023</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>05/06/2023</td>
                                    <td><span class="badge bg-danger">Absent</span></td>
                                    <td>Personal work</td>
                                </tr>
                                <tr>
                                    <td>06/06/2023</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>Present Days</h6>
                                    <h4>24</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>Absent Days</h6>
                                    <h4>2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>Attendance %</h6>
                                    <h4>92.3%</h4>
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
</x-admin.layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Initialize DataTables
    $(document).ready(function() {
        $('#officeAttendanceTable, #driverAttendanceTable').DataTable({
            responsive: true
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
                        fill: true
                    },
                    {
                        label: 'Drivers',
                        data: [85, 86, 88, 90, 87, 89],
                        borderColor: '#f39c12',
                        backgroundColor: 'rgba(243, 156, 18, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Overall',
                        data: [89, 89, 91, 93, 90, 92],
                        borderColor: '#2ecc71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        tension: 0.3,
                        fill: true
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
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw + '%';
                            }
                        }
                    }
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
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        }
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
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        }
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
        $(".btn-primary[type='submit']").prop('disabled', true);
        
        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route("attendance.store") }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $(".btn-primary[type='submit']").prop('disabled', false);
                if (!data.error) {
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        $('#markAttendanceModal').modal('hide');
                        window.location.reload();
                    });
                } else {
                    swal("Error!", data.error, "error");
                }
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $(".btn-primary[type='submit']").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $(".btn-primary[type='submit']").prop('disabled', false);
                    swal("Error occurred!", "Something went wrong please try again", "error");
                }
            }
        });
    });
    
    // View attendance details
    $(document).on('click', '.btn-primary:not([type="submit"])', function() {
        $('#viewAttendanceModal').modal('show');
    });
</script>