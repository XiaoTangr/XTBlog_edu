<?php

namespace app\controller;

use think\Request;
use think\facade\Db;

class Post
{
    public function index()
    {
        return json(["code" => 200, "data" => "post"]);
    }
}
