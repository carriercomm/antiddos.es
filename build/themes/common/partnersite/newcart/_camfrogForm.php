<div class="title conf"><?php t('Options')?></div>
<div class="content">
<div style=""> 

<?php if ($form->hasErrors()):?>
<!--# -->
<img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br><br>
<!--# -->
<?php endif?>


<br>

<?php echo $form['room_new']->render(array('onclick'=>"if ($(this).val()==1) $('#room_password_option').show();else $('#room_password_option').hide();",'refresh'=>'false'))?>


<div class="ppm"><?php t('Room Name')?></div>
<table  border="0" cellpadding="0" cellspacing="0">
<tr>
	<td>
	<?php if ($form['room_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
	<?php echo $form['room_name']->render(array('class' => $class,'style'=>'width:200px;', 'refresh'=>'false')) ?>
	</td>
	<td width=5></td>
	<td>
	<?php echo $form['room_name']->renderError() ?>
	</td>
</tr>
</table>

<br>

<div id="room_password_option" style="display:none">
<div class="ppm"><?php t('Old Room Password')?></div>

<table  border="0" cellpadding="0" cellspacing="0">
<tr>
	<td>
	<?php if ($form['room_password']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
	<?php echo $form['room_password']->render(array('class' => $class,'style'=>'width:200px;', 'refresh'=>'false')) ?>
	</td>
	<td width=5></td>
	<td>
	<?php echo $form['room_password']->renderError() ?>
	</td>
</tr>
</table>
</div>

<?php echo $form['room_is_code']->render(array('onclick'=>"changeRoomCode(this)",'refresh'=>'false'))?>

<div id="room_code_option" style="display:none">
<div class="ppm"><?php t('Room PRO Code')?></div>

<table  border="0" cellpadding="0" cellspacing="0">
<tr>
	<td>
	<?php if ($form['room_code']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
	<?php echo $form['room_code']->render(array('class' => $class,'style'=>'width:200px;')) ?>
	</td>
	<td width=5></td>
	<td>
	<?php echo $form['room_code']->renderError() ?>
	</td>
</tr>
</table>
</div>


<div class="ppm"><?php t('please_comment')?></div>

<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => '', 'refresh'=>'false')) ?>

</div>
</div>


<script type="text/javascript">

function changeRoomCode(id)
{
	if ($(id).val()==1) 
	{
		$('#room_code_option').show();
	} 
	else  
	{
		$('#room_code_option').hide();
		$('#order_room_code').val('');
		$('#order_room_code').change();
	}
}

$(document).ready(function() {
	if ($('input[name="cart_item[room_is_code]"]::checked').val()==1) $('#room_code_option').show(); 
	if ($('input[name="cart_item[room_new]"]::checked').val()==1) $('#room_password_option').show(); 
});
</script>
