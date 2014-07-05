<script type="text/javascript">
function _updateWait(){

	$.get("<?php echo url_for('@livechat_wait?session=' . $livechat->getToken()) ?>"+'?'+Math.random(), function(data){if (data=='online') location.reload(true);});	
	document.logininfoTick = setTimeout("_updateWait()", 10000);
}
_updateWait();
</script>
<table width=100% height="100%" border=0 cellpadding="0" cellspacing="0">
<tr><td align="center">
<table class="chatcmd">
<tr>
	<td></td>
	<td style="font-size:14px"><?php t('chat_wait')?></td>
</tr>
</table>
</td>
</tr>
</table>

