<?php

use App\Http\Controllers\Admin\Dashboardontroller;
use App\Http\Controllers\Admin\DroitController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->middleware(['auth'])->group(function(){
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
    Route::get('/cadres/create','create')->name('create');
    Route::post('/cadres/store','store')->name('store');
    Route::get('/cadres/edit/{id}','edit')->name('edit');
    Route::post('/cadres/update/{id}','update')->name('update');
    Route::get('/cadres/destroy/{id}','destroy')->name('destroy');
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
    Route::get('/categories/create','create')->name('create');
    Route::post('/categories/store','store')->name('store');
    Route::get('/categories/edit/{id}','edit')->name('edit');
    Route::post('/categories/update/{id}','update')->name('update');
    Route::get('/categories/destroy/{id}','destroy')->name('destroy');
});

//centres
Route::controller(CentreController::class)->name('centre.')->group(function () {
    Route::get('/centres','index')->name('index');
    Route::get('/centres/create','create')->name('create');
    Route::post('/centres/store','store')->name('store');
    Route::get('/centres/edit/{id}','edit')->name('edit');
    Route::post('/centres/update/{id}','update')->name('update');
    Route::get('/centres/destroy/{id}','destroy')->name('destroy');
});

//concours
Route::controller(ConcourController::class)->name('concour.')->group(function () {
    Route::get('/concours','index')->name('index');
    Route::get('/concours/create','create')->name('create');
    Route::post('/concours/store','store')->name('store');
    Route::get('/concours/edit/{id}','edit')->name('edit');
    Route::post('/concours/update/{id}','update')->name('update');
    Route::get('/concours/destroy/{id}','destroy')->name('destroy');
});

//corps
Route::controller(CorpsController::class)->name('corp.')->group(function () {
    Route::get('/corps','index')->name('index');
    Route::get('/corps/create','create')->name('create');
    Route::post('/corps/store','store')->name('store');
    Route::get('/corps/edit/{id}','edit')->name('edit');
    Route::post('/corps/update/{id}','update')->name('update');
    Route::get('/corps/destroy/{id}','destroy')->name('destroy');
});

//diplomes
Route::controller(DiplomeController::class)->name('diplome.')->group(function () {
    Route::get('/diplomes','index')->name('index');
    Route::get('/diplomes/create','create')->name('create');
    Route::post('/diplomes/store','store')->name('store');
    Route::get('/diplomes/edit/{id}','edit')->name('edit');
    Route::post('/diplomes/update/{id}','update')->name('update');
    Route::get('/diplomes/destroy/{id}','destroy')->name('destroy');
});

//localites
Route::controller(LocaliteController::class)->name('localite.')->group(function () {
    Route::get('/localites','index')->name('index');
    Route::get('/localites/create','create')->name('create');
    Route::post('/localites/store','store')->name('store');
    Route::get('/localites/edit/{id}','edit')->name('edit');
    Route::post('/localites/update/{id}','update')->name('update');
    Route::get('/localites/destroy/{id}','destroy')->name('destroy');
});

//modules
Route::controller(ModuleController::class)->name('module.')->group(function () {
    Route::get('/modules','index')->name('index');
    Route::get('/modules/create','create')->name('create');
    Route::post('/modules/store','store')->name('store');
    Route::get('/modules/edit/{id}','edit')->name('edit');
    Route::post('/modules/update/{id}','update')->name('update');
    Route::get('/modules/destroy/{id}','destroy')->name('destroy');
});

//notes routes
Route::controller(NoteController::class)->name('note.')->group(function () {
    Route::get('/notes','index')->name('index');
    Route::get('/notes/create','create')->name('create');
    Route::post('/notes/store','store')->name('store');
    Route::get('/notes/edit/{id}','edit')->name('edit');
    Route::post('/notes/update/{id}','update')->name('update');
    Route::get('/notes/destroy/{id}','destroy')->name('destroy');
});

//programmations
Route::controller(ProgrammationController::class)->name('programmation.')->group(function () {
    Route::get('/programmations','index')->name('index');
    Route::get('/programmations/create','create')->name('create');
    Route::post('/programmations/store','store')->name('store');
    Route::get('/programmations/edit/{id}','edit')->name('edit');
    Route::post('/programmations/update/{id}','update')->name('update');
    Route::get('/programmations/destroy/{id}','destroy')->name('destroy');
});

//typeCandidats
Route::controller(TypeCandidatController::class)->name('typeCandidat.')->group(function () {
    Route::get('/typeCandidats','index')->name('index');
    Route::get('/typeCandidats/create','create')->name('create');
    Route::post('/typeCandidats/store','store')->name('store');
    Route::get('/typeCandidats/edit/{id}','edit')->name('edit');
    Route::post('/typeCandidats/update/{id}','update')->name('update');
    Route::get('/typeCandidats/destroy/{id}','destroy')->name('destroy');
});
});
