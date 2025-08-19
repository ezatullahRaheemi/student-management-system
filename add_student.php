
<?php
 error_reporting(0);
    session_start();

    if(!isset($_SESSION['username']))
    {
       header("location:login2.php");

    }

    elseif($_SESSION['usertype']== "student")
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
        box-shadow: lightgray 0px 0px 40px;
        width: 950px;
        height: 450px;
        padding-top:0px;


       


       

    }
        input[type=text] {
            padding:10px;
            width:900px;
            margin-top:15px;
            font-size:16px;
            margin-top:70px;

        }

        input[type=number] {
            padding:10px;
            width:900px;
            margin-top:15px;
            font-size:16px;
        }

        input[type=email] {
            padding:10px;
            width:900px;
            margin-top:17px;
            font-size:16px;
        }

        input[type=password] {
            padding:10px;
            width:900px;
            margin-top:15px;
            font-size:16px;
        }

        button {
            padding:8px;
            width:300px;
            margin-top:15px;
            font-size:20px;
            color:white;
            background-color:blue;
            margin-top:30px;



        }
        button:hover
        {
            background-color:darkgreen;

        }
        label
        {
            font-size:19px;
            color:black;
            margin: 30px 10px;

          
       }
   


  



</style>



</head>
<body>



<?php

        // CONNECTION
        include("connection.php");

        // link header and aside
        include"header.php";

        // sidebar
        include"asidebar.php";


        // click on button
        if(isset($_POST['addStudent']))
        {

                $name = $_POST['username'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $usertype = "student";

                // CHECK USERNAEM ALREADY EXIST
                $check = "SELECT * FROM user WHERE username = '$name'";
                $sql_check = mysqli_query($conn,$check);
                $row_count = mysqli_num_rows($sql_check);

            if($row_count==1)
            {
                echo  "<script type ='text/javascript'>

                alert ('Username Already Eixist. Try Another one');

                 </script>";


            }
            else
            {

                //insertion query
                $sql = "INSERT INTO user(username,phone,email,usertype,password)VALUES('$name','$phone','$email','$usertype','$pass')";

                //RUN QUERY
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                   echo  "<script type ='text/javascript'>
                   alert( 'Data Uploaded Successfull');

                   </script>";
                   header("location:view_student.php");

                }else
                {
                   echo  "<script type ='text/javascript'>

                   alert('Uploaded Failed');
                   </script>";

                }

            }
        }



?>


<div class="contant container">

    <center>
    <h1>Add Student</h1>
        <br>
        <br>

        <div class="tota2 row">
          <div class="col">
        <form class="form" action="#" method = "post">

              <div >
                <!-- <label for="">Username</label> -->
                 <input type="text"  placeholder="Enter Username !" name="username" >
              </div>


                <div >
                  <!-- <label for="">Phone :</label> -->
                  <input type="number" placeholder="Enter your Number !" name="phone" ><br>
                </div>

                <div >
                  <!-- <label for="" >Email :</label> -->
                  <input type="email" placeholder="Enter your Email !" name="email" >
                </div>

                <div >
                  <!-- <label for="" >Password :</label> -->
                  <input type="password" placeholder="Enter Password ! " name="password" >
                </div>



            <button type="submit" name="addStudent" value="">Add Student</button>




        </form>
        </div>

    </div>
    </center>
</div>


</body>
</html>
