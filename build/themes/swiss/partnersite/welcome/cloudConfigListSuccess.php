<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-cloud-hosting">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Cloud hosting') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Cloud hosting') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/cloud.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix">
										<p class="cloud-title"><?php t('There are considerable reasons why one should choose Cloud Hosting over traditional VPS') ?></p>
										<p><?php t('Here are just some of them. With data mirroring, multiple tier-1 upstream providers, redundant power sources with automatic switch-over and free DDoS protection Cloud Hosting is the best solution to host a mission-critical front-end website or service. Cloud hosting architecture guarantees highest uptime and makes data loss virtually impossible - all for a very reasonable budget. If you are new to Cloud hosting solutions, try one of our servers for a whole calendar week free of charge! Please be advised that ID and phone verification may be required to process a free trial order. Click on the right to request free 7-day trial.') ?></p>
									</div>
									<div class="row clearfix cloud-content">
										<div>
											<p class="cloud-title"><?php t('Billing period & discount selector') ?></p>
											<p><?php t('CoinsHost encourages its clients to choose longer billing periods for their convenience. Longer billing period will also allow you to save considerable amount of money as maximum discount for a 12-month period is 22%.') ?></p>
											<div class="billing-selector">
										<!-- Block slider discount-->
												<div class="block discount-counter">
											
													<div class="mail-amount-mail-wrp">
														<div id="dis-scale">
															<div class="size-item1" ></div>
															<div class="size-item2" ></div>
															<div class="size-item3" ></div>
															<div class="size-item4"></div>
															<div class="size-item5"></div>
															<div class="size-item6"></div>
															<div class="size-item7"></div>
															<div class="size-item8"></div>
															<div class="size-item9"></div>
															<div class="size-item10"></div>
														</div>
														<div id="billing-slider"></div>
														<div class="monthinner">
															<span id="month_number_order">6</span><?php t('month(s)') ?>
														</div>
														<ul class="b-designation-of-mailboxes">	
															<li class="e-item-designation-of-mailboxes e-item-designation_1"><?php t('0%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_2"><?php t('2%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_3"><?php t('4%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_4"><?php t('6%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_5"><?php t('8%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_6 active"><?php t('10%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_7"><?php t('12%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_8"><?php t('14%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_9"><?php t('16%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_10"><?php t('18%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_11"><?php t('20%') ?></li>
															<li class="e-item-designation-of-mailboxes e-item-designation_12"><?php t('22%') ?></li>
														</ul>
														<input id="month-vallue" type="hidden" name="month" VALUE="6">
														<input id="discount-vallue" type="hidden" name="discount" VALUE="10">
													</div>
												</div>
											</div>
										</div>
										<div>
											<p class="cloud-title"><?php t('Server types') ?></p>
											<p><?php t('Please, select server group and type from table.') ?></p>
											<div id="dedicated-tab" class="tab-container vertical">
												<ul class='etabs'>
													<li class='tab'><a href="#game-tabs1"><?php t('Protected cloud servers') ?></a></li>
												</ul>
												<div id="game-tabs1" class="table-shadow">
													<table class="servers-table">
														
														<tr><th class="name"><?php t('Name') ?></th><th><?php t('CPU') ?></th><th class="cores"><?php t('Cores') ?></th><th><?php t('RAM') ?></th><th><?php t('Storage') ?></th><th><?php t('Bandwidth') ?></th><th><?php t('Monthly price') ?></th><th></th></tr>
														
														<tr><td class="name"><p class="table-title"><?php t('Cloud Trial') ?></p><?php t('Free for 7 days')?></td><td class="cpu"><?php t('2.4 Ghz Intel Xeon') ?></td><td><?php t('2') ?></td><td class="ram"><?php t('512 MB DDR3 RAM') ?></td><td><?php t('10 GB') ?></td><td><?php t('500 TB, Bandwidth 10 Gbit/s') ?></td><td><?php t('7 days free trial')?></td><td class="submit"><input type="button" value="Try" onclick="location.href='<?php echo url_for('@show_page?name=free-vps') ?>';"/></td></tr>
														
														<?php $i = 0 ?>
														<?php foreach($configs as $config): ?>
														<?php $i++ ?>
														<?php if(!$config->available) continue; ?>
														
   														<tr><td class="name"><p class="table-title"><?php if($config->hot): ?><img src="/images/hot.png"><?php endif ?><?php if($config->new): ?><img src="/images/new.png"><?php endif ?><?php echo $config->name ?></p></td><td class="cpu"><?php include_partial('productfield', array('value' => $config->cpu)) ?></td><td><?php include_partial('productfield', array('value' => $config->cores)) ?></td><td class="ram"><?php include_partial('productfield', array('value' => $config->ram)) ?></td><td><?php include_partial('productfield', array('value' => $config->storage)) ?></td><td><?php include_partial('productfield', array('value' => $config->bandwidth)) ?> <?php t(' TB Bandwidth, 10 Gbit/s') ?></td><td><?php echo eur($config->price) ?> €</td><td class="submit"><input type="button" value="Buy" onclick="location.href='<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>';"/></td></tr>
														
														<?php endforeach ?>
														
													</table>
												</div>
											</div>
										</div>
										
										<a href="#"><div class="personal-config">
												<img src="/images/personal.png">
												<h3 class="big"><?php t('Personal cloud server') ?></h3> 
												<p class="small"><?php t('Configure your own cloud server configuration') ?></p>
										</div></a>
										
										<div class="cloud-system">
											<p class="cloud-title"><?php t('Operating system selection') ?></p>
											<p><?php t('Choose an OS to be installed on your server from a wide list of Windows licenses and Linux distributives. All Linux servers will be deployed with root access via SSH.') ?></p>
										</div>
										<div>
											<div class="dedicated-seevers-selects">
												<div class="operating-system-select cloud-select">
													<p class="operating-system-select-text cloud-select-text"><?php t('Select OS:') ?></p><div class="windows-select type-select"><div class="windows-select-text"><p class="operating-system-select-title"><?php t('Please select OS') ?></p></div></div>
													<div class="custom-select-list">
														<ul class="custom-select cloud-custom select-os">
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Arch Linux') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Centos') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Elastix') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('FreeBSD') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('R1Soft') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('SME Server') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('PBXWare') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen: Windows 2003 x64') ?> </p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('KVM: Windows 2003 x64') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen: Windows 2003 x86') ?></p></div></li>
															<li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('KVM: Windows 2003 x86') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen: Windows 2008 x64') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('KVM: Windows 2008 x64') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen: Windows 2008 x86') ?> </p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('KVM: Windows 2008 x86') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen & KVM: Windows 7 x64') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Xen & KVM: Windows XP') ?></p></div></li>
										                    <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('JumpBox') ?></p></div></li>
									                    </ul>
								                    </div>
												</div>
											</div>
											<div class="dedicated-seevers-selects">
													<div class="operating-system-select cloud-select">
														<p class="operating-system-select-text cloud-select-text"><?php t('Select version:') ?></p>
														<div class="windows-select modification-select disable"><div class="windows-select-text"><p class="operating-system-select-title"><?php t('Please  select OS before version') ?></p></div>
														</div>
													</div>
							                        <div class="os-modification">
							                            <div class="custom-select-list" os="Arch Linux">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Arch Linux 2010.05 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Arch Linux 2010.05 x86') ?></p></div></li>
									                        </ul>
								                        </div>
							                            <div class="custom-select-list" os="Centos">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 4.9 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.3 Trixbox 2.6.2.3 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.4 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.4 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Cherokee x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 cPanel x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 GlusterFS x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 LAMPP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 LAMPP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Minimal x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Minimal x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 OpenVZ x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Optimized and Hardened LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Optimized and Hardened LLMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Optimized and Hardened LNMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Optimized and Hardened MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Optimized and Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Plesk x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Plesk x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.5 Trixbox 2.8.0.4 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 cPanel OneClickSSL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 cPanel x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 HAproxy_1.3.25 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 HAproxy_1.4.15 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 ISPmanager x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Optimized_Hardened_LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Optimized_Hardened_LLMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Optimized_Hardened_LNMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Optimized_Hardened_MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Optimized_Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.6 Plesk x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 cPanel x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 kernel_3.x x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.7 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 5.8 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.0 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.1 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CentOS 6.2 MySQL x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="ClearOS">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86 Antispam') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86 MySQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86 OpenVPN') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86 Web Proxy') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.1 x86 Web Server') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 Antispam x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 OpenVPN x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 WebProxy x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('ClearOS 5.2.sp1 WebServer x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="CloudLinux">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 x64 Apache') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 x64 cPanel, WHM') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 x64 ISPmanager') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.5 x64 LAMP') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 cPanel OneClickSSL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 ISPmanager x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.6 Plesk x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.7 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.7 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.7 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 5.7 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 6.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 6.1 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 6.1 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('CloudLinux Server 6.1 MySQL x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Debian">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 Galera and phpMyAdmin x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 ISP Admin x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 Magento x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 Mailcleaner_2010_beta3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 5.0 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.0.0 Cherokee x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.0.0 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.0.0 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.0.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.0 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.3 vyatta x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Debian 6.3 vyatta x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Elastix">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Elastix 1.6.0 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Elastix 2.0.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Elastix 2.0.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Elastix 2.2 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Fedora">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 13 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 13 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 14 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 14 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 15 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Fedora 15 x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="FreeBSD">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('FreeBSD 8.2_HVMPV x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('FreeBSD 9.0_HVMPV x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Gentoo">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1_2.6.34 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1_2.6.34 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1_2.6.34 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1_2.6.34 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 10.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 12.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Gentoo 2008.0 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="openSUSE">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.2 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.3 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.4 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('openSUSE 11.4 x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="R1Soft">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('R1SOFT CDP') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Red Hat">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 Hardened x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 LAMPP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 LAMPP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 Plesk x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 Plesk x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.5 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.6 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.6 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.6 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 Hardened x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 5.7 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 Minimal x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 OELS_6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 OELS_6 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 haproxy_stunnel x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 Hardened x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.1 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 Hardened x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 Hardened x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Red Hat Enterprise Linux 6.2 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Scientific Linux">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.0 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.1 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Scientific Linux 6.2 x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="SME Server">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('SME Server 8.0beta6 x86') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="PBXWare">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('PBXware 3.0 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Enterprise Linux">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 LAMPP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 LAMPP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 Plesk x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 Plesk x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.5 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.6 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.6 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 5.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 6.0 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 6.0 Minimal x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 6.0 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Enterprise Linux Server release 6.0 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Ubuntu">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 Cherokee x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 GlusterFS x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.04 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 Cherokee x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 10.10 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.04 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 Apache x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 Apache x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 LAMP x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 LAMP x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 MySQL x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 MySQL x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.10 x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 11.2 turnkey x86') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Ubuntu 8.04 x64') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen: Windows 2003 x64">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise R2, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard, SQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard R2, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard R2, SQL') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="KVM: Windows 2003 x64">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x64 Enterprise R2') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen: Windows 2003 x86">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 DC') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 DC R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise, SQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise R2, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise R2, SQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Standard, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Standard R2, SQL') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="KVM: Windows 2003 x86">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Standard') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 DC') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 DC R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2003 x86 Enterprise R2') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen: Windows 2008 x64">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Web R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 DC R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Enterprise R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Enterprise R2, IIS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Enterprise R2, SQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard R2, IIS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard R2, SQL') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('PWindows 2008 x64 Standard R2, IIS, SQLer') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard R2, Plesk10') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="KVM: Windows 2008 x64">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Standard R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 DC') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 DC R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Web') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Web R2') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Enterprise') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x64 Enterprise R2') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen: Windows 2008 x86">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Web') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 DC') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Enterprise, IIS, DNS') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Enterprise, IIS, WSP3') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title">-</p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="KVM: Windows 2008 x86">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Standard') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 DC') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Web') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 2008 x86 Enterprise') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen & KVM: Windows 7 x64">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows 7 x64 Professional') ?></p></div></li>
									                        </ul>
								                        </div>
														<div class="custom-select-list" os="Xen & KVM: Windows XP">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Windows XP Professional x86') ?></p></div></li>
									                        </ul>
								                        </div>
														 <div class="custom-select-list" os="JumpBox">
															<ul class="custom-select cloud-custom os-modification">
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox alfresco 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox asterisk 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox bugzilla 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox cacti 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox deki 1.6.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox dimdim 1.1.4 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox dokuwiki 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox drupal 1.1.19 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox drupal6 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox drupal7 1.7.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox dspace 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox elgg 1.7.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox foswiki 1.1.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox gallery 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox gallery3 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox glpi 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox glpi 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox joomla 1.1.5 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox joomla15 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox joomla16 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox knowledgetree 1.1.10 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox lampd 1.7.4 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox lappd 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox liferay 1.7.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox limesurvey 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox magento 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox mantis 1.7.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox mediawiki 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox moinmoin 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox moodle 1.7.4 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox movabletype 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox movabletype 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox nagios 1.1.9 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox nagios3 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox omeka 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox openemm 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox openfire 1.7.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox openldap 1.7.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox openvpn 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox orangehrm 1.5.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox otrs 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox phpbb 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox pmwiki 1.7.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox postgresqld 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox projectpier 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox punbb 1.7.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox redmine 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox rubyonrails 1.7.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox sakai 1.5.0 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox silverstripe 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox snaplogic 1.1.2 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox statusnet 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox sugarcrm 1.1.6 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox sugarcrm5 1.1.18 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox sugarcrm6 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox tikiwiki 1.7.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox tomcat 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox trac 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox tracks 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox twiki 1.1.3 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox vtigercrm 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox wordpress 1.7.1 x64') ?></p></div></li>
										                        <li><div class="custom-select-text"><p class="operating-system-select-title"><?php t('Jumpbox zenoss 1.7.1 x64') ?></p></div></li>
									                        </ul>
								                        </div>
							                        </div>
											</div>
										</div>
									</div>

									<div class="row clearfix cloud-list">
										<div class="cloud-instant">
											<p class="cloud-title"><?php t('Instant Deployment') ?></p>
											<p class=""><?php t('It takes just a few minutes to deploy a new Cloud Server or clone an existing one. The whole process is fully automated and requires no special technical knowledge.') ?></p>
											<p class="cloud-title"><?php t('Easy Scalability') ?></p>
											<p class=""><?php t('Should you need more resources for your web application or website, Cloud Hosting platform allows you to dynamically increase and decrease RAM, CPU and disk space with a few simple clicks and reboot. Start with a smaller package and grow when needed.') ?></p>
											<p class="cloud-title"><?php t('High Availability') ?></p>
											<p class=""><?php t('Our cloud nodes have a self-healing architecture and automatic hypervisor failover with multi-layered security. Data-center infrastructure has been designed with redundancy in mind to avoid any power outage or network connection problems.') ?></p>
											<p class="cloud-title"><?php t('Free DDoS Protection') ?></p>
											<p class=""><?php t('Each Cloud server is protected from all types of DDoS attacks scaling up to 10 Gb/s or 4 Mpps. This level of protection is enough to mitigate against 96% of all attacks that were registered as of Q3 2013.') ?></p>
										</div>
										<div class="cloud-cost">
											<p class="cloud-title"><?php t('Cost Efficiency') ?></p>
											<p class=""><?php t('Cloud Hosting is billed on pay-as-you-go basis, so you can pay only for resources that you need at the moment and add or remove them when needed with few clicks.') ?></p>
											<p class="cloud-title"><?php t('Mirrored Data Storage') ?></p>
											<p class=""><?php t('Encrypted copies of your data are stored on multiple physical servers that are protected from power outages and network connection problems. In an unlikely event of one physical server malfunction you will still be able to run your Cloud Server from other physical servers on our Cloud network.') ?></p>
											<p class="cloud-title"><?php t('Save money with Light mode') ?></p>
											<p class=""><?php t('Download OnApp™ application for your iOS or Android device to manage and monitor Cloud nodes on the go. This fully-functional app will allow you to manage virtual machines, add resources, schedule backups and much more.') ?></p>
										</div>
									</div>
									<div class="row last clearfix cloud">
										<p class="cloud-title-list"><?php t('iOS and Android Apps') ?></p>
										<p><?php t('Without any doubt you can pay for CoinsHost products and services with Bitcoin (BTC), Litecoin (LTC) and Nextcoin (NXT). We treat decentralized currencies based on encryption as completely legit payment methods and encourage our clients to pay with them. Besides these P2P currencies, we accept a wide range of other payment methods and digital currencies. These include but are not limited to: PayPal, VISA, MasterCard, American Express, Discover, Bank Wire, WebMoney and Perfect Money.') ?></p>
									</div>
								</div>
							</article>
						</div>	
					</div>
			           <!-- end region: Main Content -->
				</section><!-- /end #main-content -->
				
			</div><!-- /end .content-inner -->
		</div><!-- /end #content-column -->
				
	</div><!-- /end #columns -->
<!-- end region: Content -->