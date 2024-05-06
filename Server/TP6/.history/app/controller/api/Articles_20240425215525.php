<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function index(Request $request)
    {
        return json(["med" => "get"]);
    }
    public function create(Request $request){
        return  json(["med" => "create"]);
    }
    public function save(Request $request){
        return  json(["med" => "save"]);
    }
    public function read(Request $request){
        return  json(["med" => "read"]);
    }
    public function edit(Request $request)
    {
        return  json(["med" => "post","data" => $request->param("id")]);
    }
    public function update(Request $request){
        return  json(["med" => "update"]);
    }
    public function delete(Request $request){
        return  json(["med" => "delete"]);
    }
}
