<?php $count = 0 ?>
<?php while(has_slot('kf_server_' . $count)) $count++; ?>

<script type="text/javascript">
function show_kf(num)
{
  var count = <?php echo $count ?>;

  for(i = 0; i < count; i++)
	{
    $('#kf_' + i).hide();
		$('#show_kf_' + i).removeClass('ft_navi_down');
	}	
	
	$('#show_kf_' + num).addClass('ft_navi_down');
  $('#kf_' + num).fadeIn("slow").show();
}

jQuery(document).ready(function(){ show_kf(0);})
</script>

<div align=left> 
<div style="">
<?php for($i = 0; $i < $count; $i++): ?>

<div id="kf_<?php echo $i ?>" style="display: <?php echo $i == 0 ? 'block' : 'none' ?>;">

<?php include_slot('kf_server_' . $i) ?>

</div>
<?php endfor ?>
</div>
<table border="0"  cellpadding="0" cellspacing="0"><tr>

<td width=10> </td>

<?php for($i = 0; $i < $count; $i++): ?>

<td width=10> </td>
<td width=* nowrap valign=top>
<div class="ft_navi">
<a href="" onclick="show_kf(<?php echo $i ?>); return false;" class="ft_navi_a" id="show_kf_<?php echo $i ?>"><?php include_slot('kf_server_title_' . $i) ?></a>
</div>
</td>

<?php endfor ?>

<td> </td>
</tr></table>

</div>


