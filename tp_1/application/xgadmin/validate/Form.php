<?php 
namespace app\xgadmin\validate;
use think\validate;
class Form extends validate{
	    protected $rule = [
        'name'  =>  'require|max:25|token:__hash__',
        'eamil' =>  'require',
    ];
    protected  $msg  =[
        'name.require'     => '名称不能为空',
        'eamil.require'     => '邮箱不能为空',
    ];
	
}
