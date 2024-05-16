<?php

use think\facade\Route;

Route::post('/api/login', 'api/:version.Login/login');