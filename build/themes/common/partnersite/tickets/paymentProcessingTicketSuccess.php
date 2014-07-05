<?php $sf_response->addMeta("title", __("New Support Ticket - %site_name%", array('%site_name%'=>sfConfig::get('app_site_name')))) ?>

<div class="title support"><?php t('New Ticket')?></div>
<div class="content">


    <div style="padding:10px;">
        <table width=100% cellpadding="0" cellspacing="0"><tr><td width=25><img src="<?php echo solar_image_url('mail.gif') ?>"></td><td><?php t('ticket_create')?></td></tr></table>
    </div>


    <div style="padding: 10px;"><?php t('ticket_new_text')?></div>


    <div>
        <form method="post" id="form_ticket" action="<?php echo url_for('@ticket_new') ?>">
          <?php echo $ticket_form->renderGlobalErrors() ?>


            <table width=100% border=0 cellpadding="2" cellspacing="4">
                <tr>
                    <td>

                        <div class="forarea">
                            <div class="ppm"><b><?php t('Subject')?> :</b></div>
                          <?php echo $ticket_form['subject']->render(array('class'=>'inputt', 'style'=>'width:600px;')) ?>
                          <?php echo $ticket_form['subject']->renderError() ?>

                            <div class="ppm"><b><?php t('Department')?> :</b></div>
                          <?php echo $ticket_form['department']->render(array('class'=>'', 'style'=>'width:400px;')) ?>
                          <?php echo $ticket_form['department']->renderError() ?>


                            <div class="ppm"><b><?php t('Description')?> :</b></div>

                          <?php echo $ticket_form['description']->render(array('style'=>"width:100%;height: 300px;")) ?>
                          <?php echo $ticket_form['description']->renderError() ?>
                        </div>

                      <?php echo $ticket_form->renderHiddenFields() ?>


                        <div style="height:14px;">  </div>

                        <table cellpadding="0" cellspacing="0" width=100%><tr><Td>
                            <div align=left style="padding: 0px 10px;"><a href="<?php echo url_for('@ticket_list') ?>" class="zbutton blue"><?php t('ticket_return')?></a></div>
                        </td><td align=right>
                            <div align=right style="padding: 0px 10px;"><input type=submit class="zbutton green sub" value="<?php t('Create ticket')?>" style="width:110px;"></div>
                        </td></tr></table>

                    </td></tr>
            </table>
        </form>
    </div>



</div>
