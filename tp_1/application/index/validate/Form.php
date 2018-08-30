<?php 
namespace app\index\validate;
use think\validate;
class Form extends validate{
	//验证规则
	    protected $rule = [
        'name'  =>  'require|max:25|token:__hash__',
        'email' =>  'email',
    ];
    protected  $msg  =[
        'name.require'     => '名称不能为空',
        'email.email'     => '邮箱格式不对',
    ];
	//  protected $rule = [
 //        'name'  =>  'require|max:25|token',
 //        'email' =>  'email',
 // 		'pname'=>'require|max:50|token',
 // 		'gname'=>'require|max:25|token',
 //    ];
	// // 验证消息
	// protected $message=[
	// 	'name:require'=>'名称不能为空',
	// 	'gname:require'=>'名称不能为空',
	// 	'pame:require'=>'名称不能为空',
	// 	'email:email'=>'邮箱格式不对',
	// ];
	// // 验证场景
	// protected $scene=[
	// 	'add'=>['name','email'],
	// 	'add1'=>['pname','gname','email'],
	// ];
}
