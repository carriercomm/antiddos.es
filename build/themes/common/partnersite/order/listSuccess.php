<?php $sf_response->addMeta("title", __("My Orders - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<script type="text/javascript">
function showGroup(group)
{
  if($('#'+group).is(':visible'))
  {
    $('#'+group).hide();
    $('#button-'+group).html('<?php t('Show')?>');
  }
  else
  {
    $('#'+group).show();
    $('#button-'+group).html('<?php t('Hide')?>');
  }	
}
</script>


<table width=100% cellpading=0 cellspacing=0 ><tr><td width=250 valign=top>


<div class="title manage"><?php t('Manage orders')?></div>



        <table border=0 cellpadding=0 cellspacing=0 width=100%><tr>
<?php $con='' ?>
<?php foreach($tabs as $tabname => $tabtitle): ?>
<?php #if($tabname!='camfrog'):?>
<?php
$class = '';
if ($tabname == $default_tab) $class = 'active';
?>

        <?php $con=$con+1; ?>
	<?php if ($con > 4) { echo "</tr><tr>"; $con=1; } ?>
	


        <td width=25%>
        <div  class="tab_<?php echo $tabname.' '.$class?> commonmenu3 pre_commonmenu3" onclick="location.href='<?php if ($tabname=='') { echo url_for('@order_list'); } else {echo url_for('@order_list?short_type=' . $tabname);}?>'">

	<table width=100% border=0 CELLPADDING=0 CELLSPACING=0 style="height: 36px;"><tr><td>

        <?php t($tabtitle) ?>

	</td><td align=right width=35>
		<?php if($counts[$tabname]>0):?>
	<div class="num_tab"><?php echo $counts[$tabname]?></div>
		<?php endif?>
	</td></tr></table>

	
	</div>
	</td>

<?php #endif ?>
<?php endforeach ?>


</tr></table>



	</td></tr><tr><td valign=top>



<div id="tabcontainer">

<?php $group = $groups[$default_tab] ?>

<div id="tab_<?php echo $default_tab ?>">
<?php include_partial('order/listTab', array('type' => $default_tab, 'groups' => $group, 'count' => $totals[$default_tab], 'pager' => $pagers[$default_tab])) ?>
</div>

</div>



</td></tr></table>




<!-- Google Code for CHECKOUT Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 997854102;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "83daCIKrkAQQlpfo2wM";
    var google_conversion_value = 15;
    /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/997854102/?value=15&amp;label=83daCIKrkAQQlpfo2wM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
