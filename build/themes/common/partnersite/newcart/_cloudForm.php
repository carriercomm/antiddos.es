<div class="title conf"><?php t('Options')?></div>
<div class="content">

<div style=""> 

<div class="ppm"><?php t('please_comment')?></div>

<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => '', 'refresh'=>'false')) ?>

</div>
</div>

<script type="text/javascript">
function checkCloudName() {
  <?php $product = $form->getObject()->getProduct() ?>
  if(
    $("#cart_item_addons_cpu-cores").slider("value") != <?php echo $product->cores ?> ||
    $("#cart_item_addons_ram").slider("value") != <?php echo $product->ram ?> ||
    $("#cart_item_addons_disk-space").slider("value") != <?php echo $product->storage ?> ||
    $("#cart_item_addons_bandwidth").slider("value") != <?php echo $product->bandwidth ?>
    )
    $("#product_name").html("Custom configuration");
  else
    $("#product_name").html("<?php echo $product->name?>");
}

function cloud_update_product(addon, value)
{
  $(".cloud_" + addon).html(slider_constraints($("#cart_item_addons_" + addon), value));

  if(addon == 'cpu-cores')
    $(".cloud_processing_power").html(solar_round(slider_constraints($("#cart_item_addons_" + addon), value) * 2.4, 2));
}

function update_slider(name, value)
{
  var $s = $("#cart_item_addons_" + name); var val = value;
  $s.slider("value", val);
  $s.slider("option", "slide").call($s, null, {handle: $(".ui-slider-handle", $s), value: val});
}

$(document).ready(function() {
<?php foreach(array('cpu-cores', 'ram', 'disk-space', 'bandwidth') as $addon): ?>
  $("#cart_item_addons_<?php echo $addon ?>").bind("slide", function(event, ui) {
    cloud_update_product('<?php echo $addon ?>', ui.value);
  });
  $("#cart_item_addons_<?php echo $addon ?>").bind("slidechange", function(event, ui) {
    cloud_update_product('<?php echo $addon ?>', ui.value);
    checkCloudName();
  });
<?php endforeach ?>

<?php if($form instanceof SolarAdvancedCartItemForm && !$form->getObject()->exists()): ?>
  <?php $product = $form->getObject()->getProduct() ?>
  update_slider('cpu-cores', <?php echo $product->cores ?>);
  update_slider('ram', <?php echo $product->ram ?>);
  update_slider('disk-space', <?php echo $product->storage ?>);
  update_slider('bandwidth', <?php echo $product->bandwidth ?>);
  update_slider('ipv4-addresses', <?php echo $product->cores ?>);
<?php else: ?>
  <?php $obj = $form->getObject(); ?>
  update_slider('cpu-cores', <?php echo $obj->getAddonValue('cpu-cores') ?>);
  update_slider('ram', <?php echo $obj->getAddonValue('ram') ?>);
  update_slider('disk-space', <?php echo $obj->getAddonValue('disk-space') ?>);
  update_slider('bandwidth', <?php echo $obj->getAddonValue('bandwidth') ?>);
  update_slider('ipv4-addresses', <?php echo $obj->getAddonValue('ipv4-addresses') ?>);
<?php endif ?>
});
</script>

