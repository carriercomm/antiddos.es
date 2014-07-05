<div class="title light"><?php t('economical_tarif')?></div>
<div class="content">

  <div style="">


    <div><?php t('eco_server')?></div>
     <br>
    <?php if($form->getObject()->getProduct()->getOnlyEco()): ?>
      <input id="cart_item_eco_only" type="checkbox" disabled checked="checked" value="" onclick="return false" onkeydown="return false">
    <?php else: ?>
      <?php echo $form['eco']->renderError() ?><?php echo $form['eco'] ?>
    <?php endif ?>
      <label><?php t('eco_server_checkbox')?></label>

    <script>
      $('#cart_item_eco').click(function(){
        var $slide = $("#cart_item_addons_additional-ips");
        if ($(this).attr('checked') == true){
          $('#ddos_protection').text('Disabled');
          $('#cart_item_addons_additional-ips-max').text(5);
          $slide.slider("option", "max", 5);
        } else {
          $('#ddos_protection').text('Enabled Enabled 10 gb/s - 4mpps');
          $('#cart_item_addons_additional-ips-max').text(15);
          $slide.slider("option", "max", 15);
        }
      });
    </script>
    </div>

</div>


<div class="title conf"><?php t('Options')?></div>
<div class="content">


<div style="">

<div class="ppm"><?php t('please_comment')?></div>


<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => '', 'refresh'=>'false')) ?>


</div>

</div>


