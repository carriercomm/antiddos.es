												<section class="post-content post-comments">
													<?php foreach ($comments as $comment): ?>
													<article class="post-comment">
  														<header><p class="submitted"><span class="blog-author-image"><?php t('by') ?> <?php echo $comment->name ?> <?php t('at') ?> <?php echo date('jS, F Y',strtotime($comment->createdAt)) ?></span></p></header>
														<div><p><?php echo $comment->comment;?></p></div> 
													</article>
													<?php endforeach ?>
  												</section>
												
												<form id="comment" method="post" class="post-content">
													<?php echo $form->renderGlobalErrors() ?>
													<div>
														<div class="form-item name">
															<?php //echo $form['name']->renderError() ?>
															<?php echo $form['name']->render(array('type' => 'text', 'class'=>'form-text', 'name'=>'name', 'placeholder'=>'Name*')) ?>
														</div>
														<div class="form-item email">
															<?php //echo $form['email']->renderError() ?>
															<?php echo $form['name']->render(array('type' => 'text', 'class'=>'form-text', 'name'=>'email', 'placeholder'=>'Email*')) ?>
														</div>
														<div class="form-item your-message">
															<?php //echo $form['comment']->renderError() ?>
															<textarea class="form-textarea" name="comment" placeholder="Your comment*"></textarea> <!-- provide here correct output from $form->render; -->
														</div>
														<div class="form-captcha">
															<?php //echo $form['captcha']->renderError() ?>
															<?php echo $form['name']->render(array('type' => 'text', 'class'=>'form-text', 'name'=>'code', 'placeholder'=>'Security code*')) ?>
														</div>
														<div class="form-actions">
															<?php echo $form['id']->render(array('value'=>$post->id)); ?>
															<input type="submit" name="op" class="form-submit" value="Add comment to post">
														</div>
													</div>
												</form>