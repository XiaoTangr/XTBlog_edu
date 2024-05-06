<?php
use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles','api.Articles/index')->AllowCrossDomain()=;
Route::get('api/Admin','api.Admin/index');