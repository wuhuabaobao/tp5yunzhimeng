<?php

namespace app\index\controller;

use think\Controller;

class UserInfo extends Controller{

	// 前置方法属性
	//
	protected $beforeActionList=[
		'one',
		// 不想让谁使用前置方法two
		'two' => ['except' => 'index'],
		// 仅仅可以让谁使用 three
		'three'=>['only' => 'index'],
	];


	public function one(){

		echo "one<hr>";

	}

		public function two(){

		echo "two<hr>";

	}


		public function three(){

		echo "three<hr>";

	}


	public function index(){

		return "我是UserInfo控制器下的index方法";

	}

	public function index1(){

		return "我是UserInfo控制器下的index方法";

	}



}

