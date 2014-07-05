<script type="text/javascript">
$('.left').css('height', $('.big_center').css('height'));

var windowHeight = $(window).height();
var $box = $('#features');
var $parent = $('#body');
var parentAbsoluteTop = $parent.offset().top;
var parentAbsoluteBottom = parentAbsoluteTop + $parent.height();
var topStop = parentAbsoluteTop + $box.height();

$(window).scroll(function(event) {
    var windowBottom = $(window).scrollTop() + $box.height() ;

    if (windowBottom < topStop)
        $box.css({
            position: 'absolute',
            top: '0px',
            bottom: 'auto'
        });
    else if (windowBottom >= topStop && windowBottom <= parentAbsoluteBottom)
        $box.css({
            position: 'fixed',
            top: '20px',
            bottom: 'auto'
        });
    else
        $box.css({
            position: 'absolute',
            top: 'auto',
            bottom: '20px'
        });
});

// discount slider

    $('#discount-slider').discountSlider({
        'servers' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available) continue; $s .= strtolower("'".str_replace(' ','_',$config->name)."', "); } echo trim($s, ', '); ?>),
        'prices' : new Array(<?php $s=''; foreach($configs as $key=>$config) { if(!$config->available) continue; $s .= "'$config->price', "; } echo trim($s, ', '); ?>),
        'usd' : <?php echo sfConfig::get('solar_usd_rate') ?>,
        'eur' : <?php echo sfConfig::get('solar_eur_rate') ?>,
        'discount_per_month' : <?php echo $basic_discount->discount ?>
    })
</script>
		
	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/css/minecraft.css" />
			<script type="text/javascript" src="/css/partner/swiss/js/jscript.minecraft.js"></script>
			<script type="text/javascript" src="/css/partner/swiss/js/jquery-ui 1.8.16.js"></script>
		<style>
		.after-block { border-right: 0px solid #e6ecef; border-left: 0px solid #e6ecef;  border-bottom: 0px solid #e6ecef; width: 199px; padding: 20px 20px 20px 2px; }
.tdbar_st3_left { background:url('/css/partner/swiss/images/bg-minecraft1.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/css/partner/swiss/images/bg-minecraft2.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/css/partner/swiss/images/bg-minecraft3.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/css/partner/swiss/images/bg-minecraft1_bottom.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/css/partner/swiss/images/bg-minecraft3_bottom.jpg') repeat-x left top;  width: 100%; height: 29px; }
.block.dedicated-servers .title {
font-family: "Arial";
font-size: 16px;}
h3 {
margin-top: 10px;
font-size: 18px;
}
.slider_pre {
text-align: right;
margin-top: 227px;
margin-right: 2px;
}
.block.freeddos-servers .description {
font-family: "Arial";
font-size: 13px;}

.slider_text {
font-family: "monospace";
font-weight: bold;
font-size: 25px;
text-shadow: 0px 1px 0 #000;
color: rgb(175, 120, 49);
margin-right: 8px;}

.slider_title {
font-family: "LogoCraft";
font-size: 33px;
text-shadow: 2px 2px 0 #000;
color: rgb(231, 114, 22);
}

</style>
	<!-- Header group -->
		
		<?php slot('slider_title') ?><?php echo t('Protected Minecraft') ?><?php end_slot() ?>
<?php slot('slider_text') ?><?php echo t('DDoS Protected Minecraft Dedicated Game Servers') ?><?php end_slot() ?>
									
								
					
		<!-- End header group -->


<body>
		
	
		
		<!-- Main group -->
  
						
				<!-- Region main-top -->
				<div class="main-top">
						<div class="main-top-inner">
								
								<!-- Block  main four link -->
								<div class="four-links four-div">
																
										<!-- Block four link inner-->
										<div class="four-div-inner links-group">
												<div class="first-link link" id="link-1">
																<div class="inner-link">	
																<a href><?php t('Top Hardware')?></a>
																</div>
												</div>
												<div class="second-link link" id="link-2">
																<div class="inner-link">
																<a href><?php t('Bulletproof')?></a>
																</div>
												</div>
												<div class="third-link link" id="link-3">
																<div class="inner-link">
																<a href><?php t('Full Control')?></a>
																</div>
												</div>
												<div class="four-link link" id="link-4">
																<div class="inner-link">
																<a href><?php t('Easy Upgrade')?></a>
																</div>
												</div>
												
										</div>
										<!-- End block  main four link inner -->
										
								</div>
								<!-- End block four link -->
								
								<!-- Block slider discount-->
								<div class="block discount-counter">
										<div class="slider-body"><?php t('Select the billing period in months to see your discount')?>:</div>
										<div class="mail-amount-input-wrp">
													
												<div class="paysumm">
														<div class="sum">
																<span id="mail_number_order" class="e-number-of-mailbox-input" name="mail_number_order">16</span>
																%
														</div>
														<div class="monthinner">
																<span id="month_number_order">1</span>
																month(s)
														</div>
												</div>
                    </div>


                    <div class="b-amount-mail-order-wrp">
                
                        <div id="b-amount-mail-order-slider"><!-- slider --></div>
                        <ul class="b-designation-of-mailboxes">
                            
                            <li class="e-item-designation-of-mailboxes e-item-designation_1">1</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_2">2</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_3">3</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_4">4</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_5">5</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_6">6</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_7">7</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_8">8</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_9">9</li>
														<li class="e-item-designation-of-mailboxes e-item-designation_10">10</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_11">11</li>
                            <li class="e-item-designation-of-mailboxes e-item-designation_12">12</li>
                        </ul>

												
                    </div>
										
									<div class="term-border"></div>	
								</div>
			<!-- Block table minecraft-->
								<div class="block minecraft-table">
										<table>
												<thead>
														<tr>
																						<th class="name" width="120"><?php t('Minecraft Server')?></th>
																						<th class="cpu" width="120"><?php t('CPU')?></th>
																						<th class="cores" width="60"><?php t('Cores')?></th>
																						<th class="ram" width="60"><?php t('RAM')?></th>
																						<th class="storage" width="110"><?php t('HDD')?></th>
																						<th class="raid" width="130"><?php t('Raid')?></th>
																						<th class="price" colspan="3" width="260"><?php t('Price per month')?></th>
														</tr>
												</thead>
												<tbody> 
												<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
												<tr class="odd first">
																		<td class="server-info name"><?php echo $config->name ?></td> 
																		<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td>
																		<td class="server-info cores"><?php include_partial('productfield', array('value' => $config->cores)) ?></td>
																		<td class="server-info ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td>
																		<td class="server-info storage"><?php include_partial('productfield', array('value' => $config->storage)) ?></td>
																		<td class="server-info raid"><?php include_partial('productfield', array('value' => $config->raid)) ?></td>
																		<td class="server-info price">
																		<div class="price-euro">
																										<span class="badge">&#8364</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																								</div>
																								<div class="price-other">
																										<span class="price">/<?php echo $config->price ?> CHF</span><br>
																										<span class="price">/<?php echo usd($config->price) ?> USD</span>
																								</div>
																						</td>
																						<td class="server-info buy"><span><a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buy"><?php t('Buy')?></a></span></td>
												</tr>
												
												<?php endforeach ?>
												
												</tbody> 
										</table>	
										
										
										
								</div>
								
						</div>
				</div>
				<!-- End region main-top -->
				
				<!-- Region main-central -->
									<div class="main-central-inner">

<div style="height: 130px; display: block;">								
								<div class="block free-servers" style="position: absolute; width: 100%; left: 0;">
										<img src="/css/partner/swiss/images/PP-blockall-back.png" height="134"/>
										<div class="title"><?php t('100 Protected')?></div>
										<div class="description"><?php t('DDoS any Minecraft')?></div>
								</div>
</div>
								
						</div>
		
				<!-- End region main-central -->
				
		
				<!-- Region main-central -->
				<div class="main-bottom">
						<div class="main-bottom-inner">
								
								<!-- Block with minecraft big -->
								<div  id="top_ahchor" class="block minecraft">
										<div class="minecraft-container">
																<div class="minecraft content-group">
																		<div class="item-content minecraft-1">
																				<div class="title"><?php t('Powerful Game Server Hosting')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description">
																		<?php t('Minecraft-ready')?><br>
																				<a href="<?php echo url_for('@livechat') ?>" class="more"><?php t('chat_with_us') ?></a>
																				</div>
																		</div>
																		<div class="item-content minecraft-2">												
																				<div class="title"><?php t('Premium bandwidth providers')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description"><?php t('upstream')?>
																			
																				<a href="<?php echo url_for('@show_page?name=future-ready') ?>" class="more"><?php t('Read more...')?></a>
																				</div>
																		</div>
																		<div class="item-content minecraft-3">
																				<div class="title"><?php t('Protection up to')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description"><?php t('info_free_protection')?>
																			
																				<a href="<?php echo url_for('@show_page?name=free-ddos-protection') ?>" class="more"><?php t('Read more...')?></a>	
																				</div>
																		</div>
																		<div class="item-content minecraft-4">
																				<div class="title"><?php t('Remote reboot')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description">
																				<?php t('info_free_kvm')?>
																				<a href="<?php echo url_for('@show_page?name=hardware-platform') ?>" class="more"><?php t('Read more...')?></a>	
																				</div>
																		</div>
																		<div class="item-content minecraft-5">
																				<div class="title"><?php t('Easy Server')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description">
																				<?php t('info_free_plugin')?>	
																				<a href="<?php echo url_for('@livechat') ?>" class="more"><?php t('chat_with_us') ?></a></div>
																		</div>
																		<div class="item-content minecraft-6">
																				<div class="title"><?php t('Save money')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper">Back to top</span>
																								</div>
																				</div>
																				<div class="description">
																			<?php t('info_free_eco')?>
																				<a href="http://cloudc.me/en/news/44" class="more"><?php t('Read more...')?></a>	
																				</div>
																		</div>
																		
																</div>
																
														</div>
										<!-- Region main-footer block -->
										<div class="block main-bottom-block-img">
												<div class="title">	<?php t('Minecraft Servers compatible')?>
														<div class="to-up">
																<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																<span class="helper">Back to top</span>
														</div>
												</div>
												<div class="first-img link">
														<div class="description">
																<div class="title"><?php t('No Lag')?></div>
																<div class="text">
																 <?php t('many_os')?>
																</div>
																<div class="border-item"></div>
														</div>
												</div>
												<div class="second-img link">
														<div class="description">
																<div class="title"><?php t('Bukkit-ready')?></div>
																<div class="text"><?php t('bukkit')?>
 																</div>
																<div class="border-item"></div>
														</div>
												</div>
												<div class="third-img link">
														<div class="description">
																<div class="title"><?php t('BuyCraft Friendly')?></div>
																<div class="text"><?php t('buycraft')?>
</div>
																<div class="border-item"></div>
														</div>
												</div>
												<div class="main-bottom-block-img-border"></div>
													
										</div>
										<!-- End block  main-footer block -->
								</div>
										
								<!-- Block key features -->
								<div class="left">
										<div class="left-sliding-blocks">
												<div class="block key-featurs">
														<div id="featurs-container">
																
																<div class="features content-group">
																		<div class="features-content active feature-1">
																				<div class="title"><?php t('All servers')?></div>
																				<div class="description">
																						<ul class="list-features">
																								<li class="item"><?php t('Free DDoS Protection')?></li>
																								<li class="item"><?php t('Rapid provisioning')?></li>
																								<li class="item"><?php t('Reliable hardware')?></li>
																								<li class="item"><?php t('KVM/IPMI included for free')?></li>
																								<li class="item"><?php t('Free RAM')?></li>
																								<li class="item"><?php t('Save Money')?></li>
																								<li class="item"><?php t('Virtualization ready')?></li>
																								<li class="item"><?php t('Private networking')?></li>
																								<li class="item"><?php t('Multi-homed connection')?></li>
																								<li class="item"><?php t('Multiple Tier 1 Carriers')?></li>
																								<li class="item"><?php t('Full Redundancy')?></li>
																								<li class="item"><?php t('99% Uptime SLA')?></li>
																						</ul>
																				</div>
																		</div>
																</div>
														</div>
														<div class="key-featurs-border"></div>
												</div>
												
												<!-- Try your self block -->
												<div class="block try-our-server">
														<div class="title"><?php t('Test our server')?>!</div>
														<div class="server-protected"><?php t('DDoS Protected Game Server')?> : </div>
														<div class="server-name">mc.cloudc.me</div>
														<div class="server-ip">46.28.203.18</div>
														<div class="server-mode">Survival mode</div>
														<div class="server-status"><?php t('SERVER ONLINE')?>!</div>
														<div class="try-our-server-border"></div>
												</div>
												
												<!-- End -->
												
																<br>	
																							
												<!-- Block Have a questions? -->
													
																		
										<?php include_partial('welcome/block_adv1') ?>		<!-- Block Have a questions? -->

								<!-- End block key features -->
								

								<!-- End block key features -->
								

								
								
						</div>
				</div>
				<!-- End region main-central -->
				
		</div>
		<!-- End main group -->
							