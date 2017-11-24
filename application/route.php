<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

	use think\Route;

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];


	// Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）')
	// 设置路由
	// 设置路由之后，就不能使用pathinfo访问了
	// Route::rule('/','index/index/index');
	// Route::rule('kuozhan','index/index/kuozhan');


	// 设置路由之后，就不能使用pathinfo访问了
	// 设置路由之后，就不能使用pathinfo访问了
	// 设置路由之后，就不能使用pathinfo访问了

	// 没有加 美元符号的  路由表达式后面url后面可以随便带参数也不会影响访问 例如：
	// http://tp5yunzhimeng:8088/getConfig/asfsafsa1/as131d/ascq
	// *********************************************************************
	// 加了  美元符号的  就是完全匹配路由  必须严格按照路由地址来访问 例如
	//http://tp5yunzhimeng:8088/getConfig
	Route::rule('getConfig$','index/index/getConfig');
	// // 带参数路由
	Route::rule('course/:id','index/index/course');

	// // 带多个参数路由
	Route::rule('shijian/:year/:month','index/index/shijian');