<?php
$connect = mysqli_connect("localhost","root","","ajax");

$select = "SELECT * FROM ajax";
$ex = mysqli_query($connect,$select);
while ($row=mysqli_fetch_array($ex)) { ?>
    <tr>
        <td><?php echo $row['Id']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Pass']; ?></td>
        <td><button id="del" onclick="Delete(<?php  echo $row['Id'] ?>)">DELETE</button></td>
        <td><button id="edit" onclick="Edit(<?php  echo $row['Id'] ?>)">Edit</button></td>
    </tr>
<?php }
?>