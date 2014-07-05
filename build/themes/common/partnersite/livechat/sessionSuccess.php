<?php use_helper('I18N', 'Date') ?>

<script type="text/javascript">

var current = 0;
var wait_operator = <?php $o = $livechat->getOperator(); echo $o['id'] ?  0 : 1?>;

function _updateTalking(){

	$.get("<?php echo url_for('@livechat_history?session=' . $livechat->getToken()) ?>"+'?'+Math.random(), function(data){
		_loadData(data);
	});	
			
	setTimeout("_updateTalking()", 4000);
}

function _sendEmail(){

	$.get("<?php echo url_for('@livechat_email?session=' . $livechat->getToken()) ?>"+'?'+Math.random(), function(data){alert('<?php echo __('chat_sent_to',array('%mail%'=>$livechat->getEmail()), 'partner_panel')?>')});
}

function _loadData(data)
{	
	if (data)
	{
		var s = data.split("[%%%]");
		for(i=s.length-1;i>=0;i--)
		{	
			message = s[i].split("[%%]");
			id = parseInt(message[0]);
			
			if (id == 0){			

				$('#status').html(message[1]);
				
				if (wait_operator){	
						
					if (message[2]){
					
						$('#full_name').html(message[2]);
						$('#row_welcome').html('<?php t('Hello, Can I help you?') ?>');
						$('#avatar_logo').attr('src', 'data:image/jpg;base64,'+message[3]);
						
						$('#chat').append('<audio id="event_ding"><source src="/images/partner/chat.wav"></source></audio>');
						$("#event_ding")[0].play();						
						
						wait_operator = 0;
					}	
					else
					{
						$('#status').html('<?php t('Wait operator') ?>');
						$('#row_welcome').html('<?php t('chat_phrase_1')?>');				
						$('#avatar_logo').attr('src', '/images/partner/def_admin.jpg');
					}	
				}
				else				
				{
					$('#full_name').html(message[2]);
					$('#row_welcome').html('<?php t('Hello, Can I help you?') ?>');				
					$('#avatar_logo').attr('src', 'data:image/jpg;base64,'+message[3]);					
				}
			}	
									
			if (id>current)
			{	
				current = id;
				if (message[4]) message[4] = 'admin';
				else 
					message[4] = 'user';
					
				_template(message[1],message[2],message[3],message[4]);
			}	
		}	
	}
}

function _template(from,data,message,$owner)
{	
	$('#chat').append('<div class="chat_top '+$owner+'1 <?php if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) echo 'ie';else echo 'fx'?>" style=""><table width=100% border=0  cellpadding="0" cellspacing="10"><tr><td><b>'+from+'</b></td><td align=right>'+data+'</td></tr></table></div><div class="chat_text '+$owner+'2 <?php if(preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) echo 'ie';else echo 'fx'?>" style=""><table width=100% border=0  cellpadding="0" cellspacing="10"><tr><td>'+message+'</td></tr></table></div>');
	
	$('#chat').animate({scrollTop: $('#chat')[0].scrollHeight});
}

$(document).ready(function(){
  _updateTalking();
});

function chat_leave(){
	$.get("<?php echo url_for('@livechat_leave?session=' . $livechat->getToken()) ?>"+'?'+Math.random(), function(data){parent.$.fancybox.close()});	
}

function chat_close(){
	$.get("<?php echo url_for('@livechat_close?session=' . $livechat->getToken()) ?>"+'?'+Math.random(), function(data){parent.$.fancybox.close()});	
}
</script>


<div id="chat_layout">


<table width=100% border=0 cellpadding="0" cellspacing="0" >
  <tr>
    <td colspan=2>
        <img src="<?php echo solar_image_url('space.gif') ?>" width=640 height=1 border=0 style="visibility: hidden;">
    </td>
  </tr>
  <tr>
    <td><div class="chatsub"><?php if (strlen($livechat->getSubject())>20) echo substr($livechat->getSubject(), 0,20).'...'; else echo $livechat->getSubject() ?></div></td>
    <td>
      <div align=right style="padding: 10px 10px 10px 10px;">

      <table cellpadding="4" cellspacing="0" border=0 id="buttons">
        <tr>
          <td>
            <a href="javascript:;" onClick="window.print();"><img src="<?php echo solar_image_url('icon_print.png') ?>" alt="Print" border=0></a>
            <a href="javascript:;" onClick="_sendEmail();"><img src="<?php echo solar_image_url('icon-email.png') ?>" alt="" border=0></a>
          </td>
          <td>
            <a href="javascript:;" onClick="document.location='<?php echo url_for('@livechat_all?session=' . $livechat->getToken()) ?>';" class="zbutton"><?php t('Get all history')?></a>
            <?php if ($livechat->getActive()):?>
              <a href="javascript:;" onClick="parent.$.fancybox.close()" class="zbutton"><?php t('Exit chat')?></a>
              <a href="javascript:;" onClick="if (confirm('<?php t('alert_chat_close') ?>')) chat_close();" class="zbutton"><?php t('Close chat')?></a>
            <?php else:?>
              <a href="javascript:;" onClick="chat_close();" class="zbutton"><?php t('Exit chat')?></a>
            <?php endif?>
          </td>
        </tr>
      </table>

      </div>
    </td>
  </tr>
</table>

<table width=100% border=0  cellpadding="0" cellspacing="0">
  <tr>
    <td colspan=2>
      <img src="<?php echo solar_image_url('space.gif') ?>" width=640 height=1 border=0 style="visibility: hidden;">
    </td>
  </tr>
  <tr>
    <td valign=top width="*" style="height: 375px;">

      <div class="<?php if ($livechat->getActive()==0) echo 'chat_close '?>chatbox" style="">
        <div class="<?php if ($livechat->getActive()==0) echo 'chat_close '?>chatboxtext" align=center id="chat">
					&nbsp;
          <div class="chat_top admin1 <?php if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) echo 'ie';else echo 'fx'?>" style="">
						<table width=100% border=0  cellpadding="0" cellspacing="10">
							<tr><td><b><?php t('Welcome to chat');?></b></td><td align=right></td></tr>
						</table>
					</div>
					<div class="chat_text admin2 <?php if(preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) echo 'ie';else echo 'fx'?>" style="">
						<table width=100% border=0  cellpadding="0" cellspacing="10">
							<tr><td id="row_welcome"></td></tr>
						</table>
					</div>

        </div>
      </div>
      <img src="<?php echo solar_image_url('space.gif') ?>" width=450 height=1 border=0 style="visibility: hidden;"><br>
    </td>
    <td width=150 valign=top id="avatar">

      <div class="chatbox" style="padding: 10px; margin-left: 0px;">
      
      <img width=140 height=180 id="avatar_logo">

      </div>

      <div class="chatsub" style="font-size: 16px;"><b><span id="full_name"><?php echo $operator['full_name'] ?></span></b></div>
      <div class="chatsub">
      <div><?php t('Status')?> <span id="status"><?php t('wait')?></span></div><br>
      <?php if($operator['age']): ?>
        <?php t('chat_old', array('%years%'=>$operator['age'])) ?> <br>
      <?php endif ?>
      <?php t('Support service') ?></div>
    </td>
  </tr>
  <tr>
    <td colspan="2" height="60px">
      <?php if ($livechat->getActive()):?>
        <form method="post" id="reply" onsubmit="jQuery.ajax({type:'POST',dataType:'html',data:jQuery(this).serialize(),complete:function(XMLHttpRequest, textStatus){$('#loader').hide();$('#send_button').show();}, beforeSend: function(data){$('#livechat_message').val('');$('#send_button').hide();$('#loader').show();}, url:'<?php echo url_for('@livechat_reply?session=' . $livechat->getToken()) ?>'}); return false;">
          <div class="chatcmd">
            <B><font class="chat" style="margin-left: 10px;"><?php echo $livechat->getName() ?>:</font></b><Br>
            <table cellpadding="0" cellspacing="0" border="0" width=<?php if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) echo '95%';else echo '100%'?>>
              <tr>
                <td>
                  <?php echo $form->renderGlobalErrors() ?>
                  <?php echo $form['message']->render(array('style'=>'height:80px;')) ?>
                  <div style="height: 6px; font-size: 0;"></div>
                  <div align=right>
                    <input type="submit" value="<?php t('Send message')?>" class="zbutton blue sub" id="send_button" style="width:auto;">
                    <img src="/images/partner/loader.gif" width="28" style="display:none" id="loader">
                  </div>
                  <?php echo $form->renderHiddenFields() ?>
                </td>
              </tr>
            </table>
          </div>
        </form>
      <?php else:?>
      <?php endif?>

    </td>
  </tr>
</table>


</div>
<div style="clear: both;"></div>