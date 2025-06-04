<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $connect = mysqli_connect('localhost', 
    'root', '', 'colors');

    if(!$connect){
        die("Die here.Connection Failed...!".mysqli_connect_error());
    }

    $query = 'SELECT * FROM colors';
    $colors = mysqli_query($connect, $query);

    echo "<h1>All Colors with name</h1>";

    foreach ($colors as $color) {
    $name = $color['Name'];
    $hex = $color['Hex'];

    echo '<div style="background:' . $hex . '; padding:40px; color:white; margin-bottom: 20px">' . $name . '</div>';
}
   ?>
</body>
</html>