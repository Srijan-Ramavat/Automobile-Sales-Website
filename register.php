<?php 

   $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");
   
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];

   echo $username;
   echo $password;
   echo $email;
   echo $phone;

   if($username && $password && $email && $phone)
   {
   	  echo "<br> query execution";
      $query = mysqli_query($connect,"INSERT INTO customer(id,username,email,password,phone,address) VALUES ('','$username','$email','$password','$phone','')");
      header("location:clogin.html");
   }
   else
   { 
	   header("location:reg.php?error=All fields are required"); 
   }

?>