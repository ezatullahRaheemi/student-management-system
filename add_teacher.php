
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
error_reporting(E_ALL);
ini_set('display_errors',1);

// CONNECTION
include("connection.php");
                    
// link header and aside
include"header.php";
//sidebar
include"asidebar.php";

if(isset($_POST['addteacher']))
{
    $name = $_POST['name'];
    $description = $_POST['desc'];

    $file = $_FILES['image']['name'];

    $dst ="../image/". $file;
    $dst_db ="image/". $file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql = "INSERT INTO teacher(name,description,image)VALUES('$name','$description','$dst_db')";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("location:view_teacher.php");
    }

}

?>

   
<style>

    
.form
    {
        background-color: rgba(182, 199, 177, 0.7);
    
        box-shadow: white 0px 0px 50px;
        width: 700px;
        height: 370px;
        text-align:right;
        padding-right:40px;
        padding-top:30px;

    }
        input[type=text] {
            padding:10px;
            width:500px;
            margin-top:15px;
            font-size:16px;
            margin-top:70px;

        }

        textarea{
            padding:10px;
            width:500px;
            margin-top:15px;
            font-size:16px;
        }
                        
        input[type=file] {
            padding:10px;
            width:500px;
            margin-top:15px;
            font-size:36px;
        }

    
        button {
            padding:10px;
            width:400px;
            margin-top:25px;
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


    
    <div class="contant">
           
    <center>
         <h1>Add Teacher</h1>
         <br>
         <br>

        <div class="tota2">
            
            <form class="form" action="#" method = "post" enctype="multipart/form-data">
              
                <div>
                    <label for="">Teacher Name :</label>  
                    <input type="text" placeholder="Enter your Name !" name="name"><br>
                </div>
                <div>
                    <label for="">Description :</label>
                    <textarea name="desc">  </textarea>
                </div>
                <div>
                    <label for="">Image :</label>
                    <input type="file" placeholder="Enter your Email !" name="image" ><br>
                </div>
                <div>
                    <button type="submit" name="addteacher" value="">Add Teacher</button>
                </div>  
           
            </form>
 
        </div>
     </center>
    </div>
    

</body>
</html>





