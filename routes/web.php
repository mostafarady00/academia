<?php

use App\Http\Controllers\ContactusController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\NewsController;
use App\Models\Instructor;
use Illuminate\Support\Facades\DB;
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



//  Route::get('/', function () {
//      return view('welcome');
//  });


Route::get('/', function () {
    return view('frontend.pages.home');
})->name("home");

Route::get('/aboutus', function () {
    return view('frontend.pages.aboutus');
})->name("aboutus");

Route::get('/courses', function () {
    // $courses = DB::table('courses')->get();
    // return view('frontend.pages.courses', compact('courses'));
    $courses = DB::table('courses')->get();
    $instructors = DB::table('instructors')->get();
    return view('frontend.pages.courses', compact('courses', 'instructors'));
    return view('frontend.pages.courses');
})->name("courses");

Route::get('/web/news', function () {
    $news = DB::table('news')->get();
    return view('frontend.pages.news', compact('news'));
    return view('frontend.pages.news');
})->name("news");

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name("contact");

Route::get('/login', function () {
    return view('auth.login');
})->name("login");

Route::get('/register', function () {
    return view('auth.register');
})->name("register");


//jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    // news Route
    Route::resource('admin/news', NewsController::class);
       // course Route
    Route::resource('admin/courses',CourseController::class );
       // instructor Route
    Route::resource('admin/instructors',InstructorController::class);
    //contactus Route
    Route::resource('admin/contactus',ContactusController::class);
});


