<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function (){
//     return view('dashboard',[
//         'name'=>'jahid Hassan',
//         'contact_number'=>'+880 01518398423',
//         'address'=>'sukrabad',
//         'age'=>'23',
//         'division'=>'Dhaka'
// ]);
// });
Route::get('/dashboard',[FirstController::class,'index'])->name('dashboard');
Route::get('/about',[FirstController::class,'about'])->name('about');
