<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
->only(    'index', 'store', 'update', 'destroy')->AllowCrossDomain();
