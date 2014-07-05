<div class="title support"><?php t('Ticket')?></div>
<div class="content">



<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td>
<td><?php t('Ticket ID')?>: <font class="ticket_id"><b><?php echo $ticket->id ?></b></font></td></tr></table>
</div> 
<br>


<div style="" class="ticket_sub">
<table cellpadding="0" cellspacing="0" width=100%><tr><td><b><?php t('Subject')?>:</b>  <?php echo ww($ticket->subject) ?> [<?php echo ticket_status($ticket->status) ?>]</td><td align=right><b><?php t('Created at')?>:</b> <?php echo format_date($ticket->created_at,'f') ?></td></tr></table>
</div>
<div style="height:2px;"> </div>

<div style="" class="ticket_text">
<b><?php t('Description')?>:</b> <br><br>
<?php echo ww($ticket->description) ?>
</div>

<div style="padding: 20px 10px;" align=right>
<?php echo link_to(__('ticket_return',array(),'partner_panel'), '@ticket_show?id=' . $ticket->id,'class="zbutton blue"') ?>
<?php if($ticket->status != 'closed') echo link_to(__('Close ticket',array(),'partner_panel'), '@ticket_close?id=' . $ticket->id,'class="zbutton"  style="margin-left: 10px;"') ?>
</div>
</div>

<div class="title support"><?php t('Edit Reply')?></div>
<div class="content">

<div>
<form method="post">
<?php echo $form->renderGlobalErrors() ?>


<table width=100% border=0 cellpadding="2" cellspacing="4">
<tr> 
  <td>

<div class="forarea">
<div class="ppm"><b><?php t('Reply')?> :</b></div>
<?php echo $form['message']->render(array('style' => 'height: 300px; width: 100%;', 'class' => 'area1')) ?>
<?php echo $form['message']->renderError() ?>

<?php echo $form->renderHiddenFields() ?>


<div style="height:14px; font-size: 0px;">  </div>

<table cellpadding="0" cellspacing="0" width=100%><tr><Td>
</td><td align=right>
<div align=right style="padding: 0px 0px;"><input type=submit class="zbutton green sub" value="<?php t('Save')?>" style="width:auto;"></div>
</td></tr></table>

</td></tr>
</table>
</form>
</div>



</div>

