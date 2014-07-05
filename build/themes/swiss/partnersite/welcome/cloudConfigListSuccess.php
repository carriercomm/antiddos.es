
<style>

.tdbar_st3_left { background:url('/images/partner/swiss/slider6_01.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/images/partner/swiss/slider6_02.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/images/partner/swiss/slider6_03.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/images/partner/swiss/slider6_04.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/images/partner/swiss/slider6_06.jpg') repeat-x left top;  width: 100%; height: 29px; }

.content, .bodycontent { margin-top: 15px; line-height: 22px;
line-height: 15px;
background: url('/images/partner/swiss/startcontent.png') no-repeat left top;
background: url('/images/partner/swiss/startcontent.png') no-repeat left top, url('/images/partner/swiss/contentbar.png') repeat-x 0px 10px;
width: 100%;
height: 48px;
width: auto;
height: auto;
padding: 8px 0px 0px 0px; }

</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_cloud_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo t('text_head_cloud_2') ?></font><?php end_slot() ?>



				<!-- Region main-top -->
			
						<div class="main-top-inner">
								
								<div class="major-tabs">
										
										<div class="major links-group">
												<div class="tab active first" id="tab-1"><span><?php t('Cloud Details')?></span></div>
												<div class="tab last" id="tab-2"><span><?php t('Compare Servers')?></span></div>
										</div>
										
										<div class="major content-group">
												
												<!-- Content of first tab - Table server configurations -->
												<div class="content active tab-1">
														<div class="servers-slider">
																<div class="servers-slider-background">
																		<div class="back-1"></div>
																</div>
																<div class="list_carousel">
																		<ul id="servers-carousel">
		
																		
																			<li class="item-slider">
																						<div class="title-group"><div class="servers-not"></div>
									<span class="servers-title"><font color="#F57815">Cloud Trial</font></span>
																								<span class="servers-title-pseudo"><?php t('Free')?> <?php t('Instant Cloud')?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/cloud_server.jpg" alt="DDOS Protected Cloud" height="65">
																								<div class="price-euro">
																									<span class="badge"></span>
																									
																									<span class="price">7 days <?php t('Free')?> trial</span>
																										<span class="period"></span>
																								</div>
																								<div class="price-other">
																										<span class="price">-</span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price">-</span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description">2.4 Ghz Intel Xeon - 512 MB DDR3 RAM - 10 GB SAN HDD - 500 GB Bandwidth - 10 Gbit/s - <?php echo t('Instant',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;">
																								CPU: 2.4 Ghz Intel Xeon	<br>
																								Cores:	1 <br>
																								Processing Power: 2.4 GHz  <br>
																								Maximum Servers:	1 <br>
																								More CPU Cores: available<br>
RAM:	512 MB<br>
Storage:	10 GB <br>
Storage Grade: High-Availability SAN<br>
Bandwidth:	500GB <br>  
Network: 10 Gigabit Public & Private Networks <br>
Anti DDoS: yes<br>
DDos Protection: 10 Gigabit multi layer<span></span></span>
																						</div>
																						<div class="servers-order form">
																								<div class="back-item"></div>
																								<form>
																										<div class="submit-container">
																												<input type="button" id="add-cart-submit" value="<?php t('Free')?> <?php t('Cloud')?>" onclick="location.href='<?php echo url_for('@show_page?name=free-vps') ?>';" />
																										</div>
																								</form>
																						</div>
																						<div class="server-item-shadow"></div>
																						<div class="server-item-border"></div>
																				</li>
																		
																				<!-- Cloud products -->					
														
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

																				
																				<li class="item-slider">
																						<div class="title-group">

																						<?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?>
																								<span class="servers-title"><?php echo $config->name ?></span>
																								<span class="servers-title-pseudo">Instant Protected Cloud</span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/cloud_server.jpg" alt="DDOS Protected Cloud" height="65">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo price($config->price) ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php include_partial('productfield', array('value' => $config->cpu)) ?> - <?php include_partial('productfield', array('value' => $config->ram)) ?> MB RAM - <?php include_partial('productfield', array('value' => $config->storage)) ?> GB HDD - <?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB <?php t('Bandwidth')?>, 10 Gbit/s, <?php echo t('Instant',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;"><?php include_partial('productfield', array('value' => $config->cpu)) ?> <br> <?php t('CORES')?>:<?php include_partial('productfield', array('value' => $config->cores)) ?><br><?php t('RAM')?>:<?php include_partial('productfield', array('value' => $config->ram)) ?>  MB<br> <?php t('Storage')?>:<?php include_partial('productfield', array('value' => $config->storage)) ?> TB<br><?php t('Bandwidth')?>:<?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB, 10 Gbit/s<span></span></span>
																						</div>
																						<div class="servers-order form">
																								<div class="back-item"></div>
																								<form>
																										<div class="submit-container">
																												<input type="button" id="add-cart-submit" value="<?php t('Buy')?>" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';" />
																										</div>
																								</form>
																						</div>
																						<div class="server-item-shadow"></div>
																						<div class="server-item-border"></div>
																				</li>
																				
																				
																				
																				
																				<?php endforeach ?>
																				
																					<!-- END Cloud products -->		
																		
																					
																					
																					
																				
																		</ul>
																		</ul>
																		<a id="prev" class="prev" href="#">&lt;</a>
																		<a id="next" class="next" href="#">&gt;</a>
																</div>
														</div>
												</div>
												<!-- End content of first tab -->
												
												<!-- Content of thecond tab - servers slider -->
												
												
												<div class="content tab-2">
														
														<div class="overview-table">
																			
																			
																	<br><br>
																			<!-- cloud products -->		<table>
																		<thead>
																				<tr>
																						<th class="name" width="160"><?php t('Cloud Server')?></th>
																						<th class="cpu" width="140" ><?php t('CPU') ?></th>
																						<th class="cores" width="80" > <?php t('Cores')?> </th>
																						<th class="ram" width="80" ><?php t('RAM')?></th>
																						<th class="storage" width="120" ><?php t('Storage')?></th>
																						<th class="raid" width="130" ><?php t('Bandwidth')?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr></thead>
																		<tbody>
														
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>


																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?><?php if($config->hot): ?>

																						<div class="servers-hot"></div><?php endif ?>
<?php if($config->new): ?>

<div class="servers-new"></div>


<?php endif ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																						<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																						<td class="server-info ram" ><?php include_partial('productfield', array('value' => $config->ram)) ?>  MB</td>
																						<td class="server-info storage" ><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																						<td class="server-info raid" ><?php include_partial('productfield', array('value' => $config->bandwidth)) ?> TB, 10 Gbit/s</td>
																						<td class="server-info price" colspan="2">
																								<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																								
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow1"><?php t('Buy')?></a></span></td>
																				</tr>
																				<?php endforeach ?>	
																				
																				<!-- end cloud products -->
																				
																				<tr class="odd"><td colspan=9></td></tr>
																				
																				</tbody>
																</table></div>
																	
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Each Dedicated Server and Cloud Server comes with a wide choice of operating systems</th>
																				</tr></thead>
																		<tbody>
																
																
																			<tr class="odd"><td colspan=9><img src="/images/partner/swiss/linux_windows_freebsd.gif" width=940></td></tr>
																				
																		</tbody>
																		
																		
																		
																</table>

																<br>
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Our 100% protected Cloud Servers and Instant Clouds are equipped with top performing hardware</th>
																				</tr></thead>
																		<tbody>
																
																
																					<tr class="odd"><td colspan=9><img src="/images/partner/swiss/cloudcom_hardware.gif" width=940></td></tr>
																						
																		</tbody>
																		
																		
																		
																</table><br>
																	<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Each Cloudcom Server and Protected Cloud comes with free administration tools</th>
																				</tr></thead>
																		<tbody>
																
																
																						
																							<tr class="odd"><td colspan=9><img src="/images/partner/swiss/remote_administer.jpg" width=940></td></tr>
																		</tbody>
																		
																		
																		
																</table>
																
																<br>
																							
																							
														</div>
												</div>
												<!-- End content of thecond tab -->
												
										</div>
										
								</div>
								
						</div>
				</div></div>
				<!-- End region main-top -->
				
				<!-- Region main-central -->
				<div class="main-central">
						<div class="main-central-inner">

<div style="height: 130px; display: block;">								
								<div class="block free-servers" style="position: absolute; width: 100%; left: 0;">
										<img src="/css/partner/swiss/images/PP-blockall-back.png" height="134"/>
	<div class="title"><?php t('100 Cloud')?></div>
										<div class="description"><?php t('DDoS any Cloud')?></div>
										
								</div>
</div>
								
						</div>
		
				<!-- End region main-central -->
				
		
				<!-- Region main-central -->
				<div class="main-bottom">
						<div class="main-bottom-inner">	



<div class="content" style="padding: 20px;">

<table border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="480" valign="top">

<?php t('cloud_textbox_01',array('%site%'=>$site->getName()))?> 

      <br>
      <br>
      <div align="center"> <img src="/images/partner/clouddiag.png"></div>
      <br>
    </td>
    <td valign="top"> 
      <table border="0" cellpadding="0" cellspacing="0">
        <tr valign="top"> 
          <td width="40">&nbsp;</td>
          <td width="330"> <b><font size="3"><p align="justify"><?php t('Cloud Hosting hardware components')?></font></b><br>
            <br>
            <table width="100%" border="0">
              <tr valign="top"> 
                <td colspan="2"><img src="/images/partner/grey.png" width="100%" height="1"></td>
              </tr>
              <tr valign="top"> 
                <td width="21%"><br>
                  <div style="padding: 5px 0px 0px 0px"><img src="/images/partner/xeon.png"></div>
                </td>
                <td width="79%"><font face="Arial, Helvetica, sans-serif"><br>
<?php t('we_use_intel')?>
<br>
                  <br>
                  </font></td>
              </tr>
              <tr valign="top"> 
                <td colspan="2"><img src="/images/partner/grey.png" width="100%" height="1"></td>
              </tr>
              <tr valign="top"> 
                <td width="21%"><br>
                  <div style="padding: 5px 0px 0px 0px"><img src="/images/partner/arista.png"></div>
                </td>
                <td width="79%"><font face="Arial, Helvetica, sans-serif"><br>

<?php t('10ge_arista')?>
<br>
                  <br>
                  </font></td>
              </tr>
              <tr valign="top"> 
                <td colspan="2"><img src="/images/partner/grey.png" width="100%" height="1"></td>
              </tr>
              <tr valign="top"> 
                <td width="21%"><br>
                  <div style="padding: 5px 0px 0px 0px"><img src="/images/partner/a10.png"></div>
                </td>
                <td width="79%"><font face="Arial, Helvetica, sans-serif"><br>
<?php t('a10networks_copy')?>
<br>
                  <br>
                  </font></td>
              </tr>
              <tr valign="top"> 
                <td colspan="2"><img src="/images/partner/grey.png" width="100%" height="1"></td>
              </tr>
              <tr valign="top"> 
                <td width="21%"><br>
                  <div style="padding: 5px 0px 0px 0px"><img src="/images/partner/coraid.png"></div>
                </td>
                <td width="79%"><font face="Arial, Helvetica, sans-serif"><br>

<?php t('coraid_and_copy')?>
<br>
                  <br>
                  </font></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr valign="top"> 
          <td width="40">&nbsp;</td>
          <td width="330"> 
            <div align="right"><a class="minia" href="<?php echo url_for('@show_page?name=hardware-platform') ?>"><?php t('Read more about hardware we use')?></a> &raquo;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>



<br><br>
<?php t('cloud_textbox_04',array('%site%'=>$site->getName()))?> 


<Br>

</div>
<div class="endcontent"></div>

<div class="content" style="padding: 20px;">





<?php t('cloud_textbox_03',array('%site%'=>$site->getName()))?> 




<br><br>

<table border="0"  cellpadding="6" cellspacing="0" width=100% height=32>

<tr>

<td class="server_title"><?php t('Name')?></td>
<td width=90 class="server_title"><?php t('CPU')?></td>
<td width=90 class="server_title"><?php t('CORES')?></td>
<td width=90 class="server_title"><?php t('RAM')?></td>
<td width=90 class="server_title"><?php t('Storage')?></td>
<td width=90 class="server_title"><?php t('Bandwidth')?></td>
<td colspan="2" class="server_title" width=50><?php t('Price')?> <?php t('per month')?></td>
</tr>

</table>

<div style="font-size: 0px; height: 7px; padding: 0px 0px 0px 20px;"></div>

<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>

<div class="server_div">

<table border="0"  cellpadding="0" cellspacing="0" width=100% height=50>
<tr>

<td class="server_name">

<table cellpadding="0" cellspacing="0" width=100% ><tr>
<td width=40><img src="<?php echo solar_template_image_url('cloud.png') ?>" width=30></td>
<td>
<font class="server_name_font"><?php echo $config->name ?></font>
</td><td>
<?php if($config->hot): ?>&nbsp;&nbsp;<img src="<?php echo solar_template_image_url('hot.png') ?>" ><?php endif ?>
<?php if($config->new): ?>&nbsp;&nbsp;<img src="<?php echo solar_template_image_url('new.png') ?>" ><?php endif ?>
</td></tr></table>

</td>

<td width=90 class="server_info"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
<td width=90 class="server_info"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
<td width=90 class="server_info"><?php include_partial('productfield', array('value' => $config->ram)) ?> <?php t('MB')?></td>
<td width=90 class="server_info"><?php include_partial('productfield', array('value' => $config->storage)) ?> <?php t('GB')?></td>
<td width=90 class="server_info"><?php include_partial('productfield', array('value' => $config->bandwidth)) ?> <?php t('GB')?><br>10 Gbit/s</td>
<td width=70 class="server_price">

<font class="chf"><?php echo eur($config->price) ?> EUR</font><br>
<font class="usd"><?php echo usd($config->price) ?> USD</font><br> 
<font class="eur"><?php echo price($config->price) ?> CHF</font><br>


</td>
<td width=140 class="server_info"><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow"><?php t('Buy')?></a></td>

</tr>
</table>


</div>

<?php endforeach ?>

<div align="left" style="padding: 20px 0px 0px 20px"><br><a class="minic" href="<?php echo url_for('@newcart_item_new?product_id=' . $custom_config->id) ?>">Build your own custom Cloud</a> &raquo;</div><br>
<div align="left" style="padding: 20px 0px 0px 20px"><br><img src="https://server-cloud.r.worldssl.net/images/partner/fresh/cloud_os_templates.png">&nbsp;&nbsp;<a class="minic" href="<?php echo url_for('@cloud_templates') ?>"><?php t('More than 200 OS and Jumpbox templates')?></a> &raquo;</div>






</div>

<script>
    $('#discount-slider').discountSlider({
        'servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { $s .= strtolower("'$config->name', "); } echo trim($s, ', '); ?>),
        'prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { $s .= "'$config->price', "; } echo trim($s, ', '); ?>),
        'usd' : <?php echo sfConfig::get('solar_usd_rate') ?>,
        'eur' : <?php echo sfConfig::get('solar_eur_rate') ?>,
        'discount_per_month' : <?php echo $basic_discount ?>
    })
</script>

<div class="endcontent"></div>


<div class="content"  style="padding: 20px;">


<h3><?php t('Major Advantages of Cloud Hosting')?></h3>
<table align="center" border="0" cellpadding="0" cellspacing="0" width=100%>
  <tr valign="top"> 
    <td width="48%"><b><?php t('Prompt Delivery')?></b><br>
<?php t('system_resources_and_provided')?>
<br>
      <br>
      <b><?php t('Guaranteed Redundancy')?></b><br>
<?php t('all_cloud_nodes')?>
<br>
      <br>
      <b><?php t('Hybrid Environments')?></b><br>
<?php t('dedicatrd_network_enables')?>
<br>
      <br>
      <b><?php t('Good for budget')?></b><br>
<?php t('pay_only_for_the_capacity')?>
       <br><br>
      <b><?php t('Performance')?></b><br>

<?php t('based_on_interl_and_copy_xeon')?>
<br><br>
      <b><?php t('control_iphone_android')?></b><br>

<?php t('stay_with_your_cloud')?>
     </td>
    <td width="50">&nbsp;</td>
    <td><b><?php t('KVM over IP')?></b><br>

<?php t('instant_access_to_kvm')?>
<br>
      <br>
      <b><?php t('Easy Upgrades')?></b><br>

<?php t('ability_to_initially')?>
<br>
      <br>
      <b><?php t('Image Library')?></b><br>
<?php t('more_than_200')?>
<br>
      <br>
      <b><?php t('Control Panel & Self-Service')?></b><br>
      <?php t('every_aspect_of_your_cloud')?>
      <br><br><b><?php t('Automated Recovery')?></b><br>
<?php t('designed_to_automatically')?>
</td>
      </tr>
</table><br>



</div>


</div>
<div class="endcontent"></div>

<div class="content"  style="padding: 20px;">





<h3><?php t('welcome_prices_for_upgrades')?></h3>

<?php include_partial('welcome/addons', array('addons' => $addons)) ?>




<?php slot('kf_server_0') ?>


<div class="ft cloud" style="padding: 20px 0px 0px 20px">

<font class="point big"><?php t('Why go Cloud?')?></font>
<div style="height: 16px; font-size: 0px;"></div>

<table cellpadding="0" cellspacing="0" border=0><tr><td nowrap class="ft_font">
<font class="point middle"><?php t('Full Server Control')?></font><br>
<font class="point middle"><?php t('High-Availibility')?></font><br>
<font class="point middle"><?php t('Elastic Performance')?></font><br>
<font class="point middle"><?php t('Pay As You Go')?></font><br>
<font class="point middle"><?php t('Self-healing Storage')?></font><br>

</td><td width=40> </td><td nowrap class="ft_font">

<font class="point middle"><?php t('Xen Hypervisor')?></font><br>
<font class="point middle"><?php t('Console Access')?></font><br>
<font class="point middle"><?php t('Rapid Deployment')?></font><br>
<font class="point middle"><?php t('Multiple OS supported')?></font><br>
<font class="point middle"><?php t('64-bit architecture')?></font><br>
</td></tr></table>

</div>

<?php end_slot() ?>

<?php slot('kf_server_1') ?>

<div class="ft cloud2">

<font class="point big"><?php t('Bandwidth')?></font>

<div style="height: 16px; font-size: 0px;"></div>
	
<font class="point middle"><?php t('Free in-house bandwidth')?></font><br>
<font class="point middle"><?php t('10 gbit/s LAN port')?></font><br>
<font class="point middle"><?php t('Multi-homed connection')?></font><br>
<font class="point middle"><?php t('Fully redundant')?></font><br>
<font class="point middle"><?php t('99.9% Uptime SLA')?></font><br>


</div>

<?php end_slot() ?>

<?php slot('kf_server_title_0') ?>
<?php t('Why go Cloud?')?>
<?php end_slot() ?>

<?php slot('kf_server_title_1') ?>
<?php t('Bandwidth')?>
<?php end_slot() ?>

<br>

</div>


<br>


<div class="content_clear" align=left style="width: 100%;">
<center>

<table><tr><td>
<?php include_partial('welcome/kf_server') ?>
</td></tr></table>
</div>






<div class="content" style="padding: 20px;">


<?php t('cloud_textbox_02',array('%site%'=>$site->getName()))?> 


</div>





