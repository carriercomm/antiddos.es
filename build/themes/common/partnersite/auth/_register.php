<form method="post">
<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">
<?php if ($form->hasErrors()&&!$form->renderGlobalErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>

<div style="padding:10px 30px 10px 10px;">


<table width=600 border=0>
<font style="font-size:16px"><?php echo $form->renderGlobalErrors() ?></font>


<tr>
    <td>

<div class="ppm"><label><?php t('Account type')?></label><?php echo $form['is_business']->render() ?></div>

<style>
.radio_list { padding: 0px; margin; 0px; }
</style>

<script>
           $('#register_is_business_0').attr('checked',true);
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


  <td align=left><div class="ppm"><?php t('Username')?></div> 
  <?php if ($form['username']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['username']->render(array('style' => 'width: 200px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['username']->renderError() ?></td></tr></table>
<div class="ppms"><?php t('Examples: JSmith, John.Smith')?></div> 
</td> 

</tr>

<tr> 
  <td align=left><div class="ppm"><?php t('First name')?></div> 
  <?php if ($form['first_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table  border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['first_name']->render(array('style' => 'width: 300px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['first_name']->renderError() ?></td></tr></table>
</td> 
</tr> 
<tr> 
  <td align=left><div class="ppm"><?php t('Last name')?></div> 
  <?php if ($form['last_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['last_name']->render(array('style' => 'width: 300px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['last_name']->renderError() ?></td></tr></table>
  </td> 
</tr>
<tr>
    <td align=left>
      <div id="company_row" style="display: none;">
        <div class="ppm"><?php t('Company')?></div>
        <?php if ($form['company']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
        <table  border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['company']->render(array('style' => 'width: 300px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['company']->renderError() ?></td></tr></table>
        <div class="ppm"><?php t('VAT Number')?></div>
        <?php if ($form['vat']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
        <table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['vat']->render(array('style' => 'width: 300px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['vat']->renderError() ?></td></tr></table>
      </div>
    </td>
</tr>
</table>
<br><br>
<hr class="hrline">
<br>
<table width=450 border=0>
<tr> 
  <td align=left><div class="ppm"><?php t('E-mail')?></div>
  <?php if ($form['email_address']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['email_address']->render(array('style' => 'width: 360px;','class'=>$class)) ?></td><td width=5></td><td> <?php echo $form['email_address']->renderError() ?></td></tr></table>
<div class="ppms"><?php t('Your legal e-mail address')?></div> 
</td> 
</tr> 
</table>
<br><br>
<hr class="hrline">
<br>
<table width=400 border=0>



<tr> 
  <td align=left><div class="ppm"><?php t('Password')?></div>
  <?php if ($form['password']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['password']->render(array('style' => 'width: 240px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['password']->renderError() ?></td></tr></table>
<div class="ppms"><?php t('reg_min_pass')?> 	</div> 
</td> 
</tr> 
<tr> 
  <td align=left><div class="ppm"><?php t('Password confirm')?></div>
    <?php if ($form['password_confirm']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['password_confirm']->render(array('style' => 'width: 240px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['password_confirm']->renderError() ?></td></tr></table>
  </td> 
</tr> 

</table>
<br><br>
<hr class="hrline">
<br>
<table width=540 border=0>


<tr> 
  <td align=left><div class="ppm"><?php t('Country')?></div> 
  <?php if ($form['country']->hasError()) $class = 'inputt Required'; else $class = ''?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['country']->render(array('style' => 'width: 250px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['country']->renderError() ?></td></tr></table>
  </td> 
</tr> 
<tr> 
  <td align=left><div class="ppm"><?php t('City')?></div> 
  <?php if ($form['city']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['city']->render(array('style' => 'width: 250px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['city']->renderError() ?></td></tr></table>
  </td> 
</tr> 
<tr> 
  <td align=left><div class="ppm"><?php t('Address')?></div> 
  <?php if ($form['address']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['address']->render(array('style' => 'width: 480px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['address']->renderError() ?></td></tr></table> 
  </td> 
</tr> 
<tr> 
  <td align=left><div class="ppm"><?php t('Phone')?></div> 
  <?php if ($form['phone']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['phone']->render(array('style' => 'width: 200px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['phone']->renderError() ?></td></tr></table>
<div class="ppms"><?php t('auth_example_phone')?></div>

</td> 
</tr> 

<!--
<tr> 
  <td align=left><div class="ppm"><?php t('I want to participate in referral program')?></div> 
  <?php if ($form['is_referral']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
<table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['is_referral']->render(array('style' => 'width: 200px;','class'=>$class)) ?></td><td width=5></td><td><?php echo $form['is_referral']->renderError() ?></td></tr></table>

</td> 
</tr> 
-->

<tr> 
  <td align=left><div class="ppm"><?php t('Captcha')?><img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('captcha_help')?>"></div>

<table><tr><td>
  <?php if ($form['captcha']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
  <?php echo $form['captcha']->render(array('style' => 'width: 100px;','class'=>$class)) ?>  
</td><td>
<?php echo $form['captcha']->renderError() ?>
</td></tr></table>

  </td> 
</tr>
</table>

<?php echo $form->renderHiddenFields() ?>
<br>	

</div>
</div>

<br>

<div style="padding: 15px 15px 15px 15px; border: 1px solid #cbcbcb; background-color: #FFFFFF;">

<table><tr><td width=28 valign="top"> <?php echo $form['accept']->render(array('class'=>"checkbox")) ?></td><td><?php t('auth_i_accept', array('%terms%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=terms-of-service').'">'.__('Terms of Service',array(),'partner_panel').'</a></td><td>', '%policy%'=>'</td><td><a target="_blank" class="minic" href="'.url_for('@show_page?name=privacy-policy').'">'.__('Privacy policy',array(),'partner_panel').'</a>.'))?></td></tr></table>


<?php echo $form['accept']->renderError() ?>
<br>
<input type="submit" id="register" class="zbutton green sub" value="<?php t('auth_registration')?>">

</td></tr>
</table>

</form>
<script>

$(document).ready(function () {

	$("#register_accept").change(function() {
    if ($(this).attr('checked'))
		{		
			$('#register').attr('disabled', '');
			$('#register').removeClass('grey').addClass('green');
		}	
		else
		{
			$('#register').attr('disabled', 'disabled');
			$('#register').removeClass('green').addClass('grey');
		}	
	});
	
	$("#register_accept").trigger("change");
	
});	
</script>	
