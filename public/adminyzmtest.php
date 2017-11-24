<?php
    // 定义应用目录
            define('APP_PATH', __DIR__ . '/../application/');

            // 绑定后台模块
            define("BIND_MODULE",'adminyzmtest'); # 绑定后台模块



            // 加载框架引导文件
            require __DIR__ . '/../thinkphp/start.php';



            // 必须写到  上面的代码 require __DIR__ . '/../thinkphp/start.php' 加载框架引导文件 之后否则报错
            \think\App::route(false);
            // 关闭admin模块的路由
            //（为什么要关闭后台的路由，因为后台不像前台要方便用户的输入和百度之类的搜素引擎的抓取优化，所以不需要写后台路由）



