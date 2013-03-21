// JavaScript Document
function change()
{
	var user=$('#user').val();
	var email=$('#email').val();
	var password=$('#password').val();
	temp=true;
	
	
	if(user=="")
	{
	$('#user').css('border','solid orange 2px');
	$('#user').val("username");
	temp=false;
	}
	
	if(email=="")
	{
	$('#email').css('border','solid orange 2px');
	$('#email').val("email");
	temp=false;
	}
	
	if(password=="")
	{
	$('#password').css('border','solid orange 2px');
	$('#password').val("password");
	temp=false;
	}
	temp=true;
/*	
	$.post("server.php", { "email": email, "password": password, "username":username },  
		   function(data) {
				//$('#response').html(data);

		   });	
	
	*/
}
