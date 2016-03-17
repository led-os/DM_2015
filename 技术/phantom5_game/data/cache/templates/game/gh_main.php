<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phantom5</title>
<link href="css/index.css?v=2015.11.6_18.49" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
<script src="js/mover.js?v=2015.11.6_18.49" type="text/javascript" language="javascript"></script>
<script src="js/game.js?v=2015.11.11_17.16" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="game">
	<div id="navBar" class="navBar">
		<div class="bg"></div>
		<div class="left">
			<img src="<?php echo $photo; ?>" />
			<span><?php echo $personal['username']; ?></span>
		</div>
		<div class="right">
			<ul>
				<li><a href="./?m=game&a=main" target="_self"><span class="select">Game</span></a></li>
				<li><a href="./?m=game&a=personal" target="_self"><span>Personal Center</span></a></li>
				<li><a href="./?m=game&a=rank" target="_self"><span>Rank</span></a></li>
				<li><a href="./?m=game&a=rule" target="_self"><span>Game Rules</span></a></li>
			</ul>
		</div>
	</div>
	<div id="coinBar" class="coin">
		<span class="coinNum">0</span>
		<img src="./images/gem.png" class="gem2" />
	</div>
	<div id="loadingPanel" class="page3">
		<img src="./images/bg2.jpg" class="bg" />
		<img src="./images/page3/fingerprint.png" class="fingerprint" />
		<img src="./images/page3/tecno.png" class="tecno" />
		<img src="./images/loading.gif" class="loading" />
		<p class="loadingTxt">Loading...</p>
		<p class="loadDesc">from TECNO Phantom 5 Finger Sensor</p>
	</div>
	<div id="missionPanel" class="page4">
		<img src="./images/bg2.jpg" class="bg" />
		<a href="javascript:void(0);" id="missionBtn">
			<img src="./images/page4/rectangle.png" class="dialogBg" />
			<img src="./images/page4/gem.png" class="gem" />
			<img src="./images/page4/phantom_5.png" class="phantom_5" />
			<p class="title">Your Mission</p>
			<p class="desc">Play game to get coins, share you rank on 
		Facebook and invite your friends to play to get more 
		coins.The more coins you get, the bigger chance 
		you will have to get a prizes from TECNO.</p>
			<p class="btn">Continue</p>
		</a>
	</div>
	<div id="hifiPanel" class="page5">
		<img src="./images/bg2.jpg" class="bg" />
		<a href="javascript:void(0);" id="hifiBtn">
			<img src="./images/page5/continue.png" class="continue" />
		</a>
		<img src="./images/page5/entertain_yourself.png" class="entertain" />
		<img src="./images/page5/headset.png" class="headset" />
		<img src="./images/page5/phone_music.png" class="phone" />
		<img src="./images/page5/player_button.png" class="player" />
		<img src="./images/page5/playgameto.png" class="playgameto" />
		<p class="listen">Listen to the voice of world</p>
	</div>
	<div id="cameraPanel" class="page6">
		<img src="./images/page6/bg.jpg" class="bg" />
		<img src="./images/page6/entertain.png" class="entertain" />
		<img src="./images/page6/phone_cemera.png" class="phone_cemera" />
		<img src="./images/page6/play_game.png" class="play_game" />
		<a href="javascript:void(0);" id="cameraBtn">
			<img src="./images/page6/continue.png" class="continue" />
		</a>
	</div>
	<div id="gamePanel" class="page7">
		<img src="./images/bg2.jpg" class="bg" />
		<img src="./images/page7/frame.png" class="frame" />
		<a href="javascript:void(0);">
			<div class="iconBox">
				<img src="./images/page7/cemera.png" />
				<img src="./images/page7/dataline.png" />
				<img src="./images/page7/diamond.png" />
				<img src="./images/page7/fingerprint.png" />
				<img src="./images/page7/green_rock.png" />
				<img src="./images/page7/headset.png" />
				<img src="./images/page7/lte.png" />
				<img src="./images/page7/oxygen_bottle.png" />
				<img src="./images/page7/phone.png" />
				<img src="./images/page7/red_rock.png" />
				<img src="./images/page7/spaceship.png" />
				<img src="./images/page7/star.png" />
				<img src="./images/page7/yellow_rock.png" />
				
				<img src="./images/page7/cemera.png" />
				<img src="./images/page7/dataline.png" />
				<img src="./images/page7/diamond.png" />
				<img src="./images/page7/fingerprint.png" />
				<img src="./images/page7/green_rock.png" />
				<img src="./images/page7/headset.png" />
				<img src="./images/page7/lte.png" />
				<img src="./images/page7/oxygen_bottle.png" />
				<img src="./images/page7/phone.png" />
				<img src="./images/page7/red_rock.png" />
				<img src="./images/page7/spaceship.png" />
				<img src="./images/page7/star.png" />
				<img src="./images/page7/yellow_rock.png" />
			</div>
			<div class="ready">Click icon to get coins!</div>
			<div class="addScore">+0</div>
		</a>
		<div class="timeTxt">60 s</div>
	</div>
	<div id="winPanel" class="page8">
		<img src="./images/bg2.jpg" class="bg" />
		<img src="./images/card.png" class="card" />
		<img src="./images/page8/trophy.png" class="trophy" />
		<a href="javascript:void(0);" id="winShareBtn">
			<img src="./images/share_icon.png" class="share_icon" />
			<div class="shareTxt">Share</div>
		</a>
		<a href="javascript:void(0);" id="winContinueBtn">
			<div class="continueTxt">Continue</div>
		</a>
		<div class="title">Congratulations</div>
		<div class="describe">You just got <span class="coinNum">0</span> coins!</div>
	</div>
	<div id="friendPanel" class="page9">
		<img src="./images/bg2.jpg" class="bg" />
		<img src="./images/card.png" class="card" />
		<img src="./images/page9/spread.png" class="spread" />
		<a href="javascript:void(0);" id="friendShareBtn">
			<img src="./images/share_icon.png" class="share_icon" />
			<div class="shareTxt">Share</div>
		</a>
		<a href="./?m=game&a=personal" target="_self">
			<div class="continueTxt">Continue</div>
		</a>
		<div class="title">You’ve got <span class="coinNum">0</span> coins today!</div>
		<div class="describe">Invite your friends to play the game. <br/>If your friend enters the game from the link you shared,<br/>both you and your friend will get 20000 coins! <br/><br/>Welcome back tomorrow to get more coins!</div>
	</div>
</div>
<input type="hidden" id="isLocal" value="<?php if (Config::$isLocal) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="isFb" value="<?php if (Config::$isFb) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="appId" value="<?php echo Config::$fbAppId; ?>" />
<input type="hidden" id="shareUrl" value="<?php echo Config::$shareUrl; ?>" />
<input type="hidden" id="sharePic" value="<?php echo Config::$sharePic; ?>" />
<input type="hidden" id="isPlayed" value="<?php echo $isPlayed; ?>" />
<input type="hidden" id="todayScore" value="<?php echo $todayScore; ?>" />
<?php echo Config::$countCode; ?>
</body>
</html>
