<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Debug</title>
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<input type="button" id="debugBtn" value="debug" /><br/><br/>
<div id="debugTxt"></div>

<script type="text/javascript">
$(document).ready(function()
{
	$("#debugBtn").click(onClickDebug);
});

function onClickDebug(e)
{
	$.post("./?m=fans&a=share", {id: '10'}, onChange);
}

function onChange(value)
{
	$("#debugTxt").html(value);
}
</script>
</body>
</html>
