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

Route::get('about', [\App\Http\Controllers\AboutController::class, 'index'])
    ->where('id', '[0-9]+')
    ->name("about::index");

Route::post('about/create', [\App\Http\Controllers\AboutController::class, 'create'])
    ->where('id', '[0-9]+')
    ->name("about::create");

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::catalog");

Route::get('/news/card/{news}', [\App\Http\Controllers\NewsController::class, 'card'])
    ->where('news', '[0-9]+')
    ->name("news::card");

Route::get('/category/{category_id}', [\App\Http\Controllers\NewsController::class, 'list'])
    ->where('category_id', '[0-9]+')
    ->name("category::list");

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name("categories::index");

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function () {
    Route::get('', [\App\Http\Controllers\Admin\NewsController::class, 'index'])
        ->name("index");

    Route::post('create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])
        ->name("create");

    Route::get('new', [\App\Http\Controllers\Admin\NewsController::class, 'new'])
        ->name("new");

    Route::get('update/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'update'])
        ->name("update");

    Route::get('delete/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'delete'])
        ->name("delete");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'as' => 'admin.', // имя маршрута, например admin.index
    'prefix' => 'admin', // префикс маршрута, например admin/index
    'namespace' => 'Admin', // пространство имен контроллера
    'middleware' => ['auth', 'admin'] // один или несколько посредников
], function () {
    // просмотр и редактирование пользователей
    Route::resource('user', '\App\Http\Controllers\Admin\UserController');
    //Parser
    Route::get("parser", [App\Http\Controllers\Admin\ParserController::class, 'index'])
        ->name('parser');
});

Route::group([
    'prefix' => 'social',
    'as' => 'social::',
], function () {
    Route::get('/login', [App\Http\Controllers\SocialController::class, 'loginVk'])
        ->name('login-vk');
    Route::get('/response', [App\Http\Controllers\SocialController::class, 'responseVk'])
        ->name('response-vk');
});


Route::group([
    'prefix' => '/admin/categories',
    'as' => 'admin::categories::'
], function () {
    Route::get('', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
        ->name("index");

    Route::post('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])
        ->name("create");

    Route::get('new', [\App\Http\Controllers\Admin\CategoryController::class, 'new'])
        ->name("new");

    Route::get('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])
        ->name("update");

    Route::get('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])
        ->name("delete");
});

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

Route::get('/db', [\App\Http\Controllers\DbController::class, 'index']);

Route::get('/{item}', [\App\Http\Controllers\HomeController::class, 'titles'])
    ->name("home::titles");
