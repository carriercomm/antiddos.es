<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.00 Transitional//EN">

<style>
.link {
color:#000000; 
text-decoration: none;
font-weight: bold;
font-size: 12px;

}
.link:hover {
color:#888888; 
}

</style>

<table><Tr>
<td><a href="" alt="Back"><img border=0 src="<?php echo solar_image_url('left.gif') ?>" alt="Print"></a> </td>
<td><a href="javascript:history.go(-1)" class="link"><?php t('Back')?></a></td>
<td width=30> </td><td><a href="javascript:;" onClick="window.print();"><img border=0 src="<?php echo solar_image_url('icon_print.png') ?>" alt="Print"></a> </td><td><a href="javascript:;" class="link" onClick="window.print();"><?php t('Print')?></a></td>

</tr></table><br>

<?php echo base64_decode($invoice->getRenderedHtml()) ?> 

