
<?php include'links.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryphp</title>
</head>
<body>
<div class="container">
<div class="back">
<h2>Update Your Data</h2>
  <a href="display.php"><button type="button" class="btn btn-outline-danger">X</button></a>
  </div> 
    
<?php
include 'connection.php';

$upno = $_GET['srno'];

$showquery = " select * from trytable where srno={$upno}";

$showdata = mysqli_query($con,$showquery);

$showarr = mysqli_fetch_array($showdata);


if(isset($_POST['submit'])){
    $updateid = $_GET['srno'];
    $name = $_POST['name'];
    $email = $_POST['email'
];
    $number = $_POST['number'];
    $id = $_POST['id'];
$insertinto = (" insert into trytable(name,email,number,id) values('$name','$email','$number','$id') ");

$upquery= " update trytable set name='$name',email='$email',number='$number',id='$id' WHERE srno=$updateid ";



$res = mysqli_query($con,$upquery);

if ($res) {
    ?>
    <script>
        alert('Data Update Succesfully');
    </script>
    <script>
 window.location.href = "display.php";
</script>
    <?php
    
}
else{
    ?>
    <script>
        alert('Data not Updated');
    </script>
    <?php
}

}


?>

<div class="col">
    <form action="" method="POST">
        <input type="text" name="name" value="<?php echo $showarr['name']; ?>" id="">
        <br>
        <input type="email" name="email" value="<?php echo $showarr['email']; ?>" id="">
        <br>
        <input type="text" name="number" value="<?php echo $showarr['number']; ?>" id="">
        <br>
        <input type="text" name="id" value="<?php echo $showarr['id']; ?>" id="">
        <br>
        <button class="inp " type="submit" name="submit" id="">Update</button>
    </form>
       
</div>
</div>
</body>
</html>