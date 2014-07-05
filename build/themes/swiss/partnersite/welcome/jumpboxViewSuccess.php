<?php $sf_response->addMeta("title", tr("%app_name% instant installation to your Cloud with Jumpbox and %site% ISP", array('%site%'=>sfConfig::get('app_site_name'), '%app_name%'=>$app->version))) ?>
<?php $sf_response->addMeta("keywords", "Cloud Hosting, Cloud, Cloud Server, SaaS, DDoS, DDoS protection, VPS, VDS, Cloud VPS, Cloud VDS, Instant, Automated, Virtual Appliances, Virtual Appliance, ".make_kw($app->description)) ?>
<?php $sf_response->addMeta("description", tr("%site% offers automated installation of %app_name% in just few clicks with Jumpbox tools on any Virtual Server. Easy scripts and applications setup.", array('%site%'=>sfConfig::get('app_site_name'), '%app_name%'=>$app->version))) ?>
<br>
<div class="content">


<div class="jumbox1" style="background: url('/images/jumpbox/<?php echo $app->slug; ?>/icon.png') 10px 10px no-repeat;">

<div class="jumbox2 jumblue">

<table width=100%  border="0" cellpadding="0" cellspacing="0"><tr>
<td width=50%>
<?php echo '<b>Application Version:</b> '.$app->version; ?><br/>
<?php echo '<b>Open Source Project:</b> '.$app->name; ?><br/>
<?php echo '<b>JumpBox Version:</b> '.$app->jb_version; ?><br/>

</td><td>

<?php echo '<b>OS Version:</b> '.$app->os; ?><br/>
<?php echo '<b>Updated:</b> '.$app->upd; ?><br/>
<?php echo '<b>Download Size:</b> '.$app->dwl_size.' MB'; ?><br/>
</td>
</tr></table>

</div></div>


<div class="jumbox4">
<?php for ($i = 1; $i <= 3; $i++): ?>
<a class="img_preview" href="/images/jumpbox/<?php echo $app->slug; ?>/<?php echo $app->slug.'-'.$i.'.png'; ?>">
    <img src="/images/jumpbox/<?php echo $app->slug; ?>/thumb_<?php echo $app->slug.'-'.$i.'.png'; ?>">
</a>
<?php endfor ?>
</div>



<div class="jumbox3">


<h3>
<?php echo __("%app_name% instant installation to your Cloud with Jumpbox and %site% ISP", array('%site%'=>sfConfig::get('app_site_name'), '%app_name%'=>$app->version)) ?>
</h3>
<?php echo sfOutputEscaper::unescape(str_replace('â€™', '\'', str_replace('â„¢','&trade;', $app->description))); ?>


<script type="text/javascript">
    $('a.img_preview').fancybox();
</script>


</div>

</div>