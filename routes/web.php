<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\EpilepsyAwarenessController;

Route::get('/', [EpilepsyAwarenessController::class, 'show'])->name('home');
// Route::get('/epilepsy-awareness', [EpilepsyAwarenessController::class, 'show'])->name('epilepsy-awareness');
Route::get('/epilepsy-awareness', [StoryController::class, 'index'])->name('epilepsy-awareness');
Route::get('/share-story', [StoryController::class, 'create'])->name('stories.create');
Route::post('/share-story', [StoryController::class, 'store'])->name('stories.store');

// Static Pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/donations', function () {
    return view('donations');
})->name('donations');
    