<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_about_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_02"><?php echo t('text_head_about_2') ?></font><?php end_slot() ?>

<style>

.tdbar_st3_left { background:url('/images/partner/swiss/slider2_01.jpg') repeat-x right top; height:372px;}
.tdbar_st3_center { background:url('/images/partner/swiss/slider2_02.jpg') repeat-x 0 0; height:372px; width: 980px;}
.tdbar_st3_right { background:url('/images/partner/swiss/slider2_03.jpg') repeat-x left top; height:372px;}

.menubarleft { background: url('/images/partner/swiss/slider2_04.jpg') repeat-x right top; width: 100%; height: 29px;}
.menubarright { background: url('/images/partner/swiss/slider2_06.jpg') repeat-x left top;  width: 100%; height: 29px; }

</style>

<div class="startcontent"></div>
<div class="bodycontent">


<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top>

<?php t('about_company_text', array('%site%'=>$site->getName()))?>

</td><td width=20> </td><td width=280 valign=top>

<?php include_partial('welcome/block_adv') ?>
<br>
<?php include_partial('welcome/adv') ?><br>

</td></tr></table>




</div>