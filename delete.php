<?php

include 'connection.php';
$dltid = $_GET['srno'];

$deletequery = " delete from trytable where srno=$dltid";

$query = mysqli_query($con,$deletequery);


if($query){
    ?>
<script>
    alert('Delete Succesfully');
</script>
    <?php
}
else
{
    ?>
    <script>
        alert('Cant Delete The Data');
    </script>
        <?php 
}

// header('location:display.php');
?>

<script>
 window.location.href = "display.php";
</script>