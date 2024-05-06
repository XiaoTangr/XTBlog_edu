<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function get(Request $request)
    {
        return json(["med" => "get"]);
    }
    public function post(Request $request)
    {
        return  json(["med" => "post","data" => $request->param("id")]);
    }
    public function put(Request $request){
        return  json(["med" => "update"]);
    }
    public function delete(Request $request){
        return  json(["med" => "delete"]);
    }
}
