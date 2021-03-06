<?php if (!defined('VIEW')) exit; ?>
﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<title>传音年会抢红包</title>
<link href="css/hong_bao.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<img src="images/hong_bao/bg.jpg" class="bg" />
<div id="hongBao">
	<img src="images/hong_bao/b1.png" id="hongBao1" class="hong-bao" />
	<img src="images/hong_bao/b2.png" id="hongBao2" class="hong-bao" />
	<img src="images/hong_bao/b3.png" id="hongBao3" class="hong-bao" />
	<img src="images/hong_bao/b4.png" id="hongBao4" class="hong-bao" />
	<img src="images/hong_bao/b5.png" id="hongBao5" class="hong-bao" />
	<img src="images/hong_bao/b6.png" id="hongBao6" class="hong-bao" />
	<img src="images/hong_bao/b7.png" id="hongBao7" class="hong-bao" />
	<img src="images/hong_bao/b8.png" id="hongBao8" class="hong-bao" />
	<img src="images/hong_bao/b9.png" id="hongBao9" class="hong-bao" />
	<img src="images/hong_bao/b10.png" id="hongBao10" class="hong-bao" />
	<img src="images/hong_bao/b11.png" id="hongBao11" class="hong-bao" />
	<img src="images/hong_bao/b12.png" id="hongBao12" class="hong-bao" />
	<img src="images/hong_bao/b13.png" id="hongBao13" class="hong-bao" />
</div>
<div id="enterPanel">
	<img src="images/hong_bao/home_bg.jpg" class="enter_bg" />
	<img src="images/hong_bao/title.png" class="title" />
	<img src="images/hong_bao/start_btn.png" id="enterBtn" />
</div>
<div id="bindPanel">
	<img src="images/hong_bao/title.png" class="title" />
	<div class="bind-text">
		<!--<p class="bind-title">绑定工号</p>-->
		<span>工号：</span><input type="text" id="jobnumTxt" /><br />
		<span>姓名：</span><input type="text" id="usernameTxt" /><br />
	</div>
	<img src="images/hong_bao/ok_btn.png" id="bindBtn" />
</div>
<div id="bindSuccessPanel">
	<img src="images/hong_bao/title.png" class="title" />
	<!--<p class="bind-success-title">绑定工号</p>-->
	<img src="images/hong_bao/sub_bg.png" class="bind-bg" />
	<div class="bind-block">
		<p class="bind-succeed-tip">Yes！ 登录成功！！</p>
		<img src="images/hong_bao/catch_hong_bao_btn.png" id="startBtn" />
	</div>
</div>
<div id="bindFailPanel">
	<img src="images/hong_bao/title.png" class="title" />
	<!--<p class="bind-fail-title">绑定工号</p>-->
	<img src="images/hong_bao/sub_bg.png" class="bind-bg" />
	<div class="bind-block">
		<p id="bindFailTip1">Sorry，工号和姓名不能<br/>为空~</p>
		<p id="bindFailTip2">Sorry,工号和姓名不对应，<br/>请重新输入。<br/>有任何问题请QQ联系<br/>年会筹备组。</p>
		<p id="bindFailTip3">Sorry，您的工号已被<br/>绑定过了！</p>
		<p id="bindFailTip4">该微信号已绑定过<br/>工号了！</p>
		<p id="bindFailTip5">非法请求！</p>
		<p id="bindFailTip6">未知错误！</p>
		<img src="images/hong_bao/back_btn.png" id="backBtn" />
	</div>
</div>
<div id="winPanel">
	<img src="images/hong_bao/title.png" class="title" />
	<img src="images/hong_bao/sub_bg.png" class="result-bg" />
	<div class="result-block">
		<p id="winTip">棒棒哒！<br/>抢到一个红包：<br/>0元！</p>
		<img src="images/hong_bao/record_btn.png" id="winBtn" />
	</div>
</div>
<div id="losePanel">
	<img src="images/hong_bao/title.png" class="title" />
	<img src="images/hong_bao/sub_bg.png" class="result-bg" />
	<div class="result-block">
		<p id="loseTip">哦哦~<br/>抢到一个鞭炮……</p>
		<img src="images/hong_bao/record_btn.png" id="loseBtn" />
	</div>
</div>
<div id="recordPanel">
	<div class="record-top">
		<span id="recordJobnum">工号：</span>
		<span id="recordUsername">姓名：</span>
	</div>
	<p class="record-title">我的抢红包记录</p>
	<div class="record-list">
		<p id="record1">2月3日：*</p>
		<p id="record2">2月4日：*</p>
		<p id="record3">2月5日：*</p>
		<p id="record4">2月6日：*</p>
		<p id="record5">2月7日：*</p>
		<p id="record6">2月8日：*</p>
	</div>
	<div class="record-max">
		<p id="maxHongBao">&nbsp;￥0元</p>
		<img src="images/hong_bao/hong_bao_bg.png" class="hong_bao_bg" />
	</div>
	<p class="record-tip">注：以活动时间内抢到的单次最高金额为发奖金额</p>
</div>
<div id="debugSize">123</div>
<script type="text/javascript">
var winWidth = 0;
var winHeight = 0;
var hongBaoCount = 13;
var hongBaoArr = [];
var yArr = [];
var stepArr = [];
var minX = 0;
var maxX = 0;
var minY = -200;
var maxY = 0;
var minStep = 2;
var maxStep = 12;
var hongBaoTimer = null;
var timerInterval = 50;
var isBindJobnum = <?php echo $_isBindJobnum ? "true" : "false"; ?>;
var isClick = <?php echo (1 == $_isClick) ? "true" : "false"; ?>;
var money = <?php echo $_money; ?>;
var maxMoney = <?php echo $_maxMoney; ?>;
var recordsJson = '<?php echo $_records; ?>';
var records = [];
var jobnum = "<?php echo $_jobnum; ?>";
var username = "<?php echo $_username; ?>";
var openId = "<?php echo $_openId; ?>";
var key = "<?php echo $_key; ?>";
var bindLock = false;

try
{
	records = $.parseJSON(recordsJson);
}
catch (err)
{
	records = [];
}

$(document).ready(function(){
	setInfo(money, maxMoney, records, jobnum, username);
	
	var loseIndex = parseInt(Math.random() * 5);
	//console.log("loseIndex: " + loseIndex);
	switch (loseIndex)
	{
		case 0:
			$('#loseTip').html("花擦，红包没抢到，<br/>抓到一个福！<br/>明天再来 ！^_^");
			break;
		case 1:
			$('#loseTip').html("花擦，红包没抢到，<br/>采到一朵桃花~<br/>桃花运就要来了！");
			break;
		case 2:
			$('#loseTip').html("Oh NO！<br/>毛线都没抢到，<br/>明天再来试试！");
			break;
		case 3:
			$('#loseTip').html("Oh NO！<br/>差一点，就中到了，<br/>再接再励！");
			break;
		case 4:
			$('#loseTip').html("有多少红包可以重来，<br/>有多少红包值得等待！<br/>官人，明天再来吧！");
			break;
		default:
			$('#loseTip').html("Oh NO！<br/>差一点，就中到了，<br/>再接再励！");
	}
	
	for (var i = 1; i <= hongBaoCount; i++)
	{
		hongBaoArr.push($("#hongBao" + i));
	}
	resizeWindow();
	$(window).resize(resizeWindow);
	
	$("#hongBao").click(onClickHongBao);
	$("#enterBtn").click(onClickEnter);
	$("#bindBtn").click(onClickBind);
	$("#startBtn").click(onClickStart);
	$("#backBtn").click(onClickBack);
	$("#winBtn").click(onClickWin);
	$("#loseBtn").click(onClickLose);
	
	if (isBindJobnum)
	{
		if (isClick)
		{
			$('#recordPanel').show();
		}
		else
		{
			$("#enterPanel").show();
		}
	}
	else
	{
		$("#enterPanel").show();
	}
	
	/*
	//////// debug
	hongBaoTimer = setInterval(moveHongBao, timerInterval);
	$('#hongBao').show();
	$('#hongBao').hide();
	$("#enterPanel").show();
	$("#enterPanel").hide();
	$('#bindPanel').show();
	$('#bindPanel').hide();
	$('#bindSuccessPanel').show();
	$('#bindSuccessPanel').hide();
	$('#bindFailPanel').show();
	$('#bindFailPanel').hide();
	$('#winPanel').show();
	$('#winPanel').hide();
	$('#losePanel').show();
	$('#losePanel').hide();
	$('#recordPanel').show();
	$('#recordPanel').hide();
	*/
});

function resizeWindow()
{
	winWidth = $(window).width();
	winHeight = $(window).height();
	maxX = winWidth - 80;
	maxY = winHeight;
	initHongBao();
	
	$("#debugSize").html(winWidth + ":" + winHeight);
}

function initHongBao()
{
	var hongBao = null;
	var hongBaoX = 0;
	
	for (var i = 0; i < hongBaoCount; i++)
	{
		hongBao = hongBaoArr[i];
		hongBaoX = parseInt(Math.random() * maxX);
		yArr[i] = parseInt(Math.random() * maxY);
		stepArr[i] = parseInt(Math.random() * maxStep) + minStep;
		hongBao.css("left", hongBaoX + "px");
		hongBao.css("top", yArr[i] + "px");
	}
}

function moveHongBao()
{
	var hongBao = null;
	var hongBaoX = 0;
	var step = 0;
	
	for (var i = 0; i < hongBaoCount; i++)
	{
		hongBao = hongBaoArr[i];
		step = stepArr[i];
		if (yArr[i] > maxY)
		{
			hongBaoX = parseInt(Math.random() * maxX);
			yArr[i] = minY;
			stepArr[i] = parseInt(Math.random() * maxStep) + minStep;
			hongBao.css("left", hongBaoX + "px");
			hongBao.css("top", yArr[i] + "px");
		}
		else
		{
			yArr[i] += step;
			hongBao.css("top", yArr[i] + "px");
		}
	}
}

function onClickEnter(e)
{
	//console.log("onClickEnter");
	$("#enterPanel").hide();
	if (isBindJobnum)
	{
		$('#hongBao').show();
		hongBaoTimer = setInterval(moveHongBao, timerInterval);
	}
	else
	{
		$('#bindPanel').show();
	}
}

function onClickBind(e)
{
	//console.log("onClickBind");
	
	if (!bindLock)
	{
		//console.log("onClickBind 2");
		//console.log("jobnumTxt: " + $("#jobnumTxt").val());
		//console.log("usernameTxt: " + $("#usernameTxt").val());
		
		if ($("#jobnumTxt").val() != "" && $("#usernameTxt").val() != "")
		{
			bindLock = true;
			$.post("?m=hongBao&a=bindJobnum", {openId: openId, key: key, jobnum: $("#jobnumTxt").val(), username: $("#usernameTxt").val()}, onBind);
		}
		else
		{
			$('#bindPanel').hide();
			$('#bindFailPanel').show();
			tipBindFail(1);
		}
	}
}

function onBind(value)
{
	var res = null;
	
	bindLock = false;
	if (value.substr(0, 1) != "{")
	{
		$('#bindPanel').hide();
		$('#bindFailPanel').show();
		tipBindFail(6);
		return;
	}
	res = $.parseJSON(value);
	if (0 == res.code)
	{
		money = res.money;
		maxMoney = res.maxMoney;
		recordsJson = res.records;
		try
		{
			records = $.parseJSON(recordsJson);
		}
		catch (err)
		{
			//console.log('json err');
			records = [];
		}
		jobnum = res.jobnum;
		username = res.username;
		setInfo(money, maxMoney, records, jobnum, username);
		//console.log("money: " + money + ", maxMoney: " + maxMoney + ", recordsJson: " + recordsJson + ", jobnum: " + jobnum + ", username: " + username);
		$('#bindPanel').hide();
		$('#bindSuccessPanel').show();
	}
	else
	{
		$('#bindPanel').hide();
		$('#bindFailPanel').show();
		tipBindFail(6);
	}
}

function tipBindFail(value)
{
	$('#bindFailTip1').hide();
	$('#bindFailTip2').hide();
	$('#bindFailTip3').hide();
	$('#bindFailTip4').hide();
	$('#bindFailTip5').hide();
	$('#bindFailTip6').hide();
	if (value >= 1 && value <= 6)
	{
		$('#bindFailTip' + value).show();
	}
	else
	{
		$('#bindFailTip6').show();
	}
}

function onClickStart(e)
{
	//console.log("onClickStart");
	$('#bindSuccessPanel').hide();
	$('#hongBao').show();
	hongBaoTimer = setInterval(moveHongBao, timerInterval);
}

function onClickBack(e)
{
	//console.log("onClickBack");
	$('#bindFailPanel').hide();
	$('#bindPanel').show();
}

function onClickHongBao(e)
{
	//console.log("onClickHongBao");
	if (!isClick)
	{
		isClick = true;
		//console.log("onClickHongBao 2");
		
		$('#hongBao').hide();
		clearInterval(hongBaoTimer);
		if (money > 0)
		{
			$('#winTip').html("哇塞！<br/>恭喜你抢到一个红包：<br/>" + money + "元！");
			$('#winPanel').show();
		}
		else
		{
			$('#losePanel').show();
		}
		
		$.post("?m=hongBao&a=clickHongBao", {openId: openId, key: key, jobnum: jobnum}, null);
	}
}

function onClickWin(e)
{
	//console.log("onClickWin");
	$('#winPanel').hide();
	$('#recordPanel').show();
}

function onClickLose(e)
{
	//console.log("onClickLose");
	$('#losePanel').hide();
	$('#recordPanel').show();
}

function setInfo(aTodayMoney, aMaxMoney, aRecords, aJobnum, aUsername)
{
	$('#winTip').html("哇塞！<br/>恭喜你抢到一个红包：<br/>" + aTodayMoney + "元！");
	if (aMaxMoney >= 10)
	{
		$('#maxHongBao').html("￥" + aMaxMoney + "元");
	}
	else
	{
		$('#maxHongBao').html("&nbsp;￥" + aMaxMoney + "元");
	}
	
	if (aRecords["d1"] > 0)
	{
		$('#record1').html("2月3日：抢到一个红包" + aRecords["d1"] + "元");
	}
	else if (0 == aRecords["d1"])
	{
		$('#record1').html("2月3日：没抢到红包");
	}
	else
	{
		$('#record1').html("2月3日：*");
	}
	
	if (aRecords["d2"] > 0)
	{
		$('#record2').html("2月4日：抢到一个红包" + aRecords["d2"] + "元");
	}
	else if (0 == aRecords["d2"])
	{
		$('#record2').html("2月4日：没抢到红包");
	}
	else
	{
		$('#record2').html("2月4日：*");
	}
	
	if (aRecords["d3"] > 0)
	{
		$('#record3').html("2月5日：抢到一个红包" + aRecords["d3"] + "元");
	}
	else if (0 == aRecords["d3"])
	{
		$('#record3').html("2月5日：没抢到红包");
	}
	else
	{
		$('#record3').html("2月5日：*");
	}
	
	if (aRecords["d4"] > 0)
	{
		$('#record4').html("2月6日：抢到一个红包" + aRecords["d4"] + "元");
	}
	else if (0 == aRecords["d4"])
	{
		$('#record4').html("2月6日：没抢到红包");
	}
	else
	{
		$('#record4').html("2月6日：*");
	}
	
	if (aRecords["d5"] > 0)
	{
		$('#record5').html("2月7日：抢到一个红包" + aRecords["d5"] + "元");
	}
	else if (0 == aRecords["d5"])
	{
		$('#record5').html("2月7日：没抢到红包");
	}
	else
	{
		$('#record5').html("2月7日：*");
	}
	
	if (aRecords["d6"] > 0)
	{
		$('#record6').html("2月8日：抢到一个红包" + aRecords["d6"] + "元");
	}
	else if (0 == aRecords["d6"])
	{
		$('#record6').html("2月8日：没抢到红包");
	}
	else
	{
		$('#record6').html("2月8日：*");
	}
	
	$('#recordJobnum').html("工号：" + aJobnum);
	$('#recordUsername').html("姓名：" + aUsername);
}
</script>
</body>
</html>
