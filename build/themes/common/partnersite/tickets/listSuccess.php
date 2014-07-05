<?php $sf_response->addMeta("title", __("24/7 Support Desk - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title support"><?php t('Tickets')?></div>
<div class="content">

<div style="padding:10px 14px;"><?php t('Your tickets')?></div> 

<br>

<table width=100% border=0 cellpadding="2" cellspacing="2">
<tr>
  <td align=center width=70 class="ticket_sub i1"><b><?php t('Ticket ID')?></b></td>
  <td align=left class="ticket_sub i2"><b><?php t('Subject')?></b></td>
	<td align=left width=120 class="ticket_sub i2"><b><?php t('Department')?></b></td>
  <td align=left width=120 class="ticket_sub i2"><b><?php t('Date')?></b></td>
  <td align=left width=90 class="ticket_sub i3"><b><?php t('Status')?></b></td>
  <td align=left>&nbsp;</td>
</tr>

 	
<?php foreach($tickets as $ticket): ?>
<tr>
  <td align=center class="ticket_list"><font class="ticket_id"><?php echo $ticket->id ?></font></td>
  <td class="ticket_list"><?php echo link_to(ww($ticket->subject), '@ticket_show?id=' . $ticket->id, 'class="facefont"') ?></td>
	<td class="ticket_list"><?php t(solar_department($ticket->department)) ?></td>
  <td class="ticket_list"><?php echo format_date($ticket->created_at,'D') ?></td>

  <td class="ticket_list"><font class="status <?php echo ticket_status($ticket->status) ?>"><?php t(ticket_status($ticket->status)) ?></font></td>
  <td width=100 class="ticket_list" align=center nowrap><?php echo link_to(__('View ticket',array(),'partner_panel'), '@ticket_show?id='. $ticket->id,'class="zbutton blue"') ?></td>
</tr>
<?php endforeach ?>


</table>


</div>

<div style="padding: 0px 30px 30px;" align="right">
<a href="<?php echo url_for('@ticket_new') ?>" class="zbutton green"><?php t('ticket_create')?></a> 
</div>

<div style="padding: 8px 30px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>
