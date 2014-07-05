<?php if (!$customer->getIsReseller()): ?>

    <?php if (!$customer->getResellerRequest()): ?>
        <table cellpadding="0" cellspacing="0" width=100% border=0>
            <tr>
                <td width=400 valign=top>
                    <div class="title registr"><?php t('Submit an application')?></div>
                    <div class="content">

                        <?php t('reseller_block_2',array('%site%'=>$site->getName()))?>

                        <br><br>
                        <?php echo $form->renderGlobalErrors() ?>
                        <?php if ($form->hasErrors()):?>
                            <!--# -->
                            <img src="<?php echo solar_image_url('flag_red.png') ?>" width=16 height=16 border=0 alt=""> - <font color="red"><?php t('div_required_1')?></font><br>
                            <!--# -->
                        <?php endif?>
                        <div class="ppm"><?php t('Full name')?></div>
                        <input type=text name="" class="inputt" disabled style="width: 300px;" value="<?php echo $customer->first_name. ' '. $customer->last_name?>">

                        <form method="post">
                            <?php echo $form->renderHiddenFields() ?>
                            <div class="ppm"><?php t('Site name')?></div>
                            <?php if ($form['reseller_site_name']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
                            <?php echo $form['reseller_site_name']->render(array('class'=>$class, 'style'=>'width: 340px;')) ?>

                            <div class="ppm"><?php t('Url')?></div>
                            <?php if ($form['reseller_site_url']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
                            <?php echo $form['reseller_site_url']->render(array('class'=>$class, 'style'=>'width: 300px;')) ?>

                            <div class="ppm"><?php t('Contact phone')?></div>
                            <?php if ($form['phone']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
                            <?php echo $form['phone']->render(array('class'=>$class, 'style'=>'width: 240px;')) ?>

                            <div class="ppm"><?php t('Contact e-mail')?></div>
                            <?php if ($form['email_address']->hasError()) $class = 'inputt Required'; else $class = 'inputt'?>
                            <?php echo $form['email_address']->render(array('class'=>$class, 'style'=>'width: 240px;')) ?>

                            <br><br>

                            <input type=checkbox id="reseller_accept" class=""> <?php t('I would like to apply for reseller')?>
                            <br><br>
                            <input type="submit" id="reseller_submit" disabled class="zbutton sub grey" value="<?php t('Submit an application')?>">

                        </form>
                        <script>
                            $(document).ready(function () {
                                $("#reseller_accept").click(function() {
                                    if ($(this).attr('checked'))
                                    {
                                        $('#reseller_submit').removeAttr('disabled');
                                        $('#reseller_submit').removeClass('grey').addClass('blue');
                                    }
                                    else
                                    {
                                        $('#reseller_submit').attr('disabled','disabled');
                                        $('#reseller_submit').removeClass('blue').addClass('grey');
                                    }
                                });
                            });
                        </script>

                    </div>
                </td>
                <td  valign=top>
                    <div class="title manage"><?php t('Reselling and API')?></div>
                    <div class="content">

                        <?php t('reseller_block_01',array('%site%'=>$site->getName()))?>

                    </div>
                </td>
            </tr>
        </table>
    <?php else: ?>

        <div class="title manage"><?php t('Reselling and API')?></div>
        <div class="content">

            <?php t('reseller_block_03',array('%site%'=>$site->getName()))?>

        </div>
    <?php endif ?>

<?php else: ?>
    <div class="title pref"><?php t('reseller_api_settings')?></div>
    <div class="content">
        <div style="padding: 10px;">
            <table width=500>
                <tr>
                    <td><?php t('reseller_api_status') ?>:</td>
                    <td>
                        <?php if($customer->getResellerApi()): ?>
                            <a class="onoff on" id="protectionButton" href="<?php echo url_for('@reseller_api_switch') ?>"><?php echo t('ON') ?></a>
                        <?php else : ?>
                            <a class="onoff off" id="protectionButton" href="<?php echo url_for('@reseller_api_switch') ?>"><?php echo t('OFF') ?></a>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align=left><br><br>
                        <a class="zbutton blue" href="<?php echo url_for('@reseller_api_help') ?>"><?php echo t('reseller_api_documentation') ?></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php endif ?>














