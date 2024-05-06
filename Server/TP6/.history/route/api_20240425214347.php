<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->rest([
    'save'    => 'post',
    'update'   => 'put',   // 修改默认的 index 方法为 list
    'delete'    => 'delete',    // 修改默认的 save 方法为 add
])->AllowCrossDomain();
