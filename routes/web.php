<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

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
    return view('pages.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/vision', function () {
    return view('admin.vision');
})->name('vision');

Route::get('/goal', function () {
    return view('admin.goal');
})->name('goal');

Route::get('/aims', function () {
    return view('admin.aims');
})->name('aims');

Route::get('/pageinfo', function () {
    return view('admin.pageinfo');
})->name('pageinfo');

require __DIR__.'/auth.php';

Route::post('SubmitBasics', [BasicController::class, 'Submitbasicdata'])->name('SubmitBasics');


