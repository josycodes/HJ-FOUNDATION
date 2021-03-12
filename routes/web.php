<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\ManagementController;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/', [BasicController::class , 'viewIndex'])->name('/');

Route::get('About Us', [BasicController::class, 'viewAbout'])->name('About Us');

Route::get('Aims-Objectives', [BasicController::class,'viewAims'])->name('Aims-Objectives');

Route::get('Board Of Trustees', [BasicController::class,'viewBot'])->name('Board Of Trustees');

Route::get('Management Team', [BasicController::class ,'ViewManagement'])->name('Management Team');

Route::get('Frequently Asked Questions', [BasicController::class , 'viewFaq'])->name('Frequently Asked Questions');

Route::get('Gallery', [BasicController::class, 'viewGallery'])->name('Gallery');

Route::get('Events', [BasicController::class , 'viewEvents'])->name('Events');

Route::get('Event Detail', [BasicController::class , 'findEvent'])->name('Event Detail');

Route::get('News', [BasicController::class , 'viewNews'])->name('News');

Route::get('News Detail', [BasicController::class , 'findNews'])->name('News Detail');

Route::get('Awareness', [BasicController::class , 'viewAwarness'])->name('Awareness');

Route::get('Research', [BasicController::class , 'viewResearch'])->name('Research');

Route::get('Fund Raising', [BasicController::class, 'viewFunds'])->name('Fund Raising');

Route::get('Memebership Categories', [BasicController::class , 'viewMemeber'])->name('Memebership Categories');

Route::get('Benefits To Members', [BasicController::class, 'viewBenefits'])->name('Benefits To Members');

Route::get('Membership Application Forms', [BasicController::class , 'viewMemeberForm'])->name('Membership Application Forms');

Route::get('Volunteer Opportunities', [BasicController::class , 'viewVolunteer'])->name('Volunteer Opportunities');

Route::get('Contact Us', [BasicController::class , 'viewContact'])->name('Contact Us');

Route::get('Donate', [BasicController::class , 'viewDonate'])->name('Donate');





require __DIR__.'/auth.php';
///DASHBOARD PAGES
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/vision', [BasicController::class, 'viewVision'])->name('vision');

Route::get('/goal', [BasicController::class, 'viewAdminGoal'])->name('goal');

Route::get('/aims', [BasicController::class, 'viewAboutAims'])->name('aims');

Route::get('/about', [BasicController::class , 'viewAdminAbout'])->name('about');

Route::get('/mission', [BasicController::class , 'viewAdminMission'])->name('mission');

Route::get('/pageinfo', [BasicController::class , 'viewAdminPageinfo'])->name('pageinfo');

Route::get('Add New Board of Trustee', function (){
    return view('admin.addboardoftrustee');
})->name('Add New Board of Trustee');

Route::get('All Board of Trustees', [BoardController::class , 'viewAllbot'])->name('All Board of Trustees');

Route::get('Edit Board of Trustees/{id}', [BoardController::class , 'editBoard'])->name('Edit Board of Trustees');

Route::get('/AdminAwareness', [ProgrammeController::class , 'viewAwareness'])->name('AdminAwareness');

Route::get('/AdminResearch', [ProgrammeController::class , 'viewResearch'])->name('AdminResearch');

Route::get('/AdminFunds', [ProgrammeController::class , 'viewFunds'])->name('AdminFunds');

Route::get('Add New Member', [ManagementController::class , 'viewManagementTeam'])->name('Add New Member');

Route::get('All Member', [ManagementController::class , 'viewAllManagementTeam'])->name('All Member');



//UPLOAD......
Route::post('SubmitBasics', [BasicController::class, 'Submitbasicdata'])->name('SubmitBasics');

Route::post('logoUpload', [BasicController::class, 'submitlogo'])->name('logoUpload');

Route::post('UploadAims', [AboutController::class, 'UpdateAims'])->name('UploadAims');

Route::post('UploadVision', [AboutController::class, 'UploadVision'])->name('UploadVision');

Route::post('UploadGoal', [AboutController::class, 'UploadGoal'])->name('UploadGoal');

Route::post('UploadMission', [AboutController::class, 'UploadMission'])->name('UploadMission');

Route::post('UploadAbout', [AboutController::class, 'UploadAbout'])->name('UploadAbout');

Route::post('UploadBoardofTrustee', [BoardController::class, 'CreateBot'])->name('UploadBoardofTrustee');

 //EDIT BOARD OF TRUSTEE
Route::post('EditBoardofTrustee/{id}', [BoardController::class, 'UpdateBot'])->name('EditBoardofTrustee');

//DELETE BOARD OF TRUSTEE
Route::get('DeleteBoard/{id}' , [BoardController::class , 'deleteBot'])->name('DeleteBoard');

//UPLOAD AWARENESS CONTENT
Route::post('UploadAwareness', [ProgrammeController::class , 'uploadAwareness'])->name('UploadAwareness');

//UPLOAD RESEARCH CONTENT
Route::post('UploadResearch' , [ProgrammeController::class , 'uploadResearch'])->name('UploadResearch');

//UPLOAD FUND RAISING CONTENT
Route::post('UploadFund' , [ProgrammeController::class , 'uploadFund'])->name('UploadFund');

//ADD MANAGEMENT TEAM
Route::post('Add Management' , [ManagementController::class , 'addManagement'])->name('Add Management');

//EDIT MANAGEMENT TEAM
Route::get('EditManagement/{id}', [ManagementController::class, 'UpdateManagement'])->name('EditManagement');

Route::post('Update Management/{id}' , [ManagementController::class , 'editManage'])->name('Update Management');

//DELETE MANAGEMENT TEAM
Route::get('DeleteManagement/{id}' , [ManagementController::class , 'deleteManagement'])->name('DeleteManagement');

