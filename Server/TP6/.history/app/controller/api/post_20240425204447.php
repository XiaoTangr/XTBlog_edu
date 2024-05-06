<?php
namespace app\controller\api;

use think\Request;

class Post
{
    public function index(Request $request)
    {
        return 'Hello from PostController@index';
    }
}
