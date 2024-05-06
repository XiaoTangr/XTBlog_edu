<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function index(Request $request)
    {
        return json(["med" => "get"]);
    }
    public function posix_times(Request $request)
    {
        return  json(["med" => "add","data" => $request->param("id")]);
    }
    public function update(Request $request){
        return  json(["med" => "update"]);
    }
    public function delete(Request $request){
        return  json(["med" => "delete"]);
    }
}
