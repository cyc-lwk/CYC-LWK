<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Welcome to LWk Blog</title>

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
		<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../Public/css/index.css">

		<!--[if lt IE 9]>
      		<script src="__PUBLIC__/js/html5shivjs"></script>
     		<script src="__PUBLIC__/js/respond.min.js"></script>
   		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="login">
				<form action="__URL__/check" method="post">
					<div class="form-group">
						<label for="">用户名:</label>
						<input type="text" class="form-control" name='username'>
					</div>
					<div class="form-group">
						<label for="">密码:</label>
						<input type="password" class="form-control" name='password'>
					</div>
					<div class="form-group">
						<label for="">验证码:</label>
						<div class="row">
							<div class="col-md-10">
								<input type="text" class="form-control" name="fcode">
							</div>
							<div class="col-md-2">
								<img class='verify' src="__URL__/verify" onclick="this.src='__URL__/verify/rand='+Math.random()">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="登录" class="btn btn-primary">
						<input type="reset" value="取消" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>