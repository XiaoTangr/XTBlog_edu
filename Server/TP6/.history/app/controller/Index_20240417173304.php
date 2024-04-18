<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        if (require.getp)
        // 禁止访问
        return response(code:403);
        
    }
}
