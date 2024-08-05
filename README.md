# library management system
<?php
    include "connection.php";
   
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script>
             function validateForm()
             {
              var inputField=document.getElementById("myInput");
              var inputvalue=inputField.value.trim();
              if(inputvalue==="")
              {
              alert("Please fill out this field");
              return false;
              }
              return true;
             }
    </script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<header>
<div class="logo">
          <h1 style="color: white;font-size: 25px;word-spacing:8px;line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>
                <nav>
                  <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="books.php">BOOKS</a></li>
                  <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                  <li><a href="registration.php">REGISTRATION</a></li>
                  <li><a href="books.php">FEEDBACK</a></li>
                  </ul>
                </nav>

</header>
<section>
    <div class="Registration">
                <img src="C:\Users\ELCOT\Downloads\high-angle-clipboard-pencils-arrangement.jpg">
                <div class="box2">
                   <h1 style="text-align: center;font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
                   <h1 style="text-align: center;font-size: 25px;">User Registration Form</h1>  
                   <form name="Registration" action="" method="post" id="myForm" onsubmit="return validateForm()">
                       <div class="login">
                        <br>
                         <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
                         <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
                         <input class="form-control" type="text" name="username" placeholder="Username" id="myInput"><br>
                         <input class="form-control" type="password" name="password" placeholder="Password" id="myInput"><br>
                         <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
                         <input class="form-control" type="email" name="email" placeholder="Email" required=""><br>
                         <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>
                         <button class="btn btn-default" type="submit" name="submit" value="Sign Up " style="background-color: green;color: black;width: 75px;height: 35px;">Sign Up</button>
                       </div>
                   </form>
                   
                </div>
    </div>
</section>

   <?php
         if(isset($_POST['submit']))
       {
       
        mysqli_query($db,"INSERT INTO 'STUDENT' VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[roll]','$_POST[email]','$_POST[contact]');");
       }

    ?>        
</body>
</html>
    
