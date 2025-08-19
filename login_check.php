<?php
// if($pss === $hashed_password)
// {
//     echo "password true";
// }else{
//     echo "password false";
// }
error_reporting(0);
session_start();

// CONNECTION 
include("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST")

{   
    // CHECK     
    if(isset($_POST['username']) && isset($_POST['password']))
   {
        $name = $_POST['username'];
        $pass = $_POST['password'];
    
     $sql = "SELECT * FROM user WHERE username = '$name' AND password = '$pass' ";

     $result = mysqli_query($conn , $sql);

     $row = mysqli_fetch_array($result);

     if($row["usertype"] =="student")
     {
         $_SESSION['username']=$name;
         $_SESSION['usertype'] ="student";
        header("location:studenthome.php");
     } 
        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$name;
         $_SESSION['usertype'] = "admin";
            header("location:adminhome.php");
        }
        
    else{

     
        $msg = "Username or Password do not match";
                
        $_SESSION['loginMsg']= $msg;
        header("location:login2.php");

    }
        
    }
    
 
      
}




?>