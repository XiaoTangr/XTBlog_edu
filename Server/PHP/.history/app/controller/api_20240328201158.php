<?php

namespace app\controller;

use app\BaseController;

class Api extends BaseController
{
    public function index()
    {
        }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
