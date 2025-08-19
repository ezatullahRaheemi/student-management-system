
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
    // SELECT DATA FORM DATABASE
    $sql = "SELECT * FROM teacher";
    $result = mysqli_query($conn,$sql);


?>

<style>
    
    table td{
        background-color:lightgray;
        text-align:center;
        font-size:24px;
        padding:1px;
    }
    table th {
        background-color:orange;

    }
    .table{
        width: 95%;
    }
</style>

    
    <div class="contant">
      
             <h1 style="text-align:center">View All Teacher Data</h1>
            <table border="1" style="border-collapse:collapse; margin-top:25px;" class="table">
                    <tr>
                        <th style="padding: 20px; font-size: 20px;">Teacher Name</th>
                        <th style="padding: 20px; font-size: 20px;">About Teacher</th>
                        <th style="padding: 20px; font-size: 20px;">Image</th>

                    <?php
                
                while($row=mysqli_fetch_assoc($result))
                {
                    
                    ?>

                        </tr>
                            <td><?php echo "{$row['name']}"?></td>
                            <td><?php echo "{$row['description']}"?></td>
                            <td>
                                <img height="100px" width="100px" src="<?php echo "{$row['image']}"?>" alt="">
                            </td>
                        
                        <tr>
                    <?php
                    
                }
                    
                    ?>
                
    </div>
    

</body>
</html>






