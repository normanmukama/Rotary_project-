<?php
session_start();
include "include.php";
?>

<body>
    <div class="container">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD MEMBER DETAILS
                            <a href="code2.php" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="getdata.php" method="post">
                            <div class="m-2">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="m-2">
                                <label for="course">Course</label>
                                <input type="text" class="form-control" name="course" required>
                            </div>
                            <div class="m-2">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>

                            <input type="submit" name="add_student" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
