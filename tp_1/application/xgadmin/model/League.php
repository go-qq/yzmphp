<?php
namespace app\xgadmin\model;

use think\Model;

class League extends Model
{
	//删除改造方法
	public function delM($id)
	{
		return $this::destroy($id);
	}
	
}