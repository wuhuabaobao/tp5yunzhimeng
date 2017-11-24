<?php
	namespace app\index\controller;

	use thinkphp\controller;

	class User extends Controller {

		public function index(){

			return '我是User控制器的index方法';
		}



		public function jiazai(){

			return view();

		}


		// 数据的输出
		public function shuchu(){

			// 输出字符串
			// return "陈波";

			// 输出数组
			$arr = array('name' =>'陈' ,
						 'age' =>18 );

			// 一般想返回数组的时候就将其转换成json字符串
			// JSON_UNESCAPED_UNICODE  参数  Json不要编码Unicode.
			// 用PHP的json_encode来处理中文的时候, 中文都会被编码, 变成不可读的, 类似”\u***”的格式，如果想汉字不进行转码，有三种方法，下面是其中一种
			// 利用JSON_UNESCAPED_UNICODE  参数   必须是 PHP5.4版本以上才有



			// return '<h1>11111111</h1>';

			return json_encode($arr,JSON_UNESCAPED_UNICODE);

		}


	}








 ?>