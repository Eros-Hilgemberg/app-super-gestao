<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/about',  [AboutController::class, 'about'])->name('site.about');
Route::get('/contact',  [ContactController::class, 'contact'])->name('site.contact');
Route::post('/contact',  [ContactController::class, 'contact'])->name('site.contact');

Route::get('/login', function () {
    return 'Login';
});

Route::prefix('/app')->group(
    function () {
        Route::get('/clients', function () {
            return 'clients';
        })->name('app.clients');
        Route::get('/suppliers',  [SupplierController::class, 'index'])->name('app.suppliers');
        Route::get('/products', function () {
            return 'products';
        })->name('app.products');
    }
);

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para voltar a página inicial';
});

Route::get('teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');
