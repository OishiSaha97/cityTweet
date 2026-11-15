<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FriendController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FriendRequestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });










//Route::get('/register',[HomeController::class, "register"])->name('register');

 Route::get('/dashboard',[AdminAuthController::class, "adminDashboard"])->name('admin.home');
Route::get('/adminregister',[AdminController::class, "register"]);
Route::post('/admin-register',[AdminController::class,"newRegistration"])->name('admin.register');
Route::get('/adminlogin',[AdminController::class, "login"]);
Route::post('/admin-login',[AdminController::class,"loginCheck"])->name('admin.login');
Route::resource('project', ProjectController::class);
Route::resource('semester', SemesterController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/',[UserController::class, "index"])->name('dashboard');
    

    Route::get('/home',[HomeController::class, "home"])->name('home');
    Route::get('/friendpage',[HomeController::class, "friendPage"])->name('friendpage');
    Route::get('/aboutpage',[HomeController::class, "aboutPage"])->name('aboutpage');
    Route::get('/grouppage',[HomeController::class, "groupPage"])->name('grouppage');
    Route::get('/page',[HomeController::class, "page"])->name('page');
    // Route::get('/suggestedpage',[HomeController::class, "suggestedPage"])->name('suggestedpage');
    Route::get('/blood-page',[HomeController::class,"bloodPage"])->name('bloodpage');
    Route::get('/semesterlist',[HomeController::class, "semesterlist"])->name('semesterlist');
    Route::get('/projectlist',[HomeController::class,"projectlist"])->name('projectlist');
    Route::get('/addproject',[HomeController::class,"addproject"])->name('addproject');
    Route::get('/projectdetails',[HomeController::class,"projectdetails"])->name('projectdetails');
    Route::get('/firstsemester',[HomeController::class,"firstsemedetails"])->name('firstseme');
    Route::get('/project-demo',[HomeController::class,"projectDemo"])->name('project.demo');


    //  Route::get('/friend/add/{id}',[FriendController::class, "addFriend"])->name('add.friend');

    //  Route::get('/friend/un/{id}',[FriendController::class, "unFriend"])->name('un.friend');



    

    Route::resource('info', UserInfoController::class);
    Route::resource('post', PostController::class);
    Route::resource('createpage', PageController::class);
   
    Route::prefix("friend-requests")
        ->name("friend-requests.")
        ->controller(FriendRequestController::class)
        ->group(function(){
            Route::get("add-friend","index")->name("index");
            Route::get("sent-requests","friendRequestsSent")->name("sent-requests");
            Route::get("received-requests","friendRequestsReceived")->name("received-requests");

            Route::get("send/{receiver}","send")->name("send");
            Route::get("accept/{friendRequest}","accept")->name("accept");
        });
});











