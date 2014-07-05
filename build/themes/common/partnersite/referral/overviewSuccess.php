<div class="title referral"><?php t('Referral program') ?></div>
<div class="content" align=left>

<div style="padding: 0px;"><?php t('ref_block_0') ?></div>

</div>

<table border=0 width=100% cellpadding="0" cellspacing="0"><tr><td width=40% valign=top>


<div class="title balance"><?php t('Referral program balance') ?></div>
<div class="content" align=left>


<div style="padding: 0px 10px 20px 10px;"><?php t('ref_block_1') ?></div>




<div style="
border: 1px solid #ccc; background-color: #eee; padding: 5px 15px;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
">

<table width=100% border=0>
<tr>
<td width="44"><img src="/images/partner/flag_chf.png" width="40"></td><td class="bm">Swiss Franc</td>
<td align="right"><font class="bm CHF"><?php echo price($balance) ?> CHF</font></td>
</tr>
</table>


</div>


<br>


<div style="margin: 10px;"><?php t('Balance sent') ?>:</div>
<table width=100%>
<?php echo $convert_form->renderFormTag(url_for('@referral_convert')) ?>
<tr>
  <td height=40 nowrap>
    <?php echo $convert_form['amount']->render(array('class' => 'inputt', 'style' => 'width: 100%;')) ?>
    <?php echo $convert_form->renderHiddenFields() ?>
  </td>
  <td width=10></td>
  <td>CHF</td>
  <td width=80>
    <input type=submit class="zbutton blue small" style="width: 100%;" onclick="if(confirm('Are you sure?')){return true;}else{return false;}" value="<?php t('To balance')?>">
  </td>
</tr>
</form>
<?php echo $withdraw_form->renderFormTag(url_for('@referral_withdraw')) ?>
<tr>
  <td height=40 nowrap>
    <?php echo $withdraw_form['amount']->render(array('class' => 'inputt', 'style' => 'width: 100%;')) ?>
    <?php echo $withdraw_form->renderHiddenFields() ?>
  </td>
  <td width=10></td>
  <td>CHF</td>
  <td width=80>
    <input type=submit class="zbutton blue small" style="width: 100%;" value="<?php t('Withdraw')?>">
  </td>
</tr>
</form>
</table>

<br>
<hr class="hrline">
<br>

<div style="maring-right: 10px;" align=right><a href="<?php echo url_for('@referral_profile') ?>" class="zbutton"><?php t('Withdraw profile')?></a></div>


</div>
</td><td valign=top>


<div class="title pref"><?php t('Referral program tools') ?></div>
<div class="content" align=left>



<table border=0 width=100%  cellpadding="10" cellspacing="3">
<tr>
  <th align=left width=150></th>
  <th align=left class="histitle"><?php t('Amount') ?></th>                                                                                                                                                        
</tr>



<tr><td class="his s2"><div class="ref_ico visit"><?php t('Visits') ?></div></td><td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo $referral->clicks ?></td></tr>
<tr><td class="his s2"><div class="ref_ico account"><?php t('Accounts') ?></div></td><td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo $referral->nrefs ?></td></tr>
<tr><td class="his s2"><div class="ref_ico order"><?php t('Active orders') ?></div></td><td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo $referral->norders ?></td></tr>
<tr><td class="his s2"><div class="ref_ico cash"><?php t('Monthly Profit') ?></div></td><td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo price($referral->profit) ?> CHF (<?php echo $customer->referral_profit ?>%)</td></tr>
</table>




<div style="margin: 0px 10px 0px 10px;">


<br><br>
<div style="padding: 10px;"><?php t('ref_block_2') ?></div>

<table><tr><td><div class="ref_ico link" style="padding-right: 5px;"><?php t('Your referral link') ?> :</div></td><td><div style="padding: 4px 8px; background-color: #ddd; border: 1px solid #888; width: 360px;"><?php echo $referral_link ?></div></td></tr></table>


</div>



</td></tr></table>


</div>





<div class="title invoice"><?php t('History')?></div>

<table width=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 class="extra_bar"><tr><td valign=bottom>



<div style="margin-left: 20px;">
<table border=0 height=50  CELLPADDING=0 CELLSPACING=0><tr>




<?php foreach($tabs as $tabname => $tabtitle): ?>
<?php
$class = '';
if ($tabname == $default_tab) $class = 'active';
?>
<td valign=bottom>
	<a href="javascript:;" class="tab <?php echo $class?> commonmenu white" id="<?php echo $tabname?>"><?php t($tabtitle) ?></a>
</td>
<?php endforeach ?>


</tr></table>

</td></tr></table>





<div class="tabs" id="tab_balance_history">
  <?php include_partial('referral/history_table_balance', array('history' => $balance_history)) ?>

<div style="padding:0px 26px 30px 30px;" align=left>

    <table border=0 cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top">
                <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
            </td>
            <td valign="top">
                <a href="<?php echo url_for('@referral_history?type=balance') ?>" class="zbutton blue"><?php t('Full history') ?></a>
            </td>
        </tr>
    </table>

</div>
</div>

<div class="tabs" id="tab_payout_history">
  <?php include_partial('referral/history_table_payout', array('history' => $payout_history)) ?>
    <div style="padding:0px 26px 30px 30px;" align=left>

        <table border=0 cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top">
                    <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
                </td>
                <td valign="top">
                    <a href="<?php echo url_for('@referral_history?type=payout') ?>" class="zbutton blue"><?php t('Full history') ?></a>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="tabs" id="tab_referrals">
    <div class="title history"><?php t('Referrals') ?></div>
    <div class="content" align=left>
        <table border=0 width=100%  cellpadding="10" cellspacing="3">
            <tr>
                <th class="histitle" width=100 align=left><b><?php t('Client') ?></b></th>
                <th class="histitle" width=120 align=left><b><?php t('Active orders') ?></b></th>
                <th class="histitle" width=200 align=left><b><?php t('Date') ?></b></th>
            </tr>
          <?php if (count($referrals) > 0) : ?>
          <?php foreach($referrals as $ref): ?>
                <tr>
                    <td class="his s1"><?php echo $ref->getFullname() .' ('. $ref->getEmail().')' ?></td>
                    <td class="his s1"><?php echo $ref->getOrders() ?></td>
                    <td class="his s2"><?php echo format_date($ref->getDate(), 'f') ?></td>
                </tr>
            <?php endforeach ?>
          <?php else: ?>
            <tr><td class="his" align=left colspan=10><b><?php t('No items to show') ?></b></td></tr>
          <?php endif ?>
        </table>
    </div>
</div>

<div class="tabs" id="tab_vouchers">
    <div class="title history"><?php t('Vouchers') ?></div>
    <div class="content" align=left>
        <table border=0 width=100%  cellpadding="10" cellspacing="3">
            <tr>
                <th class="histitle" width=100 align=left><b><?php t('Code') ?></b></th>
                <th class="histitle" width=120 align=left><b><?php t('Discount') ?></b></th>
                <th class="histitle" width=200 align=left><b><?php t('Count activated') ?></b></th>
            </tr>
          <?php if (isset($referral->vouchers) && count($referral->vouchers) > 0): ?>
            <?php foreach ($referral->vouchers as $voucher): ?>
              <tr>
                <td class="his s1"><?php echo $voucher['number'] ?></td>
                <td class="his s1"><?php echo $voucher['discount'] ?>%</td>
                <td class="his s2"><?php echo $voucher['count_activated'] ?></td>
              </tr>
            <?php endforeach ?>
          <?php else: ?>
            <tr>
              <td colspan="3"><?php t('No items to show') ?></td>
            </tr>
          <?php endif ?>
        </table>
      <br/>
      <div style="padding:0px 26px 30px 30px;" align=left>

        <table border=0 cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
              <div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
            </td>
            <td valign="top">
              <a href="<?php echo url_for('@referral_create_voucher') ?>" class="zbutton blue"><?php t('Create voucher') ?></a>
            </td>
          </tr>
        </table>

      </div>
    </div>
</div>





</div>



<script>
$(document).ready(function(){ 
	$('.tabs').hide();
	$('#tab_<?php echo $default_tab?>').show();
	
	$('.tab').click(function(){
		$('.tabs').hide();
		$('.tab').removeClass('active');
		
		id = $(this).attr('id');
		
		$('#tab_'+id).show();
		$('#'+id).addClass('active');
	});
	
});
</script>