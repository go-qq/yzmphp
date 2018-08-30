<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/usr/share/nginx/html/tp_1/public/../application/xgadmin/view/index/data.html";i:1533636256;s:80:"/usr/share/nginx/html/tp_1/public/../application/xgadmin/view/public/layout.html";i:1533866265;}*/ ?>
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
  

<div class="col-md-10">
	<ol class="breadcrumb">
	  <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
	  <li><a href="#">咨询管理</a></li>
	  <li class="active">试用咨询</li>
	  <a href="" style="float:right;height:25px;" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
	  <span style="clear:both"></span>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger" onclick="delAll()"> <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;批量删除</button>
			
			<div class="pull-right" style="margin-left:30px;"><p class="tot">共有数据:&nbsp;<b id="tot"><?php echo $count; ?></b>&nbsp;条</p></div>
			<form class="form-inline pull-right" action="" role="form" >
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入要搜索内容">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search">&nbsp;搜索</span></button>
			</form>
		</div>
		<div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                	<th>
                       	<input type="checkbox" name=""   class='checkAll'>
                    </th>
					<td>id</td>
     				<td>姓名</td>
     				<td>电话</td>
     				<td>邮箱</td>
     				<td>备注</td>
     				<td>试用目的</td>
     				<td>时间</td>
     				<td>处理状态</td>
     				<td>删除</td>
				</tr>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
				<tr id="tr<?php echo $value['id']; ?>">
					<th>
                        <input type="checkbox" name=""  value="<?php echo $value['id']; ?>" class='checks'>
                    </th>
					<th><?php echo $value['id']; ?></th>
					<th><?php echo $value['name']; ?></th>
					<th><?php echo $value['tel']; ?></th>
					<th><?php echo $value['eamil']; ?></th>
					<th><?php echo $value['bei']; ?></th>
					<th><?php echo $value['jqr']; ?></th>
					<th><?php echo date('Y-m-d H:i',$value['time'] ); ?></th>
					<th>
						<?php if($value['statu'] == 1): ?>
	                        <button class='btn btn-info' onclick="status(this,<?php echo $value['id']; ?>,<?php echo $value['statu']; ?>)">已回访</button>
	                        <?php else: ?>
	                        <button class='btn btn-danger' onclick="status(this,<?php echo $value['id']; ?>,<?php echo $value['statu']; ?>)">未回访</button>
                        <?php endif; ?>
					</th>
					<th>
						<input type="submit" value='删除' class='btn btn-danger' onclick='del(this,<?php echo $value['id']; ?>)'>
					</th>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
            </table>  
        </div>
		<div class="panel-footer">
			<?php echo $page; ?>
		</div>
	</div>
</div>

<script>
	//删除方法
	function del (obj,id) {
		
		//发生sql语句
		$.post("<?php echo url('ajax_del1'); ?>",{id:id},function  (data) {
				if (data.statu==200) {
					$(obj).parent().parent().remove();
					   num =$('#tot').html();
			           num=parseInt(num); 
			           $('#tot').html(--num) 
					alert(data.info);
				}else{
					alert(data.info);
				}
		})
	}

	//批量删除
 $('.checkAll').click(function  () {
   $('.checks').click();
 })

function delAll () {
    datas=$('.checks:checked');
    arr=new Array();

    for(i=0;i<datas.length;i++){
        arr[i]=datas.eq(i).val();
    }

    str=arr.join(',',arr);
    $.post("<?php echo url('ajax_delAll'); ?>",{str:str},function  (data) {
        if (data==arr.length) {
            for(i=0;i<arr.length;i++){
                $('#tr'+arr[i]).remove();
                num =$('#tot').html();
	            num=parseInt(num); 
	            $('#tot').html(--num)
            }
        }else{
            alert('删除失败!');
        } 
    })

}


    //状态
    function status (obj,id,val) {
        if (val) {
            $.post("<?php echo url('ajax_status'); ?>",{id:id,statu:0},function  (data) {
                   if (data==1) {
                        $(obj).html('未回访');
                        $(obj).attr('class','btn btn-danger');
                        $(obj).attr("onclick","status(this,"+id+",0)")
                    }else{
                        alert('修改失败!')
                    }; 
            })
        }else{
            $.post("<?php echo url('ajax_status'); ?>",{id:id,statu:1},function  (data) {
                if (data==1) {
                    $(obj).html('已回访');
                    $(obj).attr('class','btn btn-info');
                    $(obj).attr("onclick","status(this,"+id+",1)")
                }else{
                    alert('修改失败!')
                }
            })
        };
    }
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