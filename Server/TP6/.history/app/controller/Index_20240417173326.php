<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        if (request()->isPost()) {
            // 允许访问
            return response(code:200);
        }
        // 禁止访问
        return response(code:403);
        
    }
}
