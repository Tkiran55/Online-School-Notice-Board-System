<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");

  if(isset($_POST['register'])){
    $query = "insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
  
    <title>Online Notice Board System</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h1>Registration form</h1></center>
          <form action="" method="post">
            
            <div class="form-group">
              <lable><b>First Name:</b></label>
                <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
            </div>
            
            <div class="form-group">
              <lable><b>Last Name:</b></label>
                <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
            </div>
            
            <div class="form-group">
              <lable><b>Email ID:</b></label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            
            <div class="form-group">
              <lable><b>Passowrd:</b></label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            
            <div class="form-group">
              <lable><b>Select Your Class:</b></label>
                <select class="form-control" name="class">
                  <option>-Select-</option>
                  <option>11</option>
                  <option>12</option>
                </select>
            </div>
            
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
