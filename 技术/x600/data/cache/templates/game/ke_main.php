<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Infinix NOTE 2</title>
<link href="css/ke_index.css?v=2015.12.8_22.23" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
<script src="js/jquery.rotate.min.js" type="text/javascript" language="javascript"></script>
<script src="js/mover.js" type="text/javascript" language="javascript"></script>
<script src="js/game.js?v=2015.12.9_14.58" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="info">
	<img src="images/bg1.jpg" class="bg" />
	<p class="title">Spin The InfiniXmas Wheel, Win Infinix NOTE 2</p>
	<p class="t1">
		- 6 inch screen<br/>
		- Large 4000 mAh battery last for 2 days<br/>
		- Fast charging: 15 min charge 8 hours usage<br/>
		- 13 Mega pixels back camera<br/>
		- Android OS-Lollipop 5.1
	</p>
	<p class="date"><span class="d1">2015</span>&nbsp; 12.09 ~ 12.20</p>
	<p class="t2">
		To celebrate the launch of Infinix NOTE 2<br /> 
		and welcome the InfiniXmas Season,<br />
		we are having a "Spin The InfiniXmas Wheel, Win Infinix NOTE 2"<br />
		competition to give away Infinix NOTE 2 and some other Infinix gifts.
	</p>
	<a id="arrowBtn" href="javascript:void(0);">
		<div class="arrowBtn">
			<p class="arrowTxt">WIN BIG Gift</p>
			<img src="images/down_arrow.png" class="arrowImg" />
		</div>
	</a>
</div>
<div class="lucky">
	<img src="images/bg2.jpg" class="bg" />
	<img src="images/phone.png" class="phone" id="phoneImg" />
	<img id="dot" src="images/dot.png" class="dot" />
	<p class="t1">New Product Launching</p>
	<p class="t2">
		Spin The InfiniXmas Wheel, Win Infinix NOTE 2<br/>
		12.09.2015~12.20.2015
	</p>
	<p class="t3">Rules:</p>
	<p class="t4">
		1. Login with your Facebook account.<br/>
		2. Like @InfinixKenya page.<br/>
		3. Share the "Spin the InfiniXmas Wheel, Win Infinix NOTE 2" post published on Infinix Kenya Facebook page with hashtag #InfinixNOTE2 and #InfiniXmas.<br/>
		4. Each Facebook account can spin the wheel once only.<br />
		5. Infinix reserves its right of final explanation.
	</p>
	<a id="loginBtn" href="<?php echo $loginUrl; ?>" target="_self"><img src="images/login.png" class="login" /></a>
	<a id="startBtn" href="javascript:void(0);"><img src="images/start.png" class="start" /></a>
	<a id="myLottery" href="javascript:void(0);"><img src="images/my_lottery.png" class="myLottery" /></a>
</div>
<div class="resultBg"></div>
<div class="result">
	<img class="resultPhone" src="images/result_phone2.png"/>
	<p id="awardName" class="awardName"></p>
	<p id="awardTitle" class="title"></p>
	<p id="awardDesc" class="desc"></p>
	<div class="btn">
		<a id="shareBtn" href="javascript:void(0);"><img class="shareBtn" src="images/result_share.png"/></a>
		<a id="okBtn" href="javascript:void(0);"><img class="okBtn" src="images/like.png"/></a>
	</div>
</div>
<div class="award">
	<div class="titleBar">
		<p class="title">Winner List</p>
	</div>
	<div class="list">
		<ul>
			<?php foreach ($winlist as $value) { ?>
			<?php if (!$isClick && ($fbid == $value['fbid'])) { continue; } ?>
			<?php $date = Utils::mdate('m.d.Y', $value['luckydate']);  ?>
			<li>
				<div class="leftLine"></div>
				<img class="photo" src="<?php echo $value['photo']; ?>"/>
				<div class="nameBox">
					<p class="name"><?php echo $value['username']; ?></p>
					<p class="date"><?php echo $date; ?></p>
				</div>
				<div class="awardName"><?php echo $prize[$value['prizeid'] - 1]; ?></div>
			</li>
			<?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<input type="hidden" id="isLocal" value="<?php if (Config::$isLocal) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="isFb" value="<?php if (Config::$isFb) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="appId" value="<?php echo Config::$fbAppId; ?>" />
<input type="hidden" id="shareUrl" value="<?php echo Config::$shareUrl; ?>" />
<input type="hidden" id="sharePic" value="<?php echo Config::$sharePic; ?>" />

<input type="hidden" id="isLogin" value="<?php echo $isLogin; ?>" />
<input type="hidden" id="isClick" value="<?php echo $isClick; ?>" />
<input type="hidden" id="prizeId" value="<?php echo $prizeId; ?>" />
<input type="hidden" id="prizeName" value="<?php echo $prizeName; ?>" />
<?php echo Config::$countCode; ?>
<?php if (Config::$snow >= 1 && Config::$snow <= 3) { ?>
<script type="text/javascript" src="js/snow<?php echo Config::$snow; ?>.js"></script>
<?php } ?>
</body>
</html>
