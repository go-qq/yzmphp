<?php
namespace app\xgadmin\Controller;
use think\Controller;
use app\xgadmin\model\Manger as MangerModel;
use \app\xgadmin\controller\CommonController;
class Manger extends CommonController {
    public function index(){
        $search=input('get.search');
        $map['username']=array('like',"%$search%");
    	$data = db('Manger')->where($map)->select();
        $count=db('Manger')->count();
        $this->assign('data',$data);
        $this->assign('count',$count);
    	return view();
    }

     //添加
    public function ajax_add()
    {
    	parse_str(input("post.str"),$arr);
    	
    	$model =new MangerModel;
        
        //验证
        $validate=\think\Loader::validate("Manger");
        if (!$validate->scene('add')->check($arr)) {
            return $arr=['error'=>$validate->getError(),'code'=>1];
        }else{
            $res = $model->addM($arr);
            if ($res) {
                $arr['id']=$model->id;
                $arr['lastlogin']=0;
                $this->assign('dat',$arr);

                return view();
            }
        }
    	
    	
     }


     //删除
     public function ajax_del()
     {
         $id = input('post.id');
         $model=new MangerModel;
         $res=$model->delM($id);
         if ($res) {
             echo 1;
         }else{
            echo 2;
         }
     }


     //查找
     public function ajax_find()
     {
         $id=input("post.id");
         $data = db('Manger')->find($id);
         $this->assign('dat',$data);
         return view();
     }

    
    //修改
     public function ajax_update()
    {
        parse_str(input('post.str'),$arr);

        $model=new MangerModel;

         //验证
        $validate=\think\Loader::validate("Manger");
        if (!$validate->scene('edit')->check($arr)) {
            return $arr=['error'=>$validate->getError(),'code'=>2];
        }else{
            $res=$model->editM($arr);
            if ($res) {
                $data=db('manger')->find($arr['id']);
                $this->assign('dat',$data);
                return view();
            }
        }
        
     }

    //批量删除
    public function ajax_delAll()
    {
        $model=new MangerModel;
        $res=$model->delM(input("post.str"));
        return $res;
    }

    //状态改变
    public function ajax_status()
    {
        $data=input('post.');
        $res = db('Manger')->where('id',$data['id'])->update(['status'=>$data['status']]);
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
