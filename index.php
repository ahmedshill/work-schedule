<?php

require 'db.php';
?>


<html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/bootbox.min.js"></script>
    <script type="text/javascript" src="script/deleteRecords.js"></script>-->
    <style>
        body{
            /* background-image: url("photos/back3.png");
             background-repeat: no-repeat;
             background-position: initial;
             background-size: cover;*/
            background-color:  #b1dfbb;

        }


    </style>

</head>
<body>



<?php
require 'navbar.php';

?>

<!--===================================================================================================-->
<!--adding employees details-->

<div class="modal fade" id="employeeaddmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="insertform.php" method="post">
            <div class="modal-body">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>MARCH</label><br><br>
                    <label>week1:</label>
                    <input type="text" class="form-control" name="week1" required>
                </div>
                <div class="form-group">
                    <label>week2</label><br>
                    <input type="text" class="form-control" name="week2" required>
                </div>
                <div class="form-group">
                    <label>week3</label><br>
                    <input type="text" class="form-control" name="week3" required>
                </div>
                <div class="form-group">
                    <label>week4</label><br>
                    <input type="text" class="form-control" name="week4" required>
                </div>
                <div class="form-group">
                    <label>APRIL</label><br><br>
                    <label>week1:</label>
                    <input type="text" class="form-control" name="week5" required>
                </div>
                <div class="form-group">
                    <label>week2</label><br>
                    <input type="text" class="form-control" name="week6" required>
                </div>
                <div class="form-group">
                    <label>week3</label><br>
                    <input type="text" class="form-control" name="week7" required>
                </div>
                <div class="form-group">
                    <label>week4</label><br>
                    <input type="text" class="form-control" name="week8" required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" name="insertdata" class="btn btn-primary btn-block employeeaddmodel">Save Data</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

</div>
<!-- End of ADD EMPLOYEES-->
<br>
<br>

<!-- MODAL FOR EDITING EMPLOYEES-->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> edit employees data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="updatedata.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" id="name"  >
                    </div>
                    <div class="form-group">
                        <label>MARCH</label><br><br>
                        <label>week1:</label>
                        <input type="text" class="form-control" name="week1" id="week1" >
                    </div>
                    <div class="form-group">
                        <label>week2</label><br>
                        <input type="text" class="form-control" name="week2" id="week2" >
                    </div>
                    <div class="form-group">
                        <label>week3</label><br>
                        <input type="text" class="form-control" name="week3" id="week3" >
                    </div>
                    <div class="form-group">
                        <label>week4</label><br>
                        <input type="text" class="form-control" name="week4" id="week4" >
                    </div>
                    <div class="form-group">
                        <label>APRIL</label><br><br>
                        <label>week1:</label>
                        <input type="text" class="form-control" name="week5" id="week5" >
                    </div>
                    <div class="form-group">
                        <label>week2</label><br>
                        <input type="text" class="form-control" name="week6" id="week6" >
                    </div>
                    <div class="form-group">
                        <label>week3</label><br>
                        <input type="text" class="form-control" name="week7" id="week7" >
                    </div>
                    <div class="form-group">
                        <label>week4</label><br>
                        <input type="text" class="form-control" name="week8" id="week8" >
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" id="updatecode" name="updatecode" class="btn btn-primary btn-block editbtn">Update Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- END OF EDDITING EMPLOYEES-->



<!--delete modal-->


<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> edit employees data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="deletedata.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="delete_id" id="delete_id">

                        <h4>Are You Sure You Want To Delete </h4>

                </div>
                <div class="modal-footer">
                    <button type="submit" id="deletecode" name="deletecode" class="btn btn-primary btn-block deletebtn">Yes!! Delete Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>





<!--END 0F DELETE-->

<div class="jumbotron">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employeeaddmodel">
                Add Details of Employees
            </button>
        </div>
    </div>
</div>

<!--<div class="card">
    <div class="card-body">
        <?php
/*        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'schedule');

        $query = "select * from employees";
        $query_run = mysqli_query($connection, $query);

        */?>

        <table class="table table-bordered table-success" >
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">WEEK1</th>
                <th scope="col">WEEK2</th>
                <th scope="col">WEEK3</th>
                <th scope="col">WEEK4</th>
                <th scope="col">WEEK5</th>
                <th scope="col">WEEK6</th>
                <th scope="col">WEEK7</th>
                <th scope="col">WEEK8</th>
            </tr>
            </thead>
            <?php
/*
            if ($query_run)
            {
                foreach ($query_run as $row) ;
                {
                    */?>
                    <tbody>
                    <tr>
                        <td> <?php /*echo $row['id']; */?> </td>
                        <td> <?php /*echo $row['name']; */?> </td>
                        <td> <?php /*echo $row['week1']; */?> </td>
                        <td> <?php /*echo $row['week2']; */?> </td>
                        <td> <?php /*echo $row['week3']; */?> </td>
                        <td> <?php /*echo $row['week4']; */?> </td>
                        <td> <?php /*echo $row['week5']; */?> </td>
                        <td> <?php /*echo $row['week6']; */?> </td>
                        <td> <?php /*echo $row['week7']; */?> </td>
                        <td> <?php /*echo $row['week8']; */?> </td>
                        <td>
                            <button type="button" class="btn btn-success editbtn"> EDIT</button>
                        </td>
                    </tr>
                    </tbody>
                    <?php
/*                }
            }
            else{
                echo "no record found";
            }

            */?>

        </table>

    </div>
</div>
-->


<div class="container">


    <table class="table  table-dark" rules="all">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>WEEK1</th>
            <th>WEEK2</th>
            <th>WEEK3</th>
            <th>WEEK4</th>
            <th>WEEK5</th>
            <th>WEEK6</th>
            <th>WEEK7</th>
            <th>WEEK8</th>

            <th style=" text-align: end" colspan="2"> ACTION </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `employees`";
        $results = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        while ($row=mysqli_fetch_assoc($results)) {
        ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["week1"]; ?></td>
            <td><?php echo $row["week2"]; ?></td>
            <td><?php echo $row["week3"]; ?></td>
            <td><?php echo $row["week4"]; ?></td>
            <td><?php echo $row["week5"]; ?></td>
            <td><?php echo $row["week6"]; ?></td>
            <td><?php echo $row["week7"]; ?></td>
            <td><?php echo $row["week8"]; ?></td>
            <td>
                <button TYPE='button' class='btn btn-success editbtn' >EDIT</button>
                <button TYPE='button' class='btn btn-danger deletebtn' >DELETE</button>

            </td>
        </tr>
        <?php
        }
        ?>


       <!-- --><?php
/*       require 'insertform.php'
        */?>

        </tbody>

    </table>

</div>
<!--java for delete-->

<script>

    $(document).ready(function () {
        $('.deletebtn').on('click', function () {
            $('#deletemodal').modal('show');
            /*$id = $(this).attr("id");*/
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();

            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });

    });

</script>


<!--java for edditing-->
<script>

    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editmodal').modal('show');
            /*$id = $(this).attr("id");*/
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
            $('#week6').val(data[7]);
            $('#week7').val(data[8]);
            $('#week8').val(data[9]);
           $('#updatecode').val("update");


        });

    });

</script>


</body>


</html>