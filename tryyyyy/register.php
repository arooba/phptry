<?php
include('db.php');

if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	
	
		if ($username=="")	
		{
		echo "required";	
		}
		
		if ($email=="")	
		{
		echo "required";	
		}
		
		if ($password=="")	
		{
		echo "required";	
		}

$sql="insert into users set username='$username',email='$email',password='$password'";
	$res=mysql_query($sql);
	
	if($res)
	{
		echo "success";
	}
	else 
	{
		echo "sory";
	}
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href= "mycss.css" > 
<script src="javascript.js" ></script>
<script src="jquery-1.9.1.min.js" ></script>
<title>register</title>
</head>

<body>
<form onSubmit="change();" >
	<p>
    <a href="https://www.google.com" title="click me!!" >google</a>
    </p>
    
    <p>
    user : <input type="text" name="user" class="inputfield" id="user" placeholder="enter ur username" />
    </p>
    
    <p>
    email : <input type="text" name="email" class="inputfield" id="email" placeholder="enter ur email" />
    </p>
    
    <p>
    password : <input type="password" name="password" class="inputfield" id="password" placeholder="enter ur password" />
	</p>
    
    <p>
    <input type="submit" name="submit" value="submit" />
    </p>

</form>
</body>
</html>