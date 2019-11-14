<?php
//组件路由文件
Route::get("/index","SjunitController@index");
Route::post("/","SjunitController@store")->name('junit.store');
//测试控制器url
Route::get("/test","TestController@index");