<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\upupw\htdocs\tp5\public/../application/admin\view\login\login.html";i:1482886893;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/static/admin/css/login.css" />
	<script type="text/javascript" src="/static/admin/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$("#subbtn").click(function(){
			if($("input[name=username]").val() == ''){
				$('#tips').html('请输入帐号');
				return false;
			}
			if($("input[name=password]").val() == ''){
				$('#tips').html('请输入密码');
				return false;
			}
			if($("input[name=code]").val() == ''){
				$('#tips').html('请输入验证码');
				return false;
			}
			$('#loginform').submit();
		});

		/**
		 * 单击刷新验证码效果
		 * @param  {[type]} ) {			var      verifying [description]
		 * @return {[type]}   [description]
		 */
		$('.verify').click(function () {
			var verifying = $(this).attr('src') + '?' +Math.random();
			$(this).attr('src',verifying);
		});
		
	});
	</script>
</head>

<body>
<div id="header">
	<div class="logo"></div>
</div>
<div class="login_main">
	<form id="loginform" method="post" autocomplete="off">
		<label>帐号：</label>
		<input type="text" name="username" class="input_txt" tabindex="1" />
		<br />
		<label>密码：</label>
		<input type="password" name="password" class="input_txt" tabindex="2" />
		<br />
		<label>验证码：</label>
		<input type="text" name="code" maxlength="5" class="input_txt" tabindex="3" />
		<img src="<?php echo captcha_src(); ?>" class="verify" title="看不清，换一张" />
		<br />
		<button type="submit" class="login_btn" tabindex="4" id="subbtn">登录</button>
		<span id="tips"></span>
	</form>
	<hr>
	<p>© 2016 版权所有.【烟雨江南】</p>
</div>
</body>
</html>