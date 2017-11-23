$(function() {
	$('#container').isotope({
	itemSelector: '.item',
	layoutMode: 'fitRows'
	});


});

$(function() {
	$('#filters li a').click(function(){
		$('#filters li a').removeClass('active');
		$(this).addClass('active');

		var selector = $(this).attr('data-filter');
		$('#container').isotope({
			filter: selector
		});
		return false;
	});
});
