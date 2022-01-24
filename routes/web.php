<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/first', function () {
    return 'This is the first page, thanks for the lesson!';
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name("home::pages");

Route::get('news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::catalog");

Route::get('news/category/{id}', [\App\Http\Controllers\NewsController::class, 'category'])
    ->where('id', '[0-9]+')
    ->name("news::category");

Route::get('news/category/{id}/card/{cardId}', [\App\Http\Controllers\NewsController::class, 'card'])
    ->where('id', '[0-9]+')
    ->name("news::card");

Auth::routes();

//Route::get('/page/title/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name("catalog::index");
//Route::get('/page/title/catalog/create', [\App\Http\Controllers\CatalogController::class, 'create'])->name("catalog::create");
//Route::get('/page/title/catalog/update', [\App\Http\Controllers\CatalogController::class, 'update'])->name("catalog::update");
//Route::get('/page/title/catalog/delete', [\App\Http\Controllers\CatalogController::class, 'delete'])->name("catalog::delete");

Route::group([
    'prefix' => 'catalog',
    'as' => 'catalog::'
], function () {
    Route::get('', [\App\Http\Controllers\CatalogController::class, 'index'])
        ->name("index");

    Route::get('create', [\App\Http\Controllers\CatalogController::class, 'create'])
        ->name("create");

    Route::get('update', [\App\Http\Controllers\CatalogController::class, 'update'])
        ->name("update");

    Route::get('delete', [\App\Http\Controllers\CatalogController::class, 'delete'])
        ->name("delete");
});

Route::group([
    'prefix' => 'catalog/{id}',
    'as' => 'catalog::'
], function () {
    Route::get('', [\App\Http\Controllers\CatalogController::class, 'index'])
        ->name("card");

    Route::get('create', [\App\Http\Controllers\CatalogController::class, 'create'])
        ->name("create");

    Route::get('update', [\App\Http\Controllers\CatalogController::class, 'update'])
        ->name("update");

    Route::get('delete', [\App\Http\Controllers\CatalogController::class, 'delete'])
        ->name("delete");
});

Route::get('/{item}', [\App\Http\Controllers\HomeController::class, 'titles'])
    ->name("home::titles");
