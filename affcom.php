<?php

   $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");

   $username = $_POST['username'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];

   echo $username."<br>";
   echo $password."<br>";
   echo $address."<br>";
   echo $phone."<br>";

   if($username && $password && $address && $phone)
   {
   	  echo "<br> query execution";
      $query = mysqli_query($connect,"INSERT INTO affcom(id,username,password,phone,address) VALUES ('','$username','$password','$phone','$address')");
      header("location:master.php?success=Company Added!");
   }
   else
   {
	   header("location:master.php?error=All fields are required");
   }
?>
