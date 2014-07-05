<div id="website_<?php echo $website_num?>_domain_<?php echo $num ?>">
<script type="text/javascript">
$().ready(function() {	
	$('#website_<?php echo $website_num?>_domain_remove_<?php echo $num ?>').click(function() {
    $('#website_<?php echo $website_num?>_domain_<?php echo $num ?>').remove();

    domains_<?php echo $id ?> = domains_<?php echo $id ?> - 1;

		if(domains_<?php echo $id ?> < max_domains)
			$('#domains_add_<?php echo $id ?>').show();
  });
});
</script>

<div class="ppm"><b><?php t('Domain')?></b>
<br><?php t('ddos_domain_text')?><br></div> 
<div style="padding:3px 0px 0px 5px"><table border="0" cellpadding="0" cellspacing="0"><tr><td><?php echo $form['websites'][$website_num]['domains'][$num]['domain']->renderError() ?><?php echo $form['websites'][$website_num]['domains'][$num]['domain']->render(array('class'=>'inputt','refresh'=>'false','style' => 'width:340px;')) ?></td><td width=6> </td><td><a href="javascript:;" class="zbutton small red" id="website_<?php echo $website_num?>_domain_remove_<?php echo $num ?>">X</a></td></tr></table></div>
<br>
</div>
