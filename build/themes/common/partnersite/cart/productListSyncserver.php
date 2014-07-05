<?php $sf_response->addMeta("title", __("BT sync server - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<style type="text/css">
    <!--
    .style2 {color: #888888; }
    -->
</style>

<div class="title cloud"><?php t('cart_syncserver')?></div>
<div class="content" style="border: 0px solid red;">




    <Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">

        <h3><?php t('cart_syncserver')?></h3>
      <?php t('cart_about_syncserver',array('%site%'=>$site->getName()))?><br><br>
        <div align="left">
            <a class="minic" href="<?php echo url_for('@syncserver_config_list') ?>"><?php t('read_more_syncserver')?></a> &raquo;
        </div>


    </td>
        <td width=10>&nbsp;</td>
        <td width=180 class="productpic">
            <img src="<?php echo solar_image_url('syncserver.png') ?>" border=0 width=180>
        </td>
    </tr></table>



    <br><br><br>




    <div style="padding: 0px 240px 0px 20px"><font class="addontitle"><?php t('select_resource')?></font><br><br>
      <?php t('block01_config_resource_syncserver')?>
    </div><br>

    <table border="0" cellpadding="8" cellspacing="1" width=100%>
        <tbody><tr>

            <td colspan=2 bgcolor="#dddddd" background="<?php echo solar_image_url('td_bar.png') ?>" ><b><?php t('Configuration')?></b></td>
            <td bgcolor="#dddddd" width="250" background="<?php echo solar_image_url('td_bar.png') ?>"><b><?php t('Storage')?> </b></td>
            <td bgcolor="#dddddd" width="100" align=right background="<?php echo solar_image_url('td_bar.png') ?>"><b><?php t('Price per month')?></b></td>
            <td width="110">&nbsp;</td>
        </tr>


        <?php foreach($configs as $config): ?>

          <?php if(!$config->available) continue; ?>

        <tr>
            <td bgcolor="#F7F7F7" colspan=2>

                <table><Tr><td width=38>
                    <img src="<?php echo solar_image_url('minicloud.png') ?>">
                </td><td style="color: #032358;">
                    <font size="2" color="#042F75"><?php echo $config->name ?></font>
                </td><td>
                  <?php if($config->hot): ?><td width=50>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo solar_image_url('hot.png') ?>"></td><?php endif ?>
                  <?php if($config->new): ?><td width=50>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo solar_image_url('new.png') ?>"></td><?php endif ?>
                </tr></table>

            </td>
            <td  bgcolor="#eeeeee"><?php include_partial('welcome/productfield', array('value' => $config->disk_space)) ?> <?php t('GB')?></td>
            <td bgcolor="#eeeeee" align=right>
                <font class="chf"><?php echo price($config->price) ?> CHF</font><br>
                <font class="usd"><?php echo usd($config->price) ?> USD<br>
                  <?php echo eur($config->price) ?> EUR</font>
            </td>
            <td bgcolor="#eeeeee" align=center>
              <?php echo $sf_user->getAttribute('balance_pending')?>
                <a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?><?php echo $config->allow_trial ? '/trial' : '' ?>" class="zbutton blue large cart"><?php t('Choose')?></a>
            </td>
        </tr>
          <?php endforeach ?>

    </table>

 <div style="padding: 0px 0px 0px 20px"><br><a class="minic" href="<?php echo url_for('@newcart_item_new?product_id=' . $custom_config->id) ?>"><?php t('Custom configuration')?></a> &raquo</div>

<br><br><br>
    <table width=100% border="0"  cellpadding="0" cellspacing="0"><tr>
        <td width=50% class="box1 b6">

            <font class="poititle"><?php t('BTSync containers service advantages')?></font>
            <div style="height: 12px; font-size: 0px;"></div>

            <table><tr><td>
                <font class="poi"><?php t('High-Availability')?></font><br>
                <font class="poi"><?php t('Pay As You Go')?></font><br>
                <font class="poi"><?php t('Self-healing Storage')?></font><br>
            </td><td width=20>&nbsp;</td><td>


                <font class="poi"><?php t('Rapid Deployment')?></font><br>
                <font class="poi"><?php t('Multiple OS supported')?></font><br>


            </td></tr></table>

        </td>
        <td width=20>&nbsp;</td>
        <td  class="box1 b5">

            <font class="poititle"><?php t('Bandwidth')?></font>
            <div style="height: 12px; font-size: 0px;"></div>
            <font class="poi"><?php t('Free in-house bandwidth')?></font><Br>
            <font class="poi"><?php t('10 gbit/s port')?></font><br>
            <font class="poi"><?php t('Multi-homed connection')?></font><br>
            <font class="poi"><?php t('Fully redundant')?></font><br>
            <font class="poi"><?php t('99.9% Uptime SLA')?></font><br>


        </td>

    </tr></table>





</div>




