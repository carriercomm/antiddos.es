<?php $sf_response->addMeta("title", __("View Invoice - Select Payment Method - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title invoice"><?php t('Invoices')?></div>
<div class="content">

<table border=0 width=100%  cellpadding="8" cellspacing="2">
<tr>
<td class="his i1 u6" style="padding: 10px 12px;" nowrap colspan=6>
<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td width=38><img src="<?php echo solar_image_url('invoice.png') ?>"></td>
<td><?php t('Invoice')?>: #<?php echo $invoice->getId()?></td>
<td align=right>
    <a class="zbutton blue small" href="<?php echo url_for('@invoice_show_html?id=' . $invoice->getId()) ?>"><?php t('HTML View')?></a>&nbsp;
    <a class="zbutton blue small" href="<?php echo url_for('@invoice_show_pdf?id=' . $invoice->getId()) ?>"><?php t('Download PDF')?></a>&nbsp;
	<?php if($invoice->getStatus() == 'u'): ?>
	<?php echo link_to(__('Cancel',array(),'partner_panel'), '@invoice_cancel?id=' . $invoice->getId(), array('confirm'=>__('Are you sure to cancel Invoice #%id% ?', array('%id%'=>$invoice->getId()), 'partner_panel'),'class'=>"zbutton small"))?>
    <?php endif?>
</td>
</tr></table>

  </td>
</tr>
<tr><td class="his i2 u4" width=200><b><?php t('Date')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo format_date($invoice->getDate(), 'D') ?></td></tr>
<tr><td class="his i2 u4"><b><?php t('Due Date')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo format_date($invoice->getDueDate(), 'D') ?></tr>
<tr><td class="his i2 u4"><b><?php t('Description')?></b></td><td nowrap  class="his i2 u4" align=left><?php echo $invoice->getDescription() ?></td></tr>
<tr><td class="his i2 u4"><b><?php t('Amount')?></b> (<?php t('incl. VAT')?>)</td><td nowrap  class="his i2 u4" align=left><?php echo price($invoice->getAmount()) ?> CHF

<font class="cart_usd">
<?php if($invoice->converted_amount): ?>
<?php $arr = array(); foreach($invoice->converted_amount as $conv) { $arr[] = price($conv['amount']) . ' ' . $conv['name']; } ?>
(<?php echo join(', ', $arr) ?>)
<?php endif ?>
</font>

</td></tr>
<tr><td class="his i2 u3">
    <b><?php t('Status')?></b></td><td nowrap  class="his i2 u5" align=left><font class="status <?php echo invoice_status($invoice->getStatus()) ?>"><?php t(invoice_status($invoice->getStatus())) ?></font>
    <?php if ($invoice->getPaymentMethod()=='Bitcoin'): ?>
            <a class="zbutton blue small" href="<?php echo url_for('@invoice_bitcoin?id=' . $invoice->getId()) ?>"><?php t('Info')?></a>
    <?php endif ?>
</td></tr>
</tr>

</table>


<div style="padding: 20px 10px;"> 

<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
<a class="zbutton gray" href="<?php echo url_for('@invoice_list') ?>"><?php t('Back to invoice lists')?></a>
</td>
</tr>
</table>

</div>


<?php if($invoice->getStatus() == 'u'): ?>

</div>
<div class="title price"><?php t('Select method payment')?></div>
<div class="content">


<div class="select_payment_warning"><?php t('select_payment_warning')?></div>


    <div style="padding: 20px 5px;" align=center>
<?php $group = ''; ?>
<?php foreach ($methods as $method):?>
<?php if ($group != $method->getGroup()): ?>
      <?php $group = $method->getGroup(); ?>
      <div style="clear: both; width: 100%;height: 25px;text-align: left;margin-bottom: 15px;"><?php echo $group ?></div>
<?php endif ?>
<div style="width: 150px;height: 140px;float: left;margin-bottom: 15px;">
<?php if($method->getPaymentUrl()): ?>
  <?php if (substr($method->getPaymentUrl(),0,1) == '@'): //payment url is route?  ?>
    <a href="<?php echo url_for($method->getPaymentUrl() . '?id=' . $invoice->getId() . '&sf_culture=' . $sf_user->getCulture()) ?>"><img src="<?php
        if ($method->getPicture())
            echo 'data:image/jpg;base64,'.$method->getPicture();
        else
            echo solar_image_url('payment_method_default.gif');
        ?>" border=0 style="margin-bottom: 5px;"></a>
    <br>
    <a href="<?php echo url_for($method->getPaymentUrl() . '?id=' . $invoice->getId() . '&sf_culture=' . $sf_user->getCulture()) ?>" class="link">
        <?php t($method->getTitle())?><br>(<?php t('Extra fee') ?>: <?php echo ($method->getCommission() * 100) ?>%)
    </a>
  <?php else: ?>
    <form method="post" action="<?php echo $method->renderPaymentUrl($invoice->getId(), $sf_user->getCulture()).'?skin='.$skin ?>" id="payment_form_<?php echo $invoice->getId() ?>_<?php echo $method->getId() ?>">
        <?php foreach($callbacks as $name => $value): ?>
        <input type="hidden" name="<?php echo $name ?>" value="<?php echo $value ?>">
        <?php endforeach ?>
        <a href="#" onclick="$('#payment_form_<?php echo $invoice->getId() ?>_<?php echo $method->getId() ?>').submit()"><img src="<?php
            if ($method->getPicture())
                echo 'data:image/jpg;base64,'.$method->getPicture();
            else
                echo solar_image_url('payment_method_default.gif');
            ?>" border=0 style="margin-bottom: 5px;"></a>
        <br>
        <a href="#" onclick="$('#payment_form_<?php echo $invoice->getId() ?>_<?php echo $method->getId() ?>').submit()" class="link">
            <?php echo $method->getTitle()?><br>(<?php t('Extra fee') ?>: <?php echo ($method->getCommission() * 100) ?>%)
        </a>
    </form>
  <?php endif ?>
<?php else: ?>
  <a href="<?php echo url_for('@invoice_pay?method=' . $method->getId() . '&id=' . $invoice->getId()) ?>"><img src="<?php 
    if ($method->getPicture()) 
      echo 'data:image/jpg;base64,'.$method->getPicture();
    else
      echo solar_image_url('payment_method_default.gif');	
    ?>" border=0 style="margin-bottom: 5px;"></a>
  <br>
  <a href="<?php echo url_for('@invoice_pay?method=' . $method->getId() . '&id=' . $invoice->getId()) ?>" class="link">
    <?php t($method->getTitle())?><br>(<?php t('Extra fee') ?>: <?php echo ($method->getCommission() * 100) ?>%)
  </a>
<?php endif ?>
</div>
<?php endforeach?>
</div>

<?php endif?>


</div>

<!-- Google Code for PAID Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 997854102;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "iAtLCJKpkAQQlpfo2wM";
    var google_conversion_value = 50;
    /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/997854102/?value=50&amp;label=iAtLCJKpkAQQlpfo2wM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
