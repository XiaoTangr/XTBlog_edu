<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function index(Request $request)
    {
        return json(["med" => "get"]);
    }
    public function add(Request $request)
    {
        return  json(["med" => "add"]);
    }
    public function update(){
        return  json(["med" => "update"]);
    }
    public function delete(){
        return  json(["med" => "delete"]);
    }
}
