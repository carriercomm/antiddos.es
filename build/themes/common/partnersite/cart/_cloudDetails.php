

<Table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top class="productinfo">


      <h3><?php t('Configuration')?></h3>

      <?php if($trial) include_partial('welcome/trialText', array('type' => $product->type)); ?>
      <?php include_partial('cart/' . $product->type . ($text_new ? 'New' : '') . 'Text', array('site' => sfConfig::get('solar_site'))) ?>

      <table width=100% cellpadding="0" cellspacing="2" border=0>
        <tr><td colspan=2 class="histitle" height=40 style="color: #032358;">
            <font size="2" color="#042F75">
              <div id="product_name"><?php include_partial('welcome/productfield', array('value' => $product->name)) ?></div>
            </font>
          </td></tr>

        <tr><td class="his s1" width=160><?php t('CPU')?>:</td><td class="his s2"><table width="450"><tr><td><div style="display: inline;" class="cloud_cpu"><?php include_partial('welcome/productfield', array('value' => $product->cpu)) ?></div></td><td width=100 align=right><img src="/images/partner/xeon.png"></td></tr></table></td></tr>
        <tr><td class="his s1"><?php t('Cores')?>:</td><td class="his s2"> <div style="display: inline;" class="cloud_cpu-cores"><?php include_partial('welcome/productfield', array('value' => $product->cores))?></div> vCPU x 2.4GHz = <div style="display: inline;" class="cloud_processing_power">2.4</div> GHz Processing Power</td></tr>
        <tr><td class="his s1"><?php t('Maximum Servers')?>:</td><td class="his s2"> <div style="display: inline;" class="cloud_cpu-cores"><?php include_partial('welcome/productfield', array('value' => $product->cores))?></div> (One or more CPU cores per one Cloud Server can be used)</td></tr>
        <tr><td class="his s1"><?php t('RAM, MB')?>:</td><td class="his s2"><div style="display: inline;" class="cloud_ram"><?php include_partial('welcome/productfield', array('value' => $product->ram))?></div></td></tr>
        <tr><td class="his s1"><?php t('Storage, GB')?>:</td><td class="his s2"><div style="display: inline;" class="cloud_disk-space"><?php include_partial('welcome/productfield', array('value' => $product->storage))?></div> (High-Availability SAN)</td></tr>
        <tr><td class="his s1"><?php t('Bandwidth, GB')?>: </td><td class="his s2"><div style="display: inline;" class="cloud_bandwidth"><?php include_partial('welcome/productfield', array('value' => $product->bandwidth))?></div> (10-Gigabit Public & Private Networks)</td></tr>

      </table>


    </td>
    <td width=10>&nbsp;</td>
    <td width=180 class="productpic" valign=top>
        <img src="<?php echo solar_image_url('cloudfloud.png') ?>" border=0 width=180>
    </td>
  </tr></table>

