<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
})->name('/');




// Guest Users
Route::middleware(['guest', 'PreventBackHistory'])->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('signin');
    Route::get('register', [App\Http\Controllers\Admin\AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [App\Http\Controllers\Admin\AuthController::class, 'register'])->name('signup');
});


// Authenticated users
Route::middleware(['auth', 'PreventBackHistory'])->group(function () {

    // Auth Routes
    Route::get('home', fn () => redirect()->route('dashboard'))->name('home');
    // Route::middleware('role:Employee,true')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'Logout'])->name('logout');
    Route::get('change-theme-mode', [App\Http\Controllers\Admin\DashboardController::class, 'changeThemeMode'])->name('change-theme-mode');
    Route::get('show-change-password', [App\Http\Controllers\Admin\AuthController::class, 'showChangePassword'])->name('show-change-password');
    Route::post('change-password', [App\Http\Controllers\Admin\AuthController::class, 'changePassword'])->name('change-password');



    // Masters
    Route::resource('vehicles', App\Http\Controllers\Admin\Masters\VehicleController::class);
    Route::resource('vendors', App\Http\Controllers\Admin\Masters\VendorController::class);
    Route::resource('clients', App\Http\Controllers\Admin\Masters\ClientController::class);
    Route::resource('drivers', App\Http\Controllers\Admin\Masters\DriverController::class);
    Route::resource('selfVehicle', App\Http\Controllers\Admin\SelfVehicleController::class);
    Route::resource('trip-movement', App\Http\Controllers\Admin\Masters\TripMovmentsController::class);
    Route::resource('bank', App\Http\Controllers\Admin\Masters\BankRegisterController::class);
    Route::resource('contact', App\Http\Controllers\Admin\Masters\ContactListController::class);
    Route::resource('todo', App\Http\Controllers\Admin\Masters\ToDoController::class);
    Route::resource('tripmovment', App\Http\Controllers\Admin\Masters\TripMovmentsController::class);
    Route::resource('state', App\Http\Controllers\Admin\Masters\StateNameWithCodeController::class);
    Route::resource('Gstrate', App\Http\Controllers\Admin\Masters\GstrateController::class);
    Route::resource('Fuel', App\Http\Controllers\Admin\Masters\fuelController::class);
    // This should go BEFORE the resource route
    Route::post('Yearmaster/{Yearmaster}/toggle-status', [App\Http\Controllers\Admin\Masters\YearmasterController::class, 'toggleStatus'])->name('Yearmaster.toggle-status');
    Route::resource('Yearmaster', App\Http\Controllers\Admin\Masters\YearmasterController::class);
    Route::resource('Bank-Register', App\Http\Controllers\Admin\Masters\BankRegisterController::class);
    Route::resource('Voucher-Master', App\Http\Controllers\Admin\Masters\VouchermasterController::class);
    Route::resource('Attendance-Management', App\Http\Controllers\Admin\Masters\AttendancemanagementController::class);
    Route::resource('Company-Profile', App\Http\Controllers\Admin\Masters\CompanyprofileController::class);
    Route::resource('Contact-List', App\Http\Controllers\Admin\Masters\ContactListController::class);
    Route::resource('Employee-Management', App\Http\Controllers\Admin\Masters\EmployeemanagementController::class);
    Route::resource('Ledger-Master', App\Http\Controllers\Admin\Masters\GroupandledgermasterController::class);
    Route::resource('Payroll-Payment-Management', App\Http\Controllers\Admin\Masters\PayrollpaymentmanagementController::class);
    Route::resource('Payroll-Slip', App\Http\Controllers\Admin\Masters\PayrollslipController::class);
    Route::resource('Profile-Setting', App\Http\Controllers\Admin\Masters\ProfilesettingController::class);
    Route::resource('Salary-Report', App\Http\Controllers\Admin\Masters\SalaryreportController::class);
    Route::resource('Salary-on-Tax-Report', App\Http\Controllers\Admin\Masters\TaxOnsalaryreportController::class);
    Route::resource('Link-Vehical-With-Vender', App\Http\Controllers\Admin\Masters\VendorhasvehicleController::class);



    // Users Roles n Permissions
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::get('users/{user}/toggle', [App\Http\Controllers\Admin\UserController::class, 'toggle'])->name('users.toggle');
    Route::get('users/{user}/retire', [App\Http\Controllers\Admin\UserController::class, 'retire'])->name('users.retire');
    Route::put('users/{user}/change-password', [App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('users.change-password');
    Route::get('users/{user}/get-role', [App\Http\Controllers\Admin\UserController::class, 'getRole'])->name('users.get-role');
    Route::put('users/{user}/assign-role', [App\Http\Controllers\Admin\UserController::class, 'assignRole'])->name('users.assign-role');
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);

// });
});




Route::get('/php', function (Request $request) {
    if (!auth()->check())
        return 'Unauthorized request';

    Artisan::call($request->artisan);
    return dd(Artisan::output());
});
