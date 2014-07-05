

<div class="title_menu profile s_shad"><?php t('WELCOME, %name%.', array('%name%'=>$profile->getFirstName())) ?></div>

<div class="af_title_menu" id="welcomediv">


<table width=100%  cellspacing="3" cellpadding="5">
<tr><td colspan=2 class="login_info tit"><table border=0><tr><td width=22><img src="<?php echo solar_image_url('lock.png') ?>" width=20 height=20></td><td><b><?php t('Profile') ?>:</b></td></tr></table></td></tr>
<tr><td align=left class="login_info"><?php t('E-mail') ?></td><td align=left class="login_info hh">
<?php echo stringCut($profile->getEmailAddress(),28); ?>
</td></tr>
<tr><td align=left class="login_info"><?php t('Phone') ?></td><Td align=left class="login_info hh"> <?php echo $profile->getPhone() != "" ? $profile->getPhone() : __('N/A',array(),'partner_panel') ?></td></tr>
</table>
<div style="height:6px; font-size: 0px;"></div>

<div align=right style="padding:0px 4px;">
<a href="<?php echo url_for('@profile') ?>" class="zbutton small blue" style="margin-right: 7px;"><?php t('Edit profile') ?></a>
<a href="<?php echo url_for('@logout') ?>" class="zbutton small"><?php t('Logout') ?></a>
</div>

<br>


<table width=100%  cellspacing="3" cellpadding="5">
<tr><td colspan=2 class="login_info tit"><table border=0><tr><td width=22><img src="<?php echo solar_image_url('money.png') ?>" width=20 height=20></td><td><b><?php t('Balance') ?>:</b></td></tr></table></td></tr>
<?php foreach($currencies as $currency): ?>
<?php if (!$currency['display']) { continue; } ?>
<tr><td align=left class="login_info"><font class="usd2 <?php echo $currency['short_name'] ?>"><?php echo $currency['short_name'] ?></font></td><Td align=left class="login_info hh"><font class="usd2 <?php echo $currency['short_name'] ?>"><?php echo price(sfConfig::get('solar_' . strtolower($currency['short_name']) . '_rate') * $profile->getBalance()) ?></font></td></tr>
<?php endforeach ?>
<?php if ($profile->getBalancePending() > 0): ?>
<tr><td align=left class="login_info"><font class="usd2"><?php t('Pending') ?></td><td align=left class="login_info hh"><font class="usd2"><?php echo price($profile->getBalancePending()) ?> CHF</font></td></tr>
<?php endif ?>
<?php if ($profile->getDeposit() > 0): ?>
<tr><td align=left class="login_info"><font class="usd2"><?php t('CDN Deposit') ?></td><td align=left class="login_info hh"><font class="usd2"><?php echo price($profile->getDeposit()) ?> CHF</font></td></tr>
<?php endif ?>
</table>

<div style="height:6px;"></div>

<div align=right style="padding:0px 4px;">
<a href="<?php echo url_for('@balance_refill') ?>" class="zbutton small green" style="margin-right: 10px;"><?php t('Add balance') ?></a><a href="<?php echo url_for('@calculator') ?>" class="iframe popup zbutton small blue">Currency calculator</a><br><br>
</div>

</div>
