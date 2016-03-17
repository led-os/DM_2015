<?php if (!defined('VIEW')) exit; ?>
﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理中心</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/admin.min.css" rel="stylesheet" type="text/css" />
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
			<a href="?m=adminOrder&a=listData" title="查看预订数据" target="_self">查看预订数据</a>
		</li>
		<li>
			<a id="templatesBtn" href="javascript:void(0);" title="更新模板" target="_self">更新模板</a>
		</li>
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
<script type="text/javascript">
$(document).ready(function()
{
	$("#templatesBtn").click(onClickTemplates);
	$("#backupBtn").click(onClickBackup);
	$("#recoverBtn").click(onClickRecover);
});

/**
 * 更新模板
 */
function onClickTemplates(e)
{
	$.post("?m=admin&a=cacheTemplates", {}, onTemplates);
}

function onTemplates(value)
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
		alert("更新成功！");
	}
	else
	{
		alert(res.msg);
	}
}

/**
 * 备份数据库
 */
function onClickBackup(e)
{
	$.post("?m=admin&a=backup", {}, onBackup);
}

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
		alert("未知错误！");
		return;
	}
	
	if (0 == res.code)
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
		alert("未知错误！");
		return;
	}
	
	if (0 == res.code)
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
