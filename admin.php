<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css_5/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/css_5/bootstrap.min.css">  
    <link rel="stylesheet" href="./css/css_5/admin.css">

</head>
<body>

<h4>Welcome to dashboard</h4>

<a href="logout.php" class="btn btn-danger">logout</a>


<!-- ...................script...................... -->

<script src="./js/js_5/jquery-3.6.0.js"></script>
<script src="./js/js_5/bootstrap.min.js"></script>
 

</body>
</html>