<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'homepage'])
    ->name('homepage');

Route::get('/patologie', [PublicController::class, 'patologie'])
    ->name('patologie');

Route::get('/fisioterapia', [PublicController::class, 'fisioterapia'])
    ->name('fisioterapia');

Route::get('/domicilio', [PublicController::class, 'domicilio'])
    ->name('domicilio');

Route::get('/contatti', [PublicController::class, 'contatti'])
    ->name('contatti');
