<?php

   session_start();
   if ($_SESSION['login_user']) {
      $username = $_SESSION['login_user'];
   }

   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   echo $username;

   if($username)
   {
      echo "<br> query execution";
      $query = mysqli_query($connect,"INSERT INTO contacts(id,name,email,subject,message) VALUES ('','$name','$email','$subject','$message')");
      header("location:contact.php?success='Message Sent!'");
   }
   else
   {
     header("location:contact.php?error=All fields are required");
   }


?>
