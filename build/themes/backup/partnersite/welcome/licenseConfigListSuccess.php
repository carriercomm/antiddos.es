

<div class="content"><h3><?php t('title_license')?></h3>


<?php t('text_license',array('%site%'=>$site->getName())) ?>


</div>
<div class="endcontent white"></div>
<div class="content2">



<div align=center> 
<table border="0"  cellpadding="5" cellspacing="0" width=900 height=32>


<tr>
<td  class="server_title"><?php t('Name')?></td>
<td width=210 colspan="1" class="server_title"><?php t('Price')?> <?php t('per month')?></td>
</tr>

</table>

<div style="font-size: 0px; height: 7px;"></div>

<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

<div class="server_div">

<table border="0"  cellpadding="0" cellspacing="0" width=100% height=50>
<tr>

<td class="server_name">

<table cellpadding="3" cellspacing="0" border=0><tr><td>
<font class="server_name_font"><?php t($config->name)?></font>
</td><td nowrap>
<?php if($config->hot): ?><img src="<?php echo solar_template_image_url('hot.png') ?>" ><?php endif ?>
<?php if($config->new): ?><img src="<?php echo solar_template_image_url('new.png') ?>" ><?php endif ?>
</td></tr></table>

</td>

<td width=70 class="server_price">

<font class="chf"><?php echo $config->price ?> CHF</font><br>
<font class="usd"><?php echo usd($config->price) ?> USD</font><br>
<font class="eur"><?php echo eur($config->price) ?> EUR</font><br>


</td>
<td width=140 class="server_buy"><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow">Add to cart</a></td>

</tr>
</table>



</div>

<div class="server_div_info">
<?php t($config->description)?>
</div>

<div style="height: 6px;"> </div>
<?php endforeach ?>

</div>



<br>
</div>
