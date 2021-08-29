$(document).ready(function() {
	$('#searchword').click(function() {
		$('form').submit(function() {
			var data = $(this).serialize();
			$.ajax({
				url: 'filter.php',
				type: 'POST',
				dataType: 'html',
				data: data,
				success: function(data) {
					$('#result').empty().html(data);
				}
			});
			return false;
		});
		$('form').trigger('submit');	
	});
});