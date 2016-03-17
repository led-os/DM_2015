<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.4, minimum-scale=0.4, maximum-scale=0.4, user-scalable=no" />
<title>Phantom5</title>
<link href="./css/ke_mobile_index.css?v=2015.12.9_18.52" rel="stylesheet" type="text/css" />
<script src="./js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
<script src="./js/touche.min.js" type="text/javascript" language="javascript"></script>
<script src="./js/mover.js?v=2015.12.2_17.12" type="text/javascript" language="javascript"></script>
<script src="./js/ke_mobile_game.js?v=2015.12.2_17.12" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="game">
	<div id="navBar" class="navBar">
		<div class="bg"></div>
		<a id="menuBtn" href="javascript:void(0);"><img class="menuBtn" src="./images/ke/mobile/menu_btn.png" /></a>
		<div class="username"><?php echo $personal['username']; ?></div>
		<img class="photo" src="<?php echo $photo; ?>" />
	</div>
	<div id="navMenu" class="navMenu">
		<ul>
			<a href="./?m=game&a=introduction" target="_self"><li><span>Rules</span></li></a>
			<a href="./?m=game&a=main" target="_self"><li><span class="select">Game</span></li></a>
			<a href="./?m=game&a=lucky" target="_self"><li><span>Lucky</span></li></a>
			<a href="./?m=game&a=winner" target="_self"><li><span>Winner</span></li></a>
			<a href="./?m=game&a=rank" target="_self"><li><span>Rank</span></li></a>
		</ul>
	</div>
	<div id="coinBar" class="coin">
		<span class="coinNum">0</span>
		<img class="gem2" src="./images/ke/mobile/gem.png" />
	</div>
	<div id="loadingPanel" class="page3">
		<img src="./images/ke/mobile/bg.jpg" class="bg" />
		<img src="./images/ke/mobile/page3/finger.png" class="fingerprint" />
		<img src="./images/ke/mobile/page3/small_tree.png" class="small_tree1" />
		<img src="./images/ke/mobile/page3/small_tree.png" class="small_tree2" />
		<img src="./images/ke/mobile/line.png" class="line" />
		<img src="./images/ke/mobile/page3/tree.png" class="tree" />
		<img src="./images/ke/mobile/page3/tecno.png" class="tecno" />
		<img src="./images/loading.gif" class="loading" />
		<p class="loadingTxt">Loading...</p>
		<p class="loadDesc">from TECNO Phantom 5<br/>
		Finger Sensor</p>
	</div>
	<div id="missionPanel" class="page4">
		<img src="./images/ke/mobile/bg.jpg" class="bg" />
		<img src="./images/ke/mobile/page4/dialog.png" class="dialogBg" />
		<p class="title">Your Mission</p>
		<p class="desc">Play game to get coins, the more coins you get, the more chances you will have to win a TECNO Phantom 5. If you share this game on your Facebook, you will get an extra chance to spin the Lucky Draw Wheel.</p>
		<a href="javascript:void(0);" id="missionBtn">
			<p class="btn">Continue &nbsp;&nbsp;&nbsp;</p>
			<img src="./images/ke/mobile/continue_icon.png" class="continue_icon" />
		</a>
	</div>
	<div id="hifiPanel" class="page5">
		<img src="./images/ke/mobile/page5/bg.jpg" class="bg" />
		<img src="./images/ke/mobile/page5/music.png" class="musicIcon" />
		<p class="title">PLAY GAME TO WIN<br/>
		TECNO Phantom 5</p>
		<p class="content">Entertain yourself with HI-FI music</p>
		<a href="javascript:void(0);" id="hifiBtn">
			<img src="./images/ke/mobile/page5/phone.png" class="phone" />
			<p class="continue">Continue &nbsp;&nbsp;&nbsp;</p>
			<img src="./images/ke/mobile/continue_icon.png" class="continue_icon" />
		</a>
	</div>
	<div id="cameraPanel" class="page6">
		<img src="./images/ke/mobile/page6/bg.jpg" class="bg" />
		<p class="title">PLAY GAME TO WIN<br/>
		TECNO Phantom 5</p>
		<p class="content">Entertain yourself with 13MP back<br/>
		camera & 8.0MP camera</p>
		<a href="javascript:void(0);" id="cameraBtn">
			<img src="./images/ke/mobile/page6/phone.png" class="phone" />
			<p class="continue">Continue &nbsp;&nbsp;&nbsp;</p>
			<img src="./images/ke/mobile/continue_icon.png" class="continue_icon" />
		</a>
	</div>
	<div id="gamePanel" class="page7">
		<img src="./images/ke/mobile/bg.jpg" class="bg" />
		<div class="timeTxt">30 s</div>
		<img src="./images/ke/mobile/line.png" class="line1" />
		<img src="./images/ke/mobile/line.png" class="line2" />
		<!--<a href="javascript:void(0);">-->
			<div class="iconBox">
				<img src="./images/ke/mobile/page7/1.png" />
				<img src="./images/ke/mobile/page7/2.png" />
				<img src="./images/ke/mobile/page7/3.png" />
				<img src="./images/ke/mobile/page7/4.png" />
				<img src="./images/ke/mobile/page7/5.png" />
				<img src="./images/ke/mobile/page7/6.png" />
				<img src="./images/ke/mobile/page7/7.png" />
				<img src="./images/ke/mobile/page7/8.png" />
				<img src="./images/ke/mobile/page7/9.png" />
				<img src="./images/ke/mobile/page7/10.png" />
				<img src="./images/ke/mobile/page7/11.png" />
				<img src="./images/ke/mobile/page7/12.png" />
				<img src="./images/ke/mobile/page7/13.png" />
				
				<img src="./images/ke/mobile/page7/1.png" />
				<img src="./images/ke/mobile/page7/2.png" />
				<img src="./images/ke/mobile/page7/3.png" />
				<img src="./images/ke/mobile/page7/4.png" />
				<img src="./images/ke/mobile/page7/5.png" />
				<img src="./images/ke/mobile/page7/6.png" />
				<img src="./images/ke/mobile/page7/7.png" />
				<img src="./images/ke/mobile/page7/8.png" />
				<img src="./images/ke/mobile/page7/9.png" />
				<img src="./images/ke/mobile/page7/10.png" />
				<img src="./images/ke/mobile/page7/11.png" />
				<img src="./images/ke/mobile/page7/12.png" />
				<img src="./images/ke/mobile/page7/13.png" />
			</div>
			<div class="ready">Click icon to get coins!</div>
			<div class="addScore">+0</div>
		<!--</a>-->
	</div>
	<div id="winPanel" class="page8">
		<img src="./images/ke/mobile/bg.jpg" class="bg" />
		<img src="./images/ke/mobile/page8/dlg.png" class="dialog" />
		<div class="title">Congratulations</div>
		<div class="describe">You just got <span class="coinNum">0</span> coins!</div>
		<a href="javascript:void(0);" id="winShareBtn">
			<img src="./images/ke/mobile/share.png" class="share_icon" />
			<div class="shareTxt">Share</div>
		</a>
		<a href="./?m=game&a=lucky" target="_self">
			<div class="continueTxt">Continue</div>
		</a>
	</div>
</div>
<input type="hidden" id="isLocal" value="<?php if (Config::$isLocal) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="isFb" value="<?php if (Config::$isFb) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="appId" value="<?php echo Config::$fbAppId; ?>" />
<input type="hidden" id="shareUrl" value="<?php echo Config::$shareUrl; ?>" />
<input type="hidden" id="sharePic" value="<?php echo Config::$sharePic; ?>" />
<input type="hidden" id="isPlayed" value="<?php echo $isPlayed; ?>" />
<input type="hidden" id="todayScore" value="<?php echo $personal['totalscore']; ?>" />
<?php echo Config::$countCode; ?>
</body>
</html>
