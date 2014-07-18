<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-post">

					<div id="main-content-header" class="clearfix">
						<h1 id="page-title"><?php t('Blog') ?></h1>

						<div id="breadcrumb" class="clearfix">
							<ol id="crumbs" class="clearfix">
								<li class="crumb crumb-first"><a href="index.html" title="" class="active-trail"><?php t('Home') ?></a></li>
								<li class="crumb crumb-last"><?php t('Blog') ?></li>
							</ol>
						</div>
					</div>

						<!-- block: Products -->
						<div id="block-antiddos-top-image" class="block clearfix">
							<div class="block-inner">
								<div class="block-content"><img src="/images/blog.jpg"></div>
							</div>
						</div>
						<!-- end block: Products -->

						<div id="block-system-main" class="block block-system no-title">  
							<article id="node" class="node node-article">
								<div class="node-content">
									<div class="row first clearfix">
											<div class="blog">
												<p class="blog-date"><?php echo format_date($post->created_at, 'D') ?></p>
												<h2 class="post"><?php echo $post->title ?></h2>
												<div class="post">
													<span class="blog-author-image"><?php t('by') ?></span>
													<a class="blog-author"><?php echo $post->author ?></a>
													<a class="blog-comment" href="#comment"><?php t('View comments') ?></a>
													<!-- <span class="blog-tags"><a>ddos attacks</a>, <a>ddos</a></span> uncomment for tags -->
												</div>
												<img src="/images/post.jpg">
												<p class="post-content"><?php echo html_entity_decode($post->content) ?></p>
												<br>
												<br>
												<?php include_partial('blog/blogComments', array('comments' => $comments, 'form' => $form, 'post'=> $post)) ?>
											</div>
												
											<div class="sidebar-blog">
												<?php include_component('blog', 'sidebar') ?>
											</div>
										</div>
									<div class="row last clearfix">
										<p class="blog-bitcoin"><?php t('Bitcoin, Litecoin and Nextcoin Accepted') ?></p>
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