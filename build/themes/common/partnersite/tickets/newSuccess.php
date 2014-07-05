<?php $sf_response->addMeta("title", __("New Support Ticket - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title support"><?php t('New Ticket')?></div>
<div class="content">


<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td><td><?php t('ticket_create')?></td></tr></table>
</div> 


<div style="padding: 10px;"><?php t('ticket_new_text')?></div>


<div>
<form method="post">
<table width=100% border=0 cellpadding="2" cellspacing="4">
    <tr>
        <td>
          <div class="forarea">
              <select id="ticket_type" name="ticket_type">
                  <option value="ticket_issue"><?php t('Issue')?></option>
                  <option value="ticket"><?php t('Question')?></option>
                  <option value="ticket_other"><?php t('Other')?></option>
              </select>
          </div>
         </td>
    </tr>
</table>
<div id="form_ticket_other" style="display: none;" class="forms">
<?php echo $ticket_other_form->renderGlobalErrors() ?>


<table width=100% border=0 cellpadding="2" cellspacing="4">
<tr>
  <td>

<div class="forarea">
<div class="ppm"><b><?php t('Subject')?> :</b></div>
<?php echo $ticket_other_form['subject']->render(array('class'=>'inputt', 'style'=>'width:600px;')) ?>
<?php echo $ticket_other_form['subject']->renderError() ?>

<div class="ppm"><b><?php t('Department')?> :</b></div>
<?php echo $ticket_other_form['department']->render(array('class'=>'', 'style'=>'width:400px;')) ?>
<?php echo $ticket_other_form['department']->renderError() ?>


<div class="ppm"><b><?php t('Description')?> :</b></div>

<?php echo $ticket_other_form['description']->render(array('style'=>"width:100%;height: 300px;")) ?>
<?php echo $ticket_other_form['description']->renderError() ?>
</div>

<?php echo $ticket_other_form->renderHiddenFields() ?>

</td></tr>
</table>
</div>

<div id="form_ticket" style="display: none;" class="forms">
<?php echo $ticket_form->renderGlobalErrors() ?>


<table width=100% border=0 cellpadding="2" cellspacing="4">
<tr>
  <td>

<div class="forarea">
<div class="ppm"><b><?php t('Subject')?> :</b></div>
<?php echo $ticket_form['subject']->render(array('class'=>'inputt', 'style'=>'width:600px;')) ?>
<?php echo $ticket_form['subject']->renderError() ?>

<div class="ppm"><b><?php t('Department')?> :</b></div>
<?php echo $ticket_form['department']->render(array('class'=>'', 'style'=>'width:400px;')) ?>
<?php echo $ticket_form['department']->renderError() ?>


<div class="ppm"><b><?php t('Description')?> :</b></div>

<?php echo $ticket_form['description']->render(array('style'=>"width:100%;height: 300px;")) ?>
<?php echo $ticket_form['description']->renderError() ?>
</div>

<?php echo $ticket_form->renderHiddenFields() ?>
</td></tr></table>
</div>

<div id="form_ticket_issue" class="forms">
<?php echo $ticket_issue_form->renderGlobalErrors() ?>


<table width=100% border=0 cellpadding="2" cellspacing="4">
<tr>
  <td>

<div class="forarea">
<div class="ppm"><b><?php t('Subject')?> :</b></div>
<?php echo $ticket_issue_form['subject']->render(array('class'=>'inputt', 'style'=>'width:600px;')) ?>
<?php echo $ticket_issue_form['subject']->renderError() ?>

<div class="ppm"><b><?php t('Department')?> :</b></div>
<?php echo $ticket_issue_form['department']->render(array('class'=>'', 'style'=>'width:400px;')) ?>
<?php echo $ticket_issue_form['department']->renderError() ?>

<div class="ppm"><b><?php t('Order')?> :</b></div>
<?php echo $ticket_issue_form['order']->render(array('class'=>'', 'style'=>'width:400px;')) ?>
<?php echo $ticket_issue_form['order']->renderError() ?>

<div class="ppm"><b><?php t('Description')?> :</b></div>

<?php echo $ticket_issue_form['description']->render(array('style'=>"width:100%;height: 200px;")) ?>
<?php echo $ticket_issue_form['description']->renderError() ?>


<div class="ppm"><b><?php t('Symptoms')?> :</b></div>

<?php echo $ticket_issue_form['symptoms']->render(array('style'=>"width:100%; height: 100px;")) ?>
<?php echo $ticket_issue_form['symptoms']->renderError() ?>



<div class="ppm"><b><?php t('IP addresses')?> :</b></div>

<?php echo $ticket_issue_form['ip_addresses']->render(array('style'=>"width:100%;height: 100px;")) ?>
<?php echo $ticket_issue_form['ip_addresses']->renderError() ?>


<div class="ppm"><b><?php t('Incident time')?> :</b></div>

<?php echo $ticket_issue_form['time']->render(array('class'=>'', 'style'=>'width:45px;')) ?>
<?php echo $ticket_issue_form['time']->renderError() ?>


<br><br>
<div class="ppm"><b><?php t('Is the problem currently active?')?> :</b></div>

<style>
#hhii ul { margin: 0px; padding: 0px; }
</style>

<div id="hhii">
  <?php echo $ticket_issue_form['active']->render() ?>
  <?php echo $ticket_issue_form['time']->renderError() ?>
</div>


</div>
</td></tr></table>
<?php echo $ticket_issue_form->renderHiddenFields() ?>

</div>



<div style="height:14px;">  </div>

<table cellpadding="0" cellspacing="0" width=100%><tr><Td>
<div align=left style="padding: 0px 10px;"><a href="<?php echo url_for('@ticket_list') ?>" class="zbutton blue"><?php t('ticket_return')?></a></div>
</td><td align=right>
<div align=right style="padding: 0px 10px;"><input type=submit class="zbutton green sub" value="<?php t('Create ticket')?>" style="width:110px;"></div>
</td></tr></table>
</form>

</div>
</div>
<script>
$(document).ready(function() {

	$('#ticket_type').change(function(){
		var target = $('#form_'+$(this).val());
		
		if (target.is(':hidden')) {
			$('div.forms:visible').hide();
			target.show();
		}
	});

	$('#ticket_type').val('<?php echo $type?>');
	
	$('#ticket_type').change();		
});
</script>
