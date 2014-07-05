
<tr><td colspan=20>
<div class="server_type_name"><?php t('prefix_'.$group) ?></div>
<div class="server_type_text"><?php t('prefix_'.$group.'_text') ?></div>
</tr></td>
<tr>
    <td><span class="style1"><font class="category"><b><?php t('CPU')?></font></span></td>
    <td width="100"><span class="style1"><font class="category"><b><?php t('Cores')?></font></span></td>
    <td width="140"><span class="style1"><font class="category"><b><?php t('RAM')?></font></span></td>
    <td width="100"><span class="style1"><font class="category"><b><?php t('Storage')?></font></span></td>
    <td width="110"><span class="style1"><font class="category"><b><?php t('RAID')?></font></span></td>
    <td width="130"><span class="style1" align=right><font class="category"><b><?php t('Price')?> <?php t('per month')?></font></td>
</tr>
<?php foreach($configs as $config): ?>
<?php if(!$config->available || $config->group != $group) continue; ?>


  <tr class="server_<?php echo strtolower(str_replace(' ','_',$config->name)) ?>">
    <td colspan="6"  bgcolor="#dddddd" background="<?php echo solar_image_url('td_bar.png') ?>">

	<table width=100% cellpadding="0" cellspacing="0" height=40>
	<tr>
	  <td width=5>&nbsp;</td><td>



    <td nowrap>


<table border=0 cellpadding="0" cellspacing="0"><tr>
<td class="css-name-server"><?php echo $config->name ?></td>
<?php if ($config->getInstock() < 1): ?><td class="css-out-of-stock"><?php t("out_of_stock")?><?php endif ?>
<?php if($config->hot): ?><td class="css-hot"><img src="<?php echo solar_image_url('hot.png') ?>"></td><?php endif ?>
<?php if($config->new): ?><td class="css-new"><img src="<?php echo solar_image_url('new.png') ?>"></td><?php endif ?>
</tr></table>


    </td><td align=right class="link-for-<?php echo strtolower(str_replace(' ','_',$config->name)) ?>"><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Choose') ?></a></td>
	</tr>
	</table>


</td>

    </tr>

    <tr class="server_<?php echo strtolower(str_replace(' ','_',$config->name)) ?>"><td  bgcolor="#F7F7F7">

<table border="0"  cellpadding="0" cellspacing="0"><Tr><td width=90>
<img src="<?php echo solar_image_url('miniserver.png') ?>">
</td>
<td>
<font color="#042F75" size="2"><?php include_partial('welcome/productfield', array('value' => $config->cpu)) ?></font>
</td></tr></table>

</td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->cores)) ?></td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->ram)) ?></td>
<td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->storage)) ?></td>
<td  bgcolor="#eeeeee" width=120><?php include_partial('welcome/productfield', array('value' => $config->raid)) ?></td>
<td bgcolor="#eeeeee" align=right class="price-for-<?php echo strtolower(str_replace(' ','_',$config->name)) ?>">
<font class="chf"><span class="val"><?php echo $config->price ?></span> CHF</font><br>
<font class="usd"><span class="val"><?php echo usd($config->price)?></span> USD</font><br>
<font class="eur"><span class="val"><?php echo eur($config->price)?></span> EUR</font></td>
    </tr>

    <tr class="server_<?php echo strtolower(str_replace(' ','_',$config->name)) ?>">
      <td colspan="6" valign="TOP" height=1></td>
    </tr>





<?php endforeach ?>
