<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\tp_1\public/../application/admin\view\lunbo\index.html";i:1533450114;s:72:"D:\phpStudy\WWW\tp_1\public/../application/admin\view\public\layout.html";i:1533402588;}*/ ?>
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
  
<script src="__STATIC__/public/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/public/up/uploadify.css">
<div class="col-md-10">
	<ol class="breadcrumb">
	  <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
	  <li><a href="#">轮播管理</a></li>
	  <li class="active">轮播列表</li>
	  <a href="" style="float:right;height:25px;" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
	  <span style="clear:both"></span>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger" onclick="delAll()"> <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;批量删除</button>
			<button class="btn btn-primary" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;添加轮播</button>
			<div class="pull-right" style="margin-left:30px;"><p class="tot">共有数据:&nbsp;<b id="tot"></b>&nbsp;条</p></div>
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
                     <th>图片</th>
                     <th>链接</th>
                     <th>排序</th>
                     <th>操作</th>
                 </tr> 
                
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
        <h4 class="modal-title" id="myModalLabel">添加轮播</h4>
      </div>
      <div class="modal-body">
       	<form action="<?php echo url('add'); ?>" method="post">
       		<div class="form-group">
       			<label for="">图片</label>
       			<div id="queue"></div>
                <input type="hidden" name="img" id="addImg" value="">
                <input id="file_upload" name="file_upload" type="file" multiple="true">
       		</div>
       	<!-- 	<div class="form-group">
       			<label for="">链接</label>
       			<input type="text" name="href" class="form-control" id="">
       		</div> -->
       		<div class="form-group">
       			<input value="提交" class="btn btn-success" type="submit">
       			<input type="reset" value="重置" class="btn btn-danger">
       		</div>
       	</form>
      </div>
      
    </div>
  </div>
</div>


<script>
//文件上传
    $(function() {
        $('#file_upload').uploadify({
            'swf'      : '__STATIC__/public/up/uploadify.swf',
            'uploader' : "<?php echo url('ajax_upload'); ?>",
            'buttonText':'上传轮播图片',
            'fileObjName':'file',
            onUploadSuccess:function(file,data,response){
                img="<img src='__STATIC__/uploads/"+data+"' alt='' width='200px' height='80px'>";
                $("#queue").html(img);
                $('#addImg').val(data);

            }
        });
    });
    // 排序
    // function sort(obj,id){
    //    num=$(obj).val();
    //    $.post("<?php echo url('sort'); ?>",{sort:num,id:id},function(data){
    //         if(data==1){
    //             $(this).val(num);
    //         }
    //    })
    // }
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
            <input type="password" name="" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">修改密码</label>
            <input type="password" name="" class="form-control" >
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