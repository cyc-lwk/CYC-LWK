<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Welcome to LWk Blog</title>

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
		<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../Public/css/index.css">
		<script type="text/javascript" src="__PUBLIC__/kd/kindeditor-min.js"></script>
		<script>
			menu='<?php echo ($_GET[menu]); ?>'?'<?php echo ($_GET[menu]); ?>':'user';
		</script>
		<script type="text/javascript" src="../Public/js/index.js"></script>
		<!--[if lt IE 9]>
      		<script src="__PUBLIC__/js/html5shivjs"></script>
     		<script src="__PUBLIC__/js/respond.min.js"></script>
   		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!--导航条-->
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
     				</button>
      				<a class="navbar-brand" href="__APP__/Index/index">后台首页</a>
  				</div>
  				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav navbar-right">
       					<li class="active"><a href="__APP__/Login/logout">退出</a></li>
       					<li class="active"><a href="__ROOT__/index.php/Index/index">主页</a></li>
       				</ul>
       			</div>
			</nav>

			<!--后台内容区-->
			<div class="row row2">
				<div class="col-md-2 left">
					<div class="list-group blog">
						<a href="javascript:" class="list-group-item active">发布博客</a>
						<a href="__APP__/Blog/add/menu/blog" class="list-group-item">添加博客</a>
					</div>
				</div>
				<div class="col-md-10 right">
					
	<form action="__URL__/insert" method='post'>
		<div class="form-group">
			<label for="">博客所属范围：</label>
			<input type="text" name='category' class='form-control'>
		</div>
		<div class="form-group">
			<label for="">发布者：</label>
			<input type="text" name='username' class='form-control'>
		</div>
		<div class="form-group">
			<label for="">博客标题：</label>
			<input type="text" name='title' class='form-control'>
		</div>
		<div class="form-group">
			<label for="">博客内容：</label>
			<textarea name='content' rows='20' class='content form-control'></textarea>
		</div>
		<div class="form-group">
			<input type="submit" value="发布" class="btn btn-primary">
			<input type="reset" value="取消" class="btn btn-danger">
		</div>
	</form>

				</div>
			</div>
		</div>
	</body>
</html>