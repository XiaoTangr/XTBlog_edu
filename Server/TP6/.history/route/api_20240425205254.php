<?php
use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles','api.Articles/index')->AllowCrossDomain() ->[
    'get'=>'index',
    'post'=>'store',
    'put'=>'update',
    'delete'=>'destroy'];
Route::get('api/Admin','api.Admin/index');