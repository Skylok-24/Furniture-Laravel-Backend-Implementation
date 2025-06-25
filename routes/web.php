<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Users\UserController;
use App\Http\Middleware\CheckIfNameAhmed;
use App\Http\Controllers\ThemeController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';


/*Route::get('/lokman',function() {
    return "lokman";
});*/

//Route::get('/mahmoud',[TestController::class,'mahmoud']);

// Route::get('/home',function () {
//     return view('index');
// });

// Route::redirect('here','there');

//Route::get('/printName/{name?}',[TestController::class,'print'])->name('PrintMyName');

// Route::controller(TestController::class)->name('test.')->prefix('/user')->middleware('check_name')->group(function(){
//     Route::get('/printName/{name?}','print')->name('PrintMyName');
//     Route::get('/mahmoud','mahmoud');
// });

// Route::get('/hello',SingleController::class)->middleware('check_name');
// Route::get('/hello2',SingleController::class);


// Route::resource('posts',PostController::class)->except(['update','store']);

// Route::get('hello3',[UserController::class,'index']);



// Route::get('/home',function(){
//     $data = 3;
//     return view('user.home',compact('data'));
// });


Route::controller(ThemeController::class)->name('theme.')->group(function(){
    Route::get('/about','about')->name('about');
    Route::get('/services','services')->name('services');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact/store','store')->name('contact.store');
    Route::get('/display','display')->name('display');
});