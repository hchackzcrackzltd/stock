<?php

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
    return view('admaintem');
})->name('index');

Route::group(['prefix'=>'inventory/itemmaster'],function(){
  Route::get('/','inventory\itemmaster@getitemlist')->name('itemmaster_view');
  Route::post('additem','inventory\itemmaster@additem')->name('additem');
});

Route::group(['prefix'=>'inventory/goodsreceipt'],function(){
  Route::get('/','inventory\goodsreceipt@getlist')->name('goodsreceipt_view');
  Route::get('/detail','inventory\goodsreceipt@getdetail')->name('goodsreceipt_detail');
});

Route::group(['prefix'=>'inventory/goodsissue'],function(){
  Route::get('/','inventory\goodsissue@getlist')->name('goodsissue_view');
});
