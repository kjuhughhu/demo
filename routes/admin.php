<?php


use Illuminate\Support\Facades\Route;
//admin
Route::get('category/',"AdminController@adminn");


//luu danh muc san pham
Route::get('category/created',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");


//luu thuong hieu san pham
Route::get('category/brandcreate',"AdminController@brandStore");
Route::post('category/brandstore',"AdminController@categoryBrand");
//Sua Danh muc
Route::get('category/edit/{id}',"AdminController@categoryEdit");
Route::post('category/update/{id}',"AdminController@categoryUpdate");
// Sua thuong hieu
Route::get('category/editBrand/{id}',"AdminController@brandEdit");
Route::post('category/brandupdate/{id}',"AdminController@brandUpdate");

//sinh vien



