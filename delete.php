<?php
$connect = mysqli_connect("localhost","root","","ajax");

$userId = $_POST['userId'];
$delete = "DELETE FROM ajax WHERE Id=$userId";
$query=mysqli_query($connect,$delete);
if ($query) {
    echo "Data Deleted Success";
}else {
    echo "Data Deleted Failed";
}


?>