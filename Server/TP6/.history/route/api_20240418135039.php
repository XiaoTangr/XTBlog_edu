<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('api/getsiteinfo', 'api/getsiteinfo')->allowCrossDomain();
Route::post('/api/getpostcount', '/api/getpostcount')->allowCrossDomain();
Route::post('/api/getpostdata', '/api/getpostdata')->allowCrossDomain();
Route::post('/api/Login', '/api/login')->allowCrossDomain();