<div class="divlang">
<table border=0 cellpadding="0" cellspacing="0"><tr>
<td valign=middle align=right nowrap>
<font class="wh" style="margin-right: 7px;" nowrap><?php t('Language')?> :</font> </td><td nowrap style="white-space:nowrap;" nowrap="nowrap">
<?php foreach (sfConfig::get('global_cultures') as $lang => $descr):?>
<?php if (in_array($lang, array('en','es','ru','de'))):?><a href="<?php echo url_for('@set_language?language='.$lang)?>"><img src="<?php echo solar_image_url('langs/'.$lang.'.png') ?>" class="lang" border=0></a><?php else:?><img src="<?php echo solar_image_url('langs/'.$lang.'_.png') ?>" border=0 class="lang noactive" tip="<?php t('coming soon')?>"><?php endif?>
<?php endforeach ?>
</td>
</tr></table>
</div>