<?php if (!defined('VIEW')) exit; ?>
﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>itel1505</title>
    <link rel="stylesheet" href="css/layout.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap-progressbar.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/bootstrap-progressbar.min.js" charset="utf-8"></script>
    <script src="js/hammer.js" charset="utf-8"></script>
    <script src="js/jquery.hammer.js" charset="utf-8"></script>
  </head>
  <body>
<header class="header">
<nav class="navbar navbar-default">
   <div class="container">
     <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed pull-left headernavbtn" data-toggle="collapse" data-target="#nav-main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="javascript:;" class="navbar-brand"><img src="image/itel-logo.png" class="img-responsive" alt="itel1505"></a>
    </div>
    <div class="header-container purchasecase">
        <h4 class="navbar-text pull-left btn disabled" style="width:92px"><img src="image/vision.png" class="img-responsive" style=""></h4>
        <p class="navbar-text pull-right btn btn-primary  btn-info" id="purchase">Purchase</p>
        <script type="text/javascript">
          $(function(){$('#purchase').click(function(){mScroll(pushhere)})
            function mScroll(id){$("html,body").stop(true);$("html,body").animate({scrollTop: $("#pushhere").offset().top-60}, 1000);}
          })
        </script>
    </div>
    <div class="navbar-collapse collapse" id="nav-main" aria-expanded="true">
        <ul class="nav navbar-nav headernvaul">
            <li><a href="">Design</a></li>
            <li><a href="">TruView™</a></li>
            <li><a href="">Camera</a></li>
            <li><a href="">Features</a></li>
            <li class="hidden-xs hidden-sm purchasepc"><a href="javascript:;" style="color:#42b5fd">Purchase</a></li>
            <script>
              $(function(){
                $('.purchasepc').click(function(){
                  $("html,body").stop(true);$("html,body").animate({scrollTop: $("#pushhere").offset().top-60}, 1000);
                })
              })
            </script>
        </ul>
    </div>
   </div>
</nav>
</header>
<section class="truview f11" style="margin-top:-20px;">
  <div class="container">
    <div class="row" style="margin-top:10px;margin-bottom:20px">
      <div class="col-md-12 col-xl-8">
        <h3 class="text-center" style="font-weight:700">TruView™ Display</h3>
        <h5 class="text-center" style="font-weight:700">Large 5.0" high resolution </h5>
        <h5 class="text-center" style="font-weight:700;margin-top:-10px">IPS screen, 178°angle viewable </h5>
        <h6 class="text-center h6nth1" style="  line-height: 16px;">More spectacular visual experience--TruView™ Technology and 85% NTSC enhances</h6>
        <h6 class="text-center h6nth2" style="  line-height: 16px;margin-top:-10px">the effect of color display for sharper and brighter images, allowing true colors to be shown.</h6>
        <div class="row text-center" style="margin-top:30px;font-size:12px;margin-bottom:60px;">
          <div class="col-xs-3 he4row">
            <span><p class="he4rowtitle">5.0HD</p>
                  <p class="he4rowcont">1280*720</p>
            </span>
          </div>
          <div class="col-xs-3 he4row">
            <span><p class="he4rowtitle">85%</p>
                  <p class="he4rowcont">NTSC</p>
            </span>
          </div>
          <div class="col-xs-3 he4row">
            <span><p class="he4rowtitle">296</p>
                  <p class="he4rowcont">PPI</p>
            </span>
          </div>
          <div class="col-xs-3 he4row">
            <span><p class="he4rowtitle">16.7M</p>
                  <p class="he4rowcont">ColorSpace</p>
            </span>
          </div>
        </div>
    <!--    <img src="image/truview.png" class="img-responsive center-block hidden-xs" alt="truview" />-->
        <div class="row">
          <div class="col-xs-8" style="left:16%">
            <img src="image/truview.png" class="img-responsive center-block" alt="truview" />
          </div>
        </div>
        </div></div></div>
</section>

<section class="visual fff">
  <div class="container my-fluid-container">
    <div class="row">
      <div class="col-md-12 col-xl-8 ">
        <div class="row" style="margin-top:20px">
          <div class="col-xl-8 hidden-lg hidden-md">
              <img src="image/visual.png" class="img-responsive center-block text-center" alt="visual" />
          </div>
          <!--case 1200-->
          <div class="col-lg-12 hidden-xs" style="margin-top:20px">
              <img src="image/visual2.png" class="img-responsive" alt="visual" />
          </div>
        </div>
        <h3 class="text-left" style="font-weight:700">More spectacular visual experience</h3>
        <h5 class="text-left" style="line-height:20px">TruView™ Technology and 85% NTSC enhances the effect of color display for sharper and brighter images, allowing true colors to be shown.</h5>
        <h5 class="text-left" style="line-height:20px">Unique TruView™ color enhancement technique, to achieve multi-angle high-definition images, video screen display more lively and bright.</h5>
  </div></div>
</div>
</section>

<section class="share fff">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xl-8">
        <div class="row sharerowfff" style="margin-top:20px;margin-bottom:20px">
          <div class="col-xl-8 hidden-lg hidden-md">
              <img src="image/share.png" class="img-responsive center-block text-center"  />
          </div>
          <!--case 1200-->
          <div class="col-lg-12 hidden-xs" style="margin-top:80px">
              <img src="image/share2.png" class="img-responsive"  />
          </div>
        </div>
        <h3 class="text-left" style="font-weight:700">Easier Sharing</h3>
        <h5 class="text-left" style="line-height:20px">High resolution IPS screen achieves 178°viewable angle so that sharing movies, games is a pleasant experience. Clear and remarkable images at any angle.</h5>
        </div></div></div>
</section>

<section class="smoothergame f11">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xl-8">
        <h3 class="text-center" style="margin-top:20px;font-weight:700">Smoother Gaming</h3>
        <h5 class="text-center" style="line-height:20px">Smoother gaming--ONECELL™ technology </h5>
        <h5 class="text-center" style="line-height:20px">allows 5-point touch on the screen which means</h5>
        <h5 class="text-center" style="line-height:20px">smoother gaming experience, </h5>
        <h5 class="text-center" style="line-height:20px">such as Magic Piano, </h5>
        <h5 class="text-center" style="line-height:20px">Fruit Ninja, iSTAR Drummer.</h5>

        <div class="row" style="">
          <div class="col-xl-8">
              <img src="image/orgin.png" class="img-responsive center-block text-center" />
          </div>
        </div>
        <h3 class="text-right" style="margin-top:-60px;font-weight:700">ONCELL™</h3>
        <h3 class="text-right" style="font-weight:700;margin-top:-10px">5 Point Touch</h3>
        <h5 class="text-right" style="margin-top:-7px;margin-bottom:20px"> Stunning Display than ever</h5>
        </div></div></div>
</section>

<section class="bodydesign fff">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xl-8">
        <h3 class="text-center" style="margin-top:30px;font-weight:700">Durable Uni-body Design</h3>
        <h5 class="text-center" style="line-height:20px">VISION’s fashionable uni-body consists of mag-aluma parts,30% stronger,but 20% lighter than other ordinary mobile phones,slim but firm.</h5>
        <div class="row" style="margin-top:-30px">
          <div class="col-xl-8">
              <img src="image/topbottom.png" class="img-responsive center-block text-center" />
          </div>
        </div>

        <h3 class="text-center " style="margin-top:0px;font-weight:700" >A Comfortable Grip</h3>
        <h5 class="text-center " style="line-height:20px">Special frosted material has been used on the back cover to provide a comfortable grip.</h5>
        <div class="row " style="margin-top:25px">
          <div class="col-xl-8 col-md-offset-2" style="height:410px;">
            <div class=""  id="phonecover" style="opacity:1">
              <ul class="changeImg">
              <li><img src="image/phonedes3.png" id="phonedes3" class="img-responsive center-block text-center" /></li>
              <li><img src="image/phonedes2.png" id="phonedes2" class="img-responsive center-block text-center" /></li>
              <li><img src="image/phonedes1.png" id="phonedes1" class="img-responsive center-block text-center" /></li>
              </ul>
            </div>
          </div>

          <script type="text/javascript">
            $(function(){
              flag=true;
              $(window).bind("scroll", function(event){
                        var thisButtomTop = parseInt($(window).height()) + parseInt($(window).scrollTop());
                        var thisTop = parseInt($(window).scrollTop());
                            var PictureTop = parseInt($("#phonecover").offset().top);
                             if (PictureTop >= thisTop && PictureTop <= thisButtomTop){
                               function doS(){
                               var switchSpeed = 1000;         //图片切换时间
                               var fadeSpeed = 1500;          //渐变时间
                               var timesRun = 0;
                               var interval=setInterval(function(){
                                 timesRun += 1;
                               if(timesRun===4){
                                 $('#phonedes1').addClass('hidden');
                                 $('#phonedes2').addClass('hidden');
                                 $('#phonedes3').removeClass('hidden');
                                 clearInterval(interval);
                               }
                               console.log(timesRun);
                                   $('#phonecover ul li img').last().fadeOut(fadeSpeed, function(){
                                       $(this).show().parent().prependTo($('#phonecover ul'));
                                   });
                               }, switchSpeed);
                    }
                    if(flag){
                      doS();
                      flag=false;
                      console.log(flag);
                    }

                    }
            })
            })
          </script>
        </div>
        <div class="pictureh3">
          <div class=" pullri" style="position:relative;z-index:999">
        <h3 class="text-left " style="margin-top:40px;font-weight:700">Greater Picture Quality</h3>
        <h5 class="text-left " style="line-height:20px">Latest American OV 8.0MP camera lenses immensely improve the picture quality to help you capture precious moments of your life in a super clear way.</h5>
        </div>
        <div class="row" style="margin-top:-10px">
          <div class="col-xl-8 ">
              <img src="image/e60s.png" class="img-responsive center-block text-center e60s" />
          </div>
        </div>
        </div>
        <div class="row text-center  hidden-md " style="font-size:12px;margin-top:10px">
          <div class="col-xs-4 he4row des1 hidden-lg">
            <span><p class="he4rowtitle"><img src="image/descamera.png" style="width:30%;margin-top:15px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont">8.0MP/5.0MP</p>
            </span>
          </div>
          <div class="col-xs-4 he4row des1 hidden-lg">
            <span><p class="he4rowtitle"><img src="image/desf2.0.png" style="width:30%;margin-top:15px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont">F2.0 Aperture</p>
            </span>
          </div>
          <div class="col-xs-4 he4row hidden-lg">
            <span><p class="he4rowtitle"><img src="image/deshdr.png" style="width:40%;margin-top:25px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont" style="margin-top:13px">HDR video</p>
            </span>
          </div>
        </div>
        <div class="row text-center rowhe4row hidden-md" style="font-size:12px;margin-bottom:60px;border-top:1px solid #e3e3e3">
          <div class="col-xs-4 he4row des1 hidden-lg">
            <span><p class="he4rowtitle"><img src="image/descmos.png" style="width:30%;margin-top:15px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont" style="margin-bottom:0">Stacking CMOS</p>
            </span>
          </div>
          <div class="col-xs-4 he4row des1 hidden-lg">
            <span><p class="he4rowtitle"><img src="image/desflash.png" style="width:30%;margin-top:10px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont" style="margin-bottom:0">True Flash</p>
            </span>
          </div>
          <div class="col-xs-4 he4row hidden-lg">
            <span><p class="he4rowtitle"><img src="image/deslens.png" style="width:25%;margin-top:10px" class="img-responsive center-block text-center" /></p>
                  <p class="he4rowcont" style="margin-bottom:0;margin-top:13px">5P Lens</p>
            </span>
          </div>
        </div>

        <h3 class="text-center" style="margin-top:px;margin-bottom:px;font-weight:700">More Comfortable Brightness</h3>
        <div class="row" style="">
          <div class="col-xl-8">
            <div class="metercover" id="metercover" style="opacity:0.5">
              <img src="image/blur-meter.png" id="blurmeter" class="img-responsive center-block text-center" />
              <img src="image/meter.png" id="meter" class="img-responsive hidden center-block text-center" />
              <script type="text/javascript">
              $(function(){
                $(window).bind("scroll", function(event){
                          var thisButtomTop = parseInt($(window).height()) + parseInt($(window).scrollTop());
                          var thisTop = parseInt($(window).scrollTop());
                              var PictureTop = parseInt($("#metercover").offset().top);
                               if (PictureTop >= thisTop && PictureTop <= thisButtomTop) {
                                function setOP() {
                                  var opc=0.5;
                                while (opc<0.899) {
                                    opc=opc+0.1;
                                    $("#metercover").animate({
                                      opacity:1
                                    },1000,function(){
                                      $('#blurmeter').addClass('hidden');
                                      $('#meter').removeClass('hidden');
                                      return opc=1;
                                    });
                                  }
                                 }
                                 setOP();
                               }
                })
              })
              </script>
            </div>
          </div>
        </div>
        <h5 class="text-left greaterh3" style="line-height:20px;margin-bottom:20px">Greater picture quality--Latest American OV 8.0MP camera lenses immensely improve the picture quality to help you capture precious moments of your life in a super clear way.</h5>
        </div></div></div>
</section>

<section class="quad f11">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xl-8">
        <h3 class="text-left rapider" style="margin-top:20px;font-weight:700">Rapider than ever</h3>
        <h4 class="text-left rapider">Quad-core processor，8GB ROM + 1GB RAM DD3</h4>
        <h5 class="text-left rapider" style="margin-top:10px;line-height:20px">Quad Core CPU and 1GB RAM are meant to help you achieve best scores of your games or accomplish multiple tasks simultaneously,allowing you to be rapider than anyone else.</h5>
        <div class="row" style="">
          <div class="col-xl-8">
              <img src="image/rade.png" class="img-responsive center-block text-center" />
          </div>
        </div>

        <div class="row" style="margin-top:20px">
          <div class="col-xl-8 hidden-lg hidden-md">
              <img src="image/picture.png" class="img-responsive center-block text-center" />
          </div>
          <div class="col-md-12 hidden-xs">
              <img src="image/picture2.png" class="img-responsive center-block text-center" />
          </div>
        </div>

        <h3 class="text-left" style="margin-top:20px;font-weight:700">Mightier Performance</h3>
        <h5 class="text-left" style="margin-top:10px;line-height:20px">The combination of 1GB RAM, advanced SAMSUNG emmc5.0 DDR3 technology and Quad-core processor allows smoother gaming, more multi-tasking, even saving 20% of power at the same time.</h5>

        <div class="row" style="margin-top:40px;">
          <div class="col-xl-8">
              <img src="image/zhizhu.png" class="img-responsive center-block text-center" />
          </div>
        </div>

        <h3 class="text-right" style="margin-top:20px;font-weight:700">Larger Battery Power</h3>
        <h5 class="text-right" style="margin-top:0px">20% more powerful battery</h5>
        <h5 class="text-right" style="margin-top:0px">enables longer entertainment time.</h5>

        <div class="row pull-right" style="">
          <div class="col-xl-6">
            <img src="image/bettery.png" style="width:50%" class="img-responsive center-block " />
          </div>
        </div>
          <script type="text/javascript">
          $(function(){
            $(window).bind("scroll", function(event){
                    //窗口的高度+看不见的顶部的高度=屏幕低部距离最顶部的高度
                      var thisButtomTop = parseInt($(window).height()) + parseInt($(window).scrollTop());
                      var thisTop = parseInt($(window).scrollTop()); //屏幕顶部距离最顶部的高度
                          var PictureTop = parseInt($("#s1-progressbars").offset().top);
                           if (PictureTop >= thisTop && PictureTop <= thisButtomTop) {

                            function serT() {
                                 $('#h-default-themed .progress-bar').each(function () {
                                     var $pb = $(this);
                                     $pb.attr('data-transitiongoal', $pb.attr('data-transitiongoal-backup'));
                                     $pb.progressbar();
                                 });
                             }
                             serT();
                           }else if(PictureTop >= thisTop && PictureTop <= thisButtomTop+50){
                             function remove() {
                                 $('#h-default-themed .progress-bar').attr('data-transitiongoal', 0).progressbar();
                             }
                             remove();
                           }
            })
          })
          </script>
        <div class="row"  style="margin-top:120px">
          <div class="col-sm-8 col-md-8 col-md-offset-2" id="s1-progressbars">
            <div class="tab-pane fade active in" id="h-default-themed">
        <h5 class="hidden">themed progressbars <button type="button" class="btn btn-primary" id="h-default-themed-start">start</button> <button type="button" class="btn btn-danger" id="h-default-themed-reset">reset</button></h5>
        <div class="bs-example">
            <div class="">
                <h5 class="text-left" style="margin-top:0px;color:#666;">Movie *1.3X</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="70" data-transitiongoal="100" aria-valuenow="40" style="width: 0%;"></div></div>
                <h5 class="text-left" style="color:#666;">3G surface *1.3X</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="70" data-transitiongoal="100" aria-valuenow="60" style="width: 0%;"></div></div>
                <h5 class="text-left" style="color:#666;">3D Game *1.35X</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="60" data-transitiongoal="80" aria-valuenow="80" style="width: 0%;"></div></div>
                <h5 class="text-left" style="color:#666;">Music *1.3X</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="75" data-transitiongoal="100" aria-valuenow="100" style="width: 0%;"></div></div>
                <h5 class="text-left" style="color:#666;">Standby *1.25X</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="80" data-transitiongoal="100" aria-valuenow="100" style="width: 0%;"></div></div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#h-default-themed-start').click(function() {
                        $('#h-default-themed .progress-bar').each(function () {
                            var $pb = $(this);
                            $pb.attr('data-transitiongoal', $pb.attr('data-transitiongoal-backup'));
                            $pb.progressbar();
                        });
                    });
                    $('#h-default-themed-reset').click(function() {
                        $('#h-default-themed .progress-bar').attr('data-transitiongoal', 0).progressbar();
                    });
                });
            </script>
        </div>
        </div>
        </div>
        </div>

        <h3 class="text-center" style="margin-top:60px;font-weight:700">Connect Closely with 3G</h3>
        <h5 class="text-center greaterh3" style="margin-top:0px;line-height:20px">Browse your favorite sites,shop online and stay updated with your social networks with 3G connectivity of VISION,there is no need to worry about falling behind</h5>

        <div class="row" style="">
          <div class="col-xl-8">
            <img src="image/phone1.png" style="" class="img-responsive center-block " />
          </div>
        </div>

        <div class="row" style="margin-top:px">
          <div class="col-sm-8 col-md-8 col-md-offset-2">
            <div class="tab-pane fade active in" id="h-default-themed">
        <div class="bs-example">
            <div class="">
                <h4 class="text-center" style="margin-top:0px;color:#666;">Download speed comparison</h4>
                <h5 class="text-left" style="margin-top:0px;color:#666;">  2G   25Kbps</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="10" data-transitiongoal="100" aria-valuenow="40" style="width: 0%;"></div></div>
                <h5 class="text-left" style="color:#666;">3G   500Kbps</h5>
                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal-backup="85" data-transitiongoal="100" aria-valuenow="60" style="width: 0%;"></div></div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="row" style="margin-top:30px;padding-top:20px;padding-bottom:20px">
          <div class="col-xs-6 hidden-lg hidden-md pull-left">
            <img src="image/weizhi.png" style="" class="img-responsive" />
          </div>
          <div class="col-md-3 col-md-offset-3 hidden-xs">
            <img src="image/weizhi.png" style="" class="img-responsive" />
          </div>
          <div class="col-xs-6 hidden-lg hidden-md pull-right">
            <h3 class="text-center" style="font-weight:700;font-size:16px">GPS and A-GPS</h3>
            <h5 class="text-right" style="line-height:20px">Sharing your location with friends wherever you are. The most important,you will never be lost in the jungles.</h5>

          </div>
          <div class="col-md-3 hidden-xs">
            <h3 class="text-center font-weight:700" style="">GPS and A-GPS.</h3>
            <h5 class="text-center" style="">Sharing your location with friends wherever you are. The most important,you will never be lost in the jungles.</h5>
          </div>
        </div>

        <div class="row" style="margin-top:30px">
          <div class="col-xl-8">
            <img src="image/phone2.png" style="width:80%" class="img-responsive center-block " />
          </div>
        </div>


    <!--    <div class="row text-center" style="margin-top:30px;font-size:12px;margin-bottom:60px;">
          <div class="col-xs-4 he4row he5row">
            <span><p class="he4rowtitle"><img src="image/screen.png" style="width:50%;padding-top:5px" alt="img-responsive center-block " /></p>
                  <p class="he4rowcont" style="margin-bottom:0;color:#000">5.0’ HD Display 85% NTSC</p>
            </span>
          </div>
          <div class="col-xs-4 he4row he5row">
            <span><p class="he4rowtitle"><img src="image/cilp.png" style="width:50%;padding-top:5px" alt="img-responsive center-block " /></p>
                  <p class="he4rowcont" style="margin-bottom:0;color:#000">1.0GHz 64bit Quad Core</p>
            </span>
          </div>
          <div class="col-xs-4 he4row">
            <span><p class="he4rowtitle"><img src="image/fcam.png" style="width:50%;padding-top:5px" alt="img-responsive center-block " /></p>
                  <p class="he4rowcont" style="margin-bottom:0;color:#000">8.0MP / 5.0MP</p>
            </span>
          </div>
        </div> -->

        <!--轮播Carousel-->
        <div class="row text-center hidden-lg hidden-md" style="margin-top:10px;font-size:12px;margin-bottom:10px;height:80px">
          <div class="col-xl-12">
            <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">

              <div class="item active">
                <div class="row">
                  <div class="col-xs-4 he4row he5row">
                    <span><p class="he4rowtitle"><img src="image/screen.png" style="width:30%;padding-top:5px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">5.0’ HD Display 85% NTSC</p>
                    </span>
                  </div>
                  <div class="col-xs-4 he4row he5row">
                    <span><p class="he4rowtitle"><img src="image/cilp.png" style="width:30%;padding-top:5px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">1.0GHz 64bit Quad Core</p>
                    </span>
                  </div>
                  <div class="col-xs-4 he4row">
                    <span><p class="he4rowtitle"><img src="image/fcam.png" style="width:30%;padding-top:5px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">8.0MP / 5.0MP</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-xs-4 he4row he5row">
                    <span><p class="he4rowtitle"><img src="image/cpu.png" style="width:25%;padding-top:10px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">8GB/1GB DDR3</p>
                    </span>
                  </div>
                  <div class="col-xs-4 he4row he5row">
                    <span><p class="he4rowtitle"><img src="image/unibody-design.png" style="width:25%;padding-top:15px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;padding-top:9px;color:#000">Unibody Design</p>
                    </span>
                  </div>
                  <div class="col-xs-4 he4row">
                    <span><p class="he4rowtitle"><img src="image/lte.png" style="width:25%;padding-top:10px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">3G Network</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-xs-4 he4row he5row col-xs-offset-2">
                    <span><p class="he4rowtitle"><img src="image/sim.png" style="width:25%;padding-top:5px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;color:#000">Dual SIM</p>
                    </span>
                  </div>
                  <div class="col-xs-4 he4row ">
                    <span><p class="he4rowtitle"><img src="image/battery.png" style="width:25%;padding-top:13px" alt="img-responsive center-block " /></p>
                          <p class="he4rowcont" style="margin-bottom:0;padding-top:5px;color:#000">2500mAh Battery</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
           <a class="carousel-control left swipeleft" href="#myCarousel"
              data-slide="prev" style="  background: rgba(255,255,255,.1);font-size:40px;margin-top:-10px">&lsaquo;</a>
           <a class="carousel-control right swipeleft" href="#myCarousel"
              data-slide="next" style="  background: rgba(255,255,255,.1);font-size:40px;margin-top:-10px">&rsaquo;</a>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $(function(){
            $('#identifier').carousel({
              interval: false
            })
            //移动兼容
            $('#myCarousel').hammer().on('swipeleft', function(){
              $(this).carousel('next');
            });
            $('#myCarousel').hammer().on('swiperight', function(){
              $(this).carousel('prev');
            });
          })
        </script>


        </div></div></div>
</section>

<section class="contect fff">
  <div class="container">
    <div class="row text-center contectrow" style="margin-top:60px">
      <div class="col-md-6 col-xs-12">
<!--
        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:40px;color:#333">Select a region/store</h5>
              <div class="btn-group" style="width:100%">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" style="width:100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="stores"> Coate d'Ivoire <span class="caret"></span></button>
                  <ul class="dropdown-menu text-center" id="regionUL" style="width:100%;">
                    <li><a href="javascript:;" class="text-center"> Coate d'Ivoire </a></li>
                    <li><a href="javascript:;" class="text-center"> Ghana </a></li>

                    <script type="text/javascript">
                      $(function(){
                        $('#regionUL li').click(function(){
                          var i=($(this).index('#regionUL li'));
                          var $regionUL=["Coate d'Ivoire","Ghana"]
                          var $zero=["+00225","+00233"];
                          $('#stores').html($regionUL[i]);
                          $('#basic-addon1').html($zero[i]);

                        });
                      })
                    </script>
                  </ul>
              </div>
            </div>
          </div>
        </div>
-->
<div class="row">
<div class="col-md-12 col-md-offset-6 col-xl-8">
<h3 class="text-center" style="margin-top:30px;margin-bottom:15px;font-weight:700" id="pushhere">Purchase Itel <img src="image/vision.png" style="width:20%;display:inline-block" class="img-responsive itellogo" /></h3>
<div class="row" style="">
  <div class="col-xl-8">
    <img src="image/phone3.png" style="width:70%" class="img-responsive center-block " />
  </div>
</div>
</div>
</div>
        <div class="row selerow">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333">Select a region/store</h5>
              <div class="input-group" style="width:100%">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" style="width:100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="zSt"> Coate d'Ivoire <span class="caret"></span></button>
                  <ul class="dropdown-menu text-center" id="zRegs" style="width:100%;">
                    <li><a href="javascript:;" class="text-center"> Cote d'Ivoire Abidjan </a></li>
                    <li><a href="javascript:;" class="text-center"> Cote d'Ivoire Bouake </a></li>
                    <li><a href="javascript:;" class="text-center"> Cote d'Ivoire Daloa </a></li>
                    <li><a href="javascript:;" class="text-center"> Ghana ACCRA  </a></li>
                    <li><a href="javascript:;" class="text-center"> Ghana KUMASI  </a></li>
                  </ul>
                  <script type="text/javascript">
                  $(function(){
                    $('#zRegs li').click(function(){
                      var i=($(this).index('#zRegs li'));
                      var $zL=[" Coate d'Ivoire Abidjan "," Coate d'Ivoire bouake "," Coate d'Ivoire Daloa "," Ghana ACCRA  "," Ghana KUMASI  "]
                      $('#zSt').html($zL[i]);

                      var $regs=[" Coate d'Ivoire","Ghana"],
                          $zeroNumber=["+00225","+00233"];
                      function isContains(str, substr) {
                            return new RegExp(substr).test(str);
                        }
                        if(isContains($zL[i],$regs[0])){
                            $('#basic-addon1').html($zeroNumber[0]);
                        }
                        if(isContains($zL[i],$regs[1])){
                            $('#basic-addon1').html($zeroNumber[1]);
                        }
                    });
                  })
                  </script>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333">Your Name</h5>
              <div class="input-group" style="width:100%"><input type="text" class="form-control" id="username" placeholder="name" aria-describedby="basic-addon1"></div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333">E-mail</h5>
              <div class="input-group" style="width:100%"><input type="text" class="form-control" id="email" placeholder="E-mail" aria-describedby="basic-addon1"></div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333">Tel</h5>
              <div class="input-group" style="width:100%"><span class="input-group-addon" id="basic-addon1">+00225</span><input type="text" class="form-control" id="tel" placeholder="Tel" aria-describedby="basic-addon1"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333">Verify</h5>
              <div class="input-group"  style="width:100%"><span class="input-group-addon"><img id="verifyPic" src="?m=order&a=verify" class="" width="48px" height="20px" style="border:none" /></span><input type="text" id="verify" class="form-control" id="tel" placeholder="Verify" aria-describedby="basic-addon1"></div>
            </div>
          </div>
        </div>

        <div class="row " style="margin-bottom:50px">
          <div class="container">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
              <h5 class="text-left" style="margin-top:20px;color:#333"></h5>
              <a class="btn btn-info" id="submitBtn" style="width:100%;color:#fff">Submit</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
$(document).ready(function()
{
  $("#submitBtn").click(onClickSubmit);
});

function onClickSubmit(e)
{
  if ($("#username").val() == "")
  {
    alert("Name can not be empty!");
    $("#username").select();
    return;
  }
  if (!checkEmail($("#email").val()))
  {
    alert("Please enter the correct email!");
    $("#email").select();
    return;
  }
  if ($("#verify").val() == "")
  {
    alert("Verify can not be empty!");
    $("#verify").select();
    return;
  }
  var str= $("#zSt").html();
  str = str.replace(/<\/?[^>]*>/g,'');
  $.post("?m=order&a=order", {region:str, username: $("#username").val(), email:$("#email").val(), tel:$("#tel").val(), verify:$("#verify").val()}, onSubmit);
}

function onSubmit(value)
{
  var res = null;

  try
  {
    res = $.parseJSON(value);
  }
  catch (err)
  {
    //服务端返回异常，json数据不能正常解析
    alert("Unknown error!");
    return;
  }

  if (0 == res.code)
  {
    alert("Succeed! Thank you!");
  //  $("#orderFrm")[0].reset();
    $('.purchasecase ,.truview,.visual,.share,.smoothergame,.bodydesign,.quad,.contect').fadeOut('slow').addClass('hidden');
    $('.sucess').removeClass('hidden').fadeIn('slow');
  }
  else
  {
    alert(res.msg);
    $("#verifyPic").attr("src", "?m=order&a=verify&rand=" + Math.random());
  }
}

function checkEmail(str)
{
  var re = /^([a-za-z0-9]+[_|-|.]?)*[a-za-z0-9]+@([a-za-z0-9]+[_|-|.]?)*[a-za-z0-9]+.[a-za-z]{2,3}$/;

  return re.test(str);
}
</script>
<footer style="overflow:hidden">
  <section class="sucess hidden">
    <div class="row">
      <div class="container">
        <div class="col-xs-6 col-xs-offset-3 sucessimg" style="margin-top:40px">
          <img src="image/sucess.png" class="img-responsive center-block text-center" alt="" />
          <h3 class="text-center sucessh3" style="margin-top:30px">Thank you for Submiting!</h3>
        </div>
      </div>
    </div>
    <div class="row sucessbtn">
      <div class="container">
        <div class="col-xs-12 text-center">
          <a href="javascript:;" class="btn btn-info subtn">Back to Home</a>
        </div>
        <script type="text/javascript">
          $(function(){
            $('.subtn').click(function(){
              var $height=window.screen.height;
              if($height<650){
                $('.purchasecase').removeClass('hidden').fadeIn('slow');
              }
              $('.truview,.visual,.share,.smoothergame,.bodydesign,.quad,.contect').removeClass('hidden').fadeIn('slow');
              $('.sucess').addClass('hidden');
              $('html, body').animate({scrollTop:0}, 'slow');
            });
          })
        </script>
      </div>
    </div>
  </section>
</footer>
<?php echo Config::$countCode; ?>
  </body>
</html>
