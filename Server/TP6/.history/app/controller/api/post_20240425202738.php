<?php

namespace app\controller;

use think\Request;
use think\facade\Db;

class Post
{
    public function index()
    {
        $result = Db::table("post")->select();
        return json(["code" => 200, "data" => ]);
    }
}
