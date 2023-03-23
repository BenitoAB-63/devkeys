<?php

use App\Models\Juego;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeseadosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Livewire\ActualizarJuego;

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
    return redirect('/login');
});


Route::get('/dashboard', function () {

    if(Auth::user()->admin===1){
        return redirect('/admin');
    }
    $categorias=Categoria::all();
    $juegos=Juego::all();
    return view('dashboard',['categorias'=>$categorias,'juegos'=>$juegos]);

})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/admin', function () {
    if(Auth::user()->admin===0){
        return redirect('/dashboard');
    }
    $categorias=Categoria::all();
    $juegos=Juego::all();
    return view('layouts.admin.index',['categorias'=>$categorias,'juegos'=>$juegos]);
})->middleware(['auth', 'verified'])->name('admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth','Guest')->group(function () {

    Route::get('/categoria/{categoria}',[CategoriaController::class,'show'])->middleware(['auth', 'verified']);

    Route::get('/juego/{juego}',[JuegoController::class,'show'])->middleware(['auth','verified']);
    
    Route::post('/juego/{juego}/wish',[DeseadosController::class,'store'])->middleware(['auth','verified'])->name('juego.wish.store');
    
    Route::delete('/juego/{juego}/wish',[DeseadosController::class,'destroy'])->middleware(['auth','verified'])->name('juego.wish.destroy');
    
    Route::get('/deseados',[DeseadosController::class,'show'])->middleware(['auth','verified'])->name('deseados.show');
});





//ADMIN
Route::middleware('admin')->group(function (){

    Route::get('/juegos',[JuegosController::class,'index'])->middleware(['verified'])->name('juegos');

    Route::get('/edit/{juego}',[JuegosController::class,'edit'])->middleware(['verified'])->name('juego.edit');

    
    Route::get('/edit-categorias/{juego}',[JuegosController::class,'edit_categoria'])->middleware(['verified'])->name('juego-categorias.edit');

    Route::post('/actualizar-categorias-juego',[JuegosController::class,'actualizarCategoriasJuego'])->middleware(['verified']);

    Route::get('/nuevo-juego',[JuegosController::class,'nuevo_juego'])->middleware(['verified'])->name('nuevo-juego');

    //Categorias
    Route::get('/categorias',[CategoriaController::class,'index'])->middleware(['verified'])->name('categorias');

});




require __DIR__.'/auth.php';
