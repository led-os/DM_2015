<?php if (!defined('VIEW')) exit; ?>
﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理中心</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/admin.css?v=2016.1.14_17.59" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="topbar">
	<span><a href="?m=admin&a=logout" target="_self">退出</a></span>
</div>
<div class="main">
	<h3>后台管理中心</h3>
	<ul>
		<li>
			<a id="backupBtn" href="javascript:void(0);" title="备份数据库" target="_self">备份数据库</a>
		</li>
		<li>
			<a id="recoverBtn" href="javascript:void(0);" title="恢复数据库" target="_self">恢复数据库</a>
		</li>
		<li>
			<a href="?m=admin&a=changePassword" title="修改密码" target="_self">修改密码</a>
		</li>
	</ul>
</div>
<script>
$(document).ready(function()
{
	$("#backupBtn").click(onClickBackup);
	$("#recoverBtn").click(onClickRecover);
});

/**
 * 备份数据库
 */
function onClickBackup(e)
{
	$.post("?m=admin&a=backup", {}, onBackup);
}

/**
 * 备份数据库
 */
function onBackup(value)
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
	
	if (res.code == 0)
	{
		alert("备份成功！");
	}
	else
	{
		alert(res.msg);
	}
}

/**
 * 恢复数据库
 */
function onClickRecover(e)
{
	$.post("?m=admin&a=recover", {}, onRecover);
}

/**
 * 恢复数据库
 */
function onRecover(value)
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
	
	if (res.code == 0)
	{
		alert("恢复成功！");
	}
	else
	{
		alert(res.msg);
	}
}
</script>
</body>
</html>
