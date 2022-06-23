<?php
session_start();
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $query = "update users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class=$_POST[class] where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
}
?>



<!DOCTYPE html>
<html>
  <head>
    
    <title>User Dashboard</title>
    
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>

  <body>
    
    <div class="row" id="header">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4"></div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-3" id="left_sidebar">
          <center><h2>Welcome User</h2></center><br>
          <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
          <button type="button" class="btn btn-primary btn-block" id="view_notice_button">View All Notices</button>
          <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
        
        </div>
        <div class="col-md-8" id="main_content">

          <center><h2>Dashboard</h2></center><br>
        
          <p>
          The COVID-19 has resulted in schools shut all across the world. Globally, over 1.2 billion children are out of the classroom.As a result, education has changed dramatically, with the distinctive rise of e-learning, whereby teaching is undertaken remotely and on digital platforms.</p>
          <p>Nepal’s Covid-19 toll reaches 3,061 with three more deaths.With 580 new infections recorded in the past 24 hours, the active case count stands at 4,056, according to the Ministry of Health and Population.
          </p>
        </div>

      </div>
    </section>
  </body>
</html>
