<?php

use Illuminate\Support\Facades\Route;

Route::get('', function() {
    return view('base');
})->name('base');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', \App\Http\Controllers\Admin\PropertyController::class)->except(['show']);
});


