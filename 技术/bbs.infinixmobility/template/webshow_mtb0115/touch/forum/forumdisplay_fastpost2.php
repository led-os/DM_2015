<?php exit;?>
<div id="post_new"></div>
<style>
#fastsmiliesdiv_data {border: 1px solid #cfd3d9;border-radius: 5px;left: 38px;padding: 3px;position: absolute;top: 3px;z-index: 1;}
.btoolmv,.btoolbar{overflow: inherit !important;}
.post_imglist{bottom: 120px;left: 0;padding: 0;position: absolute;width: 100%;}
.button2{background: #279fde;border-radius: 4px;width: 54px;}
</style>
<div id="btoolbar" class="btoolbar btoolbarv">
    <div class="reply-success-alert">Reply Success</div>
    <div class="btool btoolmv cl{if $secqaacheck || $seccodecheck} btoolmv_sec{/if}">
	<form method="post" name="fastpostform" autocomplete="off" id="fastpostform" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&replysubmit=yes&mobile=2">
	<input type="hidden" name="formhash" value="{FORMHASH}" />
    	<ul id="imglist" class="post_imglist cl">
		</ul>
    <ul>
        <li class="li1">
       <a class="a1" href="javascript:;" style="display:none;"><input type="file" name="Filedata" id="filedata" style="width:30px;height:30px;font-size:30px;opacity:0;"/></a>
        <a class="a2"></a>
        <div id="fastsmiliesdiv_data" style="display:none;"><div id="fastsmilies"></div></div>
        </li>
		<li class="li2">
            <textarea value="{lang send_reply_fast_tip}"  name="message" id="fastpostmessage" fwin="reply" autocomplete="off"></textarea>
          
        </li>
        <!--{if $secqaacheck || $seccodecheck}-->
        <li class="li3">
            <!--{subtemplate common/seccheck}-->
        </li>
        <!--{/if}-->
        <li class="li4"><input type="button" value="Send" name="replysubmit" id="fastpostsubmit"></li>
	</ul>
    </form>
    </div>
</div>
 <script src="data/cache/common_smilies_var.js" type="text/javascript"></script>
<script type="text/javascript">
function close_smile_dialog(){
    if($('#fastsmiliesdiv_data').css('display') != 'none') $('#fastsmiliesdiv_data').hide();
}
function seditor_insertunit(key, smilies) {
 textarea = document.getElementById('fastpostmessage');
 textarea.value += smilies;
 textarea.focus();
}
var j = 1, smilies_fastdata = '',  img, seditorkey = "fastpost";
for(i = 0;i < smilies_fast.length; i++) {
if(j == 0) {
smilies_fastdata += '<tr>';
}
j = ++j > 10 ? 0 : j;
s = smilies_array[smilies_fast[i][0]][smilies_fast[i][1]][smilies_fast[i][2]];
smilieimg = "static/" + 'image/smiley/' + smilies_type['_' + smilies_fast[i][0]][1] + '/' + s[2];
smilies_fastdata += s ? '<td onclick="' + (typeof wysiwyg != 'undefined' ? 'insertSmiley(' + s[0] + ')': 'seditor_insertunit(\'' + seditorkey + '\', \'' + s[1].replace(/'/, '\\\'') + '\')') +
';close_smile_dialog();" ><img src="' + smilieimg + '" />' : '<td>';
}
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#fastpostmessage").focus(function(){  
	    $("#btoolbar").removeClass("btoolbarv");
        $("#btoolbar").addClass("btoolbar_v");  
    }).blur(function(){
	    $('#fastpostsubmit').click(function(){
	        $("#btoolbar").addClass("btoolbarv"); 
            $("#btoolbar").removeClass("btoolbar_v"); 
	    });
    });
    $(".li1 .a2").click(function(){
        if($('#fastsmiliesdiv_data').css('display') == 'none') $('#fastsmiliesdiv_data').show();
        else $('#fastsmiliesdiv_data').hide();
        
    })
    
});
$('.message').click(function(){
   $("#btoolbar").removeClass("btoolbar_v"); 
   $("#btoolbar").addClass("btoolbarv"); 
})
</script>
<script type="text/javascript">
(function() {
		var form = $('#fastpostform');
		<!--{if !$allowpostreply}-->
		$('#fastpostmessage').on('focus', function() {
			<!--{if !$_G[uid]}-->
				popup.open('{lang nologin_tip}', 'confirm', 'member.php?mod=logging&action=login&mobile=2');
			<!--{else}-->
				popup.open('{lang nopostreply}', 'alert');
			<!--{/if}-->
			this.blur();
		});
		<!--{else}-->
		$('#fastpostmessage').on('focus', function() {
			var obj = $(this);
			if(obj.attr('color') == 'gray') {
				obj.attr('value', '');
				obj.removeClass('grey');
				obj.attr('color', 'black');
				$('#fastpostsubmitline').css('display', 'block');
			}
		})
		//.on('blur', function() {
			//var obj = $(this);
			//if(obj.attr('value') == '') {
				//obj.addClass('grey');
				//obj.attr('value', '{lang send_reply_fast_tip}');
				//obj.attr('color', 'gray');
			//}
		//});
		<!--{/if}-->
		$('#fastpostsubmit').on('click', function() {
			var msgobj = $('#fastpostmessage');
			if(msgobj.val() == '{lang send_reply_fast_tip}') {
				msgobj.attr('value', '');
			}
			$.ajax({
				type:'POST',
				url:form.attr('action') + '&handlekey=fastpost&loc=1&inajax=1',
				data:form.serialize(),
				dataType:'xml'
			})
			.success(function(s) {
				evalscript(s.lastChild.firstChild.nodeValue);
                $('.reply-success-alert').show();
                 window.setTimeout(function(){
                     $('.reply-success-alert').hide();
                 },3000)
                $("#imglist").empty();

			})
			.error(function() {
				window.location.href = obj.attr('href');
				popup.close();
			});
			return false;
		});

		$('#replyid').on('click', function() {
			$(document).scrollTop($(document).height());
			$('#fastpostmessage')[0].focus();
		});

	})();

	function succeedhandle_fastpost(locationhref, message, param) {
		var pid = param['pid'];
		var tid = param['tid'];
		if(pid) {
			$.ajax({
				type:'POST',
				url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
				dataType:'xml'
			})
			.success(function(s) {
				$('#post_new').append(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
				popup.close();
			});
		} else {
			if(!message) {
				message = '{lang postreplyneedmod}';
			}
			popup.open(message, 'alert');
		}
		$('#fastpostmessage').attr('value', '');
		if(param['sechash']) {
			$('.seccodeimg').click();
		}
	}

	function errorhandle_fastpost(message, param) {
		popup.open(message, 'alert');
	}
</script>
<script type="text/javascript" src="{STATICURL}js/mobile/ajaxfileupload.js?{VERHASH}"></script>
<script type="text/javascript" src="{STATICURL}js/mobile/buildfileupload.js?{VERHASH}"></script>
<script type="text/javascript">
	var imgexts = typeof imgexts == 'undefined' ? 'jpg, jpeg, gif, png' : imgexts;
	
	var file_chk = true;

	var STATUSMSG = {
		'-1' : '{lang uploadstatusmsgnag1}',
		'0' : '{lang uploadstatusmsg0}',
		'1' : '{lang uploadstatusmsg1}',
		'2' : '{lang uploadstatusmsg2}',
		'3' : '{lang uploadstatusmsg3}',
		'4' : '{lang uploadstatusmsg4}',
		'5' : '{lang uploadstatusmsg5}',
		'6' : '{lang uploadstatusmsg6}',
		'7' : '{lang uploadstatusmsg7}(' + imgexts + ')',
		'8' : '{lang uploadstatusmsg8}',
		'9' : '{lang uploadstatusmsg9}',
		'10' : '{lang uploadstatusmsg10}',
		'11' : '{lang uploadstatusmsg11}'
	};
	var form = $('#postform');
	$(document).on('change', '#filedata', function() {
			popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

			uploadsuccess = function(data) {
				if(data == '') {
					popup.open('{lang uploadpicfailed}', 'alert');
				}
				var dataarr = data.split('|');
				if(dataarr[0] == 'DISCUZUPLOAD' && dataarr[2] == 0) {
					popup.close();
					$('#imglist').append('<li><span aid="'+dataarr[3]+'" class="del"><a href="javascript:;"><img src="{STATICURL}image/mobile/images/icon_del.png"></a></span><span class="p_img"><a href="javascript:;"><img style="height:54px;width:54px;" id="aimg_'+dataarr[3]+'" title="'+dataarr[6]+'" src="{$_G[setting][attachurl]}forum/'+dataarr[5]+'" /></a></span><input type="hidden" name="attachnew['+dataarr[3]+'][description]" /></li>');
				} else {
					var sizelimit = '';
					if(dataarr[7] == 'ban') {
						sizelimit = '{lang uploadpicatttypeban}';
					} else if(dataarr[7] == 'perday') {
						sizelimit = '{lang donotcross}'+Math.ceil(dataarr[8]/1024)+'K)';
					} else if(dataarr[7] > 0) {
						sizelimit = '{lang donotcross}'+Math.ceil(dataarr[7]/1024)+'K)';
					}
					popup.open(STATUSMSG[dataarr[2]] + sizelimit, 'alert');
				}
			};

			if(typeof FileReader != 'undefined' && this.files[0]) {//
				
				ext_name = this.files[0].name.split(".");

				if (imgexts.indexOf(ext_name.pop()) > -1)
				{
					
					$.buildfileupload({
						uploadurl:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
						files:this.files,
						uploadformdata:{uid:"$_G[uid]", hash:"<!--{eval echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])}-->"},
						uploadinputname:'Filedata',
						maxfilesize:"$swfconfig[max]",
						success:uploadsuccess,
						error:function() {
							popup.open('{lang uploadpicfailed}', 'alert');
						}
					});
				}
				else{
					file_chk = false;
					popup.open('It is not a picture!','Galert');
				}

			} else {

				$.ajaxfileupload({
					url:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
					data:{uid:"$_G[uid]", hash:"<!--{eval echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])}-->"},
					dataType:'text',
					fileElementId:'filedata',
					success:uploadsuccess,
					error: function() {
						popup.open('{lang uploadpicfailed}', 'alert');
					}
				});

			}
		return file_chk;
	});

	<!--{if 0 && $_G['setting']['mobile']['geoposition']}-->
	geo.getcurrentposition();
	<!--{/if}-->
	$('#postsubmit').on('click', function() {
		var obj = $(this);
		if(obj.attr('disable') == 'true') {
			return false;
		}

		obj.attr('disable', 'true').removeClass('btn_pn_blue').addClass('btn_pn_grey');
		popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

		var postlocation = '';
		if(geo.errmsg === '' && geo.loc) {
			postlocation = geo.longitude + '|' + geo.latitude + '|' + geo.loc;
		}

		$.ajax({
			type:'POST',
			url:form.attr('action') + '&geoloc=' + postlocation + '&handlekey='+form.attr('id')+'&inajax=1',
			data:form.serialize(),
			dataType:'xml'
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			popup.open('{lang networkerror}', 'alert');
		});
		return false;
	});

	$(document).on('click', '.del', function() {
		var obj = $(this);
		$.ajax({
			type:'GET',
			url:'forum.php?mod=ajax&action=deleteattach&inajax=yes&aids[]=' + obj.attr('aid'),
		})
		.success(function(s) {
			obj.parent().remove();
		})
		.error(function() {
			popup.open('{lang networkerror}', 'alert');
		});
		return false;
	});

</script>
