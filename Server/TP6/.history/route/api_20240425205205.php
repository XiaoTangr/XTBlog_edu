<?php
use think\facade\Route;

Route::resource('api/Articles','api.Articles/index')=>all;
Route::get('api/Admin','api.Admin/index');