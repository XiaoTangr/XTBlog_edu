<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();

// 获取文章列表
Route::get('api/Articles', 'api.Articles/index');

// 获取文章详情
Route::get('api/Articles/:id', 'api.Articles/show');

// 创建文章
Route::post('api/Articles', 'api.Articles/store');

// 更新文章
Route::put('api/Articles/:id', 'api.Articles/update');

// 删除文章