<?php use_helper('Partial') ?>
<?php include_component('debug', 'endpoints') ?>
<form method="post" action="<?php echo url_for('@debug_set_params') ?>">
<table>
<?php echo $form ?>
<tr><td colspan="2"><input type="submit" value="Set"></td></tr>
</table>
</form>

<?php echo link_to('Site info', 'debug_site_show') ?>
