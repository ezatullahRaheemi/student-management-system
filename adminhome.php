
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

// include("navigationbar.php");

// link header and aside
include("header.php");

include("asidebar.php");
?>


<style>

    table td{
        background-color:lightgray;
    }
    table th {
        background-color:orange;

    }
    .table{
        width: 95%;
    }

</style>




    <div class="contant">

                <h1 style="text-align:center">Applied For Admission</h1> <br>
            <table border="1" style="border-collapse:collapse; margin-top:25px;" class="table">
                <tr>
                    <th style="padding: 20px; font-size: 20px;">Name</th>
                    <th style="padding: 20px; font-size: 20px;">Email</th>
                    <th style="padding: 20px; font-size: 20px;">Phone</th>
                    <th style="padding: 20px; font-size: 20px;">Message</th>

                </tr>
                <?php

                        // SELECT QUERY
                        $sql = "SELECT * FROM admission";

                        $result = mysqli_query($conn,$sql);

                        // SELECT DATA
                    while($row =mysqli_fetch_assoc($result))
                    {

                ?>
                        <tr>
                            <td style=" padding:15px;">

                                <?php echo "{$row['name']}";?>

                            </td>
                            <td style=" padding:15px;">

                                <?php echo  "{$row['email']}";?>

                            </td>
                            <td style=" padding:15px;">

                                <?php echo  "{$row['phone']}";?>

                            </td>
                            <td style=" padding:15px;">

                                <?php echo  "{$row['message']}";?>

                            </td>

                        </tr>

                <?php

                    }

                ?>
            </table>


    </div>

</body>
</html>
