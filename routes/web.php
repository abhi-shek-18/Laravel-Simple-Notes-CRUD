<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('notes.layout');
});

Route::resource('notes', NoteController::class);

