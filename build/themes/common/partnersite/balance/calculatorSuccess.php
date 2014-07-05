<div class="bar_content">
<div class="title voucher"><?php t('Currency calculator')?></div>

<div align=center>
<br><br>
<div class="content" style="height:100px;">
<input type="text" size="10" id="CHF" class="currency" value="1"> CHF &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" size="10" id="USD" class="currency"> USD &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" size="10" id="EUR" class="currency"> EUR
</div>
</div>


</div>

<script>

$(document).ready(function () {
	var rates = {<?php echo implode(',', $sf_data->getRaw('rates'));?>};
	
	_change('#CHF');
	
	function _change(id)
	{
		$amount = $(id).val();
		
		b = '';
		c = '0123456789.,';
		
		for(i=0; i<$amount.length; i++)
		{
			if (c.indexOf($amount[i])!=-1) 
			{
				b = b+$amount[i]
			}
		}
				
		$amount = b.replace(',', '');
	
		if ($amount.split('.').length>2) 
		{
			b = $amount.split('.'); 
			$amount = b[0]+'.'+b[1];
		}
		
		if ($amount>0){
		
			$currency = $(id).attr('id');
		
			convert = '';
		
			$.each(rates[$currency],function(index, value){ 
				$('#'+index).val(Number(($amount*value).toFixed(2)));
			});	
		}	
	}
	
	$('.currency').keyup(function() {
		_change(this);
	});
	
});	

</script>