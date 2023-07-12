<?php
    $connect = mysqli_connect("localhost","root","","ajax");

    $name = $_GET['name'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $id = $_GET['userId'];

    $update = "UPDATE ajax SET Name='$name',Email='$email',pass='$pass' WHERE Id='$id'";
    $ex = mysqli_query($connect,$update);
    if ($ex) {
        echo "Data Updated Success";
    }else {
        echo "Data Updated Failed";
    }


?>