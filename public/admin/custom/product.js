$(function(){
	var freeShippingCheckbox = document.getElementsByName('product_freeShipping')[0];
	$(freeShippingCheckbox).on('click', function(e){
		
		$('#freeShipping').val('');
		$('#freeShipping').attr('readonly',!e.currentTarget.checked);
	});
});