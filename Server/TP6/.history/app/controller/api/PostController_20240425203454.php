<?php
namespace app\controller\api;

use think\Request;

class PostController
{
    public function index(Request $request)
    {
        return 'Hello from PostController@index';
    }
}
