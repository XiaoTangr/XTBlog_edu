<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();


Route::rest([
    'api/Articles'   => ['POST', '', 'store'],
    'api/Articles' => ['PUT', '/:id', 'save'],
    'api/Articles' => ['DELETE', '/:id', 'destory'],
]);
