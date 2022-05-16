<?php include'links.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Tryphp</title>
</head>
<body>
<div class="container">
    <h2>Welcome To Customer Page</h2>


    <?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $id = $_POST['id'];

//     $equery = " select * from trytable where email='$email' ";
//     $check = mysqli_query($con,$equery);
//     $enum = myaqli_num_rows($check);
// if($enum>0){
//   echo "email exist";
// }
// else{




  
$insertinto = (" insert into trytable(name,email,number,id) values('$name','$email','$number','$id') ");

$res = mysqli_query($con,$insertinto);


if ($res) {
  ?>  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Data Inserted Properly
</div>
<?php
    // header('location:index.html');
}
else{
    ?>
     <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Opps!</strong> Data Does Not Insert
</div>
    <?php
}

}
// }
?>
   
    <div class="col">
    <form action="" method="post">
    <input type="text" name="name" placeholder="Name" id="" required>
    <input type="email" name="email" placeholder="Emial" id="" required>
    <input type="text" name="number" placeholder="Number" id="" required>
    <input type="text" name="id" placeholder="username" id="" required>
    <input type="submit" name="submit" id="submit" placeholder="Submit">
    </form>
    
   </div>
   <a href="display.php"class="btn btn-outline-dark" role="button">
   <span class="spinner-grow spinner-grow-sm"></span> Display All Inserted Data  <span class="spinner-grow spinner-grow-sm"></span></a>
</div>
<div class="row-down ">
    
</div>
</div>
</body>
</html>









