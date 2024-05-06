<?php
namespace app\controller\api\post;

use think\Request;

class post
{
    public function index(Request $request)
    {
        return 'Hello from PostController@index';
    }
}
