<?php
namespace app\controller\api;

use think\Request;

class Articles
{
    public function index(Request $request)
    {
        return 'Articles';
    }
    public function sav(){
        return "read";
    }
}
