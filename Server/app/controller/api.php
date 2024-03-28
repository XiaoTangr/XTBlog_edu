<?php

namespace app\controller;

use think\Request;

class Api extends Request
{
    public function index()
    {
        $data = ['name' => Request::param('name'), 'status' => '1'];
        return json($data);
    }
}
