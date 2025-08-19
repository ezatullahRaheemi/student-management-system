<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "schoolprojent1";

 $conn = mysqli_connect($server ,$user,$pass,$db);
if($conn ===false )
{
    die("connection error"  );

}
?>