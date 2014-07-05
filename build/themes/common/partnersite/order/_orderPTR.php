<table width=100% cellpadding="10" cellspacing="2">
    <tr><td colspan=2 class="histitle" height=40>
            <b><?php t('Pointer record')?></b>
        </td></tr>
    <tr>
        <td width=160 class="his s1" align="left"><?php t('PTR list control')?></td>
        <td class="his s2" align="left">
            <?php if($order->isItemAssigned() && $order->getStatus() == 'active'): ?>
                <a class="zbutton green" href="<?php echo url_for('@order_ptr_list?order_id=' . $order->id) ?>"><?php echo t('Edit') ?></a>
            <?php else :?>
                <a class="zbutton gray"><?php echo t('Edit') ?></a>
            <?php endif ?>
        </td>
    </tr>

</table>