<?php 
namespace app\xgadmin\validate;
use think\validate;
class Formt extends validate{
	    protected $rule = [
        'gname'  =>  'require|max:25|token:__hash__',
        'pname'  =>  'require',
        'eamil' =>  'require',
    ];
    protected  $msg  =[
        'gname.require'     => '名称不能为空',
        'pname.require'     => '名称不能为空',
        'eamil.require'     => '邮箱不能为空',
    ];
	
}
