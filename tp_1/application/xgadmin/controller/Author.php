<?php 
namespace app\xgadmin\Controller;
use app\xgadmin\model\Author as AuthorModel;
use think\Controller;
use \app\xgadmin\controller\CommonController;
class Author extends CommonController{
	public function index(){
		$data=db('Author')->select();
		$this->assign('data',$data);
		// ��Ⱦģ�����
		$count=db('Author')->count();   
        		$this->assign('count',$count);
		return view();
	}
	
	// 添加
	public function add(){
		$AuthorModel=new AuthorModel;
		//验证
		$validate=\think\Loader::validate('Author');
		if(!$validate->scene('add')->check(input('post.'))){
			$this->error($validate->getError());
		}
		$res=$AuthorModel->addA(input('post.'));
		if($res){
			$this->success('添加成功',url('index'));
		}else{
			$this->error('添加失败');
		}
	}
	// 删除
	public function del($id){
		$AuthorModel=new AuthorModel;
		$res=$AuthorModel->delA($id);
		if($res){
			$this->success('删除成功',url('index'));
		}else{
			$this->error('删除失败');
		}
	}
	// 修改
	public function update($id){
		if(request()->isPost()){
			$data=input("post.");
			
			$AuthorModel=new AuthorModel;
			$res=$AuthorModel->save($data,['id'=>$id]);
			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$data=db('author')->find($id);
			$this->assign('data',$data);
			return view();
		}
	}
	

}