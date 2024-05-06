<?php

use think\facade\Route;

Route::re('api/Articles', 'api.Articles/index')->AllowCrossDomain();
