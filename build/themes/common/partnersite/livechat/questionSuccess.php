<table width=100%  cellpadding="0" cellspacing="0"><tr>
<td>
<div class="chatsub"><?php echo $livechat->getSubject() ?></div>
</td><td width=100>
<div align=right style="padding: 14px 10px 14px 0px;"><a href="javascript:;" onClick="parent.$.fancybox.close();" class="zbutton"><?php t('Close')?></a> </div>
</td></tr></table>

<div class="chatcmd">
<?php if ($question):?>
<p>
<font class="standard">
<?php t('chat_send', array('%click_here%' => '<a href="' . url_for('@livechat_leave?session=' . $livechat->getToken()) . '">click here</a>'))?>
</font>
</p>
<?php else:?>
<font class="standard">
<?php t('chat_operator_offline')?>
</font>
</div>
<br>
<div class="chatcmd">
<form method="post" style="margin-top: 0; margin-bottom: 0;">

<div class="ppm"><font class="standard" style="padding: 3px 3px;"><b><?php echo $livechat->getName() ?>:</b></font></div>


<?php echo $form->renderGlobalErrors() ?>
<?php echo $form['message']->render(array('style' => 'height: 330px; width: 100%;')) ?><?php echo $form['message']->renderError() ?>
<div style="height: 6px; font-size: 0px;"></div>
<input type="submit" value="<?php t('Send message')?>" class="zbutton blue" style="width: auto; height: 26px;">
<?php echo $form->renderHiddenFields() ?>
<br>
</div>
</form>
<?php endif?>
