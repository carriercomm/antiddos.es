<?php $sf_response->addMeta("title", __("CamFrog Hosting - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<style type="text/css">
<!--
.style2 {color: #888888; }
-->
</style>

<div class="title frog"><?php t('cart_camfrog_hosting')?></div>
<div class="content">


<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">

<h3><?php t('cart_camfrog_hosting2')?></h3>
<?php t('cart_about_camfrog',array('%site%'=>$site->getName()))?><br><br>
<div align="left">
<a class="minic" href=""><?php t('read_more_camfrog')?></a> &raquo;
</div>


</td>
<td width=10>&nbsp;</td>
<td width=180 class="productpic">
<img src="<?php echo solar_image_url('camfrog.png') ?>" border=0 width=180>
</td>
</tr></table>



   <br><br><br>




<table border="0" cellpadding="8" cellspacing="1" width=100%>
  <tbody><tr>

    <td colspan=2 bgcolor="#dddddd" background="<?php echo solar_image_url('td_bar.png') ?>" ><b><?php t('Configuration')?></b></td>
<td bgcolor="#dddddd" width="90" background="<?php echo solar_image_url('td_bar.png') ?>" nowrap><b><?php t('Max. users')?> </b></td>
<td bgcolor="#dddddd" width="140" align=right background="<?php echo solar_image_url('td_bar.png') ?>" nowrap><b><?php t('Price per month')?></b></td>
<td width="110">&nbsp;</td>
  </tr>
  
  
<?php foreach($configs as $config): ?>

<?php if(!$config->available) continue; ?>

  <tr>
<td bgcolor="#F7F7F7" colspan=2>

<table><Tr><td width=38>
<img src="<?php echo solar_image_url('camfrog_mini.png') ?>">
</td><td style="color: #032358;">
<font size="2" color="#042F75"><?php echo $config->name ?></font>
</td><td>
	<?php if($config->hot): ?><td width=50>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo solar_image_url('hot.png') ?>"></td><?php endif ?>
	<?php if($config->new): ?><td width=50>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo solar_image_url('new.png') ?>"></td><?php endif ?>
</tr></table>

</td>
  <td  bgcolor="#eeeeee" align="center"><?php include_partial('welcome/productfield', array('value' => $config->max_users)) ?></td>
  <td bgcolor="#eeeeee" align=right>
<font class="chf"><?php echo price($config->price) ?> CHF</font><br>
        <font class="usd"><?php echo usd($config->price) ?> USD<br>
          <?php echo eur($config->price) ?> EUR</font>
</td>
  <td bgcolor="#eeeeee" align=center><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose')?></a></div></td>
  </tr>
<?php endforeach ?>
  
  </table>

<br><br>
<table width=350 border="0"  cellpadding="0" cellspacing="0"><tr>
<td  class="box1">

<font class="poititle"><?php t('CamFrog')?></font>
<div style="height: 12px; font-size: 0px;"></div>

<table><tr><td>
<font class="poi"><?php t('Full Server Control')?></font><br>
<font class="poi"><?php t('Free in-house bandwidth')?></font><Br>
<font class="poi"><?php t('10 gbit/s port')?></font><br>
<font class="poi"><?php t('Multi-homed connection')?></font><br>
<font class="poi"><?php t('99.9% Uptime SLA')?></font><br>
<font class="poi"><?php t('Console Access')?></font><br>

</td></tr></table>

</td>

</tr></table>





</div>




