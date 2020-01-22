<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'schedule');

if (isset($_POST['updatecode']))
{
    $id = $_POST['update_id'];
    $name = $_POST['name'];
    $week1 = $_POST['week1'];
    $week2 = $_POST['week2'];
    $week3 = $_POST['week3'];
    $week4 = $_POST['week4'];
    $week5 = $_POST['week5'];
    $week6 = $_POST['week6'];
    $week7 = $_POST['week7'];
    $week8 = $_POST['week8'];

    $query =" UPDATE  employees SET  `name` ='$name' , `week1` = '$week1' , `week2` = '$week2' , `week3` = '$week3' ,
               `week4` = '$week4' , `week5` = '$week5' , `week6` = '$week6' , `week7` = '$week7' , `week8` = '$week8'  where `id` = '$id'" ;

   /* $query = "update employees `employees` set name = '$name', week1 = '$week1',  week2 = '$week2', week3 = '$week3',
          week4 = '$week4',  week = '$week5'  week6 = '$week6'   week7 = '$week7'  week8 = '$week8' where id = '$id'  ";*/
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
        echo '<script> alert("DATA UPDATED"); </script>';
        header("Location:index.php");
    }else
    {
        echo '<script> alert("DATA NOT UPDATED"); </script>';
        echo "Error updating record: " . mysqli_error($connection);
        }

}
?>
