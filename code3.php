<?php 
require 'dbconnection.php';
session_start();

?>
<!--        PLEASE IGNORE THESE FILES IE CODE.PHP AND THIS ONE-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insertion</title>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- CSS only -->

    
        <!-- Link Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- link the datatables here -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>
<body>
   <div class="container mt-4">
       <?php require 'message.php' ?>
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>STUDENT DETAILS
                        <a href="index2.php" class="btn btn-danger float-right">Add Student</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Email</th>
                                <th>Attendance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            <form method="POST" action="attendance.php">
                                <?php   
                                $query = "SELECT * FROM mycrud2";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $student){
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" name="student[]" value="<?= $student['id']; ?>"></td>
                                            <td><?= $student['id']; ?></td>
                                            <td><?= $student['name']; ?></td>
                                            <td><?= $student['course']; ?></td>
                                            <td><?= $student['email']; ?></td>
                                            <td>
                                                <a href="student_view.php?id= <?= $student['id']; ?>" class="btn btn-primary btn-sm">View</a>
                                                <a href="student_edit.php?id= <?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="getdata.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                    echo "<h4>No records found</h4>";
                                }
                                ?>
                                <tr>
                                    <td colspan="6">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Attendance</button>
                                    </td>
                                </tr>
                            </form>


                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>


    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    </body>
</html>
