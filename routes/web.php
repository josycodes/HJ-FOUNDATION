<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Basic;

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
    $basic = Basic::find(1);
    return view('pages.index', ['allbasics' => $basic]);
})->name('/');

Route::get('About Us', function () {
    $basic = Basic::find(1);
    return view('pages.about', ['allbasics' => $basic]);
})->name('About Us');

Route::get('Aims-Objectives', function () {
    $basic = Basic::find(1);
    return view('pages.aims-objectives', ['allbasics' => $basic]);
})->name('Aims-Objectives');

Route::get('Board Of Trustees', function () {
    $basic = Basic::find(1);
    return view('pages.board-of-trustees', ['allbasics' => $basic]);
})->name('Board Of Trustees');

Route::get('Management Team', function () {
    $basic = Basic::find(1);
    return view('pages.management-team', ['allbasics' => $basic]);
})->name('Management Team');

Route::get('Frequently Asked Questions', function () {
    $basic = Basic::find(1);
    return view('pages.faq', ['allbasics' => $basic]);
})->name('Frequently Asked Questions');

Route::get('Gallery', function () {
    $basic = Basic::find(1);
    return view('pages.gallery', ['allbasics' => $basic]);
})->name('Gallery');

Route::get('Events', function () {
    $basic = Basic::find(1);
    return view('pages.events', ['allbasics' => $basic]);
})->name('Events');

Route::get('Event Detail', function () {
    $basic = Basic::find(1);
    return view('pages.event-detail', ['allbasics' => $basic]);
})->name('Event Detail');

Route::get('News', function () {
    $basic = Basic::find(1);
    return view('pages.news', ['allbasics' => $basic]);
})->name('News');

Route::get('News Detail', function () {
    $basic = Basic::find(1);
    return view('pages.news-detail', ['allbasics' => $basic]);
})->name('News Detail');

Route::get('Awareness', function () {
    $basic = Basic::find(1);
    return view('pages.awareness', ['allbasics' => $basic]);
})->name('Awareness');

Route::get('Research', function () {
    $basic = Basic::find(1);
    return view('pages.research', ['allbasics' => $basic]);
})->name('Research');

Route::get('Fund Raising', function () {
    $basic = Basic::find(1);
    return view('pages.fund-raising', ['allbasics' => $basic]);
})->name('Fund Raising');

Route::get('Memebership Categories', function () {
    $basic = Basic::find(1);
    return view('pages.membership-categories', ['allbasics' => $basic]);
})->name('Memebership Categories');

Route::get('Benefits To Members', function () {
    $basic = Basic::find(1);
    return view('pages.benefits-to-members', ['allbasics' => $basic]);
})->name('Benefits To Members');

Route::get('Membership Application Forms', function () {
    $basic = Basic::find(1);
    return view('pages.membership-application-forms', ['allbasics' => $basic]);
})->name('Membership Application Forms');

Route::get('Volunteer Opportunities', function () {
    $basic = Basic::find(1);
    return view('pages.volunteer-opportunities', ['allbasics' => $basic]);
})->name('Volunteer Opportunities');

Route::get('Contact Us', function () {
    $basic = Basic::find(1);
    return view('pages.contact', ['allbasics' => $basic]);
})->name('Contact Us');

Route::get('Donate', function () {
    $basic = Basic::find(1);
    return view('pages.donate', ['allbasics' => $basic]);
})->name('Donate');






///DASHBOARD PAGES
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
    $basic = Basic::find(1);
    return view('admin.pageinfo',['allbasics' => $basic]);
})->name('pageinfo');

require __DIR__.'/auth.php';

Route::post('SubmitBasics', [BasicController::class, 'Submitbasicdata'])->name('SubmitBasics');

Route::post('logoUpload', [BasicController::class, 'submitlogo'])->name('logoUpload');


