<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\AppServ\www\kanc\public/../application/admin\view\manger\index.html";i:1512200714;s:71:"D:\AppServ\www\kanc\public/../application/admin\view\public\layout.html";i:1512200900;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" href="__STATIC__/public/bs/css/bootstrap.min.css">
	<script src="__STATIC__/public/bs/js/jquery.min.js"></script>
	<script src="__STATIC__/public/bs/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
</head>
<body>
	
<!-- 导航 -->
<nav class="navbar navbar-default index">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">后台管理系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo url('Index/clearCache'); ?>"><span class="glyphicon glyphicon-refresh"></span>清除缓存</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"></a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#pass_edit">修改密码</a></li>
            <li><a href="#">前台首页</a></li>
            <li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- 内容 -->
<div class="container">
	<!-- 左边菜单 -->
	<div class="col-md-2">
		<div class="panel panel-primary">
			<div class="panel-heading titles" id="Admin">
				<span class="glyphicon glyphicon-user"></span>
				管理员管理
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo url('Manger/index'); ?>">管理员列表</a></li>
        <li class="list-group-item"><a href="<?php echo url('Manger/root'); ?>">权限管理</a></li>
        <li class="list-group-item"><a href="<?php echo url('Manger/rule'); ?>">规则管理</a></li>
			</ul>
		</div>
    <div class="panel panel-primary">
      <div class="panel-heading titles" id="Admin">
        <span class="glyphicon glyphicon-user"></span>
        轮播管理
      </div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo url('Lunbo/index'); ?>">轮播列表</a></li>
      </ul>
    </div>
	</div>
	
<div class="col-md-10">
	<ol class="breadcrumb">
	  <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
	  <li><a href="#">管理员管理</a></li>
	  <li class="active">管理员列表</li>
	  <a href="" style="float:right;height:25px;" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
	  <span style="clear:both"></span>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger" onclick="delAll()"> <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;批量删除</button>
			<button class="btn btn-primary" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;添加管理员</button>
			<div class="pull-right" style="margin-left:30px;"><p class="tot">共有数据:&nbsp;<b id="tot"><?php echo $count; ?></b>&nbsp;条</p></div>
			<form class="form-inline pull-right" action="<?php echo url('index'); ?>" role="form" >
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入要搜索内容">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search">&nbsp;搜索</span></button>
			</form>
		</div>
		<div class="panel-body">
            <table class="table table-bordered table-hover">
                 <tr>
                    <th><input type="checkbox" name="" id="" class="checkAll"></th>
                     <th>id</th>
                     <th>名称</th>
                     <th>最近登录时间</th>
                     <th>登录次数</th>
                     <th>状态</th>
                     <th>操作</th>
                 </tr> 
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
                 <tr id="tr<?php echo $dat['id']; ?>">
                    <td><input type="checkbox" name="" value="<?php echo $dat['id']; ?>" class="checks"></td>
                     <td><?php echo $dat['id']; ?></td>
                     <td><?php echo $dat['username']; ?></td>
                     <td><?php echo $dat['lastlogin']==0?'从未登录':date("Y-m-d H:i:s",$dat['lastlogin']); ?></td>
                     <td>0</td>
                     <td>
                       <?php if($dat['status'] == 1): ?>
                       <button class="btn btn-info" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">正常</button>
                       <?php else: ?>
                       <button class="btn btn-danger" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">禁用</button>
                       <?php endif; ?>
                     </td>
                     <td><span class="glyphicon glyphicon-trash" onclick="del(this,<?php echo $dat['id']; ?>)"></span>&nbsp;&nbsp;|&nbsp;&nbsp; <span class="glyphicon glyphicon-tag" onclick="find(<?php echo $dat['id']; ?>)" data-toggle="modal" data-target="#edit"></span></td>
                 </tr> 

                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>  
        </div>
		<div class="panel-footer">
			
		</div>
	</div>
</div>
<!-- 添加弹出框 -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加管理员</h4>
      </div>
      <div class="modal-body">
       	<form action="" method="post" onsubmit="return false" id="addForm">
       		<div class="form-group">
       			<label for="">USER</label>
       			<input type="text" name="username" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<label for="">PASS</label>
       			<input type="password" name="password" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<label for="">Statu</label>
       			<br>
    				<input type="radio" name="status" value="1" id="">正常
    				<input type="radio" name="status" value="0" checked id="">禁用
       		</div>
       		<div class="form-group">
       			<input value="提交" class="btn btn-success" onclick="add()">
       			<input type="reset" value="重置" class="btn btn-danger">
       		</div>
       	</form>
      </div>
      
    </div>
  </div>
</div>

<!-- 修改弹出框 -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改管理员</h4>
      </div>
      <div class="modal-body">
       		<form action="" onsubmit="return false" id="updateForm">
            
       		</form>
      </div>
      
    </div>
  </div>
</div>
<script>
  //   添加
  function add(){
    str=$('#addForm').serialize();
    $.post("<?php echo url('ajax_add'); ?>",{str:str},function(data){
        if(data.code!=1){
            $('.table').append(data);
            $('.close').click();
            num=$('#tot').html();
            num=parseInt(num);
            $('#tot').html(++num);
        }else{
            alert(data.error);
        }
    })
}
//删除
function del(obj,id){
    $.post("<?php echo url('ajax_del'); ?>",{id:id},function(data){
        if(data==1){
            $(obj).parent().parent().remove();
            num=$('#tot').html();
            num=parseInt(num);
            $('#tot').html(--num);
        }
    });
}
// 查找
function find(id){
    $.post("<?php echo url('ajax_find'); ?>",{id:id},function(data){
        $('#updateForm').html(data);  
    })
}
// 修改
function update(id){
    str=$('#updateForm').serialize();
    $.post("<?php echo url('ajax_update'); ?>",{str:str},function(data){
        $('#tr'+id).html(data);
        $('.close').click();
    })
}
// 批量删除
$('.checkAll').click(function(){
    $('.checks').click();
});
function delAll(){
    datas=$('.checks:checked');
    arr=new Array();
    for(i=0;i<datas.length;i++){
        arr[i]=datas.eq(i).val();
    }
    str=arr.join(',',arr);
    $.post("<?php echo url('ajax_delAll'); ?>",{str:str},function(data){
        if(data==arr.length){
            for(i=0;i<arr.length;i++){
                $("#tr"+arr[i]).remove();
            }
        }else{
            alert("删除失败");
        }
    })
}
// 状态改变
function status(obj,id,val){
    if(val){
        $.post("<?php echo url('ajax_status'); ?>",{id:id,status:0},function(data){
            if(data==1){
                $(obj).html("禁用");
                $(obj).attr('class','btn btn-danger');
                $(obj).attr("onclick","status(this,"+id+",0)");
            }else{
                alert('修改失败');
            }
        })
    }else{
        $.post("<?php echo url('ajax_status'); ?>",{id:id,status:1},function(data){
            if(data==1){
                $(obj).html("正常");
                $(obj).attr('class','btn btn-info');
                $(obj).attr("onclick","status(this,"+id+",1)");
            }else{
                alert('修改失败');
            }
        })
    }
}
</script>
</div>

<!-- 添加弹出框 -->
<div class="modal fade" id="pass_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修噶密码</h4>
      </div>
      <div class="modal-body">
       	<form action="">
       		<div class="form-group">
       			<label for="">原始密码</label>
       			<input type="password" name="" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<label for="">修改密码</label>
       			<input type="password" name="" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<input type="submit" value="提交" class="btn btn-success">
       			<input type="reset" value="重置" class="btn btn-danger">
       		</div>
       	</form>
      </div>
      
    </div>
  </div>
</div>
</body>
<script>


	$(".titles").click(function(){
		$(".titles").next().hide();
		$(this).next().show();
	});
$("#<?php echo request()->module(); ?>").click();
</script>
</html>