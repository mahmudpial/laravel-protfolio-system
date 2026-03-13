<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

use App\Models\Skill;
use App\Models\Portfolio;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('home'));

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::view('/contact', 'contact');
Route::post('/contact', [ContactController::class, 'store']);


/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    $skills = Skill::all();
    $projects = Portfolio::all();

    return view('admin.dashboard', compact('skills', 'projects'));

})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Admin CRUD Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Skills
    Route::post('/add-skill', [SkillController::class, 'store'])->name('skill.store');
    Route::delete('/delete-skill/{id}', [SkillController::class, 'delete'])->name('skill.delete');

    // Portfolio
    Route::post('/add-portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::delete('/delete-project/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');

    Route::get('/edit-skill/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('/update-skill/{id}', [SkillController::class, 'update'])->name('skill.update');

    Route::get('/edit-project/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/update-project/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');

});


/*
|--------------------------------------------------------------------------
| Profile Routes (Laravel Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


require __DIR__ . '/auth.php';