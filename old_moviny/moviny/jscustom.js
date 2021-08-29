$(document).ready(function() {
	$('#searchword').keyup(function() {
		$('form').submit(function() {
			var data = $(this).serialize();
			$.ajax({
				url: 'searchprocess.php',
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
/*
 $(document).ready(function(){  
      $('#searchword').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchprocess.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#result').fadeIn();  
                          $('#result').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#searchword').val($(this).text());  
           $('#result').fadeOut();  
      });  
 });
*/