<div class="title welcome"><?php t('Do you have an account with %site_name%?', array('%site_name%'=>sfConfig::get('app_site_name')))?></div>

<div class="content">

<div style="padding:10px 10px 10px 10px;">
<div style="padding: 0px 240px 0px 20px">
<font class="addontitle"><?php t('Existing Customers')?></font><br><br>
<?php t('auth_enter')?><br>
</div></div>

<table border="0" cellpadding="0" cellspacing="0" width="400"><tbody><tr><td class="productinfo" valign="top" align="left">
<table width=auto border=0 CELLPADDING=0 CELLSPACING=0><tr><td>
<?php include_partial('login', array('form' => $form_login)) ?>
</td></tr></table>

</td></tr></tbody></table>
<br>
<div style="padding:10px 10px 10px 10px;">
<div style="padding: 0px 240px 0px 20px">
<font class="addontitle"><?php t('New Customers')?></font><br><br>
<?php t('div_registr_1')?><br><br>
</div>
<?php include_partial('register', array('form' => $form_register)) ?>
</div>
</div>