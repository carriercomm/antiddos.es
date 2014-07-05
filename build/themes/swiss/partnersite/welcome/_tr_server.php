

    <div class="server_name_font"><?php t('prefix_'.$group) ?></div>
    <div class="server_name"><?php t('prefix_'.$group.'_text') ?></div>


    <div align="center">

     <table border="0" cellpadding="6" cellspacing="0" width="970"><tbody><tr height="90">
        </tr><tr>
            <td width="180" class="server_title">Server name</td>
			<td width="135" class="server_title">CPU</td>
            <td width="40" class="server_title">Cores</td>
            <td width="120" class="server_title">RAM</td>
            <td width="65" class="server_title">Storage</td>
            <td width="105" class="server_title">RAID</td>
            <td width="17" class="server_title" align="center"><div class="vert">KVM/IPMI</div></td>
            <td width="17" class="server_title" align="center"><div class="vert">DDoS protection</div></td>
            <td width="17" class="server_title" align="center"><div class="vert">Instant setup</div></td>
			<td width="17" class="server_title" align="center"><div class="vert">24/7 support</div></td>
            <td width="160" class="server_title">Price per month</td>
            <td></td>
        </tr>

    </tbody></table>

    <div style="font-size: 0px; height: 7px;"></div>


        <?php foreach($configs as $config): ?>
			<?php if ($config->getInstock() > 0): ?>
        <?php if(!$config->available || $config->group != $group) continue; ?>

        <div class="server_div_main server_<?php echo strtolower(str_replace(' ','_',$config->name)) ?>">

 		    <table border="0" cellpadding="6" cellspacing="0" width="970"><tbody>
              <tr>

                    <td class="server_name_main">

                        <table border="0" height="28" width="160px">
                            <tr>
                                <td width="110" style="line-height: 15px;" nowrap>
                                    <font class="server_name_font"><?php echo $config->name ?></font>
                                    
                                </td><td width="48"><img src="<?php echo solar_template_image_url('xeon-1.png') ?>"  border="0" style="margin-top: 4px;"></td></tr></tbody></table>
                                    

                    </td>

                    <td width="120" class="server_info_main small"><font color="#042F75"><?php include_partial('productfield', array('value' => $config->cpu)) ?></font></td>
                    <td width="36" class="server_info_main"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
                    <td width="110" class="server_info_main"><?php include_partial('productfield', array('value' => $config->ram)) ?></td>
                    <td width="60" class="server_info_main"><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
                    <td width="90" class="server_info_main"><?php include_partial('productfield', array('value' => $config->raid)) ?></td>
<td width="16" class="server_info_main"><img src="<?php echo solar_template_image_url('accept.png') ?>" width="16" height="16" border=0></td>
                    <td width="16" class="server_info_main"><img <?php if ($config->only_eco) { echo 'src="'.solar_template_image_url('noaccept.png').'"'; } else { echo 'src="'.solar_template_image_url('accept.png').'" class="ddos_protection"'; } ?>" width="16" height="16" border=0></td>
                    <td width="16" class="server_info_main"><img src="<?php echo solar_template_image_url('accept.png') ?>" width="16" height="16" border=0></td>
<td width="16" class="server_info_main"><img src="<?php echo solar_template_image_url('accept.png') ?>" width="16" height="16" border=0></td>
                    <td width="70" class="server_price price-for-<?php echo strtolower(str_replace(' ','_',$config->name)) ?>">

                        <font class="chf v2"><span class="val"><?php echo $config->price ?></span> CHF</font><br>
                        <font class="usd"><span class="val"><?php echo usd($config->price) ?></span> USD</font><br>
                        <font class="eur"><span class="val"><?php echo eur($config->price) ?></span> EUR</font><br>


                    </td>
                    <td width="90" class=""server_info_main" buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>?bill=1&eco=1" class="buynow_x"><div class="cdiv" width="28"><img src="<?php echo solar_template_image_url('cart-1.png') ?>" border="0" class="leftimgn"></div><div class="vspan">Purchase</div></a></span></td>

                </tr></tbody>
            </table>


        </div>
        <div style="height: 6px;"> </div>
<?php endif ?>
    <?php endforeach ?>





</div>