<?php
namespace app\xgadmin\controller;
use think\Session;
use think\Request;
 
use think\Controller;
 
class CommonController extends Controller {
 
    public function _initialize(){

       
        //判断用户是否已经登录
        if (!session('res')) {
          
             $this->error('对不起,您还没有登录!请先登录再进行浏览', url('xgadmin/login/login'));
        }
    }
 
}