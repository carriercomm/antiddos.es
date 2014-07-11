<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-contacts">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Contacts') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Contacts') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/contacts.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix map">
										<div class="google-map">
											<?php include_partial('welcome/contactsmap') ?>
										</div>
										<div class="contacts">
											<div class="first">
												<h3><?php t('Live chat') ?></h3>
												<span><?php t('We are glad to assist you 24/7 via live chat. Please click to <a href="#">start a new chat</a>.') ?></span>
											</div>
											<div>
												<h3><?php t('General Inquiries') ?></h3>
												<span><?php t('Badenerstrasse 569 Zürich, 8048, Switzerland') ?></span>
											</div>
											<div class="last">
												<a href="mailto:info@coinshost.com" class="mail"><?php t('info@coinshost.com') ?></a>
												<a href="http://coinhost.com" class="site"><?php t('coinshost.com') ?></a>
											</div>
										</div>
									</div>
									<div class="row clearfix information">
										<h3><?php t('Information') ?></h3>
										<p><?php t('Customer care department is available 24/7. Please use email, chat and tickets for general and sales queries. Should you have a technical issue, kindly log in your account and process it through a support ticket with all relevant information enclosed.') ?></p>
									</div>
									<div class="row last clearfix feedback">
										<h3><?php t('Contact form') ?></h3>
										<p><?php t('If you have a question about our products and company, please contact a live chat operator or submit a new query below. For technical issues it is recommended to open a support ticket in your personal account area.') ?></p>
										<form id="feedback">
											<?php echo include_component('pages', 'contactForm')  ?>
										</form>
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


