 $(document).ready(function(){  
  $('#searchword').keyup(function(){  
   var query = $(this).val();  
   if(query != '')  
   {  
    $.ajax({  
     url:"search.php",  
     method:"POST",  
     data:{query:query},  
     success:function(data)  
     {  
      $('#resultList').fadeIn();  
      $('#resultList').html(data);
    }  
  });  
  }  
});  
  $(document).on('click', 'li', function(){  
   $('#searchword').val($(this).text());  
   $('#resultList').fadeOut();  
 });  
});