<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.4, minimum-scale=0.4, maximum-scale=0.4, user-scalable=no" />
<title>Phantom5</title>
<link href="css/mobile_index.css?v=2015.11.13_18.58" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.2.min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<div class="page10">
	<div id="navBar" class="navBar">
		<div class="bg"></div>
		<a id="menuBtn" href="javascript:void(0);"><img class="menuBtn" src="./images/mobile/menu_btn.png" /></a>
		<div class="username"><?php echo $personal['username']; ?></div>
		<img class="photo" src="<?php echo $photo; ?>" />
	</div>
	<div id="navMenu" class="navMenu">
		<ul>
			<a href="./?m=game&a=main" target="_self"><li><span>Game</span></li></a>
			<a href="./?m=game&a=personal" target="_self"><li><span class="select">Personal Center</span></li></a>
			<a href="./?m=game&a=rank" target="_self"><li><span>Rank</span></li></a>
			<a href="./?m=game&a=rule" target="_self"><li><span>Game Rules</span></li></a>
		</ul>
	</div>
	<img src="./images/mobile/bg.jpg" class="bg" />
	<img src="./images/mobile/page10/title.png" class="title" />
	<img src="./images/mobile/line.png" class="line1" />
	<img src="./images/mobile/line.png" class="line2" />
	<img src="./images/mobile/line.png" class="line3" />
	<img src="./images/mobile/line.png" class="line4" />
	<div class="list">
		<ul>
			<?php foreach ($daily as $value) { ?>
			<li>
				<img src="<?php echo $photo; ?>" class="photo" />
				<span class="date"><?php echo Utils::mdate('Y.m.d', $value['playtime']); ?></span>
				<img src="./images/mobile/page10/gem1.png" class="gem" />
				<span class="coin"><?php echo $value['score']; ?></span>
			</li>
			<?php } ?>
		</ul>
	</div>
	<a href="<?php echo $prevLink; ?>" target="_self">
		<img src="./images/mobile/left.png" class="leftBtn" />
	</a>
	<a href="<?php echo $nextLink; ?>" target="_self">
		<img src="./images/mobile/right.png" class="rightBtn" />
	</a>
	<div class="page"><?php echo $pageStr; ?></div>
	<img src="./images/mobile/page10/smile.png" class="smile" />
	<div class="friendsTip">You have got<br/>from your invited friends</div>
	<div class="friendsScore"><span id="friendsScoreTxt"><?php echo $personal['friendscore']; ?></span><img src="./images/mobile/page10/gem2.png" /></div>
	<div class="totalTip">Your total coins are</div>
	<div class="totalScore"><span id="totalScoreTxt"><?php echo $personal['totalscore']; ?></span><img src="./images/mobile/page10/gem2.png" /></div>
	<a href="./?m=game&a=rank" target="_self">
		<img src="./images/mobile/finger_rank.png" class="fingerprint" />
		<div class="rankTxt">Check Your Rank</div>
	</a>
	<a href="javascript:void(0);" id="shareBtn">
		<img src="./images/mobile/page10/fb.png" class="facebook" />
		<div class="shareTxt">Share To Facebook</div>
	</a>
</div>
<input type="hidden" id="isFb" value="<?php if (Config::$isFb) { echo 1; } else { echo 0; } ?>" />
<input type="hidden" id="appId" value="<?php echo Config::$fbAppId; ?>" />
<input type="hidden" id="shareUrl" value="<?php echo Config::$shareUrl; ?>" />
<input type="hidden" id="sharePic" value="<?php echo Config::$sharePic; ?>" />

<script>
var isFb = false;
var appId = '';
var shareUrl = '';
var sharePic = '';

$(document).ready(function()
{
	isFb = ($("#isFb").val() == 1) ? true : false;
	appId = $("#appId").val();
	shareUrl = $("#shareUrl").val();
	sharePic = $("#sharePic").val();
	$("#shareBtn").click(onClickShare);
	$("#navBar").click(onClickMenu);
	
	if (isFb)
	{
		window.fbAsyncInit = function()
		{
			FB.init({
				appId: appId,
				status: true,
				cookie: true,
				xfbml: true
			});
		};

		(function(d, s, id)
		{
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	}
});

function onClickMenu(e)
{
	$("#navMenu").slideToggle();
}

function onClickShare(e)
{
	feed(shareUrl, sharePic);
}

function login()
{
	FB.login(function(response){ document.location.href = "./?m=game&a=introduction"; });
}

function feed(link, picture)
{
	if (!isFb)
	{
		window.open(link);
		return;
	}
	FB.ui(
	{
		method: 'feed',
		name: 'Phantom5',
		link: link,
		picture: picture,
		caption: 'www.tecno-mobile.com',
		description: 'Play Game, Win TECNO Phantom 5!!!'
	},
	function(response) {
		//alert("Succeed!");
	});
}

function invite()
{
	FB.ui({method: 'apprequests',
	  message: 'Tecno'
	}, function (response){});
}

function addPage(redirect_uri)
{
	FB.ui({
	  method: 'pagetab',
	  redirect_uri: redirect_uri
	}, function(response){});
}
</script>
<?php echo Config::$countCode; ?>
</body>
</html>
