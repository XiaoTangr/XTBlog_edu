<?php

declare(strict_types=1);

namespace app\controller\api;

use think\Request;
use think\Response;

class Login
{
    public function login(Request $request)
    {
        // 允许跨域访问
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE');
        header('Access-Control-Max-Age: 3600');
        header('Access-Control-Allow-Headers: x-requested-with, content-type');

        // 获取请求参数
        $username = $request->param('username');
        $password = $request->param('password');


        // 模拟验证用户名和密码
        $isValidUser = $username === 'admin' && $password === 'admin';

        // 返回响应
        $response = [
            'code' => $isValidUser ? 200 : 401,
            'msg' => $isValidUser ? 'success' : 'Invalid username or password'
        ];

        return Response::create($response, 'json');
    }
}
