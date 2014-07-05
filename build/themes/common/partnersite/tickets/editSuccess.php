<?php $sf_response->addMeta("title", __("Edit Support Ticket - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title support"><?php t('Ticket ID')?>: <b><?php echo $ticket->id ?></b></div>
<div class="content">


<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td>
<td><?php t('Edit ticket')?></td></tr></table>
</div> 


<form method="post">
<?php echo $form->renderGlobalErrors() ?>


<table width=100% border=0 cellpadding="2" cellspacing="4">
<tr> 
  <td><?php echo $form['subject']->renderError() ?>

<div class="forarea">
<div class="ppm"><b><?php t('Subject')?> :</b></div>
<?php echo $form['subject']->render(array('class'=>'inputt', 'style'=>'width:500px;')) ?>
<?php echo $form['description']->renderError() ?>
<div class="ppm"><b><?php t('Description')?> :</b></div>
<?php echo $form['description']->render(array('style'=>'height:300px;')) ?>
</div>

<?php echo $form->renderHiddenFields() ?>


<div style="height:14px;">  </div>

<table cellpadding="0" cellspacing="0" width=100%><tr><Td>
<div align=left style="padding: 0px 10px;"><a href="<?php echo url_for('@ticket_list') ?>" class="zbutton blue"><?php t('ticket_return')?></a></div>
</td><td align=right>
<div align=right style="padding: 0px 10px;"><input type=submit class="zbutton green sub" value="<?php t('Save ticket')?>"></div>
</td></tr></table>

</td></tr>
</table>
</form>




</div>
