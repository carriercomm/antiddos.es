
<div class="title pref"><?php t('Edit CDN preferences')?></div>
<div class="content">

<form method="post" action="<?php echo url_for('@order_preferences?order_id='.$order->id)?>">
  <table style="width: 100%;" cellpadding=2>
    <tr>
      <td  colspan="2" class="histitle"><b><?php t('CDN Resource Properties')?></b></td>
    </tr>


</tr>

<tr><td colspan=3 class="his s2 special"><?php t('cdn_abount_origin')?></td></tr>

    <tr>
      <th align=left class="his s1" width=200>
        <?php t('CDN hostname')?>
      </th>

      <td class="his s2"><?php echo $form['cdn_hostname']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?></td>

    </tr>
    <tr>
      <th align=left class="his s1">
        <?php t('Origin')?>
      </th>
      <td class="his s2"><?php echo $form['origin']->render(array('style' => 'width:300px;', 'class'=>'inputt'))?></td>
    </tr>
    <tr>
      <th align=left class="his s1">
        <?php t('Cache expiry')?>:<br/>
        <small><?php t('Cache expiry is set in minutes')?></small>
      </th>
      <td class="his s2"><?php echo $form['cache_expiry']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?></td>
    </tr>
  </table><br>
  <table style="width: 100%;" cellpadding=2>
    <tr>
      <td class="histitle" colspan="2" width=200><b><?php t('URL Signing')?></b></td>
    </tr>
<tr>
<td colspan=3 class="his s2 special"><?php t('input_the_key')?></td>

</tr>

    <tr>
      <td class="his s1"></td>
      <td class="his s2"><?php echo $form['url_signing_on']->render() ?><label for="order_url_signing_on"><?php t('Enable URL Signing')?></label></td>
    </tr>
    <tr>
      <td align=left class="his s1" width=200><?php t('URL Signing Key')?>: <i class="help-icon question" tip="<?php t('Protect your files from unauthorized access with a key and optionally an expiration time.')?><br><?php t('A signed URL looks like (http://example.com/filename?secure=DMF1ucDxtqgxwYQ==,1322659070)')?>"></i></td>
      <td class="his s2"><?php echo $form['url_signing_key']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?></td>
    </tr>
  </table><br>
  <table style="width: 100%;" cellpadding=2>

    <tr>
      <td class="histitle" colspan="2" ><b><?php t('IP Access')?></b></td>
    </tr>

<tr><td colspan=3 class="his s2 special"><?php t('conf_rule_cdn')?></td></tr>

    <tr>
      <td align=left class="his s1" width=200><?php t('Access Policy')?>:</td>
      <td class="his s2"><?php echo $form['ip_access_policy']->render() ?></td>
    </tr>
    <tr>
      <td align=left class="his s1"><?php t('IP Addresses')?>: <i class="help-icon question" tip="<?php t('The comma-separated list of IP addresses or IP ranges allowed/blocked by default.')?>"></i></td>
      <td class="his s2"><?php echo $form['ip_addresses']->render(array('style' => 'width:99%;')) ?></td>
    </tr>
  </table><br>
  <table style="width: 100%;" cellpadding=2>

    <tr>
      <td class="histitle" colspan="2"><b><?php t('Hotlink Policy')?></b></td>
    </tr>

<tr><td colspan=3 class="his s2 special"><?php t('cdn_hot_pol')?></td></tr>

    <tr>
      <td class="his s1" width=200><?php t('Hotlink Policy')?>:</td>
      <td class="his s2"><?php echo $form['hotlink_policy']->render() ?></td>
    </tr>
    <tr>
      <td class="his s1"><?php t('Except for domains')?>: <i class="help-icon question" tip="<?php t('Whitespace separated domains list')?>"></i></td>
      <td class="his s2"><?php echo $form['domains']->render(array('style' => 'width:99%;')) ?></td>
    </tr>
  </table>
  <?php echo $form->renderHiddenFields() ?>
  <div style="padding: 20px 10px 0px 10px;" align=right>
    <button type="submit" class="zbutton blue"><?php t('Save')?></button>
    <a href="<?php echo url_for('@order_show?id='.$order->id)?>"  class="zbutton grey" style="margin-left: 10px; cursor: pointer;"><?php t('Back')?></a>
  </div>
</form>

</div>
