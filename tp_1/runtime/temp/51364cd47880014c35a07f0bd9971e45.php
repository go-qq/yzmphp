<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/usr/share/nginx/html/tp_1/public/../application/index/view/article/index.html";i:1535016414;s:78:"/usr/share/nginx/html/tp_1/public/../application/index/view/public/footer.html";i:1533952306;}*/ ?>
﻿<!doctype html>
<html lang="en">
<head>
	<title>希高电话机器人-电销机器人、全自动电话机器人、电话营销系统-江苏希高智能科技有限公司</title>

<meta name="keywords" content="希高智能,电话机器人,电销机器人,电话营销系统,希高机器人,呼叫中心,人工智能,电话AI,硅语电销机器人,智能机器人,外呼机器人,全自动电话机器人,江苏希高智能"/>

<meta name="description" content="江苏希高智能科技有限公司，自主研发电话语音机器人，具有强大的逻辑理解思维、完善的语境应对能力、丰富的行业经验、更高的识别率、拟人化的语言表达和快速反应水平，致力于帮助企业快速寻找意向客户，提升成单量，创造更大的价值。"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="__INDEXS__/img/logo.ico" />
	<link rel="stylesheet" href="__INDEXS__/css/wx-audio.css">
	<link rel="stylesheet" href="__INDEXS__/css/animate.min.css">
	<link rel="stylesheet" href="__INDEXS__/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEXS__/css/index.css">
	<script src="__INDEXS__/bs/js/jquery.min.js"></script>
	<script src="__INDEXS__/bs/js/bootstrap.min.js"></script>
	<script src="__INDEXS__/layer/layer.js"></script>
	<script src="__INDEXS__/js/wx-audio.js"></script>
	
</head>
<body>
		<!-- 头部导航 -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id='mynav'>
		  	<div class="container byNav">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="#">
		        	<img alt="Brand" src="__INDEXS__/img/logo1.png" class='img-responsive' id='logopng' width='80px;'>
		      	</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav byli">
			        <li class='active'>
			        	<a href="<?php echo url('index/index'); ?>" >首页</a>
			        </li>
			       
			        <li class=''>
			        	<a href="<?php echo url('index/product'); ?>">产品介绍</a>
			        </li>
			      
			        <li class=''>
			        	<a href="<?php echo url('index/contact'); ?>" >联系我们</a>
			        </li>
			        <li class=''>
			        	<a href="<?php echo url('index/company'); ?>" >公司介绍</a>
			        </li>
					 <li class=''>
			        	<a href="<?php echo url('article/index'); ?>" >行业动态</a>
			        </li>
			       
			        <li class='fuwu hidden-xs'>
			        	<a href="">服务商登录</a>
			        </li>
			        <li class='kefu hidden-xs'>
			        	<a href="">客服登录</a>
			        </li>
		      	</ul>   	
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="hidden-xs kong"></div>
	
	<img src="__STATIC__/img/banner511.jpg" alt="" width='100%'>

	<div class="container" style='margin-top:25px;'>
		<div class="col-md-8 text-left" style='background:#fff;padding:0px 25px 50px 25px;'>
			
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
				<div class='page-header'>
					<p><a href="<?php echo url('index/article/news',array('id'=>$data['id'])); ?>" class='aa' style='color:#272822;font-size:20px;text-decoration: none;'><?php echo $data['title']; ?></a></p>
					<p style="color:#ccc;margin-top:5px;"><?php echo date('Y-m-d H:i',$data['time'] ); ?> 口110</p>
					
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
		</div>
		<div class="col-md-3 text-left hidden-xs" style='margin-left:50px;'>
			<div style='background:#fff;padding:15px 25px 50px 25px;'>
				<h3>为你推荐</h3>
				<div style='border:1px solid #ccc;border-radius:5px;'>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
						<div class='' style='line-height:50px;border-bottom:1px solid #ccc;padding-left:15px;'>
							<p  style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><a href="<?php echo url('index/article/news',array('id'=>$data['id'])); ?>" class='aa' style='color:#272822;font-size:20px;text-decoration: none;'><?php echo $data['des']; ?></a></p>
						</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
			</div>
			
		</div>
	<div class="row">
    		<div class="col-md-8 text-center">
<?php echo $list->render(); ?>
	</div>
	     
    </div> 
</div>
	
	
<script>
window.onload=function(){
	$('.aa').mouseenter(function  () {
		$(this).css({'color':'#ccc'});
	})
	$('.aa').mouseleave(function  () {
		$(this).css({'color':'#272822'});
	})
	 
}
    
	
</script>
<!-- 底部 --> 
		<footer>
			<div class="back"></div>
			<div class="container">
				<div class="col-md-3 col-xs-12 text-left h1">
					<img src="__INDEXS__/img/logo1.png" alt="" width='70%'>
				</div>
				
				<div class="col-md-3 col-xs-12">
					<h4 class='h4'>联系方式</h4>
					<p class='Loge'>客服QQ:1424894437</p>	
					<p class='Loge'>电话:132-3626-8899</p>
					<p class='Loge'>邮箱:85010300@qq.com</p>
				</div>
				
				<div class="col-md-3 col-xs-12">
					<p class='h4'>产品案例</p>					
					<p class='Loge'>房地产</p>	
					<p class='Loge'>金融</p>
					<p class='Loge'>销售</p>
				</div>

				<div class="col-md-3 col-xs-12 ">
					<img src="__INDEXS__/img/gzh.jpg" alt="" width='35%' class='fImg'>
					<p class=" h4">关注公众号</p>
				</div>
				
			</div>
			<br>
			<hr>
			<p class="text-center pend">
				江苏省淮安市浙大网新31号楼
			</p>

			<p class="text-center pend">
				Copyright © 2017 苏ICP备18031222号-1 版权所有 江苏希高智能科技有限公司
			</p>
		</footer>
	</body>
	<script>
	window.onload=function(){
			$('.consults').click(function  () {
			// $('body').css({'overflow-y':'hidden'})
			layer.open({
						type: 2,
						title: " ",
						fix: false,
		        		shadeClose: true,
		        		maxmin: true,
		        		area: ['505px', '550px'],
		        		content: "<?php echo url('index/poptwo'); ?>",
		        		yes: function(index, layero){
		    				layer.close(index); //如果设定了yes回调，需进行手工关闭
		  				}
				})
		})
	}
	var _hmt = _hmt || [];
	(function() {
  		var hm = document.createElement("script");
  		hm.src = "https://hm.baidu.com/hm.js?6b18aea5a7ae1890d81e2e780aed5956";
  		var s = document.getElementsByTagName("script")[0]; 
  		s.parentNode.insertBefore(hm, s);
	})();
	</script>
