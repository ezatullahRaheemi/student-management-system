


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

<?php

    // CONNECTION
    include("connection.php");
    // link header and aside
    include"header.php";
    include"asidebar.php";

   

    //get id from URL 
    $id = $_GET['student_id'];

    // get data form database
    $sql = "SELECT * FROM user WHERE id ='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    // click on update
    if(isset($_POST['update']))
    {
        // data from
        $id = $_GET['student_id'];
        $name = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      

        //update query
        $sql1 ="UPDATE user SET
         username = '$name', 
         phone ='$phone', 
         email ='$email',
        password ='$password' 
        WHERE id='$id'";

            // Run query
        $result1 = mysqli_query($conn,$sql1);
        if($result1)
        {
            echo "data update successfully";
            header("location:http://localhost/student/view_student.php");
        }
        else{
            echo "error update data:". mysqli_error($conn);
            
        }

    }
    

   
 
?>

    <style>
    .form
        {
            /* background-color:while; */
        
            box-shadow: lightgray 0px 0px 70px;
            width: 950px;
            height: 450px;
            text-align:right;
            padding-right:40px;
            margin-top:50px;

        }
            input[type=text] {
                padding:10px;
                width:900px;
                margin-top:15px;
                font-size:16px;
                margin-top:70px;

            }

            input[type=text] {
                padding:10px;
                width:900px;
                margin-top:15px;
                font-size:16px;
            }
                            
            input[type=email] {
                padding:10px;
                width:900px;
                margin-top:15px;
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
                margin-top:30px;
                font-size:20px;
                color:white;
                background-color:blue;

            }
            button:hover
            {
                background-color:teal;
                
            }

            label
            {
                font-size:19px;
                color:white;
                
            }


    </style>

    <div class="contant">
        <center>
        <h1 style="margin-top:40px;">Update Student</h1>
            
        
            <div class="tota2">
            <form class="form" action="view_student.php" method ="POST">
                <input type="hidden" name="std_id"value="<?= $row['id']; ?>" >
                    <label for="">Username :</label>
                    <input type="text" placeholder="Enter Username !" name="username" value="<?= $row['username']; ?>" ><br>

                    <label for="">Phone :</label>
                    <input type="text" placeholder="Enter your Number !" name="phone" value="<?= $row['phone']?>" ><br>

                    <label for="">Email :</label>
                    <input type="email" placeholder="Enter your Email !" name="email"  value ="<?= $row['email']?>"><br>

                    <label for="">Password :</label>
                    <input type="password" placeholder="Enter Password ! " name="password" value ="<?= $row['password'];?>"><br>
                    <div style="text-align:center">
                    <button type="submit" name="update" >Update Student</button>
                    </div>
            </form>

        </div>
        </center>
    </div>

    

</body>
</html>





