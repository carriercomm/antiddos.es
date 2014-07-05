<?php if (isset($form['eco'])): ?>
  <div class="title light"><?php t('economical_tarif')?></div>
  <div class="content">

      <div style="">

        <div><?php t('eco_server')?></div>
         <br>
        <?php if($form->getObject()->getProduct()->getOnlyEco()): ?>
          <input id="cart_item_eco_only" type="checkbox" disabled checked="checked" value="" onkeydown="return false">
        <?php else: ?>
          <?php echo $form['eco']->renderError() ?><?php echo $form['eco'] ?>
        <?php endif ?>
          <label><?php t('eco_server_checkbox')?></label>

        <script>
          $('#cart_item_eco').click(function(){
            if ($(this).attr('checked') == true){
              $('#ddos_protection').text('Disabled');
            } else {
              $('#ddos_protection').text('Enabled Enabled 10 gb/s - 4mpps');
            }
          });
        </script>
      </div>

  </div>
<?php endif ?>
<div class="title conf"><?php t('Options')?></div>
<div class="content">


<div style=""> 

<div class="ppm"><?php t('please_comment')?></div>


<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => 'width:100%; height: 140px; padding: 20px;', 'refresh'=>'false')) ?>


</div>

</div>


