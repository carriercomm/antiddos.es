<script type="text/javascript">
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script> 
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=728334140513039&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- region: Content -->
	<div id="columns" class="columns clearfix">
		<div id="content-column" class="content-column" role="main">
			<div class="content-inner">
				
				<section id="main-content">
					<!-- region: Main Content -->
					<div id="content" class="region page-blog">

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
										<div>
										
											<?php if (count($posts)): ?>
											<?php foreach($posts as $n): ?>
											
											<div class="blog">
												<p class="blog-date"><?php echo format_date($n->created_at, 'D') ?></p>
												<a class="blog-image" href="<?php echo url_for('@blog_view?id='.$n->getId())?>" title="<?php echo $n->title ?>"><img src="/images/blog-no-image.jpg"></a>
												<a class="blog-size" href="<?php echo url_for('@blog_view?id='.$n->getId())?>" title="<?php echo $n->title ?>"><h2><?php echo $n->title ?></h2></a>
												<div>
													<span class="blog-author-image"><?php t('by') ?></span>
													<a class="blog-author" href="<?php echo url_for('@blog_view?id='.$n->getId())?>"><?php echo $n->author ?></a>
													<a class="blog-comment" href="<?php echo url_for('@blog_view?id='.$n->getId())?>"><?php t('Read comments') ?></a>
													<!-- <span class="blog-tags"><a>ddos attacks</a>, <a>ddos</a></span> uncomment for tags -->
												</div>
												<p class="blog-size"><?php echo html_entity_decode(get_teaser($n->content)) ?></p>
												<ul class="social"><li><g:plusone size="medium"></g:plusone></li><li><div class="fb-like" data-send="false" data-href="<?php echo url_for('@blog_view?id='.$n->getId(), true)?>" data-layout="button_count" data-show-faces="true"></div></li><li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_for('@blog_view?id='.$n->getId(), true)?>"><?php t('Tweet') ?></a></li></ul>
												<a class="blog-submit" href="<?php echo url_for('@blog_view?id='.$n->getId())?>"><?php t('Read more') ?></a>
											</div>
											
											<?php endforeach ?>
											<?php else: ?>
											<h2><?php t('Results') ?></h2>
											<?php t('Posts not found') ?>
											<?php endif ?>
											
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