<script type="text/javascript">
var domains_<?php echo $num ?> = <?php echo $form['websites'][$num]['domains']->count() ?>;

$().ready(function() {
  $('#domains_add_<?php echo $num ?>').click(function() {
    $('#extra_domains_<?php echo $num ?>').append(addDomain(<?php echo $num ?>, domains_<?php echo $num ?>, <?php echo $num ?>));

    domains_<?php echo $num ?> = domains_<?php echo $num ?> + 1;

    if(domains_<?php echo $num ?> >= max_domains)
      $('#domains_add_<?php echo $num ?>').hide();
  });
	
	$('#website_<?php echo $num ?>_ssl').click(function() {
		checkSSL(<?php echo $num ?>);
	});
	
	checkSSL(<?php echo $num ?>);

  if(domains_<?php echo $num ?> >= max_domains)
    $('#domains_add_<?php echo $num ?>').hide();

	$('#website_remove_<?php echo $num ?>').click(function() {
    $('#website_<?php echo $num ?>').remove();
	$('#order_websites_<?php echo $num ?>_name').remove();

    websites = websites - 1;

		if(websites < max_websites)
      $('#websites_add').show();
  });
});
</script>

<div id="website_<?php echo $num ?>">

<br>
<div class="ppm">
<?php echo $form['websites'][$num]['name']->renderError() ?><strong><?php t('Website')?>:</strong>&nbsp;&nbsp;&laquo;<?php echo $form['websites'][$num]['name']->getValue() ?><?php echo $form['websites'][$num]['name']->render() ?>&raquo;
</div>

<div class="sitediv">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr><td>
<?php echo $form['websites'][$num]['domains']->renderError() ?>
<?php foreach($form['websites'][$num]['domains'] as $n => $f): ?>
<?php include_partial('cart/addDomain', array('form' => $form, 'website_num' => $num, 'num' => $n, 'id' => $n)) ?>
<?php endforeach ?>
<div id="extra_domains_<?php echo $num ?>"></div>
<div class="ppm"><b><?php t('Backend')?></b><br><?php t('ddos_backend_text')?><br></div> 
<div style="padding:3px 0px 0px 5px">
<?php echo $form['websites'][$num]['backend']->renderError() ?>
<?php echo $form['websites'][$num]['backend']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width: 120px;')) ?></div>
<br>
<div class="ppm"><b><?php t('Port')?></b><br><?php t('ddos_backend_port_text')?><br></div> 
<div style="padding:3px 0px 0px 5px">
<?php echo $form['websites'][$num]['port']->renderError() ?>
<?php echo $form['websites'][$num]['port']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width: 50px;')) ?>
</div><br>
<div class="ppm"><?php echo $form['websites'][$num]['ssl_on']->render(array('class'=>'check','refresh'=>'false','style' => 'width: 10px; margin-right: 8px;', 'id' => "website_{$num}_ssl")) ?><b><?php t('SSL')?></b><br><?php t('ssl_text')?><br></div> 

<br>

<div id="website_<?php echo $num ?>_ssl_options">
<div class="ppm"><b><?php t('CA Certificate')?></b><br><?php t('ca_certificate_text')?><br></div> 
<div style="padding:3px 0px 0px 5px">
<?php echo upload_size($form['websites'][$num]['ssl_ca']->getValue());?>
<?php echo $form['websites'][$num]['ssl_ca']->renderError() ?>
<?php echo $form['websites'][$num]['ssl_ca']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width: 150px;')) ?>
</div><br>
<div class="ppm"><b><?php t('Domain Key')?></b><br><?php t('domain_key_text')?><br></div> 
<div style="padding:3px 0px 0px 5px">
<?php echo upload_size($form['websites'][$num]['ssl_key']->getValue());?>
<?php echo $form['websites'][$num]['ssl_key']->renderError() ?>
<?php echo $form['websites'][$num]['ssl_key']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width: 150px;')) ?>
</div><br>
<div class="ppm"><b><?php t('Domain Certificate')?></b><br><?php t('domain_certificate_text')?><br></div> 
<div style="padding:3px 0px 0px 5px">
<?php echo upload_size($form['websites'][$num]['ssl_crt']->getValue());?>
<?php echo $form['websites'][$num]['ssl_crt']->renderError() ?>
<?php echo $form['websites'][$num]['ssl_crt']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width: 150px;')) ?>
</div><br>
</div>

</td></tr></table>


</div>
<Br>
<div style="padding: 2px 36px 10px 14px;">
<a href="javascript:;" id="website_remove_<?php echo $num ?>" class="zbutton red"><?php t('Remove website')?></a> &nbsp;
<a href="javascript:;" id="domains_add_<?php echo $num ?>" class="zbutton blue"><?php t('Add domain')?></a>
</div>
</div>