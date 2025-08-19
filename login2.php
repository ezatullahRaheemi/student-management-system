<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("header.php");?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
        <style>
            .body
            {
                background-image:  url('images/15.jpg');
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: 100% 100%;
              
            }
            h4{
                padding-top:0px;
            }

            .log{
                padding-top: 15px;
                background-color: rgba(10,45,230 ,0.6);
                width: 350px;
                height: 400px;
                margin-top:70px ;
                text-align: center;
                border-radius:20px;

            }
            
            .input[type ="text"]{
                padding:8px;
                font-size:18px;
            }
            
            .input[type ="password"]{
                padding:8px;
                font-size:18px;
            }
                        
            .log3{
                padding-top: 10px;
                background-color:rgba(40, 103, 101,0.9);
                width: 350px;
                height: 50px;
                margin-top:5px ;
                margin-bottom:15px;

                text-align: center;

            }

            .log1
            {
                padding-top: 7px;
                padding-bottom: 7px;

            }
            .lab
            {
                color:blanchedalmond;
            }
            .sub
            {
                background-color:green;
                border-radius:10px;
                padding:5px;
                padding-left: 16px;
                padding-right: 20px;
                font-size: 25px;
                color:orange;

            }
            .title
            {
                color:white;
            }
            h1{
                color:blanchedalmond;
                margin-top: 0px;
            }
           
        </style>
    
 
    
</head>
<body class="body" >

   <center>
   
<div class="log">
    <div class="log3">
    <h1>Login Form</h1>
   
 
    </div>
            <form class="for" action="login_check.php" method="POST">
           
                    
             
        <div class="log1">
            <label for="na" class="lab" > Username:</label>
            <input class="input"  type="text" name="username" id="st"  placeholder="Username" value="" ><br>
        </div> 
        <div class="log1">                  
            <label for="la" class="lab"> Password:</label>
            <input class="input" type="password" name="password" id="la" placeholder="Password"  value=""><br>
        </div>        
            <input  class="sub" type="submit" name="sub" value="Login" >

        <div class="log3">
            <h4>
                <?php
                    // show not match
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMsg'];
                
                ?>
           </h4>
        
        </div> 
    </form>
</div>
</center>
    
</body>
</html>