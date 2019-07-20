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
    return view('welcome');
});
// login KH
Route::get("login",["as"=>"login","uses"=>"taikhoancontroller@login"]);
Route::post("login",["as"=>"login","uses"=>"taikhoancontroller@loginprocess"]);
// login Admin
Route::get("loginA",["as" => "loginA","uses" => "taikhoanAcontroller@loginA"]);
Route::post("loginA",["as" => "loginA","uses" => "taikhoanAcontroller@loginAprocess"]);
// list KH
Route::get("listkh",["as" => "listkh","uses" => "khachhangController@getAll"]);
// list ban
Route::get("listban", ["as" => "listban","uses" => "banController@getAll"]);
//them ban
Route::get("themban",["as"=>"themban","uses"=>"banController@themban"]);
Route::post("themban",["as"=>"themban","uses"=>"banController@thembanProcess"]);
//sua ban
Route::get("suaban/{maban}",["as"=>"suaban/{maban}","uses"=>"banController@suaban"]);
Route::post("suaban/{maban}",["as"=>"suaban/{maban}","uses"=>"banController@suabanProcess"]);
//xoa ban
Route::get("xoaban/{maban}",["as"=>"xoaban/{maban}","uses"=>"banController@xoaban"]);
// logout
Route::get("logout",["as" => "logout","uses" => "banController@logout"]);
//list 3
Route::get("index",["as" => "index","uses" => "barController@getAll"]);
//them 3
Route::get("thembar",["as" => "thembar","uses" => "barController@thembar"]);
Route::post("thembar",["as" => "thembar","uses" => "barController@thembarProcess"]);
//sua 3
Route::get("suabar/{maquanbar}",["as" => "suabar/{maquanbar}","uses" => "barController@suabar"]);
Route::post("suabar/{maquanbar}", ["as" => "suabar/{maquanbar}","uses" => "barController@suabarProcess"]);
//xoa 3
Route::get("xoabar/{maquanbar}",["as" => "xoabar/{maquanbar}","uses" => "barController@xoabar"]);
//contact
Route::get("contact",["as"=>"contact","uses"=>"contactController@contact"]);

