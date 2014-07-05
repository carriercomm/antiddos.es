                                                                       <div class="startcontent"></div>
<style>
.slider_pre { margin-top: 87px; margin-right: 140px; }
</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_tos_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_tos_2') ?></font><?php end_slot() ?>
<div class="bodycontent">



<style>
<!--
.h5 { margin: 0px; }
ul li { }
ul { margin: 0px; padding: 0px; margin-left: 30px; margin-top: 10px; }
-->
</style>


<h1 class="h1_white"><?php tos('Terms of Service')?></h1>

<div class="" align="center"> 
<div class="content">

<?php tos('tos_content',array('%site%'=>$site->getName(),'%url%'=>str_replace('http://','',$site->getUrl())))?>

</div>
</div>



</div>
