<?php
namespace app\index\controller;
use think\Controller;
use \think\Db;
use think\Request;
use app\index\model\Article as ArticleModel;
class Article extends Controller {
    public function index(){
    	$user = new ArticleModel;
        $list = $user::table('article')->order('id', 'desc')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
    	$res=db('article')->select();
    	$this->assign('res',$res);
    	return view();
    }

    // 新闻页面
    public function news()
    {   
        $user = new ArticleModel;
        $data=input('');
        $xid=$data['id'];
        $maxid = $user->max('id');
        $minid = $user->min('id');

        $id=input('get.id');
        $mid=input('get.mid');
        $a=input('get.a');
      
        if ($a) {

            if ($id>$minid) {
                //上一篇
               $id=$id;
               $res = Db::table('article')->where('id','<',$id)->order('id', 'desc')->limit(0,1)->select();
            }elseif($mid>0&&$mid<$maxid){
                //下一篇
                 $id=$mid;
                 dump($id);
                 $res = Db::table('article')->where('id','>',$id)->order('id','asc')->limit(0,1)->select();
            }elseif($id==$minid){
                $id=$minid;
                $res = Db::table('article')->where('id',$id)->select();
            }else{
                $id=$maxid;
                $res = Db::table('article')->where('id',$id)->select();
            };
           
        }else{ 
            $id=$xid;
            $res=db('article')->where('id',$id)->select();
            
        }
           
            $this->assign('res',$res);
	   $this->assign('minid',$minid);
        	   $this->assign('maxid',$maxid);
        return view();


    }

   
}

    
    //新闻页面
    // public function news()
    // {   
    //     $user = new Article;
    //     $maxid = $user->max('id');
    //     $minid = $user->min('id');
    //     $id=input('get.id');
    //     $mid=input('get.mid');
      
    //     if ($id>$minid) {
    //         //上一篇
    //        $id=$id;
    //        $res = Db::table('article')->where('id','<',$id)->order('id', 'desc')->limit(0,1)->select();
    //     }elseif($mid>0&&$mid<$maxid){
    //         //下一篇
    //          $id=$mid;
    //          $res = Db::table('article')->where('id','>',$id)->order('id')->limit(0,1)->select();
    //     }elseif($id==$minid){
    //         $id=$minid;
    //         $res = Db::table('article')->where('id',$id)->select();
    //     }else{
    //         $id=$maxid;
    //         $res = Db::table('article')->where('id',$id)->select();
    //     };
       
    //     //$res=$user->table('article')->where('id',$id)->select();

    //     $this->assign('res',$res);

    //     return view();
    // }


