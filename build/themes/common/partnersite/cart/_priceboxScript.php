<script type="text/javascript">
function reloadPriceBox()
{
  var values = {};

  if($('#pricebox').html().indexOf('loading.gif') != -1)
    return;	
		
	if ($(this).attr('refresh') == 'false') 
		return; 	

  $('form :input').each(function() {
    if(
      ($(this).attr('type') != 'checkbox' || $(this).attr('checked'))
      &&
      ($(this).attr('type') != 'radio' || $(this).attr('checked'))
      )
      values[$(this).attr("name")] = $(this).val();
    });

	$('form :input').attr("disabled","disabled"); 
	$('#order_billing_cycle').slider("disable");
	$('.slider').slider("disable");

  $('#pricebox').html('<table width=100% height=500><tr><td><center><img src="<?php echo solar_image_url('loading.gif') ?>"></center></td></tr></table>');
  $('#pricebox').load('<?php echo $url ?>', values, function() {
		$("form :input").removeAttr("disabled");
		$('#order_billing_cycle').slider("enable");
		$('.slider').slider("enable");
    if($("#out_of_stock").length) {
        if ($('#out_of_stock').is(':checked')){
            $('form :submit').removeClass('gray');
            $('form :submit').addClass('green');
            $('form :submit').removeAttr('disabled');
        } else {
            $('form :submit').removeClass('green');
            $('form :submit').addClass('gray');
            $('form :submit').attr('disabled','disabled');
        }
    }
	});
}

$(document).ready(function() {
  reloadPriceBox();
  $('form :input:not(.ignore-pricebox)').each(function() { $(this).change(reloadPriceBox) });
  if($("#cart_item_eco_only").length) {
      $('#cart_item_eco_only').unbind('change');
      $('#cart_item_eco_only').click(function(e) {
          e.preventDefault();
          $.noty.clearQueue();
          var eco_only_noty = noty({
              text: '<?php t('eco_server_only')?>',
              type: 'warning'
          });
          return false;
      });
  }
});
</script>

<div class="title price"><?php t('Price')?> <?php t('per month')?>: </div>
<div class="content">

<div id="pricebox">



</div>

</div>
