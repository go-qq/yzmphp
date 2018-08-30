<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class Index extends Controller {
    public function index(){
    	return view();
    }

    //首页弹框的试用资格
    public function popone()
    {   
        
        return view();
    }

    //首页公司加盟弹框
    public function poptwo()
    {
        // $token = $this->request->token('__token__', 'sha1');
        // $this->assign('token', $token);
        // dump($token);
        return view();
    }

    //联系我们
    public function contact()
     {
         return view();
     } 
   
   //公司介绍
     public function company()
     {
         return view();
     }

    //产品介绍
     public function product()
     {
         return view();
     }
//后台介绍
     public function admin()
     {
         return view();
     }

	
}