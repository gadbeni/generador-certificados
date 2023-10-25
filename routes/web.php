<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voyager\CourseController;
use App\Http\Controllers\Voyager\PersonController;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::controller(PersonController::class)->group(function(){
    Route::get('/','findPerson')->name('home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
    //<- certificados
    Route::controller(CourseController::class)->group(function(){
        Route::get('courses/{id_course}/certificate/','formCertificate')->name('form_certificate');
        Route::put('courses/{id_course}/add-certificate/','addCertificate')->name('add_certificate');
        Route::put('courses/{id_course}/Status-certificate/','updateCertificateStatus')->name('update_certificate_status');
        Route::get('courses/{id_course}/certificate/{id_person}','showCertificate')->name('show_certificate');
    });
    
    // certificados->
});
