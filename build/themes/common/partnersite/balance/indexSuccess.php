<?php $sf_response->addMeta("title", __("Account Balance - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<?php if($warning&&empty($_COOKIE['event_'.$warning['id']])): ?>
<div id="event" eid="event_<?php echo $warning['id']?>">
<div class="title warning"><?php t('Warning') ?></div>
<div class="content" align=left> 

<b><?php echo $warning['title'] ?></b><br>
<?php echo $warning['content'] ?>
<div align="right"><a href="javascript:;" class="zbutton blue" id="event_hide"><?php t('Hide')?></a></div>
</div>
<br>
</div>
<?php endif ?>

<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td width=50% valign=top> 



<div class="title welcome"><?php t('Welcome') ?></div>
<div class="content" align=left>





<table cellpadding="0" cellspacing="12"><tr><td width=80><img src="<?php echo solar_image_url('ico_profile.png') ?>" class="circ"></td>
<td valign="top">
<font class="facefont"><b><?php t('Profile')?></b></font><br><br>
<?php t('Name')?> : <?php echo $profile->getFullName() ?><Br>
<?php t('E-mail')?> : <?php echo $profile->getEmailAddress() ?><Br>
</td></tr>
</table>


<table cellpadding="0" cellspacing="12"><tr><td width=80><img src="<?php echo solar_image_url('dis.png') ?>" class="circ"></td>
<td valign="top">
<font class="facefont"><b><?php t('Discounts') ?></b></font><img src="<?php echo solar_image_url('q.png') ?>" class="question" tip="<?php t('balance_tip_1')?>"><br><br>
<?php if(is_object($discounts) && !is_string($discounts->getRawValue()) && count($discounts)): ?>
<?php foreach($discounts as $discount): ?>
<?php t($discount['name']) ?>: <?php echo $discount['amount'] ?><?php echo $discount['absolute'] ? ' CHF' : '%' ?><br>
<?php endforeach ?>
<?php else: ?>
<?php t('No discounts present.')?>
<?php endif ?>

</td></tr>
</table>


<table cellpadding="0" cellspacing="12"><tr><td width=80><img src="<?php echo solar_image_url('port.png') ?>" class="circ"></td>
<td valign="top">
<font class="facefont"><b><?php t('Product') ?></b></font><br><br>

<?php t('Products bought')?>: <?php echo $mounthly->getCount() ?><br>
<?php t('Monthly payment')?>: <?php echo price($mounthly->getTotal()) ?> CHF

</td></tr>
</table>



</div>



</td><td valign=top>


<div class="title balance"><?php t('Balance') ?></div>
<div class="content" align=left>


<div class="boxbalance" style="margin-top: 0px;">

<?php foreach($currencies as $currency): ?>
<?php if (!$currency['display']) { continue; } ?>
<?php if ($currency['short_name']=='EUR'):?>
<hr class="hrline">
<div style="height: 6px;"></div>
<?php endif?>
<?php if ($currency['short_name']=='USD'):?>
<hr class="hrline2">
<div style="height: 6px;"></div>
<?php endif?>
<table width=100% cellpadding="0" cellspacing="6" ><tr><td width=44><img src="<?php echo solar_image_url('flag_' . strtolower($currency['short_name']) . '.png') ?>" width=40></td><td class="bm"><?php echo $currency['name'] ?><br>
<?php if ($currency['short_name']!='CHF'):?>
<font class="sm">1 CHF = <?php echo $currency['rate'] ?> <?php echo strtoupper($currency['short_name']) ?></font>
<?php endif?>
</td><td align=right><font class="ec"><?php echo strtoupper($currency['short_name']) ?></font><br><font class="bm <?php echo strtoupper($currency['short_name']) ?>"><?php echo price(sfConfig::get('solar_' . strtolower($currency['short_name']) . '_rate') * $profile->getBalance()) ?> <?php echo strtoupper($currency['short_name']) ?></font></td></tr></table>
<div style="height: 6px;"></div>

<?php if ($currency['short_name']=='CHF'):?><?php endif?>

<?php endforeach ?>

<hr class="hrline2">
<div style="height: 6px; font-size: 0px;"></div>

</div>

<br>
<div style="margin: 0px 5px 0px 5px"><?php t('balance_div_1',array('%site%'=>$site->getName()))?> <?php t('balance_div_2',array('%site%'=>$site->getName()))?></div>
<br>

<br>


<div style="padding:0px 5px 0px 0px;" align=left>

<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
<a href="<?php echo url_for('@balance_refill') ?>" class="zbutton green" style="margin-right: 7px;"><?php t('Add balance') ?></a>
<a href="<?php echo url_for('@invoice_list') ?>" class="zbutton blue"><?php t('My invoices') ?></a>
</td>
</tr>
</table>

</div>

</div>



</tr></td></table>

<br>
<div class="title history"><?php t('Transaction history') ?></div>
<div class="content" align=left>



<?php if(count($history)): ?>
<div style="margin: 0px 10px 0px 10px;">
<div style="padding:10px;"><?php t('Last 10 entries')?>: </div><br>
<table border=0 width=100%  cellpadding="10" cellspacing="3">
<tr>
<th width=24> </th>
  <th align=left width=150 class="histitle"><?php t('Date') ?></th>
  <th align=left width=120 class="histitle"><?php t('Amount') ?></th>
  <th align=left class="histitle"><?php t('Comment') ?></th>
  <th align=left width=120 class="histitle"><?php t('Balance') ?></th>
</tr>


<?php foreach($history as $record): ?>

<tr>
<td class="his s2"><div style="width: 24px; height: 24px;" class="div_history <?php echo t('client_history_' . $record->type) ?>"></div></td>
  <td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo format_date($record->created_at,'f') ?></td>
  <td class="his s2 amount_<?php echo $record->type ?>" align=left><?php echo price($record->amount) ?> CHF</td>
  <td class="his s2"><?php echo t('client_history_' . $record->type, unserialize(html_entity_decode($record->comment_params)), 'history_customer') ?></td>
  <td class="his s2" align=left><?php echo price($record->balance) ?> CHF</td>
</tr>

<?php endforeach ?>

</table>
</div>

<?php else: ?>
<div class="box_no_transactions"><?php t('balance_no_transactions')?></div>

<br>
<hr class="hrline2">
<?php endif ?>

</div>

<div style="padding:0px 26px 30px 30px;" align=left>

<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
<a href="<?php echo url_for('@history') ?>" class="zbutton blue"><?php t('Full history') ?></a>  
</td>
</tr>
</table>

</div>
<script type="text/javascript">
$(document).ready(function (){
	$('#event_hide').click(function (){
		var event = $('#event').attr('eid');
		$.cookie(event, true, { expires: 365 });
		$('#event').hide();	
	});	
});
</script>
