<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

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
    return view("index");
});

Route::get("/index", [HomeController::class, "index"])->name("index");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");
Route::get("/project", [HomeController::class, "project"])->name("project");
Route::get("/blog", [HomeController::class, "blog"])->name("blog");
Route::get("/resume", [HomeController::class, "resume"])->name("resume");



// Route::get('/contact', [ContactUsFormController::class, 'createForm']);
// Route::post("/store", '[ContactMeFormController::class, "contactMeForm"]')->name("store");

Route::resource("contacts", ContactController::class);

// Route::get('/contact', [ContactMeFormController::class, 'createForm']);
// Route::post('/contact', [ContactMeFormController::class, 'ContactMeForm'])->name('contact.store');

