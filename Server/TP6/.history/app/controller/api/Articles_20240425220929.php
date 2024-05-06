<?php

namespace app\controller\api;

use think\Request;

class Articles
{
    public function index($id)
    {
        return json(["med" => "get"]);
    }
    public function create($id){
        return  json(["med" => "create"]);
    }
    public function save($id){
        return  json(["med" => "save"]);
    }
    public function read($id){
        return  json(["med" => "read"]);
    }
    public function edit($id)
    {
        return  json(["med" => "edit","data" => $request->param("id")]);
    }
    public function update(Request $request){
        return  json(["med" => "update"]);
    }
    public function delete(Request $request){
        return  json(["med" => "delete"]);
    }
}