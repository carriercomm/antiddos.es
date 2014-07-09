<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-terms-of-services">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Terms of Services') ?></h1>
						<div class="submitted">
      						<time pubdate="" datetime="1299094295"><?php t('updated May 5, 2014') ?></time>    
      					</div>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Terms of Services') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/term_services.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
								<?php tos('tos_content',array('%site%'=>$site->getName(),'%url%'=>str_replace('http://','',$site->getUrl())))?>
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
