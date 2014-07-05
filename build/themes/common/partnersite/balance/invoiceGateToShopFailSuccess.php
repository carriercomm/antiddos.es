<div class="title price"><?php t('Pay with a %app%', array('%app%'=>'Gate2Shop')) ?></div>
<div class="content">
  <table width="100%" cellspacing="0" cellpadding="0">
      <tbody>
      <tr>
          <td width="56" height="48"><img src="/images/partner/invoice.png"></td>
          <td><?php t('g2s_fail_title')  ?></td>
      </tr>
      </tbody>
  </table>
  <br/>
  <br/>
  <div class="forarea">
      <table>
          <tr>
              <td><?php t('g2s_fail')  ?></td>
          </tr>
      </table>
  </div>
  <br>
  <br>
  <table width="100%">
      <tbody>
      <tr>
          <td align="left">
              <a class="zbutton" href="<?php echo url_for('@invoice_show?id=' . $invoice->getId()) ?>"><?php t('Back')?></a>
          </td>
      </tr>
      </tbody>
  </table>
</div>
