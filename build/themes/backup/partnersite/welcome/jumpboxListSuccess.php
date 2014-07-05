<style>
.slider_pre { margin-top: 91px; margin-right: 130px; }
</style>
<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_jumpbox_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_jumpbox_2') ?></font><?php end_slot() ?>

<?php $sf_response->addMeta("title", __("DDoS Protected Cloud and Dedicated Servers. %site% ISP", array('%site%'=>sfConfig::get('app_site_name')))) ?>
<?php $sf_response->addMeta("keywords", "Hosting,Server,VPS,Dedicated Server,Cloud,Root,ISP,DDoS,DDoS Protection,Cloud Hosting,Cloud Computing,Cloud VPS,Rack,Rackspace,Swiss,Schweiz,Switzerland,Instant,Fast,Dos Attack") ?>
<?php $sf_response->addMeta("description", __("Fastest Network. Instant Setup. %site% offers Dedicated Servers, Cloud Hosting, DDoS Protection and Colocation in Switzerland, Zurich", array('%site%'=>sfConfig::get('app_site_name')))) ?>


<br>
<div class="content">

<h3>Jumpbox list</h3>



<div style="padding: 16px 10px;" align=center>


    <?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>


<?php foreach ($apps as $app): ?>


<div class="jumbox1" style="background: url('/images/jumpbox/<?php echo $app->slug; ?>/icon.png') 10px 10px no-repeat;">

<div class="jumbox2">

<table width=100%  border="0" cellpadding="0" cellspacing="0"><tr>
<td width=40%>
<?php echo '<b>Application Version:</b> '.$app->version; ?><br/>
<?php echo '<b>Open Source Project:</b> '.$app->name; ?><br/>
<?php echo '<b>JumpBox Version:</b> '.$app->jb_version; ?><br/>

</td><td>

<?php echo '<b>OS Version:</b> '.$app->os; ?><br/>
<?php echo '<b>Updated:</b> '.$app->upd; ?><br/>
<?php echo '<b>Download Size:</b> '.$app->dwl_size.' MB'; ?><br/>
</td>
<td width=20% align=left>
<a class="link_orange" style="" href="<?php echo url_for('@jumpbox_app?slug='.$app->slug); ?>"><?php echo $app->name ?></a>
</td>
</tr></table>




</div>
</div>

<?php endforeach ?>


<div style="padding: 8px 0px;" align=center>
    <?php include_partial('global/pagination', array('pager' => $pager)) ?>
</div>


</div>