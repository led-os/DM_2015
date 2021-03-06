<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="login">
	<h3>管理员登录</h3>
	<ul>
		<li>
			<span>用户名：</span><input name="username" type="text" id="username" onfocus="this.select()"/>
		</li>
		<li>
			<span>　密码：</span><input name="password" type="password" id="password" onfocus="this.select()"/>
		</li>
		<li>
			<span>验证码：</span><input name="verify" type="text" id="verify" onfocus="this.select()"/><img id="verifyPic" src="?m=admin&a=verify" width="48px" height="22px" />
		</li>
		<li>
			<input type="button" name="login" id="login" value="登录" />
		</li>
	</ul>
</div>
<script>
$(document).ready(function()
{
	$("#username").focus();
	$("#login").click(onClickLogin);
	$(document).keydown(onDownWindow);
});

/**
 * 登录
 */
function onClickLogin(e)
{
	if ($("#username").val() == "")
	{
		alert("用户名不能为空！");
		$("#username").select();
	}
	else if ($("#password").val() == "")
	{
		alert("密码不能为空！");
		$("#password").select();
	}
	else if ($("#verify").val() == "")
	{
		alert("验证码不能码为空！");
		$("#verify").select();
	}
	else
	{
		$.post("?m=admin&a=doLogin", {username: $("#username").val(), password: $("#password").val(), verify: $("#verify").val()}, onLogin);
	}
}

/**
 * 登录
 */
function onLogin(value)
{
	var res = null;
	
	try
	{
		res = $.parseJSON(value);
	}
	catch (err)
	{
		//服务端返回异常，json数据不能正常解析
		alert("未知错误！");
		return;
	}
	
	if (0 == res.code)
	{
		location.href = "?m=admin";
	}
	else
	{
		alert(res.msg);
		$("#verifyPic").attr("src", "?m=admin&a=verify&rand=" + Math.random());
	}
}

/**
 * 按回车键
 */
function onDownWindow(e)
{
	var currKey = 0, e = e || event;
	
	currKey = e.keyCode || e.which || e.charCode;
	switch (currKey)
	{
		case 13:
			//回车
			onClickLogin(null);
			break;
		default:
	}
}
</script>
</body>
</html>
