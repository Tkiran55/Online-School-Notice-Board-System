<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");

  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['class'] = $row['class'];
        echo "<script>
        window.location.href = 'user_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Notice Board System</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
   
    <div class="row" id="header">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4"></div>
    </div>

    <section id="login_form" >
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h1>Login form</h1></center>
            <form action="index.php" method="post">
              
              <div class="form-group">
                <lable><b>Email ID:</b></label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
              </div>
              
              <div class="form-group">
               <lable><b>Passowrd:</b></label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
              </div>
              
              <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form><br>
          <a href="register.php">Click here to register</a>
        </div>
      </div>
    </section>
  </body>
</html>
