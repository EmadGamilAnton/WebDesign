<?php
    session_start();
    if(isset($_SESSION['username'])){
       echo 'welcome'.' '.$_SESSION['username'];   
     }else{
          header('location:index.php');
        exit();
      }
