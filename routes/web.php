<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');

Route::get('/songs/{id}', [SongController::class, 'show'])->name('songs.show');

Route::get('/songs/{id}/edit', [SongController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{id}', [SongController::class, 'update'])->name('songs.update');

Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');

Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');

Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');

Route::get('/albums/{id}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{id}', [AlbumController::class, 'update'])->name('albums.update');

Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');