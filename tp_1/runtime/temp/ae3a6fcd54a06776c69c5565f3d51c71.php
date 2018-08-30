<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\tp_1\public/../application/admin\view\colum\update.html";i:1533470926;s:72:"D:\phpStudy\WWW\tp_1\public/../application/admin\view\public\layout.html";i:1533457021;}*/ ?>
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
      </ul>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading titles" id="Admin">
        <span class="glyphicon glyphicon-user"></span>
        文章管理
      </div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo url('Colum/index'); ?>">栏目列表</a></li>
        <li class="list-group-item"><a href="<?php echo url('Colum/index'); ?>">作者列表</a></li>
        <li class="list-group-item"><a href="<?php echo url('Colum/index'); ?>">文章列表</a></li>
      </ul>
    </div>
  </div>
  
<script src="__STATIC__/public/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/public/up/uploadify.css">
<div class="col-md-10">
  <ol class="breadcrumb">
    <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
    <li><a href="#">文章管理</a></li>
    <li class="active">栏目列表</li>
    <a href="" style="float:right;height:25px;" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
    <span style="clear:both"></span>
  </ol>
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加栏目</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo url('update'); ?>" method="post">
            <div class="form-group">
                <label for="">栏目名称</label>
                <input type="text" name='name' value="<?php echo $fdata['name']; ?>" class='form-control'>
            </div>
            <input type="hidden" name='id' value='<?php echo $fdata['id']; ?>'>
            <div class="form-group">
                <label for="">上级栏目</label>
                <select name="pid" id="" class="form-control">
                    <option value="0">顶级栏目</option>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $dat['id']; ?>" <?php echo $dat['id']==$fdata['pid']?'selected':''; ?>>|-<?php echo str_repeat('-',$dat['level'])  ?><?php echo $dat['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            
            <div class="form-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="type" id="optionsRadios1" value="0" checked>
                        图片
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="type" id="optionsRadios2" value="1">
                        列表
                    </label>
                </div>
            </div>


            <div class="form-group">
                <input value="提交" class="btn btn-success" type="submit">
                <input type="reset" value="重置" class="btn btn-danger">
            </div>
        </form>
      </div>
      
    </div> 
</div>


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