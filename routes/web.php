<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;

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
 //   return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/redirect', [HomeController::class, 'redirect']);




Route::get('/', [HomeController::class, 'index']);


Route::get('/our/products', [HomeController::class, 'ourproducts'])->name('our.products');
Route::get('/about/us', [HomeController::class, 'aboutus'])->name('about.us');
Route::get('/contact/us', [HomeController::class, 'contactus'])->name('contact.us');




//--------- Search Product--------
Route::get('/product/search', [HomeController::class, 'search'])->name('product.search');
//--------- Search Product--------

//--------- Product Details--------
Route::get('/product/view/details/{id}', [HomeController::class, 'viewdetails'])->name('product.view.details');
//--------- Product Details--------

//--------- ADD CART Product--------
Route::post('/product/addcart/{id}', [HomeController::class, 'addcart'])->name('product.addcart');
//--------- ADD CART Product--------

//--------- CART Data Show --------
Route::get('/cart/show', [HomeController::class, 'cartshow'])->name('cart.show');
//--------- CART Data Show--------


//--------- CART Data Show --------
Route::get('/cart/delete/{id}', [HomeController::class, 'cartdelete'])->name('cart.delete');
//--------- CART Data Show --------

//--------- Product Order--------
Route::post('/product/order', [HomeController::class, 'confirmorder'])->name('product.order');
//--------- Product Order --------


//--------- Send Message  --------
Route::post('/send/message', [MessageController::class, 'message'])->name('user.message');
//--------- Send Message --------






//-------------ADMIN-----------
Route::get('/create/product', [AdminController::class, 'product'])->name('admin.products.create');
Route::post('/products/store', [AdminController::class, 'store'])->name('admin.products.store');


Route::get('/product/show', [AdminController::class, 'showproduct'])->name('admin.products.show');
Route::get('/product/edit/{id}', [AdminController::class, 'edit'])->name('admin.products.edit');
Route::post('/product/update/{id}', [AdminController::class, 'update'])->name('admin.products.update');
Route::get('/product/delete/{id}', [AdminController::class, 'delete'])->name('admin.products.delete');


Route::get('/order/show', [AdminController::class, 'ordershow'])->name('admin.order.show');
Route::get('/order/status/update/{id}', [AdminController::class, 'statusupdate'])->name('order.status.update');

Route::get('/message/show', [AdminController::class, 'showmessage'])->name('admin.message.show');
Route::get('/message/delete/{id}', [AdminController::class, 'deletemessage'])->name('admin.message.delete');









