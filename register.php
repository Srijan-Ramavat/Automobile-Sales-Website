<?php

if(isset($_POST['submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	
	$enc_password = md5($password);
	
	if($name && $username && $password && $password1)
	{
		if(strlen($name)<30)
		{
			if(strlen($username)<10)
			{
				if(strlen($password)<15 || strlen($password)>6)
				{
					if($password == $password1)
					{
						require "dbc.php";
						$query = mysql_query("INSERT INTO users VALUES ('','$name','$username','$enc_password')");
						echo "Registration Complete! <a href='index.php'>Click here to login</a>";
					}
					else
					{
						echo "Passwords must match";
					}
				}
				else
				{
					echo "Your password must be between 6 and 15 characters";	
				}
			}
			else
			{
				echo "Your username is too long";	
			}
		}
		else
		{
			echo "Your name is too long";
		}
	}
	else
	{ 
		echo "All fields are required"; 
	}
}

?>

<html>

	<form action="register.php" method="POST">
    	Name: <input type="text" name="name" value="<?php if(isset($_POST['submit'])){echo "$name";} ?>"> Max Length:30<p>
        Username: <input type="text" name="username" value="<?php if(isset($_POST['submit'])){ echo "$username";} ?>"> Max Length:10<p>
        Password: <input type="password" name="password"> Max length:15<p>
        Re-Enter Password: <input type="password" name="password1"><p>
        <input type="submit" name="submit" value="Register">
    </form>
	
</html>