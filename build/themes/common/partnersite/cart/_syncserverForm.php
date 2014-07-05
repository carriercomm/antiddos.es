<div class="title period"><?php t('Storage')?></div>

<div style="<?php echo ($form->getObject()->getIsTrial()) ? 'opacity:0.5;' : '' ?>">
    <div class="content">

        <div class="ordiv">
            <table><tr><td>
              <?php if(!$form['disk_space']->isHidden()): ?>
              <?php echo $form['disk_space']->renderError() ?><?php echo $form['disk_space']->render(array('style' => 'width:100px')) ?>
              <?php else: ?>
              <?php echo $form['disk_space']->getValue() ?>
              <?php endif ?>
            </td><td><?php t('Gb')?></td></tr></table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function checkName() {
        var val = $("#cart_item_disk_space").slider("value");
        if(val == 100){
            $("#product_name").html("Min");
        } else {
            if (val == 200){
                $("#product_name").html("Mid");
            } else {
                if (val == 500){
                    $("#product_name").html("Max");
                } else {
                    $("#product_name").html("Custom");
                }
            }
        }
    }

    $(document).ready(function() {
        checkName();
        $("#cart_item_disk_space").bind("slidechange", function(event, ui) {
            checkName();
        });
    });
</script>

