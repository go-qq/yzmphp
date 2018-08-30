<?php 
namespace app\xgadmin\model;
use think\Model;
class Manger extends Model{
	//添加改造方法
	public function addM($arr)
	{
		
		
		$arr['password']=md5($arr['password']);
		
		if ($this->save($arr)) {
			return true;
		}else{
			return false;
		}
	}


	//删除改造方法
	public function delM($id)
	{
		return $this::destroy($id);
	}

	//修改改造方法
	public function editM($arr)
	{	
		if ($arr['password']) {
			$arr['password']=md5($arr['password']);
		}else{
			$data=$this->find($arr['id']);
			$arr['password']=$data['password'];
		}

		$res = $this::update(["username"=>$arr['username'],'password'=>$arr['password'],'status'=>$arr['status'],'id'=>$arr['id']]);
		
		return $res;
	}

	
}


