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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ReportController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/admin-dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/register',function() { return redirect('/login');});

Route::get('/',[FrontController::Class,'getFrontPage']);
Route::get('/theme-two', function() { return view('themes.theme2');});
Route::get('/theme-three', function() { return view('themes.theme3');});
Route::get('/admin-dashboard',[HomeController::Class,'getDashboard'])->name('Dashboard');
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
Route::get('/career-jobs',[JobsController::Class, 'getJobs'])->name('Jobs');
Route::get('/publications',[MediaController::Class,'getMedia'])->name('Media Publications');
Route::get('/media',[MediaController::Class,'getAdminMedia'])->name('Media');
Route::get('/create-media',[MediaController::Class,'validateCreateMediaPublication']);
Route::get('/edit-media/{id}',[MediaController::Class,'editMediaPublication']);
Route::get('/update-media/{id}',[MediaController::Class,'updateMediaPublication']);
Route::get('/delete-media/{id}',[MediaController::Class,'deleteMediaPublication']);

Route::get('/reports',[ReportController::Class,'viewReport'])->name('Reports');
Route::get('/view-all-reports',[ReportController::Class,'getReports'])->name('Reports');
Route::post('add-report',[ReportController::Class,'validateCreateReport'])->name('Reports Form');
Route::get('edit-report/{report_id}',[ReportController::Class,'editReport'])->name('Edit Reports');
Route::post('update-reports/{report_id}',[ReportController::Class,'updateReport']);
Route::get('delete-report/{report_id}',[ReportController::Class,'deleteReport']);
