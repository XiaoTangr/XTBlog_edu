<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        if (req)
        // 禁止访问
        return response(code:403);
        
    }
}