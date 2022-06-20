<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyber Security Web Game - Race Start</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	 <?php
		include_once 'db_connect.php';
		session_start();
		if (!(isset($_SESSION['nickname']))) {
			header("location:index.php");
		}
	?>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-lg">
		<h4 class="text-white bg-dark">Hello!	<?=$_SESSION['nickname']?></a></h4>
		<a href="logout.php" class="btn btn-secondary">LOGOUT</a>
		</div>
	</nav>
	<div class="p-3 mb-2 bg-info text-dark">
	Guide: Go through the Tutorial before go to the Game, it will help you to score.
	</div>
    <br>
	<div class="container-fluid">
		<div class="d-flex flex-column">
		  <div class="p-2">First Tutorial
		  		<a class="btn btn-primary" href="https://docs.google.com/presentation/d/15-5jDAgSRKQyE4VAe5K1aRgXJKSLh2WpHEQGgXjxYBs/edit?usp=sharing" target="_blank" role="Tutorial">Tutorial 220617</a>
		  </div>
		  <div class="p-2">First Game
				<a class="btn btn-primary" href="https://app.quizwhizzer.com/play?code=31319" target="_blank" role="Tutorial">Game 220617</a>
		  </div>
		</div>
	</div>
	<br>

</body>
</html>