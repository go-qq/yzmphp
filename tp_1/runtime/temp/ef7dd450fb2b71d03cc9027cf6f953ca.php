<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/usr/share/nginx/html/tp_1/public/../application/admin/view/login/login.html";i:1533783655;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>希高智能后台登录 </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="__INDEXS__/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEXS__/login/login.css">
	<script src="__INDEXS__/bs/js/jquery-3.2.1.js"></script>
	<script src="__INDEXS__/bs/js/bootstrap.min.js"></script>
</head>
<body >

<!-- 文字区不需要请连css部分代码一并删除 -->
<div class="form">
  <h3>欢迎登录后台</h3>
	<form id="form1" name='form1' action="logo" method="POST">
  		<p>
	  		<label for="">用户名</label>
	  		<input type="text" name='name' id='user' class='inp'>
  		</p>
  		<p>
	  		<label for="">密码</label>
	  		&nbsp;&nbsp;&nbsp;&nbsp;
	  		<input type="password" name='password' id='word' class='inp'>
  		</p>

  		<p>
	  		<label for="">验证码</label>
	  		<input type="text" name='yzm' id='yzm'>
	  		<img src="verify" onclick="this.src='verify?rand='+Math.random()" id='yzmid'>
  		</p>
  		<p>
  			<input type="submit" value="登录"  style='width:50px;margin-top:15px;' class='btn btn-info' id='btnn'>
  		</p>
	</form>

</div>

<!-- 你可以添加个多“.slideshow-image”项目, 记得修改CSS -->
<div class="slideshow">
	<div class="slideshow-image" style="background-image: url('__INDEXS__/img/1.jpg')"></div>
	<div class="slideshow-image" style="background-image: url('__INDEXS__/img/2.jpg')"></div>
	<div class="slideshow-image" style="background-image: url('__INDEXS__/img/3.jpg')"></div>
	<div class="slideshow-image" style="background-image: url('__INDEXS__/img/4.jpg')"></div>
</div>
<script>

</script>
</body>
</html>

