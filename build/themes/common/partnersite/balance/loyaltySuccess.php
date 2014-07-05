<div class="title bonus"><?php t('Bonus program')?></div>
<div class="content">
    <div class="bonus_balance"><?php t('Bonus balance') ?>: <?php echo $loyalty_balance ?> <?php t('points') ?></div>
</div>

<div class="title bonus"><?php t('Products witch you can by via loyalty program')?></div>
<div class="content">
    <?php if (count($products)):?>
        <table width="100%" border="0" cellspacing="1" cellpadding="8">
            <tr>
                <td bgcolor="#dddddd" background="/images/partner/td_bar.png" colspan="2">
                    <b>Product</b>
                </td>
                <td width="250" bgcolor="#dddddd" background="/images/partner/td_bar.png">
                    <b>Options</b>
                </td>
                <td width="250" bgcolor="#dddddd" background="/images/partner/td_bar.png">
                    <b>Loyalty points</b>
                </td>
                <td width="100" bgcolor="#dddddd" background="/images/partner/td_bar.png" align="right">
                    <b>Price per month</b>
                </td>
                <td width="110"> </td>
            </tr>
            <?php foreach($products as $config):?>
                <tr>
                    <td bgcolor="#F7F7F7" colspan=2>
                        <?php echo product_type($config->type) ?>
                        <br/>
                        <font size="2" color="#042F75"><?php echo $config->name ?></font>
                    </td>

                    <td  bgcolor="#eeeeee"><?php include_partial('newcart/loyalty_'.$config->type.'_details', array('config' => $config)) ?></td>

                    <td bgcolor="#eeeeee" align=right>
                        <font class="chf"><?php echo price($config->loyalty_price) ?> Points</font>
                    </td>
                    <td bgcolor="#eeeeee" align=right>
                        <font class="chf"><?php echo price($config->price) ?> CHF</font><br>
                        <font class="usd"><?php echo usd($config->price) ?> USD<br>
                            <?php echo eur($config->price) ?> EUR</font>
                    </td>
                    <td bgcolor="#eeeeee" align=center>
                        <?php echo $sf_user->getAttribute('balance_pending')?>
                        <a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id.'&loyalty=1') ?><?php echo $config->allow_trial ? '/trial' : '' ?>" class="zbutton blue large cart"><?php t('Choose')?></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php else: ?>
        <h2>
            There are no products available in the loyalty program
        </h2>
    <?php endif ?>

</div>

<div class="title bonus"><?php t('Orders witch you can by via loyalty program')?></div>
<div class="content">
    <?php if (count($orders)):?>
        <table width="100%" border="0" cellspacing="1" cellpadding="8">
            <tr>
                <td align=left class="cart_histitle"><?php t('Product ID')?></td>
                <td align=center class="cart_histitle" width=100><?php t('Price')?></td>
                <td align=center class="cart_histitle" width=120><?php t('Status')?></td>
                <td class="cart_histitle" align=center><?php t('Due date')?></td>
                <td align=center class="" width=120>&nbsp;</td>
            </tr>
            <?php foreach($orders as $order):?>
                <tr>
                    <td class="uop"><?php echo link_to($order->isItemAssigned() ? $order->item['name'] : 'Not assigned', '@order_show?id=' . $order->id, 'class="manage_name"') ?></td></td>
                    <td align=center width=120 bgcolor="#F1F7F8" class="int2"><?php echo price_ex($order->getPrice()) ?></td>
                    <td align=center width=120 class="int2"><div class="status <?php echo status($order->status) ?>"><?php t(status($order->status)) ?></div></td></td>
                    <td align=center width=120 class="int2"><?php echo $order->paid_until ?></td>
                    <td>
                        <?php $loyalty_price = $order->getProduct()->getLoyaltyPrice() * $order->billing_cycle ?>
                        <?php if ($customer->loyalty_balance >= $loyalty_price): ?>
                            <a href="<?php echo url_for('@order_loyalty_prolong?id='.$order->id) ?>" class="zbutton blue">
                                Prolong for <?php echo $loyalty_price ?> points<br/>
                            </a>
                        <?php else: ?>
                            <a class="zbutton red">
                                Not enough <?php echo $loyalty_price - $customer->loyalty_balance ?> points<br/>
                            </a>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php else: ?>
        <h2>
            There are no products available in the loyalty program
        </h2>
    <?php endif ?>

</div>

<div class="title history"><?php t('Bonus program transaction history')?></div>
<div class="content">
    <?php if(count($history)): ?>
    <div style="margin: 0px 0px 0px 0px;">

        <table border=0 width=100%  cellpadding="10" cellspacing="2">
            <tr>
                <th align=left width=150 class="histitle"><?php t('Date') ?></th>
                <th align=left width=120 class="histitle"><?php t('Operation') ?></th>
                <th align=left width=120 class="histitle"><?php t('Amount') ?></th>
                <th align=left class="histitle"><?php t('Comment') ?></th>
            </tr>


          <?php foreach($history as $record): ?>

            <tr>
                <td height=18 class="his s1" nowrap style="white-space: nowrap;"><?php echo format_date($record->created_at,'f') ?></td>
                <td class="his s2" align=left><?php t($record->bonus > 0 ? 'loyalty_reward' : 'loyalty_spent') ?></td>
                <td class="his s2" align=left>
                        <?php echo price($record->bonus) ?> <?php t('points') ?>
                </td>
                <td class="his s2" align=left><?php echo $record->public_memo ?></td>
            </tr>

          <?php endforeach ?>

        </table>
    </div>

    <div style="padding: 8px 0px;" align=right>
      <?php include_partial('global/pagination', array('pager' => $pager)) ?>
    </div>

    <?php else: ?>
    <div class="box_no_transactions"><?php t('balance_no_transactions')?></div>

    <br/>
    <hr class="hrline2">
    <?php endif ?>
</div>