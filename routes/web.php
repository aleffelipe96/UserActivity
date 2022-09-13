<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth'])->group(function () {
    Route::controller(SerieController::class)->group(function () {
        Route::get('series', 'index')->name('series.index');
        Route::get('series/create', 'create')->name('series.create');
        Route::post('series', 'store')->name('series.store');
        Route::get('series/{serie}/edit', 'edit')->name('series.edit');
        Route::post('series/{serie}/update', 'update')->name('series.update');
        Route::post('series/{serie}', 'destroy')->name('series.destroy');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
