<<<<<<< HEAD
<?php 
   session_start();
   
   $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");
   
   $username = $_POST['username'];
   $password = $_POST['password'];

   echo $username;
   echo $password;

   $query = mysqli_query($connect,"SELECT * FROM customer WHERE username='$username'");
   $numrow = mysqli_num_rows($query);
		
		if($numrow!=0)
		{
			while($row = mysqli_fetch_assoc($query))
=======
<?php

session_start();

require "dbc.php";

if(isset($_POST['submit']))
{

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$enc_password = md5($password);
	
	if($username&&$password)
	{
		$query = mysql_query("SELECT * FROM customer WHERE username='$username'");
		$numrow = mysql_num_rows($query);
		
		if($numrow!=0)
		{
			while($row = mysql_fetch_assoc($query))
>>>>>>> 4b947ec597d0ee5ee3bbde97a06a883531ec3253
			{
				$db_username = $row['username'];
				$db_password = $row['password'];
			}
<<<<<<< HEAD
            echo $db_username;
            echo $db_password;
		}
		if ($db_username==$username && $db_password==$password) {
			$_SESSION['login_user']=$db_username;
			header("location:index.php");
		}
		else
		{
			header("location:clogin.html?error='Invalid'");
		}
   
 ?>
=======
			
			if($username==$db_username&&$enc_password==$db_password)
			{
				//echo "Logged in <a href='members.php'>Click here to enter the members area</a>";
				$_SESSION['username']=$db_username;
				header("location: members.php");
			}
			else 
			{
				header("location: index.php?error=Incorrect Password");
			}
		}
		else 
		{
			header("location: index.php?error=That user doesn't exist");
		}
	}
	else 
	{
		header("location: index.php?error=All fields are required");
	}
}

?>
>>>>>>> 4b947ec597d0ee5ee3bbde97a06a883531ec3253