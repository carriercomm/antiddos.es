<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Additional services')?></b>
</td></tr>

<?php if(!empty($addons) && count($addons) > 0): ?>
<?php foreach($addons as $name => $value): ?>
<tr>
  <td class="his s1" align="left" width="160"><?php t($name) ?></td>
  <td class="his s2" align="left"><?php include_partial('welcome/productfield', array('value' => $value)) ?></td>
</tr>
<?php endforeach ?>
<?php else: ?>
<tr><td colspan="2" class="his s2" align="left"><?php t('No additional')?></td></tr>
<?php endif ?>

</table>

