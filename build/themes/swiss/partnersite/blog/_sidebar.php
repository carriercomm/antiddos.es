<?php include_partial('blog/search_form') ?>

<p class="sidebar-title"><?php t('About blog') ?></p>
<p class="sidebar-text"><?php echo html_entity_decode($description) ?></p>

<p class="sidebar-title"><?php t('Menu') ?></p>
<?php include_partial('blog/mainmenu') ?>

<p class="sidebar-title"><?php t('Last posts') ?></p>
	<ul>
		<?php foreach ($recent_posts as $post): ?>
	    <li><a href="<?php echo url_for('@blog_view?id='.$post['id']) ?>"><?php echo $post['title'] ?></a></li>
		<?php endforeach ?>
	</ul>

<p class="sidebar-title"><?php t('Categories') ?></p>
	<ul>
	    <?php foreach ($categories as $cat): ?>
		<li><a href="<?php echo url_for('@blog_view_by_category?category='.$cat['name']) ?>"><?php echo $cat['name'] ?></a></li>
		<?php endforeach ?>
	</ul>

<p class="sidebar-title"><?php t('Tags') ?></p>
<?php echo blog_tags_array($tags)?>
<br><br>
<p class="sidebar-title"><?php t('Authors') ?></p>
	<ul>
		<?php foreach ($authors as $author): ?>
	    <li><a href="<?php echo url_for('@blog_view_by_author?author='.$author['name']) ?>"><?php echo $author['name'] ?></a></li>
		<?php endforeach ?>
	</ul>