<div class="h_comm">Comments</div>
<br>

<?php foreach ($comments as $comment): ?>
<div class="comment_div">
    <div class="comment_name"><?php echo $comment->name ?></div>
    <div class="comment_text"><?php echo $comment->comment;?></div>
    <div class="comment_date"><?php echo date('jS, F Y',strtotime($comment->createdAt)) ?></div>
<hr>
</div>

<?php endforeach ?>
<form method="post">
    <?php echo $form->renderGlobalErrors() ?>
    <table width=100%  cellpadding="6" cellspacing="0" border=0>
        <tr>
            <td></td><td><font size=3><?php echo __('Leave comment',array(),'main_public')?></font></td></tr>
        <tr>
            <td align=right valign=top style="padding: 10px 5px 0px 0px;" width=100>
                <?php echo __('Name',array(),'main_public')?> <font color="efa94a">*</font>
            </td>
            <td>
                <?php echo $form['name']->renderError() ?><?php echo $form['name']->render(array('style' => 'width:250px', 'class'=>'inputt')) ?>
            </td>
        </tr>
        <tr>
            <td align=right valign=top style="padding: 10px 5px 0px 0px;">
                <?php echo __('Email',array(),'main_public')?> <font color="efa94a">*</font>
            </td>
            <td>
                <?php echo $form['email']->renderError() ?><?php echo $form['email']->render(array('style' => 'width:250px', 'class'=>'inputt')) ?>
            </td>
        </tr>
        <tr>
            <td align=right valign=top style="padding: 10px 5px 0px 0px;">
                <?php echo __('Comment',array(),'main_public')?> <font color="efa94a">*</font>
            </td>
            <td>
                <?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => 'width:95%; height:80px;', 'class'=>'inputt')) ?>
            </td>
        </tr>
        <tr>
            <td align=right valign=top style="padding: 10px 5px 0px 0px;">
                <?php t('Captcha')?>  <font color="efa94a">*</font>
            </td>
            <td>
                <?php echo $form['captcha']->renderError() ?><?php echo $form['captcha']->render(array('style' => 'width: 100px;', 'class'=>'inputt')) ?>
            </td>
        </tr>
        <?php echo $form['id']->render(array('value'=>$post->id)); ?>
        <tr>
            <td align=right valign=top style="padding: 10px 5px 0px 0px;"></td>
            <td>
                <input type="submit" class="button submit" style="width:auto;" value="Leave comment">
            </td>
        </tr>

    </table>
</form>