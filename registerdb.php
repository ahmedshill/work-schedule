<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'schedule');

if (isset($_POST['reg_user'])){

$fname= $_POST['fname'];
$sname= $_POST['sname'];
$username = $_POST['username'];
$password = $_POST['Password'];
$pnumber= $_POST['pnumber'];

$query = "INSERT INTO `users`(`fname`, `sname`, `username`, `password`, `pnumber`) 
                    VALUES ('$fname','$sname','$username','$password','$pnumber')";

$query_run = mysqli_query($connection, $query);
if ($query_run)
{
    echo '<script> alert("Data Saved");</script>';
    header('location: login.php');
}
else{
    echo '<script> alert("Data Not Saved"); </script>';
}

}


?>

