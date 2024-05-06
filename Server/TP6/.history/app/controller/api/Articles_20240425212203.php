<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function index(Request $request)
    {
        return json(["1" => "get"]);
    }
    public function add()
    {
        return  json(["1" => "put"]);
    }
}
