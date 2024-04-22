<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CorpController;
use App\Http\Controllers\admin\NoteController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\CadreController;
use App\Http\Controllers\Admin\DroitController;
use App\Http\Controllers\admin\CentreController;
use App\Http\Controllers\admin\ModuleController;
use App\Http\Controllers\admin\ConcourController;
use App\Http\Controllers\admin\DiplomeController;
use App\Http\Controllers\admin\CandidatController;
use App\Http\Controllers\Admin\Dashboardontroller;
use App\Http\Controllers\admin\LocaliteController;
use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\Candidat\ProfilController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\admin\TypeCandidatController;
use App\Http\Controllers\AuthCandidat\LoginController;
use App\Http\Controllers\admin\ProgrammationController;
use App\Http\Controllers\Candidat\InscriptionController;
use App\Http\Controllers\Candidat\NoteController as CandidatNoteController;
use App\Http\Controllers\Candidat\ProgrammationController as CandidatProgrammationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [Dashboardontroller::class, 'index'])->name('admin.dashboard');
Route::get('/gestionnaire/dashboard', [Dashboardontroller::class, 'gestionnaire'])->name('gestionnaire.dashboard');
Route::get('/candidat/dashboard', [Dashboardontroller::class, 'candidat'])->name('candidat.dashboard');
Route::get('/candidat/inscription',[InscriptionController::class, 'index'])->name('candidat.inscription');


Route::prefix('admin')->middleware(['auth'])->group(function()
{
    //routes droits
    Route::controller(DroitController::class)->group(function(){
        Route::get('droits','index')->name('droit.index');
    });

    //routes roles
    Route::controller(RoleController::class)->group(function(){
        Route::get('roles','index')->name('role.index');
        Route::post('roles/store', 'store')->name('role.store');
        Route::post('/getDroit', 'getDroit');
        Route::post('/exceptDroit', 'exceptDroit');
        Route::post('roles/update', 'update')->name('role.update');
        Route::post('roles/delet', 'destroy')->name('role.delete');
    });

    //routes user
    Route::controller(UserController::class)->group(function(){
        Route::get('users','index')->name('user.index');
    });

   //cadres
    Route::controller(CadreController::class)->name('cadre.')->group(function () {
        Route::get('/cadres','index')->name('index');
    });

    //candidats
    Route::controller(CandidatController::class)->name('candidat.')->group(function () {
        Route::get('/candidats','index')->name('index');
        Route::get('/candidats/create','create')->name('create');
        Route::post('/candidats/store','store')->name('store');
        Route::get('/candidats/edit/{id}','edit')->name('edit');
        Route::post('/candidats/update/{id}','update')->name('update');
        Route::get('/candidats/destroy/{id}','destroy')->name('destroy');
    });

    //categories
    Route::controller(CategorieController::class)->name('categorie.')->group(function () {
        Route::get('/categories','index')->name('index');
    });

    //centres
    Route::controller(CentreController::class)->name('centre.')->group(function () {
        Route::get('/centres','index')->name('index');
    });

    //concours
    Route::controller(ConcourController::class)->name('concour.')->group(function () {
        Route::get('/concours','index')->name('index');
    });

    //corps
    Route::controller(CorpController::class)->name('corp.')->group(function () {
        Route::get('/corps','index')->name('index');
    });

    //diplomes
    Route::controller(DiplomeController::class)->name('diplome.')->group(function () {
        Route::get('/diplomes','index')->name('index');
    });

    //localites
    Route::controller(LocaliteController::class)->name('localite.')->group(function () {
        Route::get('/localites','index')->name('index');
    });

    //modules
    Route::controller(ModuleController::class)->name('module.')->group(function () {
        Route::get('/modules','index')->name('index');
    });

    //notes routes
    Route::controller(NoteController::class)->name('note.')->group(function () {
        Route::get('/notes','index')->name('index');
    });

    //programmations
    Route::controller(ProgrammationController::class)->name('programmation.')->group(function () {
        Route::get('/programmations','index')->name('index');
    });

    //notes
    Route::controller(NoteController::class)->name('note.')->group(function () {
        Route::get('/notes','index')->name('index');
    });

    //typeCandidats
    Route::controller(TypeCandidatController::class)->name('type-candidat.')->group(function () {
        Route::get('/typeCandidats','index')->name('index');
    });

    Route::controller(ProfilAdminController::class)->name('adminprofil.')->group(function () {
        Route::get('/adminprofils','index')->name('index');
    });
});

Route::group(['middleware' => 'candidat.guest'], function () {
    Route::get('candidat-login', [LoginController::class, 'index'])->name('candidatAuth.login');
    Route::post('candidat-post', [LoginController::class, 'login'])->name('candidat.login');
    Route::post('candidat-logout', [LoginController::class, 'logout'])->name('candidat.logout');
});
Route::prefix('candidat')->middleware(['authCandidat'])->group(function(){
    //notes
    Route::controller(CandidatNoteController::class)->name('candidat.')->group(function(){
        Route::get('/notes', 'index')->name('note.index');
    });
    //emploi du temps
    Route::controller(CandidatProgrammationController::class)->name('candidat.')->group(function(){
        Route::get('/programmations', 'index')->name('programmation.index');
    });
    //Profil
    Route::controller(ProfilController::class)->name('candidat.')->group(function(){
        Route::get('/profil', 'index')->name('profil.index');
    });
});
