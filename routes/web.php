<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\SongAlbumController;

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



Route::get('/bands', [BandController::class, 'index'])->name('bands.index');

Route::get('/bands/create', [BandController::class, 'create'])->name('bands.create');
Route::post('/bands', [BandController::class, 'store'])->name('bands.store');

Route::get('/bands/{id}', [BandController::class, 'show'])->name('bands.show');

Route::get('/bands/{id}/edit', [BandController::class, 'edit'])->name('bands.edit');
Route::put('/bands/{id}', [BandController::class, 'update'])->name('bands.update');

Route::delete('/bands/{id}', [BandController::class, 'destroy'])->name('bands.destroy');


Route::patch('/songs/{song_id}/albums', [SongAlbumController::class, 'store'])->name('songalbums.store');
Route::delete('/songs/{song_id}/albums/{album_id}', [SongAlbumController::class, 'destroy'])->name('songalbums.destroy');