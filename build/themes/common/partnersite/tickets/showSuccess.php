<script>
var count_more = 5;
var count = count_more;
var count_messages = <?php echo $ticket->getMessagesCount()+1?>;

function _getMessages(){

	$.get("<?php echo url_for('@message_list?id=' . $ticket->getId()) ?>"+'?'+Math.random()+"&count="+count, function(data)
	{
		$('#messages').html(data);
		if (count_messages>count) $('#more_loader').show();
	});	
}

function _updateTalking(){

	_getMessages();	
	document.logininfoTick = setTimeout("_updateTalking()", 20000);
}

function _moreMessages(){

	count = count+count_more;
	$('#more_loader').html('<img src="<?php echo solar_image_url('loader.gif') ?>">');
	_getMessages();
}

$(document).ready(function () {
	
	$("#reply_popup").fancybox({'width': 670,'height': 300,'margin':15,'padding':1,'showCloseButton':true, 'scrolling': 'no', 'hideOnOverlayClick':false});
	
	_updateTalking();
});
</script>
<?php $sf_response->addMeta("title", __("View Support Ticket - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title support"><?php t('Ticket')?></div>
<div class="content">


<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td>
<td><?php t('Ticket ID')?>: <font class="ticket_id"><b><?php echo $ticket->id ?></b></font></td></tr></table>
</div> 
<br>


<div style="" class="ticket_sub">
<table cellpadding="0" cellspacing="0" width=100%><tr><td><b><?php t('Subject')?>:</b>  <?php echo ww($ticket->subject) ?> <span style="margin-left: 10px;" class="status <?php echo $ticket->status?>"><?php t(ticket_status($ticket->status)) ?></span></td><td align=right><b><?php t('Created at')?>:</b> <?php echo format_date($ticket->created_at,'f') ?></td></tr></table>
</div>
<div style="height:2px;"> </div>

<div style="" class="ticket_text">
<b><?php t('Description')?>:</b> <br><br>
<?php echo ww($ticket->description) ?>
</div>

<div style="padding: 20px 10px;" align=right>
<?php echo link_to(__('ticket_return',array(),'partner_panel'), '@ticket_list','class="zbutton blue"') ?> 
<?php if($ticket->status != 'closed')
{
	echo link_to(__('Reply',array(),'partner_panel'), '@ticket_reply?id='.$ticket->getId(),array('class'=>"iframe zbutton blue", 'id'=>'reply_popup', 'style'=>"margin-left: 10px;"));
	echo link_to(__('Close ticket',array(),'partner_panel'), '@ticket_close?id=' . $ticket->id,'class="zbutton"  style="margin-left: 10px;"');
}	
?>
</div>
<div id="messages"><?php if ($ticket->getMessagesCount()>0):?><center><img src="<?php echo solar_image_url('loading.gif') ?>"></center><?php endif?></div>

</div>
<img src="<?php echo solar_image_url('loader.gif') ?>" style="display:none">