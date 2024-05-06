<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();


Route::rest([
    'api/Articles'   => ['get', '', 'api.Articles/index'],
    'api/Articles'   => ['POST', '/:id', 'api.Articles/index'],
    'api/Articles' => ['PUT', '/:id', 'add'],
    'api/Articles' => ['DELETE', '/:id', 'delete'],
]);
