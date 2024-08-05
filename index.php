<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
Online Library Management System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
nav
{
float: right;
word-spacing: 30px;
padding: 20px;
}
nav li
{
display: inline-block;
line-height: 80px;
}
</style>
</head>


<body>
<div class="wrapper">
<header>
<div class="logo">
<img src="images/9.png">
<h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

<?php
if(isset($_SESSION['login_user']))
{
?>
<nav>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="logout.php">LOGOUT</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
</nav>
<?php
}
else
{
?>
<nav>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="admin_login.php">LOGIN</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
</nav>
<?php
}

?>


</header>
<section>
<div class="sec_img">
<br><br><br>
<div class="box">
<br><br><br><br>
<h1 style="text-align: center; font-size: 35px;">Welcom to library</h1><br><br>
<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
<h1 style="text-align: center;font-size: 25px;">Closes at: 15:00 </h1><br>
</div>
</div>
</section>


</div>
<?php  

include "footer.php";
?>
</body>
</html>

logout.php
<?php
session_start();
if(isset($_SESSION['login_user']))
{
unset($_SESSION['login_user']);
}
header("location:index.php");
?>

navbar.php

<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>

 <link rel="stylesheet" type="text/css" href="style.css">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  <li><a href="student.php">
                    STUDENT-INFORMATION
                  </a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      <?php
                        echo "Welcome ".$_SESSION['login_user'];
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                 
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
               
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
                <?php
            }
          ?>

         

      </div>
    </nav>

</body>
</html>
