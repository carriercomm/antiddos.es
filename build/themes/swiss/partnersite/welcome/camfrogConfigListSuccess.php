	
<style>

.block.text-servers {
width: 620px;
display: inline-block;
min-height: 278px;
background-color: #f8f9fc;
border-top: 12px solid #D0EAF4;
border-radius: 10px;
border-radius: 10px;
margin: 9px 0px 15px 10px;
-webkit-box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.75);
-moz-box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.75);
box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.75);
background: #F4F9FD center top no-repeat;

}
.after-block {
background-color: white;
padding: 26px 48px 42px 24px;
}

.block.text-servers .description {margin-left: 20px;
margin-right: 20px;}


.tdbar_st3_left { background:url('/images/partner/swiss/slider6_01.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/images/partner/swiss/slider6_02.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/images/partner/swiss/slider6_03.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/images/partner/swiss/slider6_04.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/images/partner/swiss/slider6_06.jpg') repeat-x left top;  width: 100%; height: 29px; }
.li  { margin-left: -8px;}
.slider_box { position: absolute; width: 980px; text-align: right; border: 0px solid white; }
.slider_pre { text-align: right; margin-top: 144px; margin-right: 10px; }
.slider_title { font-family: "MyFont"; font-size: 50px; text-shadow:  3px 3px 0 #000; color: white; }
.slider_text { font-family: "MyFont"; font-size: 30px; text-shadow:  2px 2px 0 #000; color: white; margin-right: 8px; }

.hrdash { color: #999999;height:1px;border-top:0px;border-style:dashed; border-left: 0px; border-right: 0px; }
.content, .bodycontent { margin-top: 15px; line-height: 22px;
padding-left: 15px;
padding: 1px 1px 1px 1px;
color: #3c3c3c;
font-size: 12px;
font-family: "Arial";
text-shadow: 0px 0px 0px rgba(161, 162, 163, 0.75);	
background: url('/images/partner/swiss/startcontent.png') no-repeat left top;  
background: url('/images/partner/swiss/startcontent.png') no-repeat left top, url('/images/partner/swiss/contentbar.png') repeat-x 0px 10px;  
width: 100%; height: 27px; width: auto; height: auto; 
padding: 0px 0px 0px 0px; 
text-align: left;
color: #39628c; 
color: #000000;
line-height: 17px;}
</style>

<?php slot('slider_title') ?><img src="/images/partner/swiss/camfrog_cloudcom.png" alt="Cloudcom Camfrog Room Servers"><font class="hh_02">&nbsp; &nbsp; &nbsp; <?php echo t('text_head_camfrog_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo t('text_head_camfrog_2') ?></font><?php end_slot() ?>




	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/style2.css" />
		

		<script type="text/javascript" src="/css/partner/swiss/js/jscript.js"></script>						
						
				<!-- Region main-top -->
			
						<div class="main-top-inner">
								
								<div class="major-tabs">
										
										<div class="major links-group">
												<div class="tab active first" id="tab-1"><span><?php t('Browse Products')?></span></div>
												<div class="tab last" id="tab-2"><span><?php t('Compare Details')?></span></div>
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
		
																		
																		
																	<!-- Camfrog products -->		
																		
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>
																				<li class="item-slider">
																						<div class="title-group">
																						
																								
																								<span class="servers-title"><?php t('Protected')?></span>
																								<span class="servers-title-pseudo"><?php echo $config->name ?></span>
																						</div>
																						<div class="price-group"><img src="/images/partner/swiss/camfrog_icon.gif" alt="DDOS Protected Camfrog Rooms">
																								<div class="price-euro">
																										<span class="badge">&#8364;</span>
																										<span class="price"><?php echo eur($config->price) ?></span>
																										<span class="period">/month</span>
																								</div>
																								<div class="price-other">
																										<span class="price"><?php echo $config->price ?></span>
																										<span class="badge">CHF</span>
																										<span class="separator">/</span>
																										<span class="price"><?php echo usd($config->price) ?></span>
																										<span class="badge">USD</span>
																								</div>
																						</div>
																						<div class="servers-description"><?php t('Max Users',array('%site%'=>$site->getName())) ?>: <?php include_partial('productfield', array('value' => $config->max_users)) ?><br><?php t('Protection',array('%site%'=>$site->getName())) ?>: <?php t('Up to 30',array('%site%'=>$site->getName())) ?><br><?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?> <?php t('Setup',array('%site%'=>$site->getName())) ?></div>
																						<div class="servers-link">
																								<a href=""><?php t('Configuration')?></a>
																								<span class="hint" style="display: none;"><?php t('Max Users',array('%site%'=>$site->getName())) ?>:<?php include_partial('productfield', array('value' => $config->max_users)) ?><br><?php t('Camfrog WebPanel',array('%site%'=>$site->getName())) ?><br><?php t('Yes',array('%site%'=>$site->getName())) ?><br><?php t('Protection',array('%site%'=>$site->getName())) ?>: <?php t('Up to 30',array('%site%'=>$site->getName())) ?><br><?php t('Setup',array('%site%'=>$site->getName())) ?>:<?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?><span></span></span>
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
																				
																				<!-- END Camfrog products -->
																				
																				
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
														<br><br>
													 <div class="overview-table">
															<br>	<table>
																		<thead>
															

																				<tr>
																						<th class="name" width="260" ><?php t('Protected Camfrog')?></th>
																						<th class="cpu" width="100" ><?php t('Max Users',array('%site%'=>$site->getName())) ?></th>
																						<th class="cores" width="100" ><?php t('Panel') ?></th>
																						<th class="storage" width="120" ><?php t('Protection',array('%site%'=>$site->getName())) ?></th>
																						<th class="raid" width="130" ><?php t('Setup') ?></th>
																						<th class="price" colspan="3" width="260" align="left"><?php t('Price') ?></th>
																				</tr>
																		</thead>
																		<tbody>
																					<!-- Camfrog products -->		
																		
<?php $i = 0 ?>
<?php foreach($configs as $config): ?>
<?php $i++ ?>

<?php if(!$config->available) continue; ?>																				<tr class="even">
																						<td class="server-info name"><?php echo $config->name ?></td>  
																						<td class="server-info cpu"><?php include_partial('productfield', array('value' => $config->max_users)) ?> users</td>
																						<td class="server-info cores"><?php t('Camfrog WebPanel',array('%site%'=>$site->getName())) ?></td>
																					
																						<td class="server-info storage"><?php t('Up to 30',array('%site%'=>$site->getName())) ?></td>
																						<td class="server-info raid"><?php echo t('Instant',array('%site%'=>$site->getName())) ?> &
<?php echo t('Free',array('%site%'=>$site->getName())) ?></td>
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
																				
																				<!-- End Camfrog products -->	
																				<tr></tr>
																				</tbody>
																</table></div>  


<br><br>
															<div class="overview-table">
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center"><?php t('Each Dedicated')?></th>
																				</tr></thead>
																		<tbody>
																
																
																			<tr class="odd"><td colspan=9><img src="/images/partner/swiss/linux_windows_freebsd.gif" width=940></td></tr>
																				
																		</tbody>
																		
																		
																		
																</table>

																<br>
																<table>
																	<thead>
																				<tr>
																						
																						<th class="price" colspan="9" width="940" align="center">Our Protected Servers and Instant Clouds are equipped with top performing hardware</th>
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
										<div class="title">All Camfrog Rooms are protected for free!</div>
										<div class="description">DDoS protection up to 30 gbps. All protocols and types of attacks.</div>
								</div>
</div>
								
						</div>
		
				<!-- End region main-central -->
				
		
				<!-- Region main-central -->
				<div class="main-bottom">
						<div class="main-bottom-inner">	




<!-- CAMFROG SERVERS !-->
       <div class="content"><table><tr><td width=68%><div class="block text-servers">
										<div class="description">
<?php t('camfrog_text_1',array('%site%'=>$site->getName())) ?></div></td><td width=2%> </td>
<td width=30% valign=top>
<br>
<?php t('camfrog_features',array('%site%'=>$site->getName())) ?>
            

</td></tr></table>
            

<table align=center><tr><td width=68%>
<div class="block text-servers">
										<div class="description">
  <?php t('camfrog_text_2',array('%site%'=>$site->getName())) ?>
  </div></div></td><td width=2%> </td>
<td width=30% valign=top><br><br>
<?php include_partial('welcome/block_adv') ?>
<br>

<?php include_partial('welcome/adv') ?>
  <br><br></td></tr></table>
         
</div>

<!-- CAMFROG SERVERS !-->
