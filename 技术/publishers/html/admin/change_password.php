<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改管理员密码</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/admin.css?v=2016.1.14_17.59" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="topbar">
	<span><a href="?m=admin" target="_self">管理中心</a> | <a href="?m=admin&a=logout" target="_self">退出</a></span>
</div>
<div class="change-pw">
	<h3>修改管理员密码</h3>
	<ul>
		<li>
			<span>　　原密码：</span><input type="password" name="srcPassword" id="srcPassword" onfocus="this.select()"/>
		</li>
		<li>
			<span>　　新密码：</span><input type="password" name="newPassword" id="newPassword" onfocus="this.select()"/>
		</li>
		<li>
			<span>确认新密码：</span><input type="password" name="confirm" id="confirm" onfocus="this.select()"/>
		</li>
		<li>
			<input type="button" name="change" id="change" value="修改密码" />
		</li>
	</ul>
</div>
<script>
$(document).ready(function()
{
	$("#srcPassword").focus();
	$("#change").click(onClickChange);
	$(document).keydown(onDownWindow);
});

/**
 * 修改密码
 */
function onClickChange(e)
{
	if ($("#srcPassword").val() == "")
	{
		alert("原密码不能为空！");
		$("#srcPassword").select();
	}
	else if ($("#newPassword").val() == "")
	{
		alert("新密码不能为空！");
		$("#newPassword").select();
	}
	else if ($("#confirm").val() == "")
	{
		alert("确认新密码不能码为空！");
		$("#confirm").select();
	}
	else if ($("#confirm").val() != $("#newPassword").val())
	{
		alert("两次密码不一致！");
		$("#confirm").select();
	}
	else
	{
		$.post("?m=admin&a=doChangePassword", {srcPassword: $("#srcPassword").val(), newPassword: $("#newPassword").val()}, onChange);
	}
}

/**
 * 修改密码
 */
function onChange(value)
{
	var res = null;
	
	try
	{
		res = $.parseJSON(value);
	}
	catch (err)
	{
		//服务端返回异常，json数据不能正常解析
		return;
	}
	
	if (0 == res.code)
	{
		alert("修改成功！");
		location.href = "?m=admin";
	}
	else
	{
		alert(res.msg);
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
			onClickChange(null);
			break;
		default:
	}
}
</script>
</body>
</html>
