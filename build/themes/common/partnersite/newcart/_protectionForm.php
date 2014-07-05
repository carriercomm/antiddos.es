<script type="text/javascript">
var websites = <?php echo $form['websites']->count() ?>;
var max_websites = <?php echo $form->getObject()->getProduct()->max_websites ?>;
var max_domains = <?php echo $form->getObject()->getProduct()->max_domains ?>;

function checkSSL(num)
{
	if ($('#website_'+num+'_ssl').is(":checked")) 
		$('#website_'+num+'_ssl_options').show();
	else
		$('#website_'+num+'_ssl_options').hide();
}

function addWebsite(num, name)
{
  var r = $.ajax({
    type: 'GET',
    url: '<?php echo url_for('@newcart_protection_website_add?product_id=' . $form->getObject()->getProduct()->id) ?>' + '?num=' + num + '&name=' + name,
    async: false
  }).responseText;

  return r;
}

function addDomain(websitenum, num, id)
{
  var r = $.ajax({
    type: 'GET',
    url: '<?php echo url_for('@newcart_protection_domain_add?product_id=' . $form->getObject()->getProduct()->id) ?>' + '?website_num=' + websitenum + '&num=' + num +'&id=' + id,
    async: false
  }).responseText;

  return r;
}

$().ready(function() {
    $('#websites_add').click(function() {
      $('#extra_websites').append(addWebsite(websites, $('#add_website_name').val()));

      websites = websites + 1;
      if(websites >= max_websites)
        $('#websites_add').hide();
    });

    if(websites >= max_websites)
      $('#websites_add').hide();
  });
</script>



<div class="title website"><?php t('Websites')?>:</div>
<div class="content">

<div style="padding:0px 10px 10px 23px;"> 

<div class="ppm"><strong><?php t('Description')?>:</strong></div>
<table><tr><td><input type="text" id="add_website_name" value="My first protected site" style="width:200px;" class="inputt"></td><td><div id="websites_add" class="zbutton blue"><?php t('Add website')?></div></td></tr></table>






<?php foreach($form['websites'] as $n => $f): ?>
<?php include_partial('newcart/addWebsite', array('form' => $form, 'num' => $n)) ?>
<?php endforeach ?>

<div id="extra_websites"></div>


</div></div>

<div class="title conf"><?php t('Options')?></div>
<div class="content">

<div style=""> 

<?php if(isset($form['smtp_protection'])): ?>
<br><table border="0" cellpadding="0" cellspacing="0" ><tr><td width=26><?php echo $form['smtp_protection']->render(array('style' => 'width: 16px;')) ?></td><td><?php t('SMTP Protection')?> <?php echo $form['smtp_protection']->renderError() ?></td></tr></table>
<?php endif ?>


<div class="ppm"><?php t('please_comment')?></div>

<?php echo $form['comment']->renderError() ?><?php echo $form['comment']->render(array('style' => 'width: 100%; height: 200px;', 'refresh'=>'false')) ?><br>

<br>

</div>
</div>


