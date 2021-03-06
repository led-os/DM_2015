<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phantom5</title>
<link href="css/index.css?v=2015.11.6_18.49" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="page12">
	<div class="navBar">
		<div class="bg"></div>
		<div class="left">
			<img src="<?php echo $photo; ?>" />
			<span><?php echo $personal['username']; ?></span>
		</div>
		<div class="right">
			<ul>
				<li><a href="./?m=game&a=main" target="_self"><span>Game</span></a></li>
				<li><a href="./?m=game&a=personal" target="_self"><span>Personal Center</span></a></li>
				<li><a href="./?m=game&a=rank" target="_self"><span>Rank</span></a></li>
				<li><a href="./?m=game&a=rule" target="_self"><span class="select">Game Rules</span></a></li>
			</ul>
		</div>
	</div>
	<img src="./images/bg2.jpg" class="bg" />
	<p class="title">Game Rules</p>
	<p class="kouHao">Play Game, Win TECNO Phantom 5!!!</p>
	<p class="ruleTxt"><img src="./images/dot.png" />Play game to get entertaining coins, share<br/>
it on your Facebook. You can invite your<br/>
friends to play the game, the more friends<br/>
you invite, the more coins you will get.</p>
	<p class="gameTime">Game Time</p>
	<p class="timeTxt"><img src="./images/dot.png" />Nov.9 - Nov.22</p>
	<p class="prize">Prize</p>
	<p class="tecnoPhantom"><img src="./images/dot.png" />3 TECNO Phantom 5</p>
	<p class="powerBank"><img src="./images/dot.png" />3 Selfie Sticks</p>
	<p class="selfieStick"><img src="./images/dot.png" />4 Flash Disk</p>
</div>
<script>
$(document).ready(function()
{
	resizeWindow();
	$(window).resize(resizeWindow);
});

function resizeWindow()
{
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var panelHeight = 600;
	var offset = parseInt((winHeight - panelHeight) / 2);
	
	if (offset < 0)
	{
		offset = 0;
	}
	$(".page12").css("margin-top", offset + "px");
}
</script>
<?php echo Config::$countCode; ?>
</body>
</html>
