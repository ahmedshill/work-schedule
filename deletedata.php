<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'schedule');

if (isset($_POST['deletecode'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM `employees` WHERE `id` = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
        echo '<script> alert("DATA DELETED"); </script>';
        header("Location:index.php");
    }else
    {
        echo '<script> alert("DATA NOT DELETED"); </script>';
        echo "Error deleting record: " . mysqli_error($connection);
    }


}

/*include_once("db.php");
if($_REQUEST['empid']) {
    $sql = "DELETE FROM `employees` WHERE id='".$_REQUEST['empid']."'";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    if($resultset) {
        echo "Record Deleted";
    }
}*/
?>