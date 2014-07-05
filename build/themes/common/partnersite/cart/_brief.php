<?php if($count): ?>


<div class="title_menu cart"><?php t('MY CART')?></div>
<div class="af_title_menu">
<div style="padding: 0px 10px;"> 

<br><?php echo $count ?> <?php t('item(s)')?><br>
<br><hr class="hrline whiteline">
<div class=space> </div>
<div align=right><?php t('Total')?>: <b><?php echo price($total) ?> CHF</b></div>


<br>
<div align=left style="margin-right: 20px;">
<a href="<?php echo url_for('cart') ?>" class="zbutton small blue" style="margin-right: 7px;"><?php t('View cart')?></a>
<br><br>
</div>

</div>
</div>

<?php endif ?>

