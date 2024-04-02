<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\InspirationController;
use App\Http\Controllers\Profile\DashboardController as ProfileDashboardController;
use App\Http\Controllers\profile\ExerciseResultController;
use App\Http\Controllers\Profile\QuizController;
use App\Http\Controllers\profile\TrackProgressController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TakeExerciseController;
use App\Http\Controllers\ViewActivityController;
use App\Livewire\Exercise;
use App\Livewire\Quiz;
use App\Livewire\Resources;
use App\Livewire\Test;
use App\Models\ExerciseResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('/', function () {
    return view('home');
});

Route::get("/login", [LoginController::class, 'index'])->name("login");
Route::get("/register", [RegisterController::class, 'index'])->name("register");
Route::get("/reset-password", function(){
    return view("auth.passwords.email");
})->name("reset-password");

Auth::routes(['verify' => true]);

Route::get("/skills-and-strategies", [SkillsController::class, 'index'])->name("skills");

Route::get("/activities-and-excercises", [ActivitiesController::class, 'index'])->name("activities");

Route::get("/activities-and-excercises/{exercise}", [ViewActivityController::class, 'index'])->name("exercise-details");


Route::get("/supports-and-services", Resources::class)->name("support");

Route::get("/inpspiration-goals-and-impact", [InspirationController::class, 'index'])->name("inspiration");

Route::get("/community-and-peer-support", [CommunityController::class, 'index'])->name("community");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth"=> "verified"])->group(function(){
Route::post("/activities-and-excercises/{exercise}", [ViewActivityController::class, 'store']);

// Profile Routes
Route::get('/dashboard', [ProfileDashboardController::class, 'index'])->name("dashboard");
Route::post('/logout', [ProfileDashboardController::class, 'logout'])->name("logout");

Route::get('/quiz', Quiz::class)->name("quiz");

Route::get('/account/track-progress', [TrackProgressController::class, 'index'])->name("track-progress");

Route::get('/account/exercise-result', [ExerciseResultController::class, 'index'])->name("exercise-result");

});
