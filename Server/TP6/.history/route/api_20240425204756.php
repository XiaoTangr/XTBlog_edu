<?php
use think\facade\Route;

Route::get('api/getsiteinfo', 'api/getsiteinfo')->allowCrossDomain();
Route::post('/api/getpostcount', '/api/getpostcount')->allowCrossDomain();
Route::post('/api/getpostdata', '/api/getpostdata')->allowCrossDomain();
Route::post('/api/Login', '/api/login')->allowCrossDomain();

Route::get('api/Articles','api.Articles/index');
Route::get('api/Admin','api.post/index');