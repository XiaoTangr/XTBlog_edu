<?php

use think\facade\Route;

Route::resource('api/Articles', 'api.Articles')
    ->only(['index','save','create'])
    ->AllowCrossDomain();
