<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'websiteusers');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("Failed to connect to database:",mysqli_error($con));
$db = mysqli_select_db($con,DB_NAME) or die("failed to connect to MYSQL:",mysqli_error($con));

function NewUser()
{
  
}

function Signup()
{
  if (!empty($_POST['user'])) {
    $query = mysqli_query($con,"select * from users where username ='$_POST[user]' and password = '$_POST[pass] or die(mysqli_error($con))' ");

    if (!row=mysql_fetch_array($query) or die(mysqli_error($con))) {
      NewUser($con)
    }
    else {
      echo "Sorry ..... you are already registered.";
    }
  }
}

if (isset($_POST['submit'])) {
  //  echo "Signed Up";
  Signup();
}

 ?>
