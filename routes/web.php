<?php

Route::prefix("admin")->group (function (){
    include_once("admin.php");
});

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//day la phan dang nhap
Route::get("dang-nhap","WebController@login");

//day la trang chu
Route::get("/","WebController@home");

//day la trang san pham
Route::get("/product/{id}","WebController@product");

//Day la danh sach san pham


Route::get("/listproduct","WebController@listproduct");
//Day la trang san pham theo danh muc cate
Route::get("/cate/{id}","WebController@categorypr");
//Day la trang san pham theo danh muc brand
Route::get("/brandpr/{id}","WebController@brands");


