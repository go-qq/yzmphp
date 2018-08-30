<?php
namespace app\xgadmin\Controller;
use think\Controller;
use think\Session;
use think\Db;
use \app\xgadmin\controller\CommonController;
use \app\xgadmin\model\Status;

use \app\xgadmin\model\League;

use think\captcha\Captcha;
use think\Request;
use \app\xgadmin\model\User;
require_once './static/admin/library/HTMLPurifier.auto.php';
require_once './static/admin/library/HTMLPurifier.func.php';
class Index extends CommonController {
 
   //后台首页
	public function index()
	{			
			return view();
			
	}

   


	//试用弹框数据status表数据
	public function add(Request $request)
	{
		$res = session('res');

		$name = $res['name'];

		$this->assign('name',$name);

         // 使用表单令牌认证
        //$data = input('post.');
		// post数组中只有name和email字段会写入
        //过滤xss
        $dirty_html=isset($_POST['name'])?$_POST['name']:false;
        $_POST['name'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['tel'])?$_POST['tel']:false;
        $_POST['tel'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['jqr'])?$_POST['jqr']:false;
        $_POST['jqr'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['eamil'])?$_POST['eamil']:false;
        $_POST['eamil'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['bei'])?$_POST['bei']:false;
        $_POST['bei'] = HTMLPurifier($dirty_html);
        $validate = \think\Loader::validate('Form');
        if(!$validate->check($_POST)){
            dump($validate->getError());
        }else{
            $user = new Status;
            $_POST['time']=time();
            echo $user->allowField(['name','tel','jqr','eamil','bei','time'])->save($_POST);    
        }
		
	}
    public function data()
    {
		

    	$user = new Status;
	    
	    //搜索功能
	    $search=input('get.search');
        $map['name']=array('like',"%$search%");
  
	    // 查询status的用户数据 并且每页显示5条数据
		$list = $user::table('status')->where($map)->order('id', 'desc')->paginate(5);
		$page=$list->render();
		$this->assign('page',$page);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
		$count=db('status')->count();
      
        $this->assign('count',$count);
		if (session('res')) {
			return view();
		}else{
			$this->redirect('index/login');
		}
    	
    }
    
    //删除试用数据
    //删除加盟数据
    public function ajax_del1()
    {
	

        // dump(input());
        //接受传过来的id 
        $id = input('post.id');

        //删除传过来的id数据
        $user = Status::get($id);
		
		$code = $user->delete();
        
        if ($code) {
            $data=[
                'statu'=>200,
                'info'=>'删除成功'
            ];
        }else{
            $data=[
                'statu'=>400,
                'info'=>'删除失败'
            ];
        };
        return $data;

    }

    //加盟数据
    public function add2()
    {
    	
		// post数组中只有name和email字段会写入
        //过滤xss
        $dirty_html=isset($_POST['gname'])?$_POST['gname']:false;
        $_POST['gname'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['pname'])?$_POST['pname']:false;
        $_POST['pname'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['tel'])?$_POST['tel']:false;
        $_POST['tel'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['eamil'])?$_POST['eamil']:false;
        $_POST['eamil'] = HTMLPurifier($dirty_html);
        $dirty_html=isset($_POST['text'])?$_POST['text']:false;
        $_POST['text'] = HTMLPurifier($dirty_html);
        $validate = \think\Loader::validate('Formt');
        dump($_POST);
        if(!$validate->check($_POST)){
            dump($validate->getError());
        }else{
            $user = new League;
            $_POST['time']=time();
            $user->allowField(['gname','pname','tel','eamil','text','time'])->save($_POST);   
        }
    }
    public function data2()
    {

		
    	$user = new League;
		$count=db('league')->count();
      	$this->assign('count',$count);

      	 //搜索功能
	    $search=input('get.search');
        $map['pname']=array('like',"%$search%");

       
	    // 查询状态为1的用户数据 并且每页显示5条数据
		$list = $user::table('league')->where($map)->order('id', 'desc')->paginate(5);
		$page=$list->render();
		$this->assign('page',$page);
		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		// 渲染模板输出
    	if (session('res')) {
			return view();
		}else{
			$this->redirect('index/login');
		}
    }
    //删除加盟数据
    public function ajax_del2()
    {
	

        // dump(input());
        //接受传过来的id 
        $id = input('post.id');

        //删除传过来的id数据
        $user = League::get($id);
		
		$code = $user->delete();
        
        if ($code) {
            $data=[
                'statu'=>200,
                'info'=>'删除成功'
            ];
        }else{
            $data=[
                'statu'=>400,
                'info'=>'删除失败'
            ];
        };
        return $data;
	

    }
	//修改管理员密码
	public function update()
		{
			
			$user= new User;

			$res = $user->get(1);
			$password = md5(input('post.password'));
			$repassword=md5(input('post.repassword'));

			if ($repassword === $password) {
				$user = User::get(1);
				$user->password= $repassword;
                $user->save();

				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
			

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


    //批量删除
    public function ajax_delAll()
    {
        $model=new Status;
        $res=$model->delM(input("post.str"));
        return $res;
    }

     //批量删除2
    public function ajax_delAll2()
    {
        $model=new League;
        $res=$model->delM(input("post.str"));
        return $res;
    }
    //状态改变试用
    public function ajax_status()
    {
        $data=input('post.');
        $res = db('status')->where('id',$data['id'])->update(['statu'=>$data['statu']]);
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }

     //状态改变加盟
    public function ajax_statu()
    {
        $data=input('post.');
     
        $res = db('league')->where('id',$data['id'])->update(['statu'=>$data['statu']]);
        
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }


}