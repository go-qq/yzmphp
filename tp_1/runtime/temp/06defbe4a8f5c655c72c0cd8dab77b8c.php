<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/usr/share/nginx/html/tp_1/public/../application/index/view/index/poptwo.html";i:1533865055;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/static/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/css/index.css">
	<script src="/static/bs/js/jquery.min.js"></script>
	<script src="/static/layer/layer.js"></script>
</head>
<body>
	<form action="<?php echo url('/xgadmin/index/add2'); ?>" method='post' id='zige'>
		
		<h3 class='text-center'>立即联系希高成为服务商</h3>
		<div class="phone fh">
			<label for="" class='lname'>
				公司名称
			</label>
			<input type="text" placeholder='请填写您的公司名称' value='' name='gname' class='input1'>
		</div>
		<div class="phone">
			<label for="" class='lname'>
				姓名
			</label>
			<input type="text" placeholder='请填写您的姓名' value='' name='pname' class='input1'>
		</div>
		<div class="phone" >
			<label for="" class='lname'>
				电话
			</label>
			<input type="text" placeholder='请填写您的电话' value='' class='input1' name='tel' id='tel'>
		</div>
		<div class="phone">
			<label for="" class='lname'>
				邮箱
			</label>
			<input type="text" placeholder='请填写您的邮箱' value='' name='eamil' class='input1'>
		</div>
		<div class="phone">
			<label for="" class='lname'>
				留言
			</label>
			<input type="text" placeholder='请填写您的留言' value='' name='text' class='input1'>
		</div>
		
		<input type="hidden" value="xgzn" name='password'>
		<div class="submit">
			<button class='tijiao' id='btn'> 提交</button>
		</div>
	</form>
</body>
<script>
	$('#btn').click(function  () {
		console.log($('.input1'))
		    var phone = document.getElementById('tel').value;
		    if($.trim($('.input1')[0].value).length==0){
					alert('公司不能为空') 
		        	return false; 
			    }else if($.trim($('.input1')[1].value).length==0){
					alert('姓名不能为空') 
		        	return false; 
			    }else if($.trim($('.input1')[2].value).length==0){
					alert('电话不能为空') 
		        	return false; 
			    }else if(!(/^1(3|4|5|7|8)\d{9}$/.test(phone))){
			    	alert("手机号码格式有误");  
			        return false;
			    }else if($.trim($('.input1')[3].value).length==0){
			    	alert("邮箱不能为空");  
			        return false;
			    }else if($.trim($('.input1')[4].value).length==0){
			    	alert("留言不能为空");  
			        return false;
			    }  
			    
		//关闭当前iframe页面
		var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
		parent.layer.close(index); //再执行关闭   	
	})
</script>
</html>