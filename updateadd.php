<?php

   session_start();
   $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");
   $username = $_SESSION['login_user'];
   $address = $_POST['address'];

   echo $address;

   if($address)
   {
   	  echo "<br> query execution";
      $sql="UPDATE customer SET address='$address' WHERE username='$username';";
      $result = mysqli_query($connect,$sql);
      echo $sql;
      if ($result) {
         header("location:purchase.php?success='Address Updated'");
      }
   }
   else
   {
	   header("location:purchase.php?error=Address required");
   }
?>
