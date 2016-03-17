<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.4, minimum-scale=0.4, maximum-scale=0.4, user-scalable=no" />
<title>Phantom5</title>
<link href="./css/ke_mobile_index.css?v=2015.12.11_13.56" rel="stylesheet" type="text/css" />
<script src="./js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="winner">
	<div id="navBar" class="navBar">
		<div class="bg"></div>
		<a id="menuBtn" href="javascript:void(0);"><img class="menuBtn" src="./images/ke/mobile/menu_btn.png" /></a>
		<div class="username"><?php echo $personal['username']; ?></div>
		<img class="photo" src="<?php echo $photo; ?>" />
	</div>
	<div id="navMenu" class="navMenu">
		<ul>
			<a href="./?m=game&a=introduction" target="_self"><li><span>Rules</span></li></a>
			<a href="./?m=game&a=main" target="_self"><li><span>Game</span></li></a>
			<a href="./?m=game&a=lucky" target="_self"><li><span>Lucky</span></li></a>
			<a href="./?m=game&a=winner" target="_self"><li><span class="select">Winner</span></li></a>
			<a href="./?m=game&a=rank" target="_self"><li><span>Rank</span></li></a>
		</ul>
	</div>
	<div id="coinBar" class="coin">
		<span class="coinNum"><?php echo $personal['totalscore']; ?></span>
		<img class="gem2" src="./images/ke/mobile/gem.png" />
	</div>
	<img src="./images/ke/mobile/bg.jpg" class="bg" />
	<img src="./images/ke/mobile/page11/title.png" class="title" />
	<img src="./images/ke/mobile/line.png" class="line1" />
	<img src="./images/ke/mobile/line.png" class="line2" />
	<img src="./images/ke/mobile/line.png" class="line3" />
	<div class="myPrize">
		<p class="title">My Prize:</p>
		<p class="prizeName"><span><?php echo $myPrize; ?></span></p>
	</div>
	<div class="list">
		<ul>
			<?php foreach ($winner as $value) { ?>
			<li>
				<img src="<?php echo $value['photo']; ?>" class="photo" />
				<span class="name"><?php echo $value['username']; ?></span>
				<span class="award"><div><?php echo Config::$prizeName[$value['prizeid'] - 1]; ?></div></span>
			</li>
			<?php } ?>
		</ul>
	</div>
	<a href="<?php echo $prevLink; ?>" target="_self">
		<img src="./images/ke/mobile/page9/left.png" class="leftBtn" />
	</a>
	<a href="<?php echo $nextLink; ?>" target="_self">
		<img src="./images/ke/mobile/page9/right.png" class="rightBtn" />
	</a>
	<div class="page"><?php echo $pageStr; ?></div>
	<a href="./?m=game&a=rank" target="_self">
		<img src="./images/ke/mobile/page9/finger.png" class="finger" />
		<div class="rankBtn"><p>Check The Rank</p></div>
	</a>
</div>
<script>
$(document).ready(function()
{
	$("#navBar").click(onClickMenu);
});

function onClickMenu(e)
{
	$("#navMenu").slideToggle();
}
</script>
<?php echo Config::$countCode; ?>
</body>
</html>
