<?php
use think\facade\Route;

Route::get('api/getsiteinfo', 'api/getsiteinfo')->allowCrossDomain();
Route::post('/api/getpostcount', '/api/getpostcount')->allowCrossDomain();
Route::post('/api/getpostdata', '/api/getpostdata')->allowCrossDomain();
Route::post('/api/Login', '/api/login')->allowCrossDomain();

Route::post('/api/post', '/api/post/index')->allowCrossDomain();
Route::get('controller/api/post', 'api/');