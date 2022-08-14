<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\VisionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route user

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/schedule", [ScheduleController::class, "index"])->name("schedule");
Route::get("/sign", [SignController::class, "index"])->name("sign");
Route::get("/structure", [StructureController::class, "index"])->name(
    "structure"
);
Route::get("/vision", [VisionController::class, "index"])->name("vision");
Route::get("/member", [MemberController::class, "index"])->name("member");
Route::get("/history", [HistoryController::class, "index"])->name("history");
Route::get("/program", [ProgramController::class, "index"])->name("program");
Route::get("/single-post/{slug}", [SinglePostController::class, "index"])->name(
    "single-post"
);

// Route admin

Route::prefix("admin")
    ->namespace("Admin")
    ->middleware(["auth", "admin"])
    ->group(function () {
        Route::get("/", [DashboardController::class, "index"])->name(
            "dashboard"
        );
        Route::get("/change-password", [
            ChangePasswordController::class,
            "showChangePasswordGet",
        ])->name("changePasswordGet");
        Route::post("/change-password", [
            ChangePasswordController::class,
            "changePasswordPost",
        ])->name("changePasswordPost");
        Route::resource("slider", "SliderController");
        Route::resource("article", "ArticleController");
        Route::resource("gallery", "GalleryController");
        Route::resource("vision", "VisionController");
        Route::resource("history", "HistoryController");
        Route::resource("structure", "OrganizationalStructureController");
        Route::resource("agenda", "AgendaController");
        Route::resource("program", "ProgramController");
        Route::resource("program-year", "ProgramYearController");
    });

Auth::routes(["verify" => true]);
