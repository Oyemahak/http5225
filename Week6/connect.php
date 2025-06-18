<?php
  $connect = mysqli_connect('localhost', 'root', '', 'schools');
  
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }