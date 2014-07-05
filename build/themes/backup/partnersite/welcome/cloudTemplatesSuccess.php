<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>
<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_jumpbox_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_jumpbox_2') ?></font><?php end_slot() ?>

<br>

<div class="content"><h3><?php t('cloud_template_list')?></h3>

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width=550 valign="top"><div style="margin: 0px 15px 0px 10px";><?php t('cloud_template_text', array('%site_name%'=>$site->getName()))?></div><br><br><br></td>
<td valign="top">
<img src="/images/partner/jumpbox.png"><br><br>
<a class="minic" href="<?php echo url_for('@show_page?name=jumpbox') ?>"><?php t('Learn more about JumpBox collection')?></a> &raquo;
</td>
</tr>
</table>


<div style="margin-left: 30px; margin-right: 30px;">

<?php foreach($os_list as $os): ?>
<?php if($os->lists): ?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="50%" valign="top" align="left">
<img src="https://server-cloud.r.worldssl.net/images/partner/fresh/os/<?php echo str_replace(":", "", $os->name) ?>.jpg">
</td>
<td width="50%" valign="bottom" align="right">
<font color="grey"><div class="cloud_title_name"><?php echo $os->name ?></font></div>
</td>
</tr>
</table>

<?php if($os->description): ?>
<div class="cloud_title_desc"><?php echo $os->description ?></div>
<?php endif ?>

<hr class="hrline" style="margin-top: 10px;">

  <?php foreach($os->lists as $list): ?>

<?php if($list['name']): ?>
  <div class="cloud_sub"><?php echo html_entity_decode($list['name']) ?></div>
<?php endif ?>

  <ul>
    <?php foreach($list['templates'] as $template): ?>
    <li class="cloud_li"><?php echo $template['name'] ?></li>
    <?php endforeach ?>
  </ul>
<br>
  <?php endforeach ?>
<?php endif ?>
<?php endforeach ?>


</div>
</div>
