<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'dashboard']
)-> name('dashboard');

Route::get('/products', 'App\\Http\\Controllers\\ProductController@index')
->name('products.index');
Route::get('/product_discounts', 'App\\Http\\Controllers\\ProductDiscountsController@index')
->name('product_discounts.index');
Route::get('/product_categories', 'App\\Http\\Controllers\\ProductCategoriesController@index')
->name('product_categories.index');