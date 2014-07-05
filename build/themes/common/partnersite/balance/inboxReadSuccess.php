<div class="title inbox"><?php t('Inbox')?></div>
<div class="content">

<div class="forarea">

        <h2 style="padding: 0px; margin: 0px;"><?php echo $message->subject ?></h2>
        <p><?php echo $message->message ?></p>
        <small><?php echo format_date($message->created_at,'f') ?></small>
<Br>
</div>

<br>
<table border=0 cellpadding="0" cellspacing="0">
<tr>
<td valign="top">
<div style="padding: 0px 10px 0px 10px;" align=left><img src="<?php echo solar_image_url('foo3_.png') ?>"></div>
</td>
<td valign="top">
    <a class="zbutton green" href="<?php echo url_for('@inbox') ?>"><?php t('Back')?></a>
</td>
</tr>
</table>


</div>