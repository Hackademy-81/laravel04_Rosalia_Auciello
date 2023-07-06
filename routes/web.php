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

Route::get('/', [PublicController::class, "welcome"])->name("homePage");
Route::get('/game/dettaglio/{idGame}', [PublicController::class, "createGame"])->name("pageGame"); 
Route::get('/contattaci', [PublicController::class, "createForm"])->name("pageForm"); 
Route::post('/contattaci/submit', [PublicController::class, "contactUs"])->name("contact-us"); 
Route::get('/thankyou/page/{nameRedirect}', [PublicController::class, "crateThankYou"])->name("pageThankYou"); 
