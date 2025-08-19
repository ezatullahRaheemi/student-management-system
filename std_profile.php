


<?php
    error_reporting(0);

    session_start();

    if(!isset($_SESSION['username']))
    {
       header("location:login2.php");

    }
    
    elseif($_SESSION['usertype'] == "admin")
    {
       header("location:login2.php");

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student home</title>
    <link rel="stylesheet" href="styles/admin.css">
      
<style>

    
.form
    {
        background-color: rgba(149,234,124,0.7);
    
        box-shadow: white 0px 0px 20px;
        width: 330px;
        height: 350px;
        text-align:right;
        padding-right:40px;

    }
        input[type=text] {
            padding:7px;
            width:200px;
            margin-top:15px;
            font-size:16px;
            margin-top:70px;

        }

        input[type=number] {
            padding:7px;
            width:200px;
            margin-top:15px;
            font-size:16px;
        }
                        
        input[type=email] {
            padding:7px;
            width:200px;
            margin-top:15px;
            font-size:16px;
        }
                        
        input[type=password] {
            padding:7px;
            width:200px;
            margin-top:15px;
            font-size:16px;
        }
    
        button {
            padding:5px;
            width:170px;
            margin-top:15px;
            font-size:20px;
            color:white;
                background-color:blue;

        }
        button:hover
        {
            background-color:darkgreen;
            
        }
        label
        {
            font-size:19px;
            color:black;
            
        }
        

</style>


</head>
<body>


<?php
// connection
include "connection.php";

// sidebar and header
include "std_sidebar_header.php";

//  select data of database
$name = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username ='$name'";
$result = mysqli_query( $conn,$sql);
$row = mysqli_fetch_assoc($result);

// click on submit
if(isset($_POST['submit']))
{
    $sname = $_POST['username'];
    $semail = $_POST['email'];
    $sphone = $_POST['phone'];
    $spassword = $_POST['password'];

    $sqli1 ="UPDATE user SET email ='$semail', phone ='$sphone', password ='$spassword' WHERE username = '$name'";
    $result1 =mysqli_query($conn,$sqli1);
    if($result1)
    {
        header("location:std_profile.php");
    }


}


?>


<div class="contant">
       
        
    <center>
        <h1>Update Profile</h1><br><br>
         
         <div class="tota2">
         <form class="form" action="#" method = "post">
         
                 <label for="">Username :</label>
                 <input type="text" placeholder="Enter Username !" name="username"
                  value="<?php echo "{$row['username']}"?>"><br>
 
                 <label for="">Email :</label>
                 <input type="email" placeholder="Enter your Email !" name="email"
                 value="<?php echo "{$row['email']}"?>" ><br>
 
                 <label for="">Phone :</label>
                 <input type="number" placeholder="Enter your Number !" name="phone" 
                 value="<?php echo "{$row['phone']}"?>"><br>
 
               
                 <label for="">Password :</label>
                 <input type="password" placeholder="Enter Password ! " name="password"
                 value="<?php echo "{$row['password']}"?>">
               
                 
             <button type="submit" name="submit" value="">Update</button>
         
           
         
             
         </form>
 
     </div>
     </center>
    </div>

    
</body>
</html