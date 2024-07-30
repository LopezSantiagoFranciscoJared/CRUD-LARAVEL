<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Models\Categoria;

Route::get('/', function () {
    // return view('welcome');
    return "Bienvenidos al curso de Laravel";
});
Route::get('/games', [GamesController::class, 'index'])->name('games');
Route::get('/games/create', [GamesController::class, 'create'])->name('gamesCreate');
Route::get('/games/{name_game}/{categoria?}', [GamesController::class, 'help']);
Route::post('/games/storeVideojuego', [GamesController::class, 'storeVideojuego'])->name('crearVideojuego');
Route::get('/view/{game_id}', [GamesController::class, 'view'])->name('viewGame');
Route::post('/games/updateVideojuego', [GamesController::class, 'updateVideojuego'])->name('updateVideojuego');
Route::get('/delete/{game_id}', [GamesController::class, 'delete'])->name('deleteGame');


Route::resource('categories', CategoriaController::class);