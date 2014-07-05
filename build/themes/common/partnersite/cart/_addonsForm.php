<?php if(count($form['addons']) > 0): ?>

<div class="title pac"><?php t('Additional')?></div>
<div class="content">
<div style="<?php if ($form['is_trial']->getValue() ) { echo 'opacity:0.5;';} ?>">

<?php foreach($form['addons'] as $row): ?>

<?php $tail = '-enable'; if(substr($row->getName(), (-1) * strlen($tail)) == $tail): ?>

  <?php $orig_name = substr($row->getName(), 0, (-1) * strlen($tail)); ?>

  <div class="selecdiv s1">
	<?php echo $row->render(array('class' => 'checkbox','style' => 'width: 15px; ', 'onChange' => "$('#" . $orig_name . "_widget').toggle()")); ?> 
	<div style="position: relative; top: -18px; left: 28px;" onclick="var $cb = $('#order_addons_<?php echo $row->getName() ?>'); $cb.click(); "><b><?php echo $form['addons'][$orig_name]->renderLabel(null, array('style' => 'cursor: pointer;')) ?>:</b></div>
  </div>

<?php else: ?>

  <script type="text/javascript">
  $(function () {
    if(
      $('#order_addons_<?php echo $row->getWidget()->generateId($row->getName()) ?>-enable').is(':checkbox')
      && !$('#order_addons_<?php echo $row->getWidget()->generateId($row->getName()) ?>-enable').is(':checked')
      ) $('#<?php echo $row->getName() ?>_widget').hide();
  });
  </script>

<?php if(!isset($form['addons'][$row->getName() . '-enable'])): ?>
<div class="selecdiv s2 titleaddon order_addons_<?php echo $row->getName() ?>"><b><?php echo $row->renderLabel() ?></b></div>
<?php endif ?>

  <div id="<?php echo $row->getName() ?>_widget" class="ordiv">
    <?php echo $row->render(array('style' => '')); ?>
  </div><br>

<?php endif ?>


<?php endforeach ?>

</div>
</div>

<?php endif ?>

