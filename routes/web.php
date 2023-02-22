<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapTrackinController;
use App\Events\BusMoved;
use App\Http\Controllers\StudentTrackinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RouteController;

Route::get('/',[MapTrackinController::class,'index'])->name('/');

Route::get('/show-client-side',[MapTrackinController::class,'showClientSide'])->name('show-client-side');

Route::get('/current-bus-location',[MapTrackinController::class,'currentBusLocation'])->name('current-bus-location');
Route::get('/bus-2',[MapTrackinController::class,'bus2'])->name('/bus-2');
Route::post('/bus-moving',[MapTrackinController::class,'BusMoved'])->name('/bus-moving');
Route::get('/moving',[MapTrackinController::class,'moving'])->name('/moving');
Route::get('/bus-location-update',[MapTrackinController::class,'busLocationUpdate'])->name('bus-location-update');
Route::get('/buses-location',[MapTrackinController::class,'busesLocation'])->name('buses-location');

Route::get('/request-for-pickup',[StudentTrackinController::class,'studentLocation'])->name('request-for-pickup');
Route::get('/test1',[StudentTrackinController::class,'test1'])->name('test1');
Route::post('/send-request-for-pickup',[StudentTrackinController::class,'requestForPickup'])->name('send-request-for-pickup');
Route::post('/remove-request-for-pickup',[StudentTrackinController::class,'removePickupRequest'])->name('remove-request-for-pickup');

Route::get('/select-login',[UserController::class,'index'])->name('select-login');
Route::get('/user-login',[UserController::class,'userLogin'])->name('user-login');
Route::post('/user-login',[UserController::class,'userLoginCheck'])->name('user-login');
Route::get('/user-logout',[UserController::class,'userLogout'])->name('user-logout');

Route::get('/driver-login',[DriverController::class,'driverLogin'])->name('driver-login');
Route::get('/driver-select-route',[DriverController::class,'selectRoute'])->name('driver-select-route');

Route::post('/driver-login',[DriverController::class,'driverLoginCheck'])->name('driver-login');
Route::get('/driver-logout',[DriverController::class,'driverLogout'])->name('driver-logout');

Route::get('/user-register',[UserController::class,'userRegister'])->name('user-register');
Route::post('/save-user',[UserController::class,'saveUser'])->name('save-user');

//dashboard
Route::get('/manage-student',[StudentController::class,'manageStudent'])->name('manage-student');
Route::get('/driver-profile',[TeacherController::class,'teacherProfile'])->name('driver-profile');
Route::get('/add-course',[CourseController::class,'addCourse'])->name('add-course');
Route::get('/manage-course',[CourseController::class,'manageCourse'])->name('manage-course');
Route::post('/new-course',[CourseController::class,'saveCourse'])->name('new-course');

// Route::get('/moving',[BusMoved::class,'BusMoved'])->name('/moving');

Route::get('/move', function () {
event(new BusMoved(-79.4512,42.6598));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group( function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-driver',[DriverController::class,'index'])->name('add-driver');
    Route::post('/new-driver',[DriverController::class,'saveDriver'])->name('new-driver');
    Route::get('/manage-driver',[DriverController::class,'manageDriver'])->name('manage-driver');
    Route::get('/edit-driver-info/{id}',[DriverController::class,'editDriverInfo'])->name('edit-driver-info');
    Route::post('/update-driver-info',[DriverController::class,'updateDriverInfo'])->name('update-driver-info');
    Route::post('/delete-driver-info',[DriverController::class,'deleteDriverInfo'])->name('delete-driver-info');

    Route::get('/add-route',[RouteController::class,'addRoute'])->name('add-route');
    Route::post('/save-route',[RouteController::class,'saveRoute'])->name('save-route');
    Route::get('/add-bus-stops',[RouteController::class,'addBusStops'])->name('add-bus-stops');
    Route::post('/save-bus-stop',[RouteController::class,'saveBusStops'])->name('save-bus-stop');

    Route::get('/add-bus',[BusController::class,'addBus'])->name('add-bus');
    Route::post('/save-bus',[BusController::class,'saveBus'])->name('save-bus');


    
});