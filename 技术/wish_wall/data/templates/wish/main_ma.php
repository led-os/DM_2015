<?php if (!defined('VIEW')) exit; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wishwall</title>
    <link rel="stylesheet" href="css/master_eg.css?v=2015.12.14_18.51" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/layout_eg.css?v=2015.12.14_18.51" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/main.js?v=2015.12.14_17.18" charset="utf-8"></script>
  </head>
  <body>
    <div class="share_contact">
      <nav class="intr_nav anim" data-src="./img/intr_nav_eg.jpg"><img src="img/intr_nav_eg.jpg" alt="" /></nav>

      <div class="container">
        <div id="wishmain">
            <?php foreach ($wishList as $value) { ?>
          <div set="<?php echo $value['bgcolor']; ?>" class="wish" style='background:url(<?php echo $value['bgcolor']; ?>) no-repeat;width:310px;height:350px;'><span class="wall">
              <img class="photo" src="<?php echo $value['photo']; ?>"  width="56px" height="56px"><i class="name"> <?php echo $value['username']; ?></i><i class="time"><?php echo $value['pubdate']; ?></i><i class="soli"><?php echo $value['content']; ?></i>
              </span></div>
            	<?php } ?>
        </div>
        <div class="wishbtn">
          <div class="wbtn">
            <a class="sl-btn makeWish" id="sharqq">WISH</a>
            <a class="sl-btn sl-search">SEARCH</a>
            <a class="sl-btn sl-int"><input class="int-btn" type="text" title="Complete statement!"><span class="search"></span></a>
          </div>
        </div>
      </div>

      <div class="cont">
          <div class="cont-int">
              <div class="cont-preview"><p>Activity rules</p><div class="preview">
                <div class="terms"><a class="hidescroll"></a>
                  <div class="tainer">
                    <p class="setr">
                  <i style="text-align:left;color:#333;font-size:14px;display:inline-block">      TO CELEBRATE THE NEW YEAR AND THANK ALL INFINIX USERS AND ALL FANS WHO SUPPORT US, WE WOULD LIKE TO HAVE THIS WARM-HEART PLAN — INFINIX NEW YEAR WISH. MAKE AN INFINIX NEW YEAR WISH AND LET’S MAKE YOUR WISH COME TRUE!</br></i>
                      <i style="font-size:14px;line-height:14px;font-weight:bold;color:#3587a4">  THE RULE FOR INFINIX NEW YEAR WISH:</i></br>
                    <i style="text-align:left;color:#333;font-size:12px;display:inline-block">    ANYONE MAKES A WISH ON OUR INFINIX NEW YEAR WISH WALL DURING JAN 1 TO 5, 2016, WILL GET A CHANCE TO WIN TO HAVE INFINIX TO MAKE HIS/HER WISH COME TRUE. 3 WINNERS WILL BE PICKED AND ANNOUNCED ON JAN 7, 2016.</br></i>
          </p>
                  </div>
                </div>
              </div></div>
              <div class="cont-content"><P>NOTE TO CONTENT</P><textarea class="content" id="cot" placeholder="Hey! Welcome to write down your wish here…"></textarea></div>
              <div class="cont-select">
                  <P>Select note background:</P>
                  <span>
                      <a><i></i></a>
                      <a><i></i></a>
                      <a><i></i></a>
                      <a><i></i></a>
                      <a><i></i></a>
                  </span>
              </div>
              <div class="sub-btn"><a class="submit">SUBMIT</a></div>
          </div>
      </div>
      <div class="sharef">
        <div class="share-container">
          <img src="images/image/tic2.png" alt="" />
          <div class="sh-content">
              <span class="sharwall">
                <a class="sharphoto" src=""  width="56px" height="56px"></a>
                <i class="sharname"></i>
                <i class="shartime"></i>
                <p class="sharsoli"></p>
                </span>
          </div>

          <a class="sharebtn" onclick="funconce();return;">Make a wish</a>
        </div>
      </div>
      <div class="showall"><p></p></div>
      <script>
       isWished = <?php echo $isWished; ?>;
       if(isWished==true)
       {
         $("#sharqq").html("SHARE");
       }

      </script>
      <script>
     var obj;var obj1;var mx;var my;var ox;var oy;var sx = $(document).width();var sy =($(document).height())*.6 ;
      $("#wishmain div").mousedown(function(e){
          obj=$(this);
          obj.css("z-index",getz());
          mx = e.pageX;my = e.pageY;
          ox = parseInt(obj.css("left"));
          oy = parseInt(obj.css("top"));
      });
      $(document).mousemove(function(e){
          if(!obj)return;
          var cx=((e.pageX-mx+ox)<sx)&&(e.pageX-mx+ox)||(sx-310);
          var cy=((e.pageY-my+oy)<sy/.6)&&(e.pageY-my+oy)||(sy/.6-350);
          obj.css("z-index",getz());
          obj.css({"top":cy+"px","left":cx+"px"});
      })
      $(document).mouseup(function(){
          obj=null;
      });
      function getz(){
          var max = 0;
          var tmp = 0;
          $("#wishmain div").each(function(){
              tmp = parseInt($(this).css("z-index"));
              if( max < tmp){max=tmp;}
          });
          return max+1;
      }
      // 设置许愿条背景随机
      /*function setback(){
          var arr = new Array('#7E7DD4','#A0D581','#E2BBA7','#E3ABC4','#CAB3E6');
          return arr[parseInt(Math.random()*5)];
      }*/
      // 设置许愿条开始随机位置
     function setpos(){
          $("#wishmain div").each(function(){
              var rx = parseInt(Math.random()*(sx-$(this).width()));
              var ry = parseInt(Math.random()*(sy-$(this).height()));
          //    $(this).css("background",setback());
              $(this).css({"top":ry+"px","left":rx+"px"});
          });
      }
      setpos();
      </script>
      <script type="text/javascript">
    var isFb = <?php echo $isFb; ?>;

    if (isFb)
    {
    	window.fbAsyncInit = function()
    	{
    		FB.init({
    			appId: "<?php echo $fbAppId; ?>",
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

    function login()
    {
    	FB.login(function(response){ document.location.href = "./?m=wish&a=main"; });
    }

    //function feed(link, picture)
    function feed()
    {
    	var link = "<?php echo $shareUrl; ?>";
    	var picture = "<?php echo $sharePic; ?>";

    	if (!isFb)
    	{
    		return;
    	}

    	FB.ui(
    	  {
    		method: 'feed',
    		name: 'Wish Wall',
    		link: link,
    		picture: picture,
    		caption: 'www.infinixmobility.com',
    		description: 'Come to join us now!'
    	  },
    	  function(response) {
    		//alert("Thanks!");
    		location.href = "./?m=wish&a=main";
    	  }
    	);
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
    <script type="text/javascript">
      function funconce(){

        feed();
        if(isWished==true)
        {
          $("#sharqq").html("SHARE");
        }


          $('.wbtn').hide();
        //setTimeout("location.href='?m=wish&a=main'",1000);
      }
    </script>


      <footer class="share_footer"><img src="img/foot1920.png" alt="" /></footer>
    </div>
    <script type="text/javascript" src="js/snow.gulp.js"></script>
    <script src="js/void.js?v=2015.12.14_17.18" charset="utf-8"></script>
  </body>
</html>
