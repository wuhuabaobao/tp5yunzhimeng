<?php

// 首先抒写命名空间
namespace app\index\controller;

// 引入think下的 Config类
use \think\Config;

class Index
{
    public function index()
    {
        echo '帅的一笔';
    	// return '帅的一笔';
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function getConfig(){

        // 要想测试下面这些配置的echo 结果
        // 因为路由上已经配置了 前后台模块分离的  单独绑定即省去了模块
        // 又因为配置了apache  省去了前台入口文件   特别说明后台入口文件是不能通过此方法省略的
        // 所以就剩下了：http://tp5yunzhimeng:8088/前台控制器/方法  对应此项目就是 http://tp5yunzhimeng:8088/Index/getConfig

    	// echo '111';
    	// 方法一： 通过   系统函数    读取
    	echo config('name');
    	echo "<hr>";
    	echo config('age');
    	echo "<hr>";

    	// 方法二：通过  系统类  读取   Config类
    	// 如果配制项存在直接输出   像ageXXXXXX不存在 就返回空 null
    	echo \think\Config::get('name');
    	echo "<hr>";

    	echo \think\Config::get('age');
    	echo "<hr>";

    	dump(\think\Config::get('ageXXXXXX'));

    	echo "<hr>";
    	// 顶部引入Conifg类后 就不用写命名空间了，可以直接使用了
    	echo dump(Config::get('name'));

        echo "<hr>";




    }

    public function kuozhan(){
        // 读取所有的database扩展
        echo dump(config('database'));
    }


//课程方法   带一个参数
    public function course(){

        echo input('id');
    }



    //课程方法   带多个参数
    public function shijian(){

        echo input('year').'  '.input('month');
    }


}
