<h2><?php t('Prolong')?></h2>
<?php echo $form->renderFormTag(url_for('@order_prolong?id=' . $order_id)) ?>
<div style="padding:6px;">

<table>
<?php echo $form ?>
<tr><th colspan="2">

<INPUT TYPE="image" SRC="<?php echo solar_template_image_url('pay.gif') ?>" HEIGHT="20" WIDTH="79" BORDER="0" ALT="Pay" style="width:79px; padding:0px; border:0;">

</th></tr>
</table>
</form>
</div>

<h2><?php t('Discounts')?></h2>


<div style="padding:10px;"> 
<table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_template_image_url('pro.gif') ?>"></td><td><?php t('Your discounts')?>: </td></tr></table>
</div>

<div style="padding:6px;">
<table width="400" style="font-size: 8pt; width: 400px">
<tr>
  <th align=left><?php t('Discount')?></th>
  <th align=left<?php t('Months')?></th>
  <th align=left><?php t('Value')?></th>
</tr>
<tr><td background="<?php echo solar_template_image_url('line5.gif') ?>" height=7 colspan=8> </td></tr>

<?php foreach($discounts as $discount): ?>
<tr>
  <td><?php echo $discount->name ?></td>
  <td><?php echo $discount->months ?></td>
  <td><b><?php echo $discount->amount ?>%</b></td>
</tr>
<?php endforeach ?>
</table>
</div>
<br>
