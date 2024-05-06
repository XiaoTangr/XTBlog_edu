<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->rest([
    'save'    => 'post',
    'update'   => 'put',   
    'delete'    => 'delete',    
])->AllowCrossDomain();
