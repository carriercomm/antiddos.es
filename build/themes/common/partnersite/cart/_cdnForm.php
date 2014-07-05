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

<br>

<table width=100% class="cdnpricebox" cellspacing=4><tr>
<td width=25% class="<?php echo $form->getObject()->getEdgeGroupEuropa() ? 'selected' : ''?>">

<h2 class="ppc p1"><?php t('cdn_region_europa')?></h2>
<span class="chf"><?php echo $form->getObject()->getProduct()->price_europa ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($form->getObject()->getProduct()->price_europa)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($form->getObject()->getProduct()->price_europa)?> EUR <?php t('per')?> 1Gb</span>

<?php echo $form['edge_group_europa']->render(array('class'=>'ignore-pricebox')) ?>


</td>
    <td width=25% class="<?php echo $form->getObject()->getEdgeGroupNAmerica() ? 'selected' : ''?>">

<h2 class="ppc p1"><?php t('cdn_region_n_america')?></h2>
<span class="chf"><?php echo $form->getObject()->getProduct()->price_n_america ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($form->getObject()->getProduct()->price_n_america)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($form->getObject()->getProduct()->price_n_america)?> EUR <?php t('per')?> 1Gb</span>


<?php echo $form['edge_group_n_america']->render(array('class'=>'ignore-pricebox')) ?>


</td>
    <td width=25% class="<?php echo $form->getObject()->getEdgeGroupAsia() ? 'selected' : ''?>">
               
<h2 class="ppc p1"><?php t('cdn_region_asia')?></h2>
<span class="chf"><?php echo $form->getObject()->getProduct()->price_asia ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($form->getObject()->getProduct()->price_asia)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($form->getObject()->getProduct()->price_asia)?> EUR <?php t('per')?> 1Gb</span>

<?php echo $form['edge_group_asia']->render(array('class'=>'ignore-pricebox')) ?>

</td>
    <td class="<?php echo $form->getObject()->getEdgeGroupSAmerica() ? 'selected' : ''?>">

<h2 class="ppc p1"><?php t('cdn_region_s_america')?></h2>
<span class="chf"><?php echo $form->getObject()->getProduct()->price_s_america ?> CHF <?php t('per')?> 1Gb</span>
<span class="usd"><?php echo usd($form->getObject()->getProduct()->price_s_america)?> USD <?php t('per')?> 1Gb</span>
<span class="eur"><?php echo eur($form->getObject()->getProduct()->price_s_america)?> EUR <?php t('per')?> 1Gb</span>

<?php echo $form['edge_group_s_america']->render(array('class'=>'ignore-pricebox')) ?>

</td></tr></table>


  </div>
</div>
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
