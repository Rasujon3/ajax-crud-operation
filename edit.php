<?php
    $connect = mysqli_connect("localhost","root","","ajax");

    $id= $_GET['userId'];
    $select = "SELECT * FROM ajax WHERE Id=$id";
    $ex = mysqli_query($connect,$select);
    $row = mysqli_fetch_array($ex);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>edit Page</h1>
    <input id="name" type="text" value="<?php  echo $row["Name"] ?>" placeholder="Enter Name..." > <br>
    <input id="email" type="email" value="<?php  echo $row["Email"] ?>" placeholder="Enter Email..." > <br>
    <input id="pass" type="text" value="<?php  echo $row["Pass"] ?>" placeholder="Enter Password..." > <br><br>
    <div class="btn-container">
        <button class="edit" onclick="UPDATE_DATA(<?php  echo $row['Id'] ?>)">Edit Data</button> <br> <br>
        <button class="edit" onclick="home()">Home</button>
    </div>
</body>
</html>