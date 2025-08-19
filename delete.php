<?php
error_reporting(0);
session_start();
// connection
include "connection.php";


if($_GET['student_id'])
{
    $id =$_GET['student_id'];

    $sql = "DELETE  FROM user WHERE id ='$id' ";

    $result = mysqli_query($conn,$sql);

    if($result)
    {

        // show message
        $_SESSION['message'] = 'Delete Student Successful';
        header("location:http://localhost/student/view_student.php");
    }


}




?>