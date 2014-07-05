<div class="title support"><?php t('Tickets')?></div>
<div class="content">


<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td><td><?php t('ticket_no')?> </td></tr></table>
</div> 

<br>

<div class="miniblock"> 

<?php t('tickets_questions')?>

</div>

<div style="padding: 20px 10px 10px 10px;" align="Left">
<a href="<?php echo url_for('@ticket_new') ?>" class="zbutton green"><?php t('New ticket')?></a> 
</div>

</div>