<?php

use think\facade\Route;

// Route::resource('api/Articles', 'api.Articles')
//     ->only(['index', 'save', 'create', 'update', 'delete'])
//     ->AllowCrossDomain();

Route::rest([
    'index'  => ['GET', 'api/Articles', 'api.Article/index'],
    'save'  =>  ['POST', '', 'store'],
    'create' => ['POST', 'api/Articles', 'api.Article/create'],
    'update' => ['PUT', '/:id', 'save'],
    'delete' => ['DELETE', '/:id', 'destory'],
])->AllowCrossDomain();
