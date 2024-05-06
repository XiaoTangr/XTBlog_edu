<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(
        [
            'index', 'save', 'create', 'update', 'delete'
        ]
    )->AllowCrossDomain();
