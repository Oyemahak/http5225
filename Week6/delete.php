<?php
  require('connect.php');

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $query = "DELETE FROM schools WHERE id = " . $id;
    $result = mysqli_query($connect, $query);

    if ($result) {
      header("Location: index.php");
    }
  }
?>