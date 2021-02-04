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
// Route::get('/', function () {
//     return view('header');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('/acunit', [App\Http\Controllers\acunit::class, 'acunitnav'])->name('acunit');
// Route::get('/home', [App\Http\Controllers\acunit::class, 'home'])->name('acunit');

Route::get('/home', function () {
    return view('home');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});
Route::get('/acunit', function () {
    return view('acunit');
});

Route::get('/portable-ac-units', function () {
    return view('portable-ac-units');
});

Route::get('/water-cooler', function () {
    return view('water-cooler');
});

Route::get('/air-purifier', function () {
    return view('air-purifier');
});




Route::get('/compare', function () {
    return view('compare');
});
Route::get('/productpage', function () {
    return view('productpage');
});

Route::get('/cart-page', function () {
    return view('cart-page');
});
Route::get('/cart-page', function () {
    return view('cart-page');
});
Route::get('/add-address', function () {
    return view('add-address');
});
Route::get('/payment-method', function () {
    return view('payment-method');
});
Route::get('/service-repaire-home', function () {
    return view('service-repaire-home');
});


Route::get('/ac-service', function () {
    return view('ac-service');
});
Route::get('/ac-repaire', function () {
    return view('ac-repaire');
});
Route::get('/installation', function () {
    return view('installation');
});













// Route::get('/acunit', function () {
//     return view('acunit');
//      });




// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/popup', function () {
//     return view('popup');
// });
// Route::get('/myprofile', function () {
//     return view('myprofile');
// });
// Route::get('/acunit', function () {
//     return view('acunit');
// });



