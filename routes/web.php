<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;

use App\Http\Controllers\UserImportController;
use App\Http\Controllers\PraticienController;
use App\Http\Controllers\CompteRenduController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicamentController;


Route::get('/home', [PraticienController::class, 'home'])->name('gsb.home');
Route::get('/', [PraticienController::class, 'home'])->name('gsb.home');

Route::get('/praticiens', [PraticienController::class, 'index'])->name('praticiens.index');
Route::get('/praticiens/{praticien}', [PraticienController::class, 'show'])->name('praticiens.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/import/form', [UserImportController::class, 'showForm'])->name('import.form');
Route::post('/import/users', [UserImportController::class, 'importUsers'])->name('import.users');

Route::get('/medicaments', [MedicamentController::class, 'index'])->name('medicaments.index');
Route::get('/medicaments/{medicament}', [MedicamentController::class, 'show'])->name('medicaments.show');

Route::get('/compterendu', [CompteRenduController::class, 'index'])->name('compterendu.index');
Route::post('/compterendu', [CompteRenduController::class, 'store'])->name('compterendu.store');
Route::get('/compterendu/create', [CompteRenduController::class, 'create'])->name('compterendu.create');
Route::get('/compterendu/{id}/generate-pdf', 'App\Http\Controllers\CompteRenduController@generatePdf')->name('compterendu.generatePdf');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // mettre juste un / si on veut qu'on soit obligatoirement connecté pour atteindre l'appli
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});

Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});

Fortify::requestPasswordResetLinkView(function () {
    return view('auth.forgot-password');
});

Fortify::resetPasswordView(function ($request) {
    return view('auth.reset-password', ['request' => $request]);
});

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
}); 