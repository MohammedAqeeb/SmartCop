$('#pass, #confirm').on('keyup', function ()
 {
  	if($('#pass').val() == $('#confirm').val())
   {
    $('#message').html('Matching').css('color', 'green');
	  } 
  else 
   {
	 $('#message').html('Not Matching').css('color', 'red');
	}
})';