<?php include'links.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
</head>
<body>



<div class="container">
<div class="back">
<h2>Submited Data Shown Here</h2>
  <a href="index.php"><button type="button" class="btn btn-outline-danger">X</button></a>
  </div>  
  <table class="table table-hover">
    <thead>
    <tr>
    <th>Serial no</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Id</th>
    <th>Operation's</th>
  </tr>
    </thead>
    <tbody>
      
  <?php

include 'connection.php';

$selectquery = " select * from trytable ";
$query = mysqli_query($con,$selectquery);
$num = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
?>
  <tr>
        <td><?php echo $res['srno']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['number']; ?></td>
        <td><?php echo $res['id']; ?></td>
        <td>
            <a href="update.php?srno=<?php echo $res['srno']; ?>" class="btn btn-success btn-sm" role="button">Update</a>

        
            <a href="delete.php?srno=<?php echo $res['srno']; ?>" class="btn btn-danger btn-sm" role="button">
           Delete</a>



        </td>
    </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>

</body>
</body>
</html>




