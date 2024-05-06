<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(
        ['index', 'save', 'create', 'update', 'delete']
        )
    ->rest(
        [
            'index'  => ['GET', 'api/Articles', 'api.Article/index'],
            'save'  =>  ['POST', '', 'store'],
            'create' => ['GET', 'api/Articles', 'api.Article/createg'],
            'update' => ['PUT', '/:id', 'save'],
            'delete' => ['DELETE', '/:id', 'destory'],
        ]
    )->AllowCrossDomain();
