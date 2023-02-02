<?php

use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('products',['products' => Products::all()]);
});

Route::get('/products', function () {
    return view('products',['products' => Products::all()]);
});

Route::get('/products/{product}', function (Products $product) {
    return view('product',['product' => $product]);
});


// show register form
Route::get('/register', function (){
    return view('user.register');
});

// show login form
Route::get('/login', function (){
    return view('user.login');
});

// Create New User
Route::post('/customers/register', [UsersController::class, 'register']);

// Log In User
Route::post('/customers/authenticate', [UsersController::class, 'authenticate']);

