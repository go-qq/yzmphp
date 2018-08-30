<?php
namespace app\xgadmin\model;
use think\Model;
class Article extends Model{
	protected static function init(){
		Article::event('before_insert', function ($ArticleModel) {
			
		});
	}
	// 鍒犻櫎
	public function delA($id){
		$data=$this->find($id);
		
		return $this::destroy($id);
	}
	//删除改造方法
	public function delM($id)
	{
		return $this::destroy($id);
	}
}