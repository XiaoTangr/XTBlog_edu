<?php

namespace app\controller;

use think\Request;
use think\facade\Db;

class Api
{
    public function index()
    {
        $result = Db::table("post")->select();
        return json(["code" => 200, "data" => $result]);
    }
    
    public function getsiteinfo()
    {
        // 返回数组
        $SiteTitle = \think\facade\Config::get('conf.SiteTitle');
        // 返回 stmp.qq.com
        // $host = \think\facade\Config::get('mail.host');
        return $SiteTitle;
    }
    // 处理登录请求的方法
    public function login(Request $request)
    {
        // 判断是否是 POST 请求
        if ($request->isPost()) {

            $passwd = $request->post('passwd');
            // 在这里处理登录逻辑，比如验证用户名密码等
            if ($passwd == '123456') {
                return json(['code' => 200, 'message' => '登录成功']);
            } else {
                return json(['code' => 400, 'message' => '用户名或密码错误']);
            }
        } else {
            // 如果不是 POST 请求，返回错误信息
            return json(['code' => 400, 'message' => '无效的请求方法']);
        }
    }
}
