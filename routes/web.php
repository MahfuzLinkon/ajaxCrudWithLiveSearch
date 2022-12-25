<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->group(function(){
    Route::get('/', 'manageProduct')->name('manageProduct');
    Route::post('/create-product', 'createProduct')->name('createProduct');
    Route::get('/get-data', 'getProduct')->name('getProduct');
    Route::put('/update-data', 'updateProduct')->name('updateProduct');
    Route::delete('/delete-data', 'deleteProduct')->name('deleteProduct');
    Route::get('/search-data', 'searchProduct')->name('searchProduct');
});