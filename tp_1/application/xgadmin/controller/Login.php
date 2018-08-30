<?php
namespace app\xgadmin\Controller;
use think\Controller;
use think\Session;
use think\Db;

use \app\xgadmin\model\Status;
use \app\xgadmin\model\League;

use think\captcha\Captcha;
use think\Request;
use \app\xgadmin\model\User;

class Login extends Controller {
	//登录页面
	public function login()
		{	
			
			return view();
		}	

	public function logo()
	{
		$captcha=new Captcha;
		if(request()->isPost()){
			$data=input('post.');
			

			if($captcha->check($data['yzm'])){
				$model=new User;
				$num=$model->login($data);
			
				if($num==1){
					session('res',$data);
					// 修改语句
					$this->success('登录成功',url('Index/index'));
				}
				if($num==2){
					$this->error('密码不对');
				}
				if($num==3){
					$this->error('用户名不存在');
				}
			}else{
				$this->error('验证码不对','login/login');
			}
		}else{

			return view();
		}

		
		
	}

	//退出时清空session
	public function logout()
	{	
		$res = session(null);

		if (!$res) {

			$this->redirect('login/login');
		};
	}



		//验证码
    public function verify()
    {
        $config = [
             // 验证码字体大小
            'fontSize' => 16,
            // 验证码位数
            'length' => 4,
            // 关闭验证码杂点
            'useNoise' => true,
            // 验证码图片高度
            'imageH'   => 36,
            // 验证码图片宽度
            'imageW'   => 120,
            // 验证码过期时间（s）
            'expire'   => 1800,
        ];
        $captcha = new Captcha($config);
        return $captcha->entry();
    }


}