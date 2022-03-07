<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('master','viewcontroller@getmaster');

Route::get('index', 'viewcontroller@getindex');

// Route::get('test', function () {
//     $api = App\diemden::all();
//    echo str_replace("\/","/",json_encode($api));
// });

//admin
Route::get('adddiadiem','viewcontroller@adddiadiem')->name('adddiadie');
Route::get('showdiadiem','viewcontroller@showdiadiem')->name('showdiadiem');
Route::get('editdiadiem/{id}','viewcontroller@update');
Route::post('editdiadiem/{id}','viewcontroller@postupdate');
Route::get('delete/{id}','viewcontroller@delete');


Route::get('admin','viewcontroller@admin')->name('admin');
Route::post('admin','viewcontroller@postdata')->name('postdata');
Route::post('update','viewcontroller@update')->name('update');



//get api bla bla
Route::group(['prefix' => 'api'], function () 
{
    Route::get('diadiem','viewcontroller@getdiadiem');
    Route::get('anuong','viewcontroller@getanuong');
    Route::get('khachsan','viewcontroller@getkhachsan');
    Route::get('muasam','viewcontroller@getmuasam');
    Route::get('vedem','viewcontroller@getvedem');
    Route::get('phuongtien','viewcontroller@getphuongtien');
    Route::get('cogimoi','viewcontroller@getcogimoi');
    
});