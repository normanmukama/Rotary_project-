<?php
require 'dbconn.php';
session_start();

if(isset($_POST['submit'])){
    $students = $_POST['student'];
    $date = date("Y-m-d");

    foreach($students as $student_id){
        $query = "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id', '$date', 'present')";
        $query_run = mysqli_query($conn, $query);
        if(!$query_run){
            $_SESSION['status'] = "Error: Failed to record attendance.";
            header('Location: index.php');
            exit();
        }
    }

    $_SESSION['status'] = "Attendance recorded successfully.";
    header('Location: index.php');
    exit();
}
