<script type="text/javascript">
function show_addon(num)
{  
  $('.addon_content').hide();
  $('.a_addon').removeClass('active');

  $('#addon_' + num).show();
  $('#addon_link_' + num).addClass('active');
}
</script>

<table height=300 border="0" cellpadding="0" cellspacing="0" width=920 class="divaddon"><tr>
<td width=309 bgcolor="#eeeeee" valign=top class="addon_bar">
<?php $i = 0;?>
<?php foreach($addons as $title => $addon): ?>
<a href="" class="a_addon<?php if ($i==0) echo ' active'?>" id="addon_link_<?php echo $i ?>" onclick="show_addon(<?php echo $i ?>); return false;"><?php t($title)?></a>
<?php $i++; ?>
<?php endforeach ?>
</td>
<td valign=top class="addon_td">
<?php 
$i = 0;
foreach($addons as $title => $addon): ?>
<div class="addon_content" id="addon_<?php echo $i ?>" style="display: <?php echo $i == 0 ? 'block' : 'none' ?>;"> 
<?php include_partial('welcome/addon_header', array('title' => $title)) ?>
<?php $j = 1;?>
<?php foreach($addon as $name => $item): ?>
<?php include_partial('welcome/addon_row', array('name' => $name, 'item' => $item, 'i' => $j)) ?>
<?php $j++; ?>
<?php endforeach ?>
<?php include_partial('welcome/addon_footer', array('addon' => $addon)) ?>
</div>
<?php $i++; ?>
<?php endforeach ?>
</td></tr>
</table>



