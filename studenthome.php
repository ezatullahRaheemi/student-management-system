
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

</head>
<body>
    
<?php


include "std_sidebar_header.php";

?>


  
    <div class="contant">
        <h1>Siderbar Accordion</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae qui inventore, aperiam explicabo eveniet magni harum doloribus. Non iusto, doloremque quos deserunt at dolore corrupti accusantium architecto doloribus harum aperiam.
        Unde, quibusdam. Cum in doloremque minima nihil voluptatibus et impedit blanditiis molestiae. Ut incidunt, placeat dolore facere ratione sunt odio, quasi error totam modi ea sed ad culpa nam consectetur!</p>
    </div>
    

</body>
</html>