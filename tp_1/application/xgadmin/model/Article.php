<?php
namespace app\xgadmin\model;
use think\Model;
class Article extends Model{
	protected static function init(){
		Article::event('before_insert', function ($ArticleModel) {
			
		});
	}
	// 删除
	public function delA($id){
		$data=$this->find($id);
		
		return $this::destroy($id);
	}
	//ɾ�����췽��
	public function delM($id)
	{
		return $this::destroy($id);
	}
}