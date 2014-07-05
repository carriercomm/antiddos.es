<?php echo $form->renderFormTag('') ?>
<table>
<tr><th colspan="2"><?php t('Summary')?></th></tr>
<tr><th><?php t('Cost')?></th><td><?php echo $before ?> USD</td></tr>
<?php foreach($discounts as $discount): ?>
<tr><th><?php echo $discount->name ?></th><td><?php echo $discount->value ?>%</td></tr>
<?php endforeach ?>
<tr><th><?php t('Total')?></th><td><b><?php echo $after ?> USD</b></td></tr>
<tr><th colspan="2"><input type="submit" value="<?php t('Confirm')?>"></th></tr>
</table>
</form>

