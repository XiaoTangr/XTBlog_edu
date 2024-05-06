<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')->AllowCrossDomain()->rest([
    'index'    => 'get',
    'save'    => 'post',
    'update'   => 'put',   // 修改默认的 index 方法为 list
    'delete'    => 'delete',    // 修改默认的 save 方法为 add

    // 其他默认方法不变
]);
