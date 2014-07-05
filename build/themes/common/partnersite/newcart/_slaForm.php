<?php if (isset($form['sla'])): ?>
<div class="title light"><?php t('sla_title')?></div>
<div class="content">
  <div><?php t('sla_addon_selection')?></div>
  <?php echo $form['sla']->renderError() ?>
  <?php echo $form['sla'] ?>
  <div><?php t('sla_addon_description')?></div>
</div>
<?php endif ?>
