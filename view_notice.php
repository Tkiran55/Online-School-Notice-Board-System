<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <center><h3>Notices for you</h3></center><br>
    <?php

    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query = "select * from notice  where to_whom = 'To All' OR to_whom = 'To Class $_SESSION[class]'order by nid desc";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){

    ?>


<div class="card">
    <div class="card-body">
      <p class="card-text" align="right"><?php echo $row['post_date'];?></p>
      <h5 class="card-title"><?php echo $row['title'];?></h5>
      <p class="card-text"><?php echo $row['message'];?></p>
      </div>
    </div>
<br>
<?php
}
?>
</body>
</html>
