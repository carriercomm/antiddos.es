<?php $sf_response->addMeta("title", __("CDN - Content Delivery Network - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<style type="text/css">
  <!--
  .style2 {color: #888888; }
  -->
</style>

<div class="title cloud"><?php t('cart_cdn')?></div>
<div class="content" style="border: 0px solid red;">






  <Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">

        <h3><?php t('cart_cdn')?></h3>
        <div align="left" style="padding: 0px 5px;">
	<?php t('cart_cdn_text')?><br><br>
        <?php t('cart_about_cdn')?><br><br>

          <a class="minic" href="<?php echo url_for('@cdn_config_list') ?>"><?php t('read_more_cdn')?></a> &raquo; <br>
          <a class="minic" href="<?php echo url_for('@newcart_cdn_network') ?>"><?php t('cdn_network')?></a> &raquo;

        </div>


      </td>
      <td width=10>&nbsp;</td>
      <td width=180 class="productpic">
        <img src="<?php echo solar_image_url('cdn.png') ?>" border=0 width=180>
      </td>
    </tr></table>





<br><br>


               <div class="addontitle" style="margin: 10px 20px;"><?php t('Price')?></div>



<style>
</style>
    <?php foreach($configs as $config): ?>
  <?php if(!$config->available) continue; ?>


<table width=100% class="cdnpricebox" cellspacing=4><tr>
<td width=25% valign=top>

<h2 class="ppc p1"><?php t('cdn_region_europa')?></h2>
<span class="chf"><?php echo $config->price_europa ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($config->price_europa)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($config->price_europa)?> EUR <?php t('per')?> 1Gb</span>

<br>
</td><td width=25% valign=top>

<h2 class="ppc p1"><?php t('cdn_region_n_america')?></h2>
<span class="chf"><?php echo $config->price_n_america ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($config->price_n_america)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($config->price_n_america)?> EUR <?php t('per')?> 1Gb</span>


<br>

</td><td width=25% valign=top>

<h2 class="ppc p1"><?php t('cdn_region_asia')?></h2>
<span class="chf"><?php echo $config->price_asia ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($config->price_asia)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($config->price_asia)?> EUR <?php t('per')?> 1Gb</span>
<br>

</td><td valign=top>

<h2 class="ppc p1"><?php t('cdn_region_s_america')?></h2>
<span class="chf"><?php echo $config->price_s_america ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($config->price_s_america)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($config->price_s_america)?> EUR <?php t('per')?> 1Gb</span>
<br>

</td></tr></table>

<br>

<div align=center>

          <a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('buy_cdn')?></a>
          <?php if ($config->allow_trial): ?>
            <a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>" class="zbutton blue large cart"><?php t('Trial 7 days')?></a>
          <?php endif ?>
       <?php endforeach ?>
</div>




  <br><br><br>
  <table width=100% border="0"  cellpadding="0" cellspacing="0"><tr>
      <td width=50% class="box1 b10">

        <font class="poititle"><?php t('CDN advantages')?></font>
        <div style="height: 12px; font-size: 0px;"></div>

        <table><tr><td>
              <font class="poi"><?php t('100% of global availability')?></font><br>
              <font class="poi"><?php t('High speed content delivery')?></font><br>
              <font class="poi"><?php t('Excellent performance')?></font><br>


            </td><td width=20>&nbsp;</td><td>


              <font class="poi"><?php t('Multiple content formats supported')?></font><br>
              <font class="poi"><?php t('No latency')?></font><br>
              <font class="poi"><?php t('Low bandwidth required')?></font><br>


            </td></tr></table>

      </td>
      <td width=20>&nbsp;</td>
      <td  class="box1 b11">

        <font class="poititle"><?php t('Why go CDN')?></font>
<br><br>
              <font class="poi"><?php t('Less load time')?></font><br>
              <font class="poi"><?php t('Increased number of simultaneous users')?></font><br>
              <font class="poi"><?php t('Higher ranking in the Internet')?></font><br>
              <font class="poi"><?php t('Secured position of your business in the global market')?></font><br>


      </td>

    </tr></table>





</div>




