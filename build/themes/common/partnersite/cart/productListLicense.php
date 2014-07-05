<div class="title license"><?php t('shop_licenses')?></div>
<div class="content">


<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">

<h3><?php t('cart_license_options')?></h3>

<?php t('text_license',array('%site%'=>$site->getName()))?><br><br>

<div align="left">
<a class="minic" href="<?php echo url_for('@license_config_list') ?>"><?php t('read_more_license')?></a> &raquo;
</div>

</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic" valign=top>
<img src="<?php echo solar_image_url('license.png') ?>" border=0 width=250 height=141 alt="license">
</td>
</tr></table>


<br><br><br>
<div style="padding: 0px 0px 0px 20px"><font class="addontitle"><?php t('select_license_package')?>  </font></div><br>

<table border="0" cellpadding="8" cellspacing="1" width=100%><tbody>

<tr>
<td bgcolor="#F7F7F7" width="25%" xbackground="<?php echo solar_image_url('td_bar.png') ?>">&nbsp;</td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>                                                 
<td bgcolor="#F7F7F7" valign=top width="25%" xbackground="<?php echo solar_image_url('td_bar.png') ?>"><font class="category" ><b><?php t($config->name)?></b></font><br><div class="license_descr"><?php t($config->description)?></div></td>
<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Contract')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee"><font color="#000000"><?php echo $config->min_billing_cycle?> <?php if ($config->min_billing_cycle > 1) t('months'); else t('month') ?></font></td>
<?php endforeach ?>
</tr>



<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Setup fee')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee">

<font class="chf"><?php echo price($config->setup_fee) ?> CHF</font><br>
   <font class="usd"><?php echo usd($config->setup_fee) ?> USD<br>
   <?php echo eur($config->setup_fee) ?> EUR</font></font></td>

<?php endforeach ?>
</tr>


<tr>
<td bgcolor="#cccccc" width="25%" valign="top" background="<?php echo solar_image_url('td_bar.png') ?>"><strong><?php t('Price per month')?></strong></td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
<td width="25%" valign="TOP" bgcolor="#eeeeee">

<font class="chf"><?php echo price($config->price) ?> CHF</font><br>
     <font class="usd"><?php echo usd($config->price) ?> USD<br>
     <?php echo eur($config->price) ?> EUR</font></font></td>
<?php endforeach ?>
</tr>


<tr>
 <td align=center bgcolor="#FFFFFF" height=50>&nbsp;</td>
<?php foreach($configs as $config): ?>
<?php if(!$config->available) continue; ?>
 <td align=center  bgcolor="#eeeeee"><font color="#000000"><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose')?></a></font></td>
<?php endforeach ?>
</tr>
</tbody></table>



</div>
