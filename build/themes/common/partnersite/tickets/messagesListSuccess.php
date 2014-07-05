<?php foreach($messages as $message): ?>

<table cellpadding="0" cellspacing="0" width=100%><tr><td width=60 valign=top>
<img width=60 class="ticket_ava" src="<?php echo solar_image_url($message->from_owner ? 'ava_user.gif' : 'ava_admin.jpg') ?>">
</td><td>
<div class="ticket_sub">
<table cellpadding="0" cellspacing="0" width=100%><tr><td><b><?php t('Name')?>:</b> <?php echo $message->sender ?></td><td align=right><b><?php t('Created at')?>:</b> <?php echo format_date($message->created_at,'f') ?></td></tr></table>
</div>
<div style="height:2px;"> </div>
<div class="ticket_text">
<b><?php t('Message')?>:</b><br><Br>
<?php 
if ($message->image)
	$text = link_to(tr('Image').'_'.$message->id, '@ticket_image?&ticket_id='.$id.'&id='.$message->id, array('target'=>'_blank')); 
else	
	$text = ww($message->message);

echo $text; 
?>
</div>
</td></tr></table>

<div style="height:12px;"> </div>

<?php endforeach ?>
<div align="right" id="more_loader" style="display:none"><a href="javascript:;" class="zbutton" onclick="_moreMessages()"><?php t('Show more')?></a></div>