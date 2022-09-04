<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GincanaController;

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
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::prefix('gincana')->group(function(){
        Route::get('/',[GincanaController::class,'index'])->name('gincana.index');
        Route::get('/create',[GincanaController::class,'create'])->name('gincana.create');
        Route::post('/store',[GincanaController::class,'store'])->name('gincana.store');
        Route::get('/{id}',[GincanaController::class,'show'])->name('gincana.show');
        Route::get('/{id}/edit',[GincanaController::class,'edit'])->name('gincana.edit');
        Route::put('/{id}',[GincanaController::class,'update'])->name('gincana.update');
        Route::delete('/{id}',[GincanaController::class,'destroy'])->name('gincana.destroy');
        Route::post('/resposta/{id}',[GincanaController::class,'resposta'])->name('gincana.resposta');
    });

    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

});
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';
