<div class="div_menu">


    <div class="sub1" style="margin-top: 0px;">Last posts</div>
    <div class="pre_sub1">

      <?php foreach ($recent_posts as $post): ?>
        <a href="<?php echo url_for('@blog_view?id='.$post['id']) ?>"><?php echo $post['title'] ?></a><hr>
      <?php endforeach ?>

    </div>


    <div class="sub1">CATEGORIES</div>
    <div class="pre_sub1">

      <?php foreach ($categories as $cat): ?>
        <a href="<?php echo url_for('@blog_view_by_category?category='.$cat['name']) ?>"><?php echo $cat['name'] ?></a><hr>
      <?php endforeach ?>

    </div>

    <div class="sub1">Tags</div>
    <div class="pre_sub1">
        <div class="tags"><?php echo blog_tags_array($tags)?></div>
    </div>


    <div class="sub1">Autors</div>
    <div class="pre_sub1">
      <?php foreach ($authors as $author): ?>
        <a href="<?php echo url_for('@blog_view_by_author?author='.$author['name']) ?>"><?php echo $author['name'] ?></a><hr>
      <?php endforeach ?>

    </div>



    <div class="sub1">About</div>
    <div class="pre_sub1">

        <?php echo html_entity_decode($description) ?>

    </div>


</div>