<?php use_helper('I18N', 'Date') ?>
<?php if(!is_string($livechat->getMessages()) && count($livechat->getMessages())): ?>
<?php foreach($livechat->getMessages() as $message): ?>
<?php 
if ($message['image'])
	$text = link_to(tr('Image').'_'.$message['id'], '@livechat_image?session=' . $livechat->getToken().'&id='.$message['id'], array('target'=>'_blank')); 
else	
	$text = $message['message'];
?>
<?php echo $message['id'].'[%%]'.$message['sender'].'[%%]'.format_date($message['created_at'],'f').'[%%]'.nl2br($text).'[%%]'.$message['operator']."[%%%]"?>
<?php endforeach ?>
<?php endif?>
<?php if($livechat->getOnline()): ?>
<?php echo '0[%%]<font color="#38FF8E">'.tr('Online').'</font>'?>
<?php else:?>
<?php echo '0[%%]<font color="#FF8C8C">'.tr('Offline').'</font>'?>
<?php endif?>
<?php if($operator = $livechat->getOperator()): ?>
<?php echo '[%%]'.$operator['full_name'] ?>
<?php echo '[%%]'.$operator['avatar'] ?>
<?php endif?>
<?php echo '[%%%]'?>
