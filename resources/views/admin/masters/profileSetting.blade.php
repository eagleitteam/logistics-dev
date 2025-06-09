<x-admin.layout>
    <x-slot name="title">Profile Setting</x-slot>
    <x-slot name="heading">Profile Setting</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

       <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --dark-color: #5a5c69;
            --light-color: #f8f9fc;
        }
        
        body {
            background-color: #f8f9fc;
            color: #333;
        }
        
        .main-container {
            margin-top: 2rem;
            margin-bottom: 3rem;
        }
        
        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: none;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        
        .profile-header {
            background: linear-gradient(135deg, var(--primary-color), #224abe);
            color: white;
            padding: 2.5rem 2rem;
            position: relative;
        }
        
        .profile-img-container {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 5px solid white;
            overflow: hidden;
            margin: -85px auto 1.5rem;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .upload-btn {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background-color: var(--secondary-color);
            color: white;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 3px solid white;
            transition: all 0.2s;
        }
        
        .upload-btn:hover {
            transform: scale(1.1);
        }
        
        .plan-card {
            border-left: 4px solid var(--primary-color);
            border-radius: 10px;
            transition: all 0.3s;
            padding: 1.75rem;
            margin-bottom: 1.5rem;
        }
        
        .plan-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }
        
        .upgrade-btn {
            background: linear-gradient(to right, var(--primary-color), #3a56c9);
            border: none;
            border-radius: 30px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .upgrade-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 86, 201, 0.3);
        }
        
        .storage-progress {
            height: 10px;
            border-radius: 5px;
            margin: 0.5rem 0;
        }
        
        .progress-bar {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }
        
        .nav-pills {
            margin-bottom: 2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1.25rem;
        }
        
        .nav-pills .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            border-radius: 8px;
            margin-right: 0.5rem;
            padding: 0.5rem 1.25rem;
            transition: all 0.2s;
        }
        
        .nav-pills .nav-link:hover {
            background-color: rgba(78, 115, 223, 0.1);
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #e0e0e0;
            margin-bottom: 1.25rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.15);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background-color: #3a56c9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 86, 201, 0.3);
        }
        
        .security-badge {
            background-color: #e74a3b;
            color: white;
            border-radius: 20px;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }
        
        .security-badge.secure {
            background-color: var(--secondary-color);
        }
        
        .activity-item {
            border-left: 3px solid var(--primary-color);
            padding-left: 1.25rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 1rem;
        }
        
        .activity-time {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        
        .section-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }
        
        .divider {
            margin: 2rem 0;
            border-top: 1px solid #eee;
        }
        
        .account-detail {
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f5f5f5;
        }
        
        .account-detail:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        @media (max-width: 768px) {
            .profile-img-container {
                width: 110px;
                height: 110px;
                margin-top: -70px;
            }
            
            .nav-pills .nav-link {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card bg-white">
                    <div class="profile-header text-center">
                        <h4>Admin Profile</h4>
                    </div>
                    <div class="card-body text-center pt-2">
                        <div class="profile-img-container">
                            <img src="https://via.placeholder.com/150" alt="Profile Image" class="profile-img" id="profileImage">
                            <div class="upload-btn" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                <i class="fas fa-camera"></i>
                            </div>
                        </div>
                        <h4 class="mb-2">Admin User</h4>
                        <p class="text-muted mb-4">Super Administrator</p>
                        
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-sm btn-outline-primary me-2">
                                <i class="fas fa-envelope me-1"></i> Message
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-share-alt me-1"></i> Share
                            </button>
                        </div>
                        
                        <div class="storage-info mb-4 px-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Storage</span>
                                <span><strong>4.8 GB</strong> / 10 GB</span>
                            </div>
                            <div class="progress storage-progress">
                                <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">48% of storage used</small>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="text-start px-3">
                            <h5 class="section-title mb-3">Account Details</h5>
                            <div class="account-detail">
                                <span class="text-muted d-block">Joined:</span>
                                <strong>15 Jan 2022</strong>
                            </div>
                            <div class="account-detail">
                                <span class="text-muted d-block">Last Active:</span>
                                <strong>Today, 10:45 AM</strong>
                            </div>
                            <div class="account-detail">
                                <span class="text-muted d-block">Timezone:</span>
                                <strong>UTC +5:30</strong>
                            </div>
                            <div class="account-detail">
                                <span class="text-muted d-block">Language:</span>
                                <strong>English</strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="profile-card bg-white">
                    <div class="card-body">
                        <h5 class="section-title mb-4">Security Status</h5>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-shield-alt text-success fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 d-flex align-items-center">Two-Factor Authentication
                                    <span class="security-badge secure">Active</span>
                                </h6>
                                <small class="text-muted">Last used: Today, 10:45 AM</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-mobile-alt text-success fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 d-flex align-items-center">Mobile Verification
                                    <span class="security-badge secure">Verified</span>
                                </h6>
                                <small class="text-muted">+91 ••••• •4321</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-envelope text-warning fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 d-flex align-items-center">Email Verification
                                    <span class="security-badge">Pending</span>
                                </h6>
                                <small class="text-muted">admin@example.com</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-lock text-success fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Password Strength</h6>
                                <div class="progress mt-2" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">Strong (Last changed: 3 months ago)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="profile-card bg-white">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="profileTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="settings-tab" data-bs-toggle="pill" data-bs-target="#settings" type="button" role="tab">Profile Settings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="pill" data-bs-target="#security" type="button" role="tab">Security</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="activity-tab" data-bs-toggle="pill" data-bs-target="#activity" type="button" role="tab">Activity Log</button>
                            </li>
                        </ul>
                        
                        <div class="tab-content pt-2" id="profileTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel">
                                <h5 class="section-title">Personal Information</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" value="Admin">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" value="User">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" value="admin@example.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" value="+91 9876543210">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" rows="3">System administrator with full access rights</textarea>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="timezone" class="form-label">Timezone</label>
                                            <select class="form-select" id="timezone">
                                                <option>(UTC +5:30) India</option>
                                                <option>(UTC +0:00) London</option>
                                                <option>(UTC -5:00) New York</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="language" class="form-label">Language</label>
                                            <select class="form-select" id="language">
                                                <option>English</option>
                                                <option>Hindi</option>
                                                <option>Spanish</option>
                                                <option>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </form>
                                
                                <div class="divider"></div>
                                
                                <h5 class="section-title">Subscription Plan</h5>
                                <div class="plan-card bg-light">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-1">Business Plan</h4>
                                            <p class="text-muted mb-0">Premium features for growing businesses</p>
                                        </div>
                                        <span class="badge bg-success">Active</span>
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <span class="text-muted">Start Date:</span>
                                                <strong class="d-block">15 Jan 2023</strong>
                                            </div>
                                            <div class="mb-2">
                                                <span class="text-muted">Billing Cycle:</span>
                                                <strong class="d-block">Annual</strong>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <span class="text-muted">End Date:</span>
                                                <strong class="d-block">14 Jan 2024</strong>
                                            </div>
                                            <div class="mb-2">
                                                <span class="text-muted">Next Billing:</span>
                                                <strong class="d-block">₹12,000 on 14 Jan 2024</strong>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-0">₹12,000<small class="text-muted">/year</small></h3>
                                        </div>
                                        <button class="btn upgrade-btn">Upgrade Plan</button>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-exclamation-triangle me-3 fa-lg"></i>
                                        <div>
                                            <h6 class="mb-1">Plan Renewal Notice</h6>
                                            Your current plan will expire in <strong>45 days</strong>. Renew now to avoid service interruption.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="security" role="tabpanel">
                                <h5 class="section-title">Security Settings</h5>
                                
                                <div class="card border-0 shadow-sm mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h6 class="mb-1">Password</h6>
                                                <small class="text-muted">Last changed 3 months ago</small>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                                Change Password
                                            </button>
                                        </div>
                                        
                                        <div class="progress mb-2" style="height: 6px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small class="text-muted">Password strength: Strong</small>
                                    </div>
                                </div>
                                
                                <div class="card border-0 shadow-sm mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <h6 class="mb-1">Two-Factor Authentication</h6>
                                                <small class="text-muted">Add an extra layer of security</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="twoFactorSwitch" checked>
                                                <label class="form-check-label" for="twoFactorSwitch"></label>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex align-items-center mt-3">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <small>Currently using: Authenticator App</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card border-0 shadow-sm mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <h6 class="mb-1">Login Alerts</h6>
                                                <small class="text-muted">Get notified for new logins</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="loginAlertSwitch" checked>
                                                <label class="form-check-label" for="loginAlertSwitch"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-3">Active Sessions</h6>
                                        
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="fas fa-laptop text-primary fa-lg"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Chrome on Windows</h6>
                                                <small class="text-muted">Mumbai, India • Active now</small>
                                            </div>
                                            <button class="btn btn-sm btn-outline-danger">Logout</button>
                                        </div>
                                        
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="fas fa-mobile-alt text-primary fa-lg"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Safari on iPhone</h6>
                                                <small class="text-muted">Delhi, India • 2 hours ago</small>
                                            </div>
                                            <button class="btn btn-sm btn-outline-danger">Logout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="activity" role="tabpanel">
                                <h5 class="section-title">Recent Activity</h5>
                                
                                <div class="activity-item">
                                    <h6 class="mb-1">Profile information updated</h6>
                                    <p class="activity-time">Today, 10:30 AM</p>
                                    <p class="text-muted small mb-0">Changed profile picture and timezone settings</p>
                                </div>
                                
                                <div class="activity-item">
                                    <h6 class="mb-1">Password changed</h6>
                                    <p class="activity-time">Yesterday, 2:45 PM</p>
                                    <p class="text-muted small mb-0">Password was updated successfully</p>
                                </div>
                                
                                <div class="activity-item">
                                    <h6 class="mb-1">New login from Chrome on Windows</h6>
                                    <p class="activity-time">2 days ago, 9:15 AM</p>
                                    <p class="text-muted small mb-0">IP: 192.168.1.5 • Location: Mumbai, India</p>
                                </div>
                                
                                <div class="activity-item">
                                    <h6 class="mb-1">Two-factor authentication enabled</h6>
                                    <p class="activity-time">1 week ago, 11:20 AM</p>
                                    <p class="text-muted small mb-0">Authenticator app setup completed</p>
                                </div>
                                
                                <div class="activity-item">
                                    <h6 class="mb-1">Plan upgraded to Business</h6>
                                    <p class="activity-time">15 Jan 2023, 3:00 PM</p>
                                    <p class="text-muted small mb-0">Annual subscription activated</p>
                                </div>
                                
                                <button class="btn btn-outline-primary mt-3">View All Activity</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Upload Photo Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Profile Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/200" alt="Current Profile" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;" id="currentProfileImg">
                    </div>
                    
                    <div class="mb-4">
                        <label for="profileUpload" class="form-label">Upload new photo</label>
                        <input class="form-control" type="file" id="profileUpload" accept="image/*">
                    </div>
                    
                    <div class="d-flex justify-content-between pt-2">
                        <button class="btn btn-outline-danger">
                            <i class="fas fa-trash-alt me-1"></i> Remove Current
                        </button>
                        <button class="btn btn-primary">
                            <i class="fas fa-upload me-1"></i> Upload Photo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" required>
                            <div class="form-text">Minimum 8 characters with at least one number and one special character</div>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                        
                        <div class="d-flex justify-content-end pt-2">
                            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-admin.layout>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Profile image upload preview
        document.getElementById('profileUpload').addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('currentProfileImg').src = event.target.result;
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });
        
        // Simulate password strength check
        document.getElementById('newPassword').addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/\d/.test(password)) strength += 25;
            if (/[^A-Za-z0-9]/.test(password)) strength += 25;
            
            const strengthBar = document.querySelector('#security .progress-bar');
            strengthBar.style.width = strength + '%';
            
            if (strength < 50) {
                strengthBar.className = 'progress-bar bg-danger';
            } else if (strength < 75) {
                strengthBar.className = 'progress-bar bg-warning';
            } else {
                strengthBar.className = 'progress-bar bg-success';
            }
        });
    </script>
