<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain();