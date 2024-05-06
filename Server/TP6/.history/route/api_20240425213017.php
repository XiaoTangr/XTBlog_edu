<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource([
    ['api/Articles', 'get', '', 'api.Articles/index'],
    ['api/Articles', 'POST', '/:id', 'api.Articles/update'],
    ['api/Articles', 'PUT', '/:id', 'api.Articles/add'],
    ['api/Articles', 'DELETE', '/:id', 'api.Articles/delete'],
]);
