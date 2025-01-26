<?php


use Illuminate\Support\Facades\Route;

$idRegex = '[8-9]+';
$slugRegex = '[0-9a-z\-]+';
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/biens', [App\Http\Controllers\PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [App\Http\Controllers\PropertyController::class, 'show'])->name('property.show')->where([
    'property' => $idRegex,
    'slug' => $slugRegex,
]);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'dologin']);
Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');




Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('property', \App\Http\Controllers\Admin\PropertyController::class)->except(['show']);
    Route::resource('option', \App\Http\Controllers\Admin\OptionController::class)->except(['show']);
});
