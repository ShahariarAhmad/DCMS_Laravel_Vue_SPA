<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\chamberController;
use App\Http\Controllers\dietController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\otherController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\socialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\authenticationController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;


Route::get('/user', function () {
 
    return auth()->user();
});

Route::get('/seed', function () {
    set_time_limit(6000);
    Artisan::call("migrate:fresh --seed");
    set_time_limit(60);
    return back();
})->name('seed');


Route::get('/article/category_list', [articleController::class, 'categoryList']);

Route::resource('home', indexController::class);
Route::resource('article', articleController::class);
Route::resource('about', aboutController::class);
Route::resource('chamber', chamberController::class);
Route::resource('event', eventController::class);
Route::resource('gallery', galleryController::class);
Route::resource('social', socialController::class);
Route::resource('appointment', appointmentController::class);
Route::resource('service', serviceController::class);



Route::get('article/category_list', [articleController::class, 'categoryList']);


Route::get('/others/all_records', [otherController::class, 'all_records']);


Route::get('/diet/drafts', [dietController::class, 'drafts']);
Route::get('/diet/requests', [dietController::class, 'diet_request']);
Route::get('/diet/records', [dietController::class, 'diet_records']);

Route::resource('about', aboutController::class);

Route::resource('category', categoryController::class);




Route::post('register', [authenticationController::class, 'register']);
Route::post('forgot-password', [authenticationController::class, 'sendResetLink']);

Route::post('login', [authenticationController::class, 'authenticate']);

Route::get('reset-password/{token}', function (Request $request) {

    return redirect('/reset-password/' . $request->token . '/' . $request->email);
})->name('password.reset');



Route::post('reset-password', function (Request $request) {
    User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
})
    ->name('password.update');

Route::post('logout', [authenticationController::class, 'logout'])
    ->name('logout');


Route::get('test', function () {
     $img = array_diff(scandir(public_path('/images/articles/')), array('....','...','..', '.') );

  for ($i = 2; $i < 19; $i++) {
 echo  $img[$i]. "<br>";
  }
});
