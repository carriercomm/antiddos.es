<div class="title period"><?php t('PTR control')?></div>
<div class="content">
    <div style="padding:10px 10px;">



      <?php t('ptr_text')?>

        <br><br>
        <div class="whitelist_block">
          <?php t('Server ID')?>: <?php echo $order->item['name'] ?><br>
        </div>

    </div>
    <form method="post">
        <table border="0" width="100%" cellspacing="3" cellpadding="10">
            <tr>
                <th class="histitle" width="120">IP</th>
                <th class="histitle"><?php t('PTR')?></th>
                <th class="histitle" width="220"><?php t('Edit')?></th>
                <th>&nbsp;</th>
                <td></td>
            </tr>
          <?php foreach ($ips as $ip): ?>
                <tr>
                    <td class="his s2"><?php echo $ip->ip ?></td>
                    <td class="his s2"><?php echo $ip->ptr ?></td>
                    <td class="his s2"><input type="text" id="ptr_<?php echo $ip->id ?>" name="<?php echo $ip->id ?>" value="<?php echo isset($ptrs[$ip->id]) ? $ptrs[$ip->id] : $ip->ptr ?>" /></td>
                    <td>
                      <?php if (isset($errors[$ip->id])): ?>
                        <div class="error">Invalid domain name</div>
                      <?php endif ?>
                    </td>
                </tr>
          <?php endforeach ?>
        </table>

        <input class="zbutton green" type="submit" value="Save">
    </form>
</div>



