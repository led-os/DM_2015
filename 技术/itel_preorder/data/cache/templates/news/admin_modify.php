<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻修改</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/admin.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="topbar">
	<span><a href="?m=adminNews" target="_self">新闻管理</a> | <a href="?m=admin&a=logout" target="_self">退出</a></span>
</div>
<div class="news-add">
	<h3>新闻修改</h3>
	<ul>
		<li>
			<textarea name="content" id="content" style="width:100%;height:320px;"><?php echo $_news['content']; ?></textarea>
		</li>
		<li>
			发布时间：<input type="text" name="pubdate" id="pubdate" value="<?php echo $_news['pubdate']; ?>" />
		</li>
		<li>
			<input type="button" name="publish" id="publish" value="保存修改"/>
		</li>
	</ul>
</div>
<script type="text/javascript">
$(document).ready(function ()
{
	$("#publish").click(onClickAdd);
	$("#content").focus();
});

function onClickAdd(e)
{
	var str = $("#content").val();
	
	if (str.length > 10000)
	{
		alert("内容不能超过10000字！");
		$("#content").select();
	}
	else
	{
		$.post("?m=adminNews&a=doModify", {content: str, pubdate: $("#pubdate").val()}, onAdd);
	}
}

function onAdd(value)
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
		location.href = "?m=adminNews";
	}
	else
	{
		alert(res.msg);
	}
}
</script>
</body>
</html>
