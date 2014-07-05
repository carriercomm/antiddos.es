<?php $sf_response->addMeta("title", __("Order Groups - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>
<div class="title groups"><?php t('Groups')?></div>
<div class="content">

<br>
<div style="margin-left: 18px;">

<div class="forarea">
<?php t('group_function_enables')?>
</div>                     
<Br><br>
<b><?php t('List of groups')?></b>
<br>

<table border=0>

<tr><td>
  <div class="group"><?php t('group_main')?></div>
</td><td valign=bottom>  

</td></tr>


<?php foreach($groups as $group): ?>
<tr><td>
  <div class="group"><?php echo $group->name ?> (<?php echo $group->comment ?>)</div>
</td><td valign=bottom>  
  <?php if($group->id != 0): ?>
   <div  style="margin-bottom: 8px;margin-left: 5px;"> <a href="<?php echo url_for('@group_delete?id=' . $group->id)?>" class="zbutton small blue"><?php t('Remove')?></a></div>
  <?php endif ?>
</td></tr>
<?php endforeach ?>
</table>

</div>

<br><br>

</div>
<div class="title group_add"><?php t('group_creation')?></div>
<div class="content">


<div style="margin-left: 18px;">




<form method="post">
<?php echo $form->renderGlobalErrors() ?>

<div class="ppm"><?php t('name_group')?>:</div>
<?php echo $form['name']->render(array('style' => 'width: 260px;', 'class'=>'inputt')) ?><?php echo $form['name']->renderError() ?>
<br>

<div class="ppm"><?php t('Comment')?>:</div>
<?php echo $form['comment']->render(array('style' => 'width: 400px;')) ?><?php echo $form['comment']->renderError() ?>
<br>

<?php echo $form->renderHiddenFields() ?>
<br><input type="submit" value="<?php t('Add group')?>"  class="zbutton sub">
</form>

</div>
<br>

</div>
