<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PortifolioController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeCOntroller;

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



Route::get('/',[FrontController::Class,'getFrontPage']);
Route::get('/theme-two', function() { return view('themes.theme2');});
Route::get('/theme-three', function() { return view('themes.theme3');});
Route::get('/dashboard',[HomeCOntroller::Class,'getDashboard'])->name('Dashboard');
Route::get('/news',[NewsController::Class,'index'])->name('News');
Route::get('/achievements',[AchievementsController::Class,'getAchievements'])->name('Adverts');
Route::get('/about',[AboutController::Class,'aboutInformation'])->name('About');
Route::get('/team',[TeamController::Class,'getTeam'])->name('Team');
Route::get('/licensed-companies',[CompanyController::Class,'getCompany'])->name('Company');
Route::get('/benefits',[BenefitController::Class,'getBenefit'])->name('Benefits');
Route::get('/about-more', function() { return view('themes.about');})->name('About');
Route::get('/view-portfolio',[FrontController::Class, 'getPortifolioImages'])->name('Portfolio');
Route::get('/create-news', [NewsController::Class,'createNews']);
Route::get('/edit-news/{id}',[NewsController::Class,'editNews']);
Route::get('/update-news/{id}',[NewsController::Class, 'updateNews']);
Route::get('/delete-news/{id}',[NewsController::Class, 'deleteNews']);
Route::get('/portifolio',[PortifolioController::Class,'getPortifolio'])->name('Portifolio');

Route::get('/create-achievement',[AchievementsController::Class,'createAchievement']);
Route::get('/update-achievement/{id}',[AchievementsController::Class,'updateAchievement']);
Route::get('/edit_achievement/{id}',[AchievementsController::Class,'editAchievement']);
Route::get('/delete-achievement/{id}',[AchievementsController::Class,'deleteAchievement']);

//Route::get('/edit_achievement',[AchievementsController::Class,'editAchievement']);

Route::post('/create-portifolio',[PortifolioController::Class,'createPotifolio']);
Route::get('/delete-portifolio/{id}',[PortifolioController::Class,'deletePotifolio']);
Route::get('/edit-portifolio/{id}',[PortifolioController::Class,'editPortifolio']);
Route::get('/update-portifolio/{id}',[PortifolioController::Class,'updatePotifolio']);
Route::post('/create-team-member',[TeamController::Class,'createPotifolio']);
Route::get('/edit_team/{id}',[TeamController::Class,'editTeam']);
Route::get('/update-member/{id}',[TeamController::Class, 'updateTeam']);
Route::get('/delete-member/{id}', [TeamController::Class, 'deleteTeam']);

Route::get('/log-out',[AuthenticationController::Class, 'logoutUser']);