<?php if (!defined('VIEW')) exit; ?>
﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Survey </title>
    <link rel="stylesheet" href="css/rest.css?v=2016.1.13_22.24" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <span class="process-tele process whide">

    </span>
    <div class="main-wrapper">
        <div class="process-wrapper whide">
          <span class="title show">Survey.</span>
          <span class="process-table process">
            <ul><li class="sur"></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
          </span>
        </div>
        <div class="wercty">
          <section class="wer wer0 wer17 wshow wrapper">
            <p class="werp0"><a href="javascript:;" class="cover1"></a></p>
            <p class="survey">Survey</p>
            <p class="surtitle">How much would you be willing to pay for a smartphone?</p>
            <p><span class="surspan"><a href="javascript:;" class="only">Only 1 min</a><a href="javascript:;" class="let">Let us know what you need</a></span></p>
            <p class="cover2p"><a href="javascript:;" class="cover2"></a></p>
            <p class="sert"><a href="<?php echo $loginUrl; ?>" target="_self" class="startbtn" >Start >></a></p>
          </section>
        </div>
    </div>
  <?php echo Config::$countCode; ?>
  </body>
</html>
