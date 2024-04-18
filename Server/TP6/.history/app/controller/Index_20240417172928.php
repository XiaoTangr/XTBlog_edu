<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        response(type: 'json',);
        // return json(['code' => 200, 'msg' => 'success']);
    }
}
