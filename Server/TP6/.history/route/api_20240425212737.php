<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();


Route::rest([
    'api/Articles'   => ['get', 'api.Articles/index', 'index'],
    'api/Articles'   => ['POST', '/:id', 'update'],
    'api/Articles' => ['PUT', '/:id', 'add'],
    'api/Articles' => ['DELETE', '/:id', 'delete'],
]);
