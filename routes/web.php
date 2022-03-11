<?php

use App\Http\Controllers\AuthAdmin\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::prefix('admin')->group(function() {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Auth::routes(['register' => false, 'logout' => false]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('/penilaian', 'PenilaianController')->only(['index', 'show']);
Route::resource('/manage/admin', 'AdminController')->except(['edit', 'update', 'store', 'show']);
Route::resource('/guru', 'GuruController');
Route::resource('/murid', 'MuridController');
Route::resource('/class', 'KelasController');
Route::resource('/level', 'LevelController')->except(['show']);
Route::resource('/matapelajaran', 'MatapelajaranController')->except(['show']);

Route::post('/gurumapel/{id}/add', 'GuruMatapelajaranController@addMatapelajaran')->name('gurumapel.store');
Route::delete('/gurumapel/{id}/remove', 'GuruMatapelajaranController@removeMatapelajaran')->name('gurumapel.remove');

Route::post('/change/password', 'ChangePasswordController')->name('change.password');
Route::post('/change/murid/password', 'ChangeMuridPasswordController')->name('change.murid.password');

Route::post('/class/{kelas}/murid/delete', 'DeleteMuridController')->name('murid.delete');
Route::post('/class/{kelas}/murid/tambah', 'TambahMuridController')->name('murid.add');
Auth::routes();
