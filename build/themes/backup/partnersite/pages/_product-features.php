<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>
<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_product_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_product_2') ?></font><?php end_slot() ?>
<div class="startcontent"></div>
<div class="bodycontent">

<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top>

<div class="imagebox c8"><?php t('product_features_01')?></div>
<br><br>
<div class="imagebox c3"><?php t('product_features_02')?></div>

</td><td width=20> </td><td width=280 valign=top>

<?php include_partial('welcome/adv') ?>

</td></tr></table>

<Br>

<table><tr><td align=left>
<br>
<div style="height: 40px;">  
<a href="<?php echo url_for('@show_page?name=product-features') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Product Features')?></a>
<a href="<?php echo url_for('@show_page?name=hardware-platform') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Hardware Platform')?></a>
<a href="<?php echo url_for('@show_page?name=data-center-location') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Data Center Location')?></a>
<a href="<?php echo url_for('@show_page?name=network-connectivity') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Network Connectivity')?></a>
</div>
</td><td align=right>

<?php include_partial('welcome/social', array('site' => $site)) ?>

</td></tr></table>


</div>
