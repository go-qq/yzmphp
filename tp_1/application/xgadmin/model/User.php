<?php
namespace app\xgadmin\model;

use think\Model;

class User extends Model
{
	// 登录
	public function login($data){
		$admin=User::getByName($data['name']);
		
		if($admin){
			$id=$admin['id'];
			$user=$admin['name'];
			$pass=$admin['password'];
			if($pass==md5($data['password'])){
				// 密码正确
				session('name',$user);
				session('id',$id);
				return 1;
			}else{
				// 密码不正确
				return 2;
			}
		}else{
			// 用户名不存在
			return 3;
		}
	}	
}