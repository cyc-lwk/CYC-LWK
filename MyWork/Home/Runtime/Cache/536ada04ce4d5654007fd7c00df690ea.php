<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>Welcome to LWk Blog</title>

		<link rel="shortcut icon" type="image/ico" href="__PUBLIC__/img/favicon.ico"/>

		<!-- Standard iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="57x57" href="__PUBLIC__/img/apple-touch-icon-57-precomposed.png" />
		<!-- Retina iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="114x114" href="__PUBLIC__/img/apple-touch-icon-114-precomposed.png" />
		<!-- Standard iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="72x72" href="__PUBLIC__/img/apple-touch-icon-72-precomposed.png" />
		<!-- Retina iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="144x144" href="__PUBLIC__/img/apple-touch-icon-144-precomposed.png" />

		<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/animate.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/themify-icons.css">
		<link rel="stylesheet" type="text/css" href="../Public/css/index.css">

		<!--[if lt IE 9]>
      		<script src="__PUBLIC__/js/html5shivjs"></script>
     		<script src="__PUBLIC__/js/respond.min.js"></script>
   		<![endif]-->
	</head>

	<body class="theme1">

		<!-- Loading Screen -->
		<div id="loading_screen">
			<img src="__PUBLIC__/img/loading.gif" alt="loading" />
		</div>
		<!-- /Loading Screen -->

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Scroll To Top -->
			<div class="scroll_to_top ti-angle-up"></div>
			<!-- /Scroll To Top -->
			
			<div class="landing">
				<div class="linner nomargin single_page col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
					
					<!-- Navigation -->
					<div class="navigation col-md-2">
						<ul>
							<li>
								<a href="/MyWork/index.php/Index/index#home"><i class="ti-home"></i><span class="text">首页</span></a>
							</li>
							<li>
								<a href="/MyWork/index.php/Index/index#resume"><i class="ti-book"></i><span class="text">个人简历</span></a>
							</li>
							<li class="active">
								<a href="/MyWork/index.php/Index/index#blog"><i class="ti-list"></i><span class="text">博客</span></a>
							</li>
							<li>
								<a href="/MyWork/index.php/Index/index#contact"><i class="ti-email"></i><span class="text">联系方式</span></a>
							</li>
						</ul>
					</div>
					<!-- /Navigation -->
					
					<!-- Main Image -->
					<div class="main_image col-md-10 page_active">
						<div class="inner">
							<h1 class="name">刘玮康</h1>
							<div class="description sub">北京邮电大学信通院信息工程</div>
						</div>
					</div>
					<!-- /Main Image -->

					<!-- Page Content -->
					<div class="page_content col-md-12 active">
						<div class="pinner">

							<!-- Blog Post Page -->
							<div class="page active" id="blog">
								
								<div class="vertical_line"></div>
								<h2 class="page_title">如何制作个人网站</h2>

								<!-- Blog Post -->
								<div class="blog_post section">

									<iframe width="640" height="480" 
										src="http://v.youku.com/v_show/id_XMTYzOTgwMjQzMg==.html" 
										frameborder="0" allowNetworking="internal"
										align="middle" allowScripAcess="never" autostart="0">
									</iframe>

									<!-- Body -->
									<div class="body">
										<p><br><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											一个网站最基础的部分就是框架，而往往制作网站框架是非常耗时的，所以我们可以利用网上
											提供已有的框架，比如：Bootstrap框架。<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Bootstrap是一个基于HTML、CSS、JavaScript 的开源框架。该框架代码简洁、视觉优美，可用于快速、
											简单地构建基于PC 及移动端设备的Web 页面需求。<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											它不仅提供了完整的Web布局，同时也提供了相关的控件，我们可以利用这些资源来搭建自己所想要的页面布局。
										</p>

										<ul>
											<p>
												下面我来介绍本网页所使用的一些相关的代码：
											</p>
											<li>
												<"a">元素创建页面链接，不仅可以创建一个html文件内的链接，同时还能进行html文件间的链接。本网站无论是
												<strong>“个人简历”</strong>、<strong>“博客”</strong>、<strong>“联系方式”</strong>这些页内的跳转，还是<strong>“更新博客”</strong>、<strong>“提交博客”</strong>这些页间的跳转都用到了<"a">元素。
											</li>
											<li>
												<strong>Javascrip function</strong>函数，通过与一些控件结合，运用onlick，来对相关事件进行响应，从而达到交互的功能。
											</li>
											<li>
												<strong>ActiveXObject</strong>，在js function函数中通过使用ActiveXObject来响应式的创建HTML文件，并
												在文件中写入相关的页面代码，依次来达到<strong>“更新博客”</strong>、<strong>“提交博客”</strong>的功能,同时通过这些文件的文件名来与<strong>Blog</strong>页预留的博客内容跳转链接进行联系，已达到更新博客的目的。
											</li><br>
											<p>
												本博客<strong>在线编辑博客内容功能</strong>就是由上面所述<strong>Javascrip function</strong>、<strong>ActiveXObject</strong>通过获取编辑框中输入的文字，自主的创建新的html文件，并将其与事先预留的无效链接联系起来，从而使该无效链接有效。
											</p>
										</ul>

										<p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											虽然我做的网站可能不是很完美，有很多的瑕疵，但是还是感谢老师给我完成这么一个项目的紧迫感。<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											也正是因为这种紧迫感，我才能在一个星期的时间内从一个小白，到如今已初步能够做出一个简单网站的新手。<br>
										</p>

									</div>
									<!-- /Body -->

								</div>
								<!-- /Blog Post -->

							</div>
							<!-- /Blog Post Page -->
						</div>

					</div>
					<input type="hidden" value="__PUBLIC__/img/me/5.jpg" class="home_bg_image" />
				</div>
				<!-- /Page Content -->

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- /Wrapper -->

		<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.appear.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/isInViewport.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.counterup.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/wow.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/scripts.js"></script>
	    <!--<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
	</body>
</html>