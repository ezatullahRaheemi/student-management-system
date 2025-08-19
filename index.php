
<?php
error_reporting(0);

session_start();
session_destroy();
if($_SESSION['message'])
{
    $message = $_SESSION['message'];
    echo "<script type ='text/javascript'>

    alert('$message')

    </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Managemant System </title>
    <link rel="stylesheet" type="text/css"  href="styles/index.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>

    <nav>
        <label class="logo"> H-School</label>
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About us</a></li>
        <li class="login"><a href="login2.php">Login</a></li>
    </ul>
    </nav>

    <div class="section1">
        <img class="main-img" src="images/school1.png">
        <label class="img-text">Student Management System</label>
    </div >


    <div class="container">
        <div class="row">

                <p class="par">
                    <img class="img1" src="images/school.png">
                    <h1>Welcome To H-School</h1>
                    dolor sit amet consectetur adipisicing elit. Evehhkjkgiglhkj;hkjniet dolorum inventore cum repudiandae praesentium, voluptatibus aspernatur consequuntur porro beatae eaque quod deleniti neque, nesciunt iste doloribus eligendi consectetur deserunt officiis?
                    c dicta animi accusamus at omnis iure error aliquam eligendi facere deleniti. Nam facilis suscipit, reprehenderit tempore quos aliquid similique dolorum, veritatis vel quidem voluptate! Eligendi veniam autem maiores ea.
                    Officia facilis exercitationem at aliaHis atque fuga! Aspernatur facilis expedita et iusto perferendis dolorem velit magni aperiam officiis atque. Temporibus officia, perspiciatis animi in odio praesentium repellendus maiores ad quisquam!
                    Eligendi non praesentium earum ad harum. Vero fuga, cum qui labore error dolore laborum laudantium autem ipsum vitae dolor eligendi. Tempora officiis ipsam beatae a ullam facere vero quidem iste!
                   itaque iure quasi minus laboriosam aliquam architecto, libero neque. Quibusdam, delectus veritatis laudantium maxime, nesciunt


            </div>
        </div>


        <br>
        <br>
        <br>

        <center><h1>Our Teacher</h1> <center>

                <div class="container">
                    <div clss="row">

                            <?php

                            // CONNECTION
                            include("connection.php");


                            // SELECT TEACHER FORM DATABASE

                            $sql = "SELECT * FROM teacher";

                            $result = mysqli_query($conn,$sql);

                            // SELECT DATE FORM DATABASE

                                while($row=mysqli_fetch_assoc($result))
                        {

                            ?>

                                <li class="list">
                                    <img  class="pic" src="<?php echo "{$row['image']}"?>" alt="">
                                    <h2><?php echo "{$row['name']}"?></h2>
                                    <h3><?php echo "{$row['description']}"?></h3>
                                </li>

                            <?php

                        }

                            ?>

                    </div>

                </div>



        <br>
        <br>
        <br>
       <center><h1>Our Courses</h1> </center>


    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="card">
            <img src="images/addmin.png" alt="">
            <div class="card-body">
              <h3 class="card-title">Languages</h3>
              <h6 class="card-subtitle text-primary pb-3">Dari,Pashto and English</h6>
              <p class="card-text">  ipsum dolor sit amet consectetur adipisicing elit. Quo incidunt assumenda nihil ratione quia nesciunt sequi deserunt eius ducimus quisquam, reiciendis odit beatae, iusto placeat in minima quaerat corporis quas odit beatae, iusto placeat.</p>




            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <img src="images/class.png"style="height:200px" alt="">
            <div class="card-body">
              <h3 class="card-title">Natural Sciences</h3>
              <h6 class="card-subtitle text-primary pb-3">Chemistry,Biology and Physic</h6>
              <p class="card-text">  consectetur adipisicing ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing Quo incidunt assumenda nihil ratione quia nesciunt sequi deserunt eius ducimus quisquam, reiciendis odit beatae, iusto placeat in minima quaerat .</p>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <img src="images/class1.png"   alt="">
            <div class="card-body">
              <h3 class="card-title">Islamic</h3>
              <h6 class="card-subtitle text-primary pb-3">Beliefs</h6>
              <p class="card-text">ipsum dolor sit amet consectetur adipisicing elit. Quo incidunt assumenda nihil ratione quia nesciunt sequi deserunt eius ducimus quisquam, reiciendis odit beatae, iusto placeat in minima quaerat corporis quas consectetur.</p>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <img src="images/class2.png"  alt="">
            <div class="card-body">
              <h3 class="card-title">Mathematics</h3>
              <h6 class="card-subtitle text-primary pb-3">Algebra, Geometry and Trigonometry </h6>
              <p class="card-text"> ipsum sit amet consectetur adipisicing elit. Quo incidunt assumenda nihil ratione quia nesciunt sequi deserunt eius ducimus quisquam, reiciendis odit beatae, iusto placeat in minima quaerat corporis quasassumenda nihil.</p>
            </div>
          </div>
        </div>

      </div>
    </div>


        <br>
        <br>
        <br>


    <div >
        <form class="form" action="insert1.php" method="POST">
        <h1>Admission</h1>
            <div>
                   <br>
                    <label class="la-te">Name :<label>
                    <input class="inp" type="text" placeholder="Enter Your Name !" name="name">
                    </div>
            <div>

                  <br>
                    <label class="la-te">Email :<label>
                    <input  class="inp" type="email" placeholder="Enter Your Email !" name="email">
            </div>

            <div>
                   <br>
                    <label class="la-te">Phone :<label>
                    <input  class="inp" type="number" placeholder="Enter Your Number !" name="phone">
            </div>

            <div>
                    <br>
                    <label class="la-te">Message :<label>
                    <textarea class="inp-txt" name="message">
                    </textarea>
            </div>

            <div>
                <input type="submit" id="submit" value="Apply"name="apply">
            </div>

        </from>
    </div>


    <br>
    <br>


       <div class="address">
                <a  href="https:\\WWW.facebook.com"><img class="img2" src="images/fac.jpg.png" alt=""></a>
                <a  href="https:\\WWW.instagram.com"><img class="img2" src="images/ins.jpg.png" alt=""></a>
                <a  href="https:\\WWW.wtatsapp.com"><img class="img2" src="images/wht.jpg.png" alt=""></a>
                <a  href="https:\\WWW.youtuee.com"><img class="img2" src="images/yout.jpg.png" alt=""></a>


               <label style="font-size:25px; color:white; padding-top:20px; " class="label1"> copyrighy &copy; <?php echo date('Y')?></label>
        </div>

</body>
</html>
