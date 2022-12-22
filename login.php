<?php
  $connection=mysqli_connect("localhost:3307","root","");
  $db=mysqli_select_db($connection,'demo');
  if(isset($_POST['sign']))
  {
      $email=$_POST['email'];
      $password=$_POST['password'];
  
      $query="select * from login_info where email='$email'and password='$password'";
      $query_run= mysqli_query($connection, $query);
      if(mysqli_num_rows($query_run)==1)
      {
        echo "<h1><center> Login Sucessful</center></h1>";
      }
      else{
        echo "<h1><center> Login Failed</center></h1>";
      }
  }
?>
