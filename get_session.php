<?php
  session_start();
  if(isset($_SESSION['username'])){

    echo "welcome","  ". $_SESSION['username'];
    echo "<br>your category" .$_SESSION['favcat'];
    echo "<br>we have saved your sesssion";
    echo "<br>";
  }
  else{
    echo "please login to continue";
  }
 
?>