<div class="content">

<br>


<div style="height: 15px;"> </div>
<table width="100%" height="200" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="100%" class="barlistup" height=3>
    </td></tr>
<tr>
    <td width="100%" class="barlist" align=center>



        <br>

        <div align=center>
            <table border="0"  cellpadding="6" cellspacing="0" width=890 height=32>

                <tr>
                    <td colspan="8">

<div class="sync-h1"><?php t('Select configuration')?></div>


                        <div align=center style="top: -40px; position: relative; display: block;">


<table border="0" cellpadding="6" cellspacing="0"><tr>
<td><div class="circ c1"><div><span id="calculated-month"></span><br><?php t('Months') ?></div></div></td>
<td><div class="circ c2"><div><span id="discount"></span><br><?php t('Discount') ?></div></div></td>
<td><div class="circ sm c3"><div><span id="storage-value"></span><br><?php t('Storage value') ?></div></div></td>
<td><div class="circ sm c4"><div><span id="price-per-gb"></span><br><?php t('Price per 1 GB') ?></div></div></td>
<td><div class="circ big sm c5"><div><span id="price-total"></span><br><?php t('Total') ?></div></div></td>
</tr></table>
<br><br>


                            <div class="dis_div">

                                <table width="820" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>

                                            <div style="width: 820px;" align=left>

                                                <div style="padding: 0px 0px 0px 0px; font-size: 14px;"><b><?php t('Select billing period') ?></b></div>

                                                <style>.td_w {width: 72px; }</style>

                                                <div style="padding: 10px 0px 14px 0px;">
                                                    <table width="820" border="0" cellpadding="0" cellspacing="0"><tr>

                                                        <td class="td_w" style="width: 73px;">1 </td>
                                                        <td class="td_w">2</td>
                                                        <td class="td_w">3</td>
                                                        <td class="td_w" style="width: 73px;">4</td>
                                                        <td class="td_w" style="width: 73px;">5</td>
                                                        <td class="td_w">6</td>
                                                        <td class="td_w" style="width: 73px;">7</td>
                                                        <td class="td_w" style="width: 72px;">8</td>
                                                        <td class="td_w" style="width: 69px;">9</td>
                                                        <td class="td_w">10</td>
                                                        <td class="td_w">11</td>
                                                        <td>12</td>
                                                        <td></td>
                                                    </tr></table>
                                                </div>


                                                <div style="width:800px; margin-left: 1px;"><div id="discount-slider"></div></div>

                                            </div>

                                            <div style="height: 16px; font-size: 0px;"></div>



                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                        <div align=center>
                            <div class="dis_div">

                                <table width="820" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>

                                            <div style="width: 820px;" align=left>

                                                <div style="padding: 0px 0px 0px 0px; font-size: 14px;"><b><?php t('Select storage value') ?></b></div>

                                                <style>.td_w {width: 72px; }</style>

                                                <div style="padding: 10px 0px 14px 0px;">
                                                    <table width="820" border="0" cellpadding="0" cellspacing="0"><tr>

                                                        <td class="td_w" style="width: 23%">100 GB</td>
                                                        <td class="td_w" style="width: 24%">200 GB</td>
                                                        <td class="td_w" style="width: 24.5%">300 GB</td>
                                                        <td class="td_w" style="width: 24%">400 GB</td>
                                                        <td class="td_w">500</td>
                                                        <td></td>
                                                    </tr></table>
                                                </div>


                                                <div style="width:800px; margin-left: 1px;"><div id="storage-slider"></div></div>

                                            </div>

                                            <div style="height: 16px; font-size: 0px;"></div>


                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <br>

 <a id="custom-buy-button" href="<?php echo url_for('@newcart_item_new?product_id=' . $configs[0]->id.'&value=100&bill=6') ?>" class="buynow2" style="width: 200px;"><?php t('Buy')?></a>


            <div style="font-size: 0px; height: 7px;"></div>


<!--
<div class="sync-block" aling=center><h4>NAME</h4>
<div class="sync-storage">100 <?php t('GB')?></div>
<div class="sync-network"><?php t('Network')?> 10 <?php t('GBit')?></div>
<div class="price-block">
<div class="price chf"><span class="val">10</span> CHF</div>
<div class="price usd"><span class="val">10</span> USD</div>
<div class="price eur"><span class="val">10</span> EUR</div>
</div>
<table width=100%><tr><td align=center><a href="" class="buynow"><?php t('Buy')?></a></td></tr></table>
</div>
-->

<div class="sync-h1"><?php t('Or select plan')?></div>


<table width=820><tr>

          <?php $i = 0 ?>
          <?php foreach($configs as $config): ?>
          <?php $i++ ?>

          <?php if(!$config->available) continue; ?>


<td width=33% align=center>
             





<div class="sync-block bb<?php include_partial('productfield', array('value' => $config->disk_space)) ?>ba"><h4><?php echo $config->name ?></h4>
<div class="sync-storage bb<?php include_partial('productfield', array('value' => $config->disk_space)) ?>ba"><?php include_partial('productfield', array('value' => $config->disk_space)) ?> <?php t('GB')?></div>
<div class="sync-network"><?php t('Network')?> 10 <?php t('GBit')?></div>
<div class="price-block">
<div class="price chf"><span class="val"><?php echo price($config->price) ?></span> CHF</div>
<div class="price usd"><span class="val"><?php echo usd($config->price) ?></span> USD</div>
<div class="price eur"><span class="val"><?php echo eur($config->price) ?></span> EUR</div>
</div>
<table width=100%><tr><td align=center><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow"><?php t('Buy')?></a></td></tr></table>
</div>




</td>


          <?php endforeach ?>

</tr></table>


                                                   
<br>


        </div>
        <script>
            $('#discount-slider').discountSlider({
                'prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { $s .= "'$config->price', "; } echo trim($s, ', '); ?>),
                'usd' : <?php echo sfConfig::get('solar_usd_rate') ?>,
                'eur' : <?php echo sfConfig::get('solar_eur_rate') ?>,
                'discount_per_month' : <?php echo $basic_discount ?>,
                'bittorrent': true
            })
        </script>
        <br>
    </td>
</tr>

<tr>
    <td width="964" class="barlistdown" height=3>
    </td></tr>

</table>

<br>
<div class="content" align=center>
<table width=100%><tr><td align=center><img src="/images/partner/fresh/sync.png" width=800 height=400 border=0></td></tr></table>
</div>

</div>
