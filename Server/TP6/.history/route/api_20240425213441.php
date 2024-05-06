<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();

Route::rest('api/Articles', ['GET', '/:id/add', 'add']);
