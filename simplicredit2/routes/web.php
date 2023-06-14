<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\prevUniController;
use App\Http\Controllers\applicationController;
/*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('redirects',[HomeController::class,'index']);
Route::get('/homepage', function () {
    return view('student.homepage');
});

Route::get('/student/application', function () {
    return view('student.application');
});

Route::get('/student/previous', function () {
    return view('student.previous');
});

Route::post('/student/previous', [prevUniController::class,'store']);
Route::post('/student/course', [applicationController::class,'store']);
Route::get('/student/application', [applicationController::class,'show']);
Route::get('/student/status', [applicationController::class,'show1']);
Route::get('/admin/pending',[applicationController::class,'listPending']);
Route::get('/admin/details/{matric_id}',[applicationController::class,'details']);
Route::post('/admin/updateStatus',[applicationController::class,'update1']);
Route::get('/admin/underReview',[applicationController::class,'listReview']);
Route::get('/admin/detailsReview/{matric_id}',[applicationController::class,'detailsReview']);
Route::get('/admin/complete',[applicationController::class,'listComplete']);
Route::get('/admin/detailsComplete/{matric_id}',[applicationController::class,'detailsComplete']);
Route::get('/student/previous', [prevUniController::class,'show']);
Route::get('/student/edit/{id}', [prevUniController::class,'edit']);
Route::post('/student/edit/{id}', [prevUniController::class,'update']);
Route::post('/student/previous', [prevUniController::class,'store']);
Route::get('/student/delete/{id}', [prevUniController::class,'destroy']);
Route::get('/student/letter', [applicationController::class,'detailsComplete2']);
Route::get('/student/edit-action/{id}', [applicationController::class,'show2']);
Route::post('/student/editcourse',[applicationController::class,'update2']);
Route::get('/student/delete/{id}', [applicationController::class, 'deleteCourse']);
Route::get('/admin/university',[applicationController::class,'university']);
//Route::get('redirects', [applicationController::class, 'getTotalPendingApplications']);
