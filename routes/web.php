<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class , 'index']);
// Route::get('category_user' , [FrontendController::class , 'category']);

Auth::routes();


Route::post('add-to-cart', [CartController::class, 'addProduct']);

Route::delete('delete-card-item/{id}', [CartController::class, 'destroy']);


Route::middleware(['auth'])->group(function(){
    Route::get('cart', [CartController::class, 'viewcart']);
    Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeOrder']);

    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'userlogin']);


// Route::get('/', function () {
    //     // return view('dashboard.index');
    // });//->name('index');


Route::middleware(['auth', 'isAdmen'])->group(function(){

     Route::get('/dashboardd', function () {
        return view('dashboard.index');
     });



           //category//
    Route::get('category', [CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'add']);
    Route::post('insert-category', [CategoryController::class, 'insert']);
    Route::get('edit-category/{id}' ,[CategoryController::class, 'edit' ] );
    Route::put('update-category/{id}' , [CategoryController::class , 'update']);
    Route::get('delete-category/{id}' , [CategoryController::class, 'destroy']);


           //products//
    Route::get('products' , [ProductController::class , 'index']);
    Route::get('add-products' , [ProductController::class , 'add']);
    Route::post('insert-product' , [ProductController::class , 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}' , [ProductController::class, 'update' ]);
    Route::get('delete-product/{id}' , [ProductController::class, 'destroy' ]);

//users//
Route::get('users' , '@Admin\FrontendController@users');
Route::get('orders' , [OrderController::class , 'index']);
Route::get('admin/view_order/{id}' , [OrderController::class , 'view']);
Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
Route::get('order-history' , [OrderController::class , 'orderhistory']);

});








Route::prefix('dashboard')->group(function (){

    Route::get('index' , [AdminController::class, 'dashboard']);

});


