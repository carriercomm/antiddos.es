<div class="title welcome"><?php t('auth_login')?></div>
<br>
<div class="content">
<div style="padding: 0px 0px 0px 0px; background: white;">
<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><tr><td width=28><img src="<?php echo solar_image_url('lock.png') ?>"></td><td><?php t('auth_enter')?></td></tr></table>
</div>

<br>
<hr class="hrline">

<?php include_partial('login', array('form' => $form)) ?>


<br>
<hr class="hrline">
<br>

<div align=right style="padding: 0px 6px 0px 0px;">
<a href="<?php echo url_for('@register') ?>" class="zbutton orange" style="margin-right: 7px;"><?php t('auth_create_new')?></a><a href="<?php echo url_for('@password_recovery') ?>" class="zbutton"><?php t('auth_forget')?></a>
</div>
<br>


</div>
</div>








