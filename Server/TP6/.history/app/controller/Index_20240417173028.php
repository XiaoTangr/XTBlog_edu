<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return response(code:502);
        // return json(['code' => 200, 'msg' => 'success']);
    }
}
