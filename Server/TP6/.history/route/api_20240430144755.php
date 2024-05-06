<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(['index', 'save', 'create', 'update', 'delete'])
    ->AllowCrossDomain();

Route::rest([

    
    'save'  => ['POST', '', 'store'],
    'update' => ['PUT', '/:id', 'save'],
    'delete' => ['DELETE', '/:id', 'destory'],
]);
