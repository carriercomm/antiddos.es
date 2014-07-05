<div class="title detail"><?php t('Order cancellation')?></div>
<div class="content">
    <Table border=0 cellpadding="0" cellspacing="0" width=100%>
        <tr>
            <td valign=top class="productinfo">
                <h3><?php t('cancel_title')?></h3>
                <p><?php t('cancel_terms',array('%website%'=>$site->getName()))?></p>
                <form method="post">
                  <?php echo $form['cancel_type']->renderError() ?>
                <table>
                    <tr>
                        <th><?php t('cancel_select')?></th>
                        <td><?php echo $form['cancel_type'] ?></td>
                    </tr>
                </table>
                <input type="submit" class="zbutton blue sub" value="<?php t('Cancel')?>">
                </form>
            </td>
        </tr>
    </Table>
</div>