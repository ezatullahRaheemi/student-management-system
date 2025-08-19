

<?php

// CONNECTION
include("connection.php");
                            
// link header and aside
include"header.php";

// sidebar
include"asidebar.php";
 

?>

<style>

    table td{
        background-color:lightgray;
    }
    table th {
        background-color:orange;

    }

    .but-d
    {
    background-color:red;
    padding:10px 19px;
    border-radius: 10px ;
    text-align:center;

    
    }
    
    .but-u
    {
    background-color:green;
    padding:10px 19px;
    border-radius: 10px;
    text-align:center;


    
    }
    .table{
        width:95%;
        margin-right:30px;
    }
</style>


<div class="contant">
         <center>
                <h1> Student Data</h1> <br>

                <?php
                                        
                    session_start();
                    error_reporting(0);
                    if($_SESSION['message'])
                    {
                       echo $_SESSION['message'];
                    }
                        unset($_SESSION['message']);
              
               ?>

                <div style="text-align: right; margin-right: 70px">
                    <form method="GET" action="" style="display:inline-block;">
                        <input type="search" autocomplete="off" name="search" placeholder="Search By Name"
                            value="<?php if(isset($_GET['search'])){echo $_GET['search']; }?>"
                            style="padding: 5px; width: 250px;">
                        <input type="submit" value="Search" style="padding: 5px 10px;">
                    </form>
                </div>

                
             <table border="1" style="border-collapse:collapse; margin-top:25px; " class="table">
                <tr>
                    <th style="padding: 20px; font-size: 20px;">Name</th>
                    <th style="padding: 20px; font-size: 20px;">Phone</th>
                    <th style="padding: 20px; font-size: 20px;">Email</th>
                    <th style="padding: 20px; font-size: 20px;">Password</th>
                    <th style="padding: 20px; font-size: 20px;">Delete</th>
                    <th style="padding: 20px; font-size: 20px;">Update</th>

                </tr>

                <?php
                if(isset($_GET['search']))
                {
                    $sid= $_GET['search'];
                    $query ="SELECT * FROM user WHERE usertype ='student' AND CONCAT(username,phone,email) LIKE '%$sid%'";
                    $run =mysqli_query($conn,$query);

                    if(mysqli_num_rows($run)>0)
                    {
                        foreach($run as $item)
                        {
                            ?>
                            <tr>
                            <td style=" padding:15px;">

                                <?php echo "{$item['username']}";?>

                            </td>
                            <td style=" padding:15px;">

                                <?php echo  "{$item['phone']}";?>

                            </td>
                            <td style=" padding:15px;">

                                <?php echo  "{$item['email']}";?>

                            </td>

                            <td style=" padding:15px;">

                                <?php echo  "{$item['password']}";?>

                            </td>

                            <td style=" padding:15px;">
                                       
        
                                       <?php echo  "<a onClick =\"javascript:return confirm('Are You Sure Delete This')\"
                                       class= 'but-d' href='delete.php?student_id={$item['id']}'>Delete</a>"; ?>
       
                                   </td>
                                   
                                   <td style="padding:15px;">
       
                                        <a  class= 'but-u' href='update_student.php?student_id=<?php echo $item['id'];?>'> Update</a> 
       
                                   </td>
       
                            </tr>
                <?php
                        }
                    }
                    else{
                        ?>


                     <?php
                                
                                // SELECT QUERY
                                $sql = "SELECT * FROM user WHERE usertype ='student'";
        
                                $result = mysqli_query($conn,$sql);
                                
                                // SELECT DATA
                            while($row =mysqli_fetch_assoc($result))
                            {
                
                        ?>
                                <tr>
                                    <td style=" padding:15px;">
        
                                        <?php echo "{$row['username']}";?>
        
                                    </td>
                                    <td style=" padding:15px;">
        
                                        <?php echo  "{$row['phone']}";?>
        
                                    </td>
                                    <td style=" padding:15px;">
        
                                        <?php echo  "{$row['email']}";?>
        
                                    </td>
        
                                    <td style=" padding:15px;">
        
                                        <?php echo  "{$row['password']}";?>
        
                                    </td>
                                    
                                    <td style=" padding:15px;">
                                       
        
                                        <?php echo  "<a onClick =\"javascript:return confirm('Are You Sure Delete This')\"
                                        class= 'but-d' href='delete.php?student_id={$row['id']}'>Delete</a>"; ?>
        
                                    </td>
                                    
                                    <td style="padding:15px;">
        
                                         <a  class= 'but-u' href='update_student.php?student_id=<?php echo $row['id'];?>'> Update</a> 
        
                                    </td>
        
        
                                </tr>
        
                        <?php
                        
                            }
                        
                        ?>
                    </table>
        
                </center>
        
            </div>
           
        
                <?php
                    }
                }
                 ?>
                
             
    
</body>
</html>
