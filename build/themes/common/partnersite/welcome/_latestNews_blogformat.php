
<div class="title_menu lastnews s_shad" style=""><?php t('Latest posts')?></div>

<div class="af_title_menu" style="">
  <div class="hbak"></div>

  <div class="news_af_title_div">

    <font class="af_title_menu_text">
      <?php foreach($posts as $post): ?>

        <b><a href="<?php echo seo_url($post)?>" style="text-decoration: none;"><font class="news_title"><?php echo $post->getTitle() ?></font></a></b>
        <div style="height:16px; font-size: 0px;"></div>

        <div align=right  style="width:100%;"><xi></div>

        <hr class="hrline whiteline"><br>

      <?php endforeach ?>

    </font>

    <div align=right style="width:100%;"> <a href="<?php echo url_for('@blog') ?>" class="minib white"><?php t('Read more')?></a> &raquo</div>

  </div>
  <div class="hbak"></div>
</div>