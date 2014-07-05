

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
      </table>


    </td>
    <td width=10>&nbsp;</td>
    <td width=180 class="productpic" valign=top>
        <img src="<?php echo solar_image_url('syncserver.png') ?>" border=0 width=180>
    </td>
  </tr></table>
