<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Studentpage;
use App\Http\Controllers\Data;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Kajur;
use App\Http\Controllers\ProdiController;

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
    return view('auth.login');
});
Route::get('/register', function(){
    return view('auth.register');
});

Route::prefix('admin')->group(function(){
    Route::middleware(['auth:sanctum','admin'])->group(function(){
        Route::get('/', [Admin::class, 'index'])->name('homepage');
        Route::get('/datastudent', [Admin::class, 'datastudent'])->name('student');
        Route::get('/pengujian', [Admin::class, 'pengujian'])->name('pengujian');
        Route::get('/mahasiswa/{id}', [Admin::class, 'edit'])->name('data');
        Route::post('/save/{id}', [Admin::class, 'update'])->name('edits');
        Route::get('/delete/{id}', [Admin::class, 'delete'])->name('delete');
        Route::get('/histori', [Admin::class, 'histori'])->name('historis');
        Route::get('/add', [Admin::class, 'create'])->name('add');
        Route::post('/add/data', [Admin::class, 'store'])->name('post');
    });
});

Route::prefix('user')->group(function(){
    Route::middleware(['auth:sanctum','user'])->group(function(){
        Route::get('/', [Data::class, 'index']);
        Route::get('/hasil', [Data::class, 'hasil'])->name('hasil');
        Route::get('/hasilpengujian', [Data::class, 'tampilhasil'])->name('tampilhasil');
        Route::get('/printpengujian', [Data::class, 'printhasil'])->name('printhasil');

        Route::get('/uji', [Data::class, 'uji'])->name('uji');
        Route::post('/hitung/{id}', [Data::class, 'upload'])->name('hitung');
        Route::get('/mulaiuji/{id}', [Data::class, 'destroyss'])->name('mulai');
        Route::get('/uji/mulai/{id}',[Data::class, 'test'])->name('test');
        Route::get('/profile', [Data::class, 'profile'])->name('profile');
        Route::get('/histori', [Data::class, 'histori'])->name('histori');
        Route::post('/edit', [Data::class, 'update'])->name('edit');
    });

});

Route::prefix('kajur')->group(function(){
    Route::middleware(['auth:sanctum', 'kajur'])->group(function(){
        Route::get('/', [Kajur::class, 'index'])->name('kajurhome');
        Route::get('/data', [Kajur::class, 'datamahasiswa'])->name('kajurmhs');
        Route::get('/histori', [Kajur::class, 'histori'])->name('kajurhistori');
        Route::get('/profile', [Kajur::class, 'datakajur'])->name('datakajur');
    });
});

Route::prefix('prodi')->group(function(){
    Route::middleware(['auth:sanctum', 'prodi'])->group(function(){
        Route::get('/', [ProdiController::class, 'index'])->name('prodihome');
        Route::get('/data', [ProdiController::class, 'datamahasiswa'])->name('prodimhs');
        Route::get('/histori', [ProdiController::class, 'histori'])->name('prodihistori');
        Route::get('/profile', [ProdiController::class, 'dataprodi'])->name('dataprodi');
    });
});

require __DIR__.'/auth.php';
