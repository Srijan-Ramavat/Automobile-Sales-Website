<?php

        $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");


        $actbox=$_POST['actbox'];

        for($i=0;$i<count($actbox);$i++)
        {
             $del_id = $actbox[$i];
             $sql = "DELETE FROM contacts WHERE id='$del_id'";
             $result = mysqli_query($connect,$sql);
         }
         if($result)
         {
            echo "true";
            header("location:master.php?success='Data Updated!'");
         }

 ?>
