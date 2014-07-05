

<div class="title wheel">
<table width=100% cellpadding="0" cellspacing="0"><tr><td>
<?php t('Manage '.product_type($type).' orders');?>
</td><td align=right>


<div class="col"><?php echo $count ?></div>


</td></tr></table>
</div>


<div class="content">



<div style="padding: 10px 26px;"><font class="lw150"><?php t('your_orders_'.$type)?></font></div>
<br>

<table width=100% cellpadding="0" cellspacing="0" ><tr><td width=22> </td><td>


<table width=100% border=0 cellpadding="8" cellspacing="1">
<tr>
  <?php include_partial('order/' . $type . 'Header'); ?>
</tr>
</table>


</td></tr></table>



<div style="height:4px; width:100%;"></div>


<form method="post" action="<?php echo url_for('@order_classify?short_type='.$type) ?>">


<?php 
$i = 0;
foreach($groups as $id => $group):
?>

  <?php if(count($group['orders']) == 0) continue; $i++;?>



<div class="group"> 
<table width=100% cellpadding="0" cellspacing="0" ><tr><td><?php t('Group')?>: <?php echo $group['name'] ?> <small>(<?php echo $group['comment'] ?>)</small> </td><td align=right> <a href="javascript:;" onClick="showGroup('<?php echo $type.'-'.$i;?>')" class="zbutton small" id="button-<?php echo $type.'-'.$i;?>"><?php t('Hide')?></a></td></tr></table></div>
<div id="<?php echo $type.'-'.$i;?>">
<?php foreach($group['orders'] as $order): ?>
<table width=100% cellpadding="0" cellspacing="0" border=0 ><tr><td width=23>
<input type="checkbox" name="orders[]" value="<?php echo $order->id ?>" class="checkbox">
</td><td>
    <div class="int">
    <div class="int-border">
    <table width=100% border=0 cellpadding="8" cellspacing="1" >
      <tr>
        <?php include_partial('order/' . $type . 'Order', array('order' => $order)) ?>
      </tr>
    </table>
    </div>
    </div>
</table>

    <div style="height:4px; width:100%;"></div>
  <?php endforeach ?>
</div>
<?php endforeach ?>

<div style="padding: 8px 0px;" align=right>
<?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>

  <?php if($i==0):?>
	<table width=100% cellpadding="0" cellspacing="0" border=0 ><tr><td width=23></td><td>
    <div class="int">
    <div class="int-border">
    <table width=100% border=0 cellpadding="8" cellspacing="1" >
      <tr><td><?php t('You have no orders.')?></td></tr>
    </table>
    </div>
    </div>
</table>	
  <?php endif?>


</div>


<hr class="hrline2">

<div class="movegroup">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="2" cellspacing="1"><tr>
<td rowspan=2 width=30 align=center><img src="<?php echo solar_image_url('str.png') ?>" width=30></td>
<td colspan=8> <?php t('order_move_selected')?>:</td></tr>
<tr><td width=190>

  <select name="group_id" style="width:190px;">
    <?php foreach($groups as $id => $group): ?>
    <option value="<?php echo $id ?>"><?php echo $group['name'] ?>
    <?php endforeach ?>
  </select>

</td><td nowrap>
  &nbsp;<input type="submit" value="<?php t('Move')?>" class="zbutton blue">&nbsp;

</td><td> <?php t('or')?> </td><td nowrap>&nbsp;<a href="<?php echo url_for('@group_list') ?>" class="zbutton blue"><?php t('Create new group')?></a></td></tr></table>
</td>
<td align="right">
<?php if ($type!='custom'):?>
<div style="padding: 20px 29px 0px 0px;" align="right">
<a href="<?php echo url_for('@shop_product_list?type=' . $type) ?>" class="zbutton green" border=0><?php t('Make new order')?></a>
</div>
<?php endif ?>
</td>
</tr>
</table>

</div>

<hr class="hrline2">

</form>






