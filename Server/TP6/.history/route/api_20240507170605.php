<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(
        [
            'index', 'save', 'read', 'update', 'delete'
        ]
    )->AllowCrossDomain();
