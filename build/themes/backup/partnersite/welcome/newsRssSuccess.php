<<?php echo '?' ?>xml version="1.0" encoding="utf-8"<?php echo '?' ?>>
<rss version="2.0">
<channel>
    <title><?php echo $site->getName() ?></title>
    <description><?php t('welcome_rss_title')?></description>
    <link><?php echo $site->getUrl()?>/<?php echo $sf_user->getCulture()?>/news/rss</link>
    <lastBuildDate><?php echo date(DATE_RFC822) ?></lastBuildDate>
    <pubDate><?php echo date(DATE_RFC822) ?></pubDate>
    <?php foreach ($news as $item):?>
	<item>
        <title><?php echo $item->getTitle()?></title>
        <description><?php echo get_teaser($item->getContent())?></description>
        <link><?php echo $site->getUrl()?>/<?php echo $sf_user->getCulture()?>/news/<?php echo $item->getId()?></link>
        <guid isPermaLink="false"><?php echo $item->getId()?></guid>
        <pubDate><?php echo date(DATE_RFC822,strtotime($item->getCreatedAt()))?> </pubDate>
	</item>
    <?php endforeach?>
</channel>
</rss>