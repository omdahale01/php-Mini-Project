<?php

$username ="root";
$password ="";
$server ='localhost';
$db ='tryphp';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
   ?>
   <!-- <script>
       alert('Connection Succesfull');
   </script> -->
   <?php
}
else{
    echo "connection Failed";
}


?>