<div class="title_menu lastnews s_shad" style=""><?php t('LAST NEWS')?></div>

<div class="af_title_menu" style="">
  <div class="hbak"></div>

  <div class="news_af_title_div">

    <font class="af_title_menu_text">
      <?php foreach($news as $event): ?>

        <b><font class="news_title"><?php echo $event->getTitle() ?></font></b><br><br>
        <font class="news_time"><?php echo format_date($event->getCreatedAt(),'f') ?></xi></font>
        <br><br><?php echo prepare_news(get_teaser($event->getContent())) ?>...<br>
        <div style="height:16px; font-size: 0px;"></div>

        <div align=right  style="width:100%;"><xi></div>

        <hr class="hrline whiteline"><br>

      <?php endforeach ?>

    </font>

    <div align=right style="width:100%;"> <a href="<?php echo url_for('@news') ?>" class="minib white"><?php t('Read more')?></a> &raquo</div>

  </div>
  <div class="hbak"></div>
</div>