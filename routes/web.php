<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('home');
//generamos un parametro opcional
Route::get('/products/{category_id?}', [SiteController::class, 'products'])->name('products');
Route::get('/productBycategory', [SiteController::class, 'productBycategory'])->name('productBycategory');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');
Route::get('/cart', [SiteController::class, 'cart'])->name('cart');
Route::get('/wishlist', [SiteController::class, 'wishlist'])->name('wishlist');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/my-account', [SiteController::class, 'myaccount'])->name('myaccount');


Route::get('/product-details/{product_id}', [SiteController::class, 'product_details'])->name('product_details');





Route::get('/profile/{username}', [SiteController::class, 'profile']);

Route::get('/about', function () {
    return 'about';
    //return view('about');
});


Route::get('/services', function () {
    return 'services';
    //return view('services');
});




/*Route::get('/', function () {
    return view('welcome'); #regresamos una vista
});



Route::get('/greeting', function () {
    return 'Hello World';
});


#pasar un parametro obligatorio, sino no existe
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});


#aqui el parametro es opcional pero no me muestra nada si no le agrego algun parametro

Route::get('/user2/{name?}', function (?string $name = null) {
    return $name;
});

#aqui el parametro igual es opcional pero aqui si me muestra que es john en caso de que no agregue nada
Route::get('/user3/{name?}', function (?string $name = 'John') {
    return $name;
});
*/

