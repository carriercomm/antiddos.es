		<div id="primary-menu-bar" class="nav clearfix">
			<ul class="menu clearfix">
				<li class="first">
					<a href="<?php url_for('@localized_homepage') ?>" title="<?php t('Home') ?>"><?php t('Home') ?></a>
				</li>
				<li class="expanded">
					<a href="<?php echo url_for('@show_page?name=about-us') ?>" title="<?php t('About us') ?>"><?php t('About us') ?></a>
					<ul class="menu clearfix">
						<li class="first">
							<a href="#" title="<?php t('FAQ') ?>"><?php t('FAQ') ?></a>
						</li>
						<li>
							<a href="#" title="<?php t('Terms of Service') ?>"><?php t('Terms of Service') ?></a>
						</li>
						<li>
							<a href="#" title="<?php t('Privacy Policy') ?>"><?php t('Privacy Policy') ?></a>
						</li>
						<li class="last">
							<a href="#" title="<?php t('Reviews') ?>"><?php t('Reviews') ?></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><?php t('DDoS Protection')?></a>
					<ul class="menu information clearfix">
						<li>
							<h4><?php t('Powerful bare metal servers with optional DDoS protection on demand.') ?></h4>
							<div>
								<ol>
									<li><?php t('KVM/IPMI available') ?></li>
									<li><?php t('High on-site security') ?></li>
									<li><?php t('Full redundancy') ?></li>
									<li><?php t('DDoS protection') ?></li>
									<li><?php t('24/7 phone support') ?></li>
								</ol>
								<p><s><span><?php t('Starting from') ?></span><b><?php t('0.24438090 B') ?></b></s></p>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><?php t('Dedicated Servers')?></a>
					<ul class="menu information clearfix">
						<li>
							<h4><?php t('Powerful bare metal servers with optional DDoS protection on demand.') ?></h4>
							<div>
								<ol>
									<li><?php t('KVM/IPMI available') ?></li>
									<li><?php t('High on-site security') ?></li>
									<li><?php t('Full redundancy') ?></li>
									<li><?php t('DDoS protection') ?></li>
									<li><?php t('24/7 phone support') ?></li>
								</ol>
								<p><s><span><?php t('Starting from') ?></span><b><?php t('0.24438090 B') ?></b></s></p>
							</div>
						</li>
					</ul>
				</li>
				<li class="expanded">
					<a href="#" title=""><?php t('All products')?></a>
					<ul class="menu clearfix">
						<li class="first">
							<a href="<?php echo url_for('@server_config_list') ?>" title="<?php t('Dedicated Servers')?>"><?php t('Dedicated Servers')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@protection_config_list') ?>" title="<?php t('DDoS protection')?>"><?php t('DDoS Protection')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@cloud_config_list') ?>" title="<?php t('Protected Cloud Hosting')?>"><?php t('Cloud Hosting')?></a>
						</li>
						<li>
							<a href="<?php echo url_for('@colocation_config_list') ?>" title="<?php t('Collocation in Switzerland')?>"><?php t('Hardware colocation')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('Control panels')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('BitTorrent Sync')?></a>
						</li>
						<li>
							<a href="#" title=""><?php t('Content Delivery Network')?></a>
						</li>
						<li class="last">
							<a href="<?php echo url_for('@gameservers_config_list') ?>" title="<?php t('DDoS Protected Game Servers')?>"><?php t('Game Servers')?></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" title=""><?php t('Contacts')?></a>
				</li>
				<li class="last">
					<a href="#" title=""><?php t('Blog')?></a>
				</li>
			</ul>
		</div>
		