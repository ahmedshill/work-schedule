<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'schedule');

if (isset($_POST['insertdata']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $week1 = $_POST['week1'];
    $week2 = $_POST['week2'];
    $week3 = $_POST['week3'];
    $week4 = $_POST['week4'];
    $week5 = $_POST['week5'];
    $week6 = $_POST['week6'];
    $week7 = $_POST['week7'];
    $week8 = $_POST['week8'];


    $query = "INSERT INTO employees(`id`, `name`, `week1`, `week2`, `week3`, `week4`, `week5`, `week6`, `week7`, `week8`) 
                             VALUES (null ,'$name', '$week1','$week2','$week3','$week4','$week5','$week6','$week7','$week8')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
        echo '<script> alert("Data Saved");</script>';
        header('location: index.php');
    }
    else{
        echo '<script> alert("Data Not Saved"); </script>';
    }

}
?>
<?php
/*$sql = "SELECT * FROM `employees`";
$results = mysqli_query($connection, $sql) or die(mysqli_error($conn));
while ($row=mysqli_fetch_assoc($results)) {
    extract($row);
    echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$week1</td>
                                <td>$week2</td>
                                <td>$week3</td>
                                <td>$week4</td>
                                <td>$week5</td>
                                <td>$week6</td>
                                <td>$week7</td>
                                <td>$week8</td>
                                <td>
                                   <button TYPE='button' class='btn btn-success editbtn' >EDIT</button>
                                    </td>
                                    <td>
                                   <button TYPE='button' class='btn btn-danger deletebtn' >DELETE</button>
                                    </td>
                     </tr>";
}

*/?>
<!--<script>

    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();

            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#week1').val(data[2]);
            $('#week2').val(data[3]);
            $('#week3').val(data[4]);
            $('#week4').val(data[5]);
            $('#week5').val(data[6]);
            $('#week6').val(data[6]);
            $('#week7').val(data[6]);
            $('#week8').val(data[6]);

        });

    });

</script>
-->

