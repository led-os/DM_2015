<!--{eval $_G[forum_thread][special] = 0;}-->
<!-- main postlist start -->
	<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
   <div class="plc cl">
       <div class="display pi">
   
           <div class="mv_headin">
               <dl class="cl">
                   <dt><img src="<!--{avatar($post[authorid], small, true)}-->" /></dt>
                   <dd class="dd1">
                       <div class="s1 cl">
                           <span class="ss1">
					       <!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
							   <a href="home.php?mod=space&uid=$post[authorid]">$post[author]</a>
						   <!--{else}-->
							   <!--{if !$post['authorid']}-->
							   <a href="javascript:;">{lang guest} <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
							   <!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
							   <!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
							   <!--{else}-->
							   $post[author] <em>{lang member_deleted}</em>
							   <!--{/if}-->
						   <!--{/if}-->
                           </span>
                           <span class="ss2{if $post[stars]<8} ss21{/if}">{$post[stars]}</span>
                           <!--{if $post['gender'] == 1}-->
                           <span class="ss3 none">male</span>
                           <!--{elseif $post['gender'] == 2}-->
                           <span class="ss3 ss4">femal</span>
                           <!--{/if}-->
                           <!--{if $_G['forum']['ismoderator']}-->
                           <span class="ss5">administrator</span>
                           <!--{/if}-->
                           <!--{if $post['authorid'] == $_G[forum_thread][authorid]}-->
                           <span class="ss6">Thread Starter</span>
                           <!--{/if}-->
                       </div>
                       <div class="s2">
                           <!--{if $post[first]}-->
                           <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="favbtn" >
                           <!--{/if}-->
					       <!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
						    <!--{elseif $post[number] == -1}-->
							{lang recommend_post}
						    <!--{else}-->
							#{$post[number]}
						    <!--{/if}-->   
                            <!--{if $post[first]}--> 
                            </a>
                            <!--{/if}-->                   
                        </div>
                   </dd>
                   <dd class="dd2">{$post[dateline]}</dd>
               </dl>
           </div>
  
			<div class="message">
                	<!--{if $post['warned']}-->
                        <span class="grey quote">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="grey quote">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="grey quote">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="grey quote">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->

			<!--{template forum/viewthread_pay}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                            <div class="grey quote">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="grey quote">{lang admin_message_single_banned}</div>
                        <!--{/if}-->

		    <!--{else}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow}-->
                        	<!--{if $threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']}-->
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                    <div class="box_ex2 viewsort">
                                        <h4>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h4>
                                    <!--{loop $threadsortshow['optionlist'] $option}-->
                                        <!--{if $option['type'] != 'info'}-->
                                            $option[title]: <!--{if $option['value']}-->$option[value] $option[unit]<!--{else}--><span class="xg1">--</span><!--{/if}--><br />
                                        <!--{/if}-->
                                    <!--{/loop}-->
                                    </div>
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
                            <!--{if !$_G[forum_thread][special]}-->
                                $post[message]
                            <!--{elseif $_G[forum_thread][special] == 1}-->
                                <!--{template forum/viewthread_poll}-->
                            <!--{elseif $_G[forum_thread][special] == 2}-->
                                <!--{template forum/viewthread_trade}-->
                            <!--{elseif $_G[forum_thread][special] == 3}-->
                                <!--{template forum/viewthread_reward}-->
                            <!--{elseif $_G[forum_thread][special] == 4}-->
                                <!--{template forum/viewthread_activity}-->
                            <!--{elseif $_G[forum_thread][special] == 5}-->
                                <!--{template forum/viewthread_debate}-->
                            <!--{elseif $threadplughtml}-->
                                $threadplughtml
                                $post[message]
                            <!--{else}-->
                            	$post[message]
                            <!--{/if}-->
                        <!--{else}-->
                            $post[message]
                        <!--{/if}-->
                        
					<!--{/if}-->
			</div>
			<span  class="translate" onclick="translateFunc($post[pid])"><font color="red">see translation(en)</font></span>
                               <div class="translate_$post[pid]" style="display:none;"></div>
			<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
			<!--{if $post['attachment']}-->
               <div class="grey quote">
               {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
               </div>
            <!--{elseif $post['imagelist'] || $post['attachlist']}-->
               <!--{if $post['imagelist']}-->
				<!--{if count($post['imagelist']) == 1}-->
				<ul class="img_one">
						{echo showattach($post, 1)}
				</ul> 
				<!--{else}-->
				<ul class="img_list cl vm">
						{echo showattach($post, 1)}
				</ul> 
				<!--{/if}-->
				<!--{/if}-->
                <!--{if $post['attachlist']}-->
				<ul>{echo showattach($post)}</ul>
				<!--{/if}-->
			<!--{/if}-->
			<!--{/if}-->
       </div>
   </div>
<!-- main postlist end -->
