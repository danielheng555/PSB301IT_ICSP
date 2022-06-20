<?php
session_start();
if(isset($_SESSION['nickname']) && (!isset($_SESSION['verification']))){
   header('location:account.php?');
}
else{}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyber Security Web Game</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="p-3 mb-2 bg-danger text-white">
    <h1><center>Cyber Security Web Game</center></h1>
    </div>
    <div class="alert alert-warning" role="alert">
        <h2>Disclamer: This game is created for educational purpose only. The contents are constructed by the knowledge of the author and deemed to be correct at the time of the webpage constructed.</h2>
    </div>
    <div class="alert alert-info" role="alert">
        This website does not collect any personal identifiable information, please DO NOT provide any of your personal information to us!
    </div>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" href="login.php" role="button">I am Ready!</a>
    </div>
    </div>


</body>
</html>