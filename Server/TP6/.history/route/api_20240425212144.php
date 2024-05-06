<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();


Route::rest([
    'api/Articles'   => ['get', '', 'index'],
    'api/Articles'   => ['POST', '/:id', 'updat'],
    'api/Articles' => ['PUT', '/:id', 'save'],
    'api/Articles' => ['DELETE', '/:id', 'destory'],
]);
