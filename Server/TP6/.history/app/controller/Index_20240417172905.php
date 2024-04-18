<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        response(code:502, msg:'error');
        // return json(['code' => 200, 'msg' => 'success']);
    }
}
