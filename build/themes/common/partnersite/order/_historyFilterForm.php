<script type="text/javascript">
function postFilter()
{
  $('#history_filter').submit();
}
</script>

<form method="post" id="history_filter" action="<?php echo url_for('@history_set_filter') ?>">

<?php echo $form->renderGlobalErrors() ?>


<table border=0><tr>
<?php foreach($form as $widget): ?>
<?php if($widget->getWidget() instanceof sfWidgetFormInputHidden) continue; ?>
<td width=10></td>

<td>
<table border=0 class="checkboxhistory"><tr>
<td><?php echo $widget->renderError() ?><?php echo $widget->render(array('class' => 'checkbox', 'onclick' => 'postFilter()')) ?></td>
<td width=24><div style="width: 24px; height: 24px;" class="<?php echo $widget->renderLabelName()?>"></td>
<td nowrap><?php t($widget->renderLabelName()) ?></td></tr></table>
</td>

<?php endforeach ?>
</tr><tr>
<td colspan=10 align=right>

<?php echo $form->renderHiddenFields() ?>

</td></tr></table>

</form>


