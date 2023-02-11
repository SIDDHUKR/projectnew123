<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\Customers;

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
    return view('home');
});

Route::get('/webdev', function () {
    return view('webdev');
});

Route::get('/digital', function(){
    return View('digital');
});

Route::get('/brand', function () {
    return view('brand');
});

Route::get('/about', function(){
    return View('about');
});

Route::get('/career', function(){
    return View('career');
});

Route::get('/datashow', function(){
    return View('datashow');
});

Route::post('/add',[CustomerController::class,'addcustomer']);
Route::get('/datashow',[CustomerController::class,'showitems']);
// Route::get('/delete/{id}',[CustomerController::class,'deleteitems']);
// Route :: get('/customer',function(){
//     $customers= Customer::all();
    // echo "<pre>";
    // print_r($customers);
// });
