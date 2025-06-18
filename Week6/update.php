<?php
  require('connect.php');
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['id'];
    $query = "SELECT * FROM schools WHERE id = " . $id;
    $result = mysqli_query($connect, $query);
    $school = $result -> fetch_assoc();
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $SchoolName = $_POST['SchoolName'];
    $BoardName = $_POST['BoardName'];
    $Email = $_POST['Email'];

    $query = "UPDATE schools SET 
                `Board Name` = '$BoardName', 
                `School Name` = '$SchoolName', 
                `Email` = '$Email' 
              WHERE 
                id = '$id'";
    $result = mysqli_query($connect, $query);
    if($result){
      header("Location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update School</title>
</head>
<body>
  <h1>Update School</h1>
  <form action="update.php" method="POST">
    <input 
      type="text" 
      name="BoardName" 
      placeholder="Board Name" 
      value="<?php echo $school['Board Name']; ?>
    ">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input 
      type="text" 
      name="SchoolName" 
      placeholder="School Name"
      value="<?php echo $school['School Name']; ?>"
      >
    <input 
      type="text" 
      name="Email" 
      placeholder="Email"
      value="<?php echo $school['Email']; ?>"
      >
    <input type="submit" value="Update" name="UpdateSchool">
  </form>
</body>
</html>