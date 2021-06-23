<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdvertsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriberController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/', function() { return view('themes.theme1');});
Route::get('/theme-two', function() { return view('themes.theme2');});
Route::get('/theme-three', function() { return view('themes.theme3');});
Route::get('/dashboard',function() { return view('dashboard');})->name('Dashboard');
Route::get('/news',[NewsController::Class,'index'])->name('News');
Route::get('/advertisements',[AdvertsController::Class,'viewAdverts'])->name('Adverts');
Route::get('/about',[AboutController::Class,'aboutInformation'])->name('About');
Route::get('/inspiring-stories',[StoryController::Class,'stories'])->name('Inspiring Stories');
Route::get('/licensed-companies',[CompanyController::Class,'getCompany'])->name('Company');
Route::get('/articles',[ArticleController::Class,'getArticle'])->name('Articles');
Route::get('/benefits',[BenefitController::Class,'getBenefit'])->name('Benefits');
Route::get('/projects',[ProjectController::Class,'getProject'])->name('Projects');
Route::get('/subscribers',[SubscriberController::Class,'getSubscriber'])->name('Subscribers');
Route::get('/about-more', function() { return view('themes.about');})->name('About');
Route::get('/view-portfolio', function() { return view('themes.portfolio');})->name('Portfolio');