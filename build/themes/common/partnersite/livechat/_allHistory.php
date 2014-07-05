<?php use_helper('I18N', 'Date') ?>
<?php foreach($livechat->getMessages() as $message): ?>

<?php 
if ($message['image'])
	$text = tr('Image').'_'.$message['id']; 
else	
	$text = chop(str_replace(array(';', "\n"),array(',',' '),$message['message']));
?>

<div class="data">
<div class="sender"><?php echo $message['sender']."\t" ?></div>
<div class="message"><?php echo $text."\t" ?></div>
<div class="date"><?php echo format_date($message['created_at'],'f')."\r\n"; ?></div>
</div>


<?php endforeach ?>