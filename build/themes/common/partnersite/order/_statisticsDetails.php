<table width=100% cellpadding="10" cellspacing="2">
<tr><td colspan=2 class="histitle" height=40>
<b><?php t('Network')?></b>
</td></tr>
<?php if($statistics): ?>
<?php foreach ($statistics as $item):?>
<?php if ($item['type']=='image'):?>
<tr>
  <td width=250 class="his s1" align="left"><?php echo $item['title']?></td>
  <td class="his s2" align="left"><img src="data:image/jpg;base64,<?php echo $item['value']?>"></td>
</tr>
<?php endif?>
<?php if ($item['type']=='numeric'):?>
<tr>
  <td width=250 class="his s1" align="left"><?php echo $item['title']?></td>
  <td class="his s2" align="left"><?php echo $item['value']?></td>
</tr>
<?php endif?>
<?php if ($item['type']=='graph'):?>
<tr>
  <td class="his s2" colspan=2> 


<table width=100%><tr><td>
<b><?php echo $item['value'].' '.$item['unit']?></b>
</td><td align=right>
<b><?php echo $item['max'].' '.$item['unit']?></b>
</td></tr></table>

<table width=100%>
<tr>
<td width="<?php echo max(1, round(($item['value']*100)/$item['max'])) ?>%" align=left class="red_line"> </td>
<td align=right class="green_line">
</td></tr>
</table>
</td>
</tr>
<?php endif?>
<?php endforeach?>
<?php else: ?>
<tr><td colspan=2 class="his s2">
<?php t('N/A')?>
</td></tr>
<?php endif ?>
</table>

