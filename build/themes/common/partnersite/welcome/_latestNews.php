<?php
if (isset($news) == true)
  include_partial('welcome/latestNews_newsformat', array('news'=>$news));
else
  include_partial('welcome/latestNews_blogformat', array('posts'=>$posts));
?>