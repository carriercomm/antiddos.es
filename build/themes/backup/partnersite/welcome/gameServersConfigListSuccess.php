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

.slider_title {
font-family: "monospace";
font-size: 50px;
font-weight: bold;
text-shadow: 2px 2px 0 rgb(83, 83, 83);
color: rgb(190, 190, 230);
}
.server-name {
font-size: 19px;
font-family: arial;
color: #038dba;
text-align: left;
line-height: 34px;
}
.block.try-our-server .title {
padding: 21px 0;
font-family: arial;
font-size: 17px;
}

.slider_text {
font-family: "monospace";
font-weight: bold;
font-size: 35px;
text-shadow: 0px 1px 0 #000;
color: rgb(230, 230, 230);
margin-right: 8px;
}

.block.minecraft-table table thead th {
height: 53px;
text-shadow: 0px -1px 2px rgba(32, 128, 175, 0.75);
color: #ffffff;
font-size: 15px;
font-family: "Arial";
font-weight: normal;
}

.block.minecraft-table table .server-info.cpu {
background-color: #d7f0f8;
color: #484848;
font-size: 13px;
font-family: "Arial";
padding-left: 10px;
}

.block.minecraft-table thead th {
text-align: center;
}


.block.minecraft-table table .server-info.name {
padding-left: 18px;
color: #3c3c3c;
font-size: 25px;
font-family: "Arial";
}

.block.minecraft-table thead .name {
padding-left: 1px;
}
.block.minecraft-table table thead th {
height: 35px;
text-shadow: 0px -1px 2px rgba(32, 128, 175, 0.75);
color: #ffffff;
font-size: 17px;
font-family: "Arial";
font-weight: normal;
}

.block.minecraft-table table .server-info.price .price-euro {
font-family: "Verdana";
color: #fa7a12;
}
.block.minecraft-table table .server-info.price .price-euro .badge {
font-size: 20px;
position: relative;
bottom: 0px;
}
.block.minecraft-table table .server-info.price .price-euro .price {
font-size: 20px;
}

.block.minecraft-table .server-info.cores {
color: #484848;
font-size: 13px;
font-family: "Arial";
padding-left: 11px;
}
.block.minecraft-table table {
border-spacing: 1px;
}

.block.minecraft-table table .server-info.buy, .block.minecraft-table table .server-info.buy a {
color: #000000;
font-size: 15px;
font-family: "Square Sans Pro";
text-decoration: none;
text-shadow: 0px 0px 1px rgba(187, 187, 187, 0.75), 0px 0px 1px rgba(187, 187, 187, 0.75);
}

.block.minecraft-table table .server-info.ram, .block.minecraft-table .server-info.storage {
text-align: left;
color: #484848;
font-size: 10px;
font-family: "Arial";
}

.block.minecraft-table table .server-info.raid {
color: #484848;
font-size: 11px;
font-family: "Arial";
padding-left: 10px;
}

.block.minecraft-table table .server-info.price .price-other {
color: #525252;
font-size: 11px;
font-family: "Square Sans Pro";
}

.block.minecraft-table table .server-info.cpu {
background-color: #d7f0f8;
color: #484848;
font-size: 11px;
font-family: "Arial";
padding-left: 10px;
}

Inherited from table
.block.minecraft-table table {
text-align: left;
}

.block.minecraft-table table .server-info.name {
padding-left: 14px;
color: #3c3c3c;
font-size: 21px;
font-family: "Arial";
}

</style>
	<!-- Header group -->
		
		<?php slot('slider_title') ?><?php echo t('DDoS Protected Game Servers') ?><?php end_slot() ?>
<?php slot('slider_text') ?><?php echo t('Dedicated Game Servers with DDoS Protection') ?><?php end_slot() ?>
									
								
					
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
																<a href><?php t('Intel Six-Core')?></a>
																</div>
												</div>
												<div class="second-link link" id="link-2">
																<div class="inner-link">
																<a href><?php t('Free DDoS Protection')?></a>
																</div>
												</div>
												<div class="third-link link" id="link-3">
																<div class="inner-link">
																<a href><?php t('IPMI included')?></a>
																</div>
												</div>
												<div class="four-link link" id="link-4">
																<div class="inner-link">
																<a href><?php t('Solid-State HDDs')?></a>
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
																<span id="mail_number_order" class="e-number-of-mailbox-input" name="mail_number_order">0</span>
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
																						<th class="name" width="150"><?php t('Game Server')?></th>
																						<th class="cpu" width="120"><?php t('CPU')?></th>
																						<th class="cores" width="60"><?php t('Cores')?></th>
																						<th class="ram" width="80">RAM</th>
																						<th class="storage" width="110"><?php t('HDD')?></th>
																						<th class="raid" width="130"><?php t('Raid')?></th>
																						
<th class="price" width="160">Price per month</th>
<th class="price" colspan="2" width="80"></th>
														</tr>
												</thead>
												<tbody> 
												<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available || $config->only_eco) continue; ?>
												<tr class="odd first">
																		<td class="server-info name"><?php echo $config->name ?> <?php t('Server')?><?php if ($config->getInstock() < 1): ?><br>

																						<font size="1px" color="darkorange">  out of stock!</font><?php endif ?></td> 
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
										<div class="title"><?php t('DDoS Protected Dedicated Game Servers')?></div>
										<div class="description"><?php t('DDoS Protection included. 10 Gigabit per sec. Fast Dedicated Servers for gaming.')?></div>
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
																				<div class="title"><?php t('Reliable Game Server Hosting')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
																								</div>
																				</div>
																				<div class="description">
																				<?php t('Cloudcom offer')?>
																		<br>
																				<a href="<?php echo url_for('@livechat') ?>" class="more"><?php t('chat_with_us') ?></a>
																				</div>
																		</div>
																		<div class="item-content minecraft-2">												
																				<div class="title"><?php t('Great for Minecraft')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
																								</div>
																				</div>
																				<div class="description"><?php t('Minecraft lovers')?>
																			<br>
																				<a href="<?php echo url_for('@show_page?name=future-ready') ?>" class="more"><?php t('Read more...')?></a>
																				</div>
																		</div>
																		<div class="item-content minecraft-3">
																				<div class="title"><?php t('Powerful and Safe Lineage Servers')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
																								</div>
																				</div>
																				<div class="description"><?php t('Lineage supported')?>
																			
																				<a href="<?php echo url_for('@show_page?name=free-ddos-protection') ?>" class="more"><?php t('Read more...')?></a>	
																				</div>
																		</div>
																		<div class="item-content minecraft-4">
																				<div class="title"><?php t('Shooters and Counter Strike Servers')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
																								</div>
																				</div>
																				<div class="description"><?php t('Cloudcom CS')?>
																				<br>
																				<a href="<?php echo url_for('@show_page?name=hardware-platform') ?>" class="more"><?php t('Read more...')?></a>	
																				</div>
																		</div>
																		<div class="item-content minecraft-5">
																				<div class="title"><?php t('RPG and MMORPG Game Servers')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
																								</div>
																				</div>
																				<div class="description">
																	<?php t('Cloudcom MORPG')?>	<br>	
																				<a href="<?php echo url_for('@livechat') ?>" class="more"><?php t('chat_with_us') ?></a></div>
																		</div>
																		<div class="item-content minecraft-6">
																				<div class="title"><?php t('Save money')?>
																								<div class="to-up">
																										<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																										<span class="helper"><?php t('Back to top')?></span>
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
												<div class="title">	<?php t('Our Protected Dedicated Game Servers offer')?>
														<div class="to-up">
																<a class="top" data-ajax="false" data-role="button" href="#top_ahchor"></a>
																<span class="helper"><?php t('Back to top')?></span>
														</div>
												</div>
												<div class="first-img link">
														<div class="description">
																<div class="title"><?php t('No Lag')?></div>
																<div class="text">
																 <?php t('Complete no lag, ddos safe and ddos-ready dedicated servers built especially for game server purposes.')?>
																</div>
																<div class="border-item"></div>
														</div>
												</div>
												<div class="second-img link">
														<div class="description">
																<div class="title"><?php t('We are Minecraft-ready')?></div>
																<div class="text"> <?php t('Minecraft and other games can be perfectly fit on Dedicated Servers by Cloudcom, hosted in Europe, with 10 GB ddos protection included. ')?>
 																</div>
																<div class="border-item"></div>
														</div>
												</div>
												<div class="third-img link">
														<div class="description">
																<div class="title"><?php t('BuyCraft Friendly')?></div>
																<div class="text"><?php t('Manage your online game server business with all mods you need - Our servers support all kinds of multiplayer game server mods and work flawlessly without glitches or downtimes!')?> 
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
																								<li class="item"><?php t('Virtualization ready')?></li>
																								<li class="item"><?php t('Private networking')?></li>
																								<li class="item"><?php t('Multi Interface Connections')?></li>
																								<li class="item"><?php t('Multiple Upstream Carriers')?></li>
																								<li class="item"><?php t('Fully Redundant')?></li>
																								<li class="item"><?php t('99% Uptime')?></li>
																								<li class="item"><?php t('Free DDoS Mitigation')?></li>
																								<li class="item"><?php t('Fast Delivery')?></li>
																								<li class="item"><?php t('Reliable Servers')?></li>
																								<li class="item"><?php t('IPMI included')?></li>
																								<li class="item"><?php t('RAM Upgrades')?></li>
																								<li class="item"><?php t('Low costs')?></li>
																						</ul>
																				</div>
																		</div>
																</div>
														</div>
														<div class="key-featurs-border"></div>
												</div>
												
												<!-- Try your self block -->
												<div class="block try-our-server">
														<div class="title"><?php t('Our Game Servers include')?></div>
														<div class="server-name"><?php t('DDoS Mitigation')?></div>
														<div class="server-name"><?php t('Server IPMI Control')?></div>
														<div class="server-name"><?php t('Best Hardware')?></div>
														<div class="server-name"><?php t('15 TB of Bandwidth')?></div>
														<div class="server-name"><?php t('1 gbps Lan Ports')?></div>
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
							
