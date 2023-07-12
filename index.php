<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Ajax Crud Operation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>ajax crud operation</h1>
    <input id="name" type="text" placeholder="Enter Name..." > <br>
    <input id="email" type="email" placeholder="Enter Email..." > <br>
    <input id="pass" type="text" placeholder="Enter Password..." > <br><br>
    <button class="btn">Insert Data</button> <br> <br>
    <button class="read-btn">Read Data</button>
    <h1>Reading data from database</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>
            <tbody id="tbody">

            </tbody>
        </thead>
    </table>
</div>

  <!-- JS & JQUERY ADD -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>