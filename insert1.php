<?php
error_reporting(0);
session_start();

// CONNECTION
include("connection.php");

// when click here
if(isset($_POST['apply']))
{
        // FORM INNFORMAITION 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

            //RUN QUERY
            $sql = "INSERT INTO admission(name,email,phone,message)VALUES('$name','$email','$phone','$message')";
          $result = mysqli_query($conn,$sql);

        if($result)
        {
            $_SESSION['message']="Record Inserted Successful";
            header("location:index.php");
        }
          
          
    

   
   

}


?>