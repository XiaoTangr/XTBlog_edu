<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(
        [
            'index', 'save', 'read', 'update', 'delete'
        ]
    )->AllowCrossDomain();
Route::post('/api/login', 'api.Login/login');
