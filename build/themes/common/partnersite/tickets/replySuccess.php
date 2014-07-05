<div class="bar_content" style="height:100%">
<div class="title support"><?php t('Reply')?></div>
<div class="content">
<?php include_partial('global/flashes') ?>
<form method="post" id="reply">
<table width=100% border=0 style="width:100%;" cellpadding="0" cellspacing="0">
<?php echo $form->renderGlobalErrors() ?>
<tr> 
  <td>
<div style="height:6px;">  </div>
<?php echo $form['message']->render(array('style' => 'height: 120px; width: 100%;', 'class' => 'area1')); ?>
<?php echo $form['message']->renderError() ?>
</td> 
</tr> 
<tr><td colspan="2">

<div style="height:14px;">  </div>
<div align=right style="padding: 0px 10px;"><INPUT TYPE="submit" class="zbutton blue sub" value="<?php t('Leave message')?>"> </div>

<?php echo $form->renderHiddenFields() ?>
</td></tr>
</table>
</form>

</div>
</div>