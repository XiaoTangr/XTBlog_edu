<?php

use think\facade\Route;
use think\middleware\AllowCrossDomain;

Route::resource('api/Articles', 'api.Articles')
->names([
    'index' => 'list', // 将默认的index方法修改为list
    'save' => 'add',   // 将默认的save方法修改为add
])

rest([

])->AllowCrossDomain();
