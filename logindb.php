<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'schedule');

if (isset($_POST['submit']))
{
    extract($_POST);
    $sql ="select * from users where username ='$username' and password='$password'";

    $results = mysqli_query($connection, $sql ) or die(mysqli_error($connection));
    $count = mysqli_num_rows($results);
if ($count == 1)
{
    //success
    $students = mysqli_fetch_assoc($results);
    //sessions
    session_start();
    $_SESSION['users'] = $users;
    header('location:index.php');
}

else {
    echo '<script> alert("Incorrect username or Password");</script>';
    header('location: login.php');
}


}

/*{
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $query_run = mysqli_query($connection, $query);
    if ($query_run)
    {
        echo '<script> alert("logged in");</script>';
        header('location: index.php');
    }
    else{
        echo '<script> alert("Incorrect username or password"); </script>';
    }



}*/


?>
