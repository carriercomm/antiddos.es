<?php $sf_response->addMeta("title", __("Billing Profile - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title profile"><?php t('Profile')?></div>
<table cellpadding="0" cellspacing="0" width="100%" border="0"><tr><td valign=top width=50%>

<div class="title profile_edit"><?php t('Edit profile')?></div>






<div class="content">
<form method="post">
<div class="forarea"><?php t('div_edit_profile')?></div>
<?php echo $profile_form->renderglobalErrors() ?>
<?php if ($profile_form->hasErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>

<div style="padding: 10px; ">

<table width=100% border=0><tr><td>

<tr>
<td align=left><div class="ppm"><?php t('E-mail')?>: <b><?php echo $email_address ?></b></div>
</td>
</tr>


<tr>
  <td align=left>
<div class="ppm"><label><?php t('Account type')?></label><?php echo $profile_form['is_business']->render() ?></div>

<style>
.radio_list { padding: 0px; margin; 0px; }
</style>

    <script>
        $('.radio_list input[type=radio]').change(function(){
            if ($(this).val() == 1){
                $('#company_row').slideDown();
            } else {
                $('#company_row').slideUp();
            }
        })
    </script>

  </td>
</tr>

<tr> 
<td align=left><div class="ppm"><?php t('First name')?></div>
<?php if ($profile_form['first_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $profile_form['first_name']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
<?php echo $profile_form['first_name']->renderError() ?>
</td> 
</tr> 

<tr> 
<td align=left><div class="ppm"><?php t('Last name')?></div>
<?php if ($profile_form['last_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $profile_form['last_name']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
<?php echo $profile_form['last_name']->renderError() ?>
</td> 
</tr>

<tr>
<td align=left>
  <div id="company_row" <?php if (!$profile_form->getObject()->getIsBusiness()) { echo 'style="display:none"';}?>>
    <div class="ppm"><?php t('Company')?></div>
    <?php if ($profile_form['company']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
    <?php echo $profile_form['company']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
    <?php echo $profile_form['company']->renderError() ?>
      <div class="ppm"><?php t('VAT Number')?></div>
    <?php if ($profile_form['vat']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
    <?php echo $profile_form['vat']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
    <?php echo $profile_form['vat']->renderError() ?>
  </div>
</td>
</tr>

<tr> 
<td align=left><div class="ppm"><?php t('Address')?></div>
<?php if ($profile_form['address']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $profile_form['address']->render(array('style' => 'width: 400px;','class'=>$class)) ?>
<?php echo $profile_form['address']->renderError() ?>
</td> 
</tr> 
<tr> 
<td align=left><div class="ppm"><?php t('City')?></div>
<?php if ($profile_form['city']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $profile_form['city']->render(array('style' => 'width: 200px;','class'=>$class)) ?>
<?php echo $profile_form['city']->renderError() ?>
</td> 
</tr> 
<tr> 
<td align=left><div class="ppm"><?php t('Country')?></div>
<?php if ($profile_form['country']->hasError()) $class = 'inputt Required'; else $class = ''?>
<?php echo $profile_form['country']->render(array('style' => 'width: 200px;','class'=>$class)) ?>
<?php echo $profile_form['country']->renderError() ?>
</td> 
</tr> 
<tr> 
<td align=left><div class="ppm"><?php t('Phone')?></div>
<?php if ($profile_form['phone']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $profile_form['phone']->render(array('style' => 'width: 200px;','class'=>$class)) ?>
<?php echo $profile_form['phone']->renderError() ?>
</td> 
</tr> 

<tr><td colspan="2">

<?php echo $profile_form->renderHiddenFields() ?>


<br>
<INPUT TYPE="submit" class="zbutton sub blue"  value="<?php t('Save Profile')?>">
<br><br>
</div>

</td></tr>
</table>
</form>

</div>



</td><td valign=top width="">




<div class="title password"><?php t('Change password')?></div>
<div class="content">
<form method="post" id="password_change" onSubmit="return check_fields($(this).attr('id'));">
<div class="forarea"><?php t('div_new_password')?></div>

<div style="padding: 10px; ">

<table width=100%><tr><td>

<tr> 
<td align=left>
<?php echo $change_pass_form->renderGlobalErrors() ?>
<div class="ppm"><?php t('Old password')?></div>
<?php if ($change_pass_form['old_password']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $change_pass_form['old_password']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
<?php echo $change_pass_form['old_password']->renderError() ?>
</td> 
</tr> 

<tr> 
<td align=left><div class="ppm"><?php t('New password')?></div>
<?php if ($change_pass_form['new_password']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $change_pass_form['new_password']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
<?php echo $change_pass_form['new_password']->renderError() ?>
</td> 
</tr> 

<tr> 
<td align=left><div class="ppm"><?php t('Confirm New password')?></div>
<?php if ($change_pass_form['new_password_confirm']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<?php echo $change_pass_form['new_password_confirm']->render(array('style' => 'width: 260px;','class'=>$class)) ?>
<?php echo $change_pass_form['new_password_confirm']->renderError() ?>
</td> 
</tr> 

<tr><td colspan="2">

<?php echo $change_pass_form->renderHiddenFields() ?>


<br>
<INPUT TYPE="submit" class="zbutton sub blue"  value="<?php t('Save Password')?>">
<br><br>

</div>


</td></tr>
</table>
</form>
</div>
</td></tr>
</table>
</div>

<script language="javascript">

var errors_messages = {
	'empty':'<img src="/images/partner/flag_red.png" style="display: inline;" alt="Required" border="0" height="16" width="16">',
	'length':'<?php t('%max_length% characters min', array('%max_length%'=>6))?>',
	'not_equal':'<?php t('Passwords are not equal')?>'
};

var correct;

function check_fields(elem)
{
	correct = true;
	
	clearErrors(elem);
	
	if ($('#changepass_old_password').val()=='') setError('changepass_old_password', errors_messages['empty']);
	if ($('#changepass_new_password').val()=='') setError('changepass_new_password', errors_messages['empty']);
	else
	{
		if ($('#changepass_new_password').val().length < 6) setError('changepass_new_password', errors_messages['length'].replace('%s',$('#changepass_new_password').val()));
		else
		{
			if ($('#changepass_new_password_confirm').val()=='') setError('changepass_new_password_confirm', errors_messages['empty']);
			else
				if ($('#changepass_new_password_confirm').val()!=$('#changepass_new_password').val()) setError('changepass_new_password', errors_messages['not_equal']);
		}
	}	
		
	return correct;
}

function clearErrors(id)
{
	$('#'+id+' .Required').removeClass('Required');
	$('#'+id+' .error').empty();
}	
	
function setError(id, text)
{
	$('#'+id+'_error').empty();
	$('#'+id).after('<span class="error" id="'+id+'_error">'+text+'</span>');
	$('#'+id).addClass('Required');
	
	correct = false;
}

</script>
