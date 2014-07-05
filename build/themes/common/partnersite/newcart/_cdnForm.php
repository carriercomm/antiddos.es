<div class="title pref"><?php t('CDN common properties')?></div>

<div style="">
  <div class="content">

<table width=100% cellpadding=0><tr><td align=right>
<table cellpadding=4>
        <tr>
          <th>
          <?php t('Origin') ?>
          </th>
          <td>
            <?php echo $form['origin']->renderError() ?>
            <?php echo $form['origin']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?>  <i class="help-icon question" tip="<?php t('Example: cdn.domain.com')?>"></i>
          </td>
        </tr></table>      
</td><td width=15>&nbsp;</td><td align=left>
<table cellpadding=4>
        <tr>
          <th>
          <?php t('CDN hostname') ?></i>
          </th>
          <td>
            <?php echo $form['cdn_hostname']->renderError() ?>
            <?php echo $form['cdn_hostname']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?>  <i class="help-icon question" tip="<?php t('Example: domain.com')?>">
          </td>
        </tr>

</table>
</td></tr></table>


</div>

<br>     

<div class="title map"><?php t('select_zone')?></div>
<div class="content">
<?php $trial = $form->getObject()->getIsTrial() ? '_trial' : '' ?>
<div style="padding: 4px;"><?php t('block01_config_cone_cdn'.$trial)?></div>
<br>
<?php if ($form->getObject()->getIsTrial()):?>
  <table class="cdn_table_zone" cellspacing=0 width=100% border=0>
    <?php $cities = array(); ?>
    <?php foreach ($form->countries as $i=>$c): ?>
      <?php $cities[] = $c->city ?>
      <?php if (isset($form->countries[$i+1]) && $form->countries[$i+1]->country == $c->country) { continue; }?>
      <tr>
        <td width=20><img src="/images/partner/flags/<?php echo $c->country_code ?>.png"></td>
        <td width=200><?php echo $c->country ?></td>
        <td><?php echo implode(', ', $cities) ?></td>
      </tr>
      <?php $cities = array(); ?>
    <?php endforeach ?>
  </table>
  <div style="padding: 20px 10px;"><a href="<?php echo url_for('@newcart_cdn_network') ?>" class="zbutton blue"><?php t('View all available countries') ?></a> </div>
<?php else: ?>
  <table width=100% class="cdnpricebox" cellspacing=4><tr>
      <td width=25% class="selected">

        <h2 class="ppc p1"><?php t('cdn_region_europa')?></h2>
        <span class="chf"><?php echo $form->getObject()->getProduct()->price_europa ?> CHF <?php t('per')?> 1Gb</span>
        <span class="usd"><?php echo usd($form->getObject()->getProduct()->price_europa)?> USD <?php t('per')?> 1Gb</span>
        <span class="eur"><?php echo eur($form->getObject()->getProduct()->price_europa)?> EUR <?php t('per')?> 1Gb</span>

        <?php echo $form['edge_group_europa']->render(array('class'=>'ignore-pricebox')) ?>


      </td><td width=25% class="selected">

        <h2 class="ppc p1"><?php t('cdn_region_n_america')?></h2>
        <span class="chf"><?php echo $form->getObject()->getProduct()->price_n_america ?> CHF <?php t('per')?> 1Gb</span>
        <span class="usd"><?php echo usd($form->getObject()->getProduct()->price_n_america)?> USD <?php t('per')?> 1Gb</span>
        <span class="eur"><?php echo eur($form->getObject()->getProduct()->price_n_america)?> EUR <?php t('per')?> 1Gb</span>

        <?php echo $form['edge_group_n_america']->render(array('class'=>'ignore-pricebox')) ?>


      </td><td width=25% class="selected">

        <h2 class="ppc p1"><?php t('cdn_region_asia')?></h2>
        <span class="chf"><?php echo $form->getObject()->getProduct()->price_asia ?> CHF <?php t('per')?> 1Gb</span>
        <span class="usd"><?php echo usd($form->getObject()->getProduct()->price_asia)?> USD <?php t('per')?> 1Gb</span>
        <span class="eur"><?php echo eur($form->getObject()->getProduct()->price_asia)?> EUR <?php t('per')?> 1Gb</span>

        <?php echo $form['edge_group_asia']->render(array('class'=>'ignore-pricebox')) ?>

      </td><td class="selected">

        <h2 class="ppc p1"><?php t('cdn_region_s_america')?></h2>
        <span class="chf"><?php echo $form->getObject()->getProduct()->price_s_america ?> CHF <?php t('per')?> 1Gb</span>
        <span class="usd"><?php echo usd($form->getObject()->getProduct()->price_s_america)?> USD <?php t('per')?> 1Gb</span>
        <span class="eur"><?php echo eur($form->getObject()->getProduct()->price_s_america)?> EUR <?php t('per')?> 1Gb</span>

        <?php echo $form['edge_group_s_america']->render(array('class'=>'ignore-pricebox')) ?>

      </td></tr>
  </table>
<?php endif ?>
  </div>
</div>



<?php if(!$form['deposit']->isHidden()): ?>
<div class="title balance"><?php t('CDN deposit')?></div>

<div style="margin: 2px;">
  <div class="content">


<div style="padding: 4px;"><?php t('cdn_textbox_amount')?></div>

<div class="ppm"><b><?php t('Amount')?></b></div>
    <div class="content">

      <div class="ordiv">
        <table>
          <tr>
            <td>
              <?php echo $form['deposit']->renderError() ?>
              <?php echo $form['deposit']->render(array('style' => 'width:300px;', 'class'=>'inputt')) ?>
            </td>
          </tr>
        </table>
      </div>
    </div>



  </div>
</div>
<?php endif ?>

<script>
  $(document).ready(function() {
    $('.cdnpricebox td').each(function(){
      $(this).find('input[type=checkbox]').attr("checked", $(this).hasClass('selected'));
    });
  });

  $('.cdnpricebox td').click(function(){
    $(this).toggleClass('selected');
    $(this).find('input[type=checkbox]').attr("checked", $(this).hasClass('selected'));
  });
</script>
