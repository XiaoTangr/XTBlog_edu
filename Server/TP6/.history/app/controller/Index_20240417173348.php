<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        // 禁止访问index。php
        return response(code:403);
    }
}
