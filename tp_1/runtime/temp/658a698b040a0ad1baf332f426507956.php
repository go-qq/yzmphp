<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/usr/share/nginx/html/tp_1/public/../application/xgadmin/view/article/update.html";i:1533479394;s:80:"/usr/share/nginx/html/tp_1/public/../application/xgadmin/view/public/layout.html";i:1533866265;}*/ ?>
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
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"></a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#pass_edit">修改密码</a></li>
            <li><a href="<?php echo url('index/index/index'); ?>">前台首页</a></li>
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
        <li class="list-group-item"><a href="<?php echo url('Author/index'); ?>">作者列表</a></li>
        <li class="list-group-item"><a href="<?php echo url('Article/index'); ?>">文章列表</a></li>
      </ul>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading titles" id="Admin">
        <span class="glyphicon glyphicon-user"></span>
        咨询管理
      </div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo url('index/data'); ?>">试用咨询</a></li>
        <li class="list-group-item"><a href="<?php echo url('index/data2'); ?>">加盟咨询</a></li>
      </ul>
    </div>
  </div>
  
<script src="__STATIC__/admin/baidu/ueditor.config.js"></script>
<script src="__STATIC__/admin/baidu/ueditor.all.min.js"></script>
<script src="__STATIC__/admin/baidu/lang/zh-cn/zh-cn.js"></script>
<div class="col-md-10">
	<ol class="breadcrumb">
	  <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
	  <li><a href="#">作者管理</a></li>
	  <li class="active">作者列表</li>
	  <a href="" style="float:right;height:25px;" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
	  <span style="clear:both"></span>
	</ol>
	<div class="panel panel-default">
		<div class="panel-body">
            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">文章标题</label>
                    <input type="text" name="title" class="form-control" id="" value="<?php echo $article['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="">文章描述</label>
                    <input type="text" name="des" class="form-control" id="" value="<?php echo $article['des']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="">文章内容</label>
                   <script id="editor" name="content" type="text/plain" style="width:100%;height:200px;"><?php echo $article['content']; ?></script>
                </div>
                <div class="form-group">
                    <label for="">栏目选择</label>
                    <select name="columid" id="" class="form-control">
                        <?php if(is_array($col) || $col instanceof \think\Collection || $col instanceof \think\Paginator): $i = 0; $__LIST__ = $col;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$col): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $col['id']; ?>" <?php echo $article['columid']==$col['id']?'selected':''; ?>>!-<?php echo str_repeat('-',$col['level']) ?><?php echo $col['name']; ?></option> 
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">作者</label>
                    <select name="authorid" id="" class="form-control">
                        <?php if(is_array($author) || $author instanceof \think\Collection || $author instanceof \think\Paginator): $i = 0; $__LIST__ = $author;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$author): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $author['id']; ?>" <?php echo $article['authorid']==$author['id']?'selected':''; ?>><?php echo $author['name']; ?></option> 
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input value="提交" class="btn btn-success" type="submit">
                    <input type="reset" value="重置" class="btn btn-danger">
                </div>
            </form>
        </div>
		<div class="panel-footer">
			
		</div>
	</div>
</div>
<script>
    var ue = UE.getEditor('editor');
</script>

</div>

<!-- 添加弹出框 -->
<div class="modal fade" id="pass_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo url('index/update'); ?>" method='post'>
          <div class="form-group">
            <label for="">修改密码</label>
            <input type="password" name="password" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">确认密码</label>
            <input type="password" name="repassword" class="form-control" >
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