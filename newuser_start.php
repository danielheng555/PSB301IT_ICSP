<?php
session_start();

$nickname = "";
$verification = "";
$error   = array();

$con = mysqli_connect('localhost', 'admin', 'SQLadmin@2022', 'cswg_db');

if (isset($_POST['reg_user'])) {

	$nickname   = mysqli_real_escape_string($con, $_POST['nickname']);
	$verification = mysqli_real_escape_string($con, $_POST['verification']);
	$verification_2 = mysqli_real_escape_string($con, $_POST['verification_2']);

	// Check if field is empty
	if (empty($nickname)) { 
		array_push($error, "Nickname is required");
	}

	if (empty($verification)) {
		array_push($error, "Verification code is required");
	}
		
	if ($verification != $verification_2) {

		array_push ($error, "Verification Code you input doesn't match");
	} 

	$user_check_query = "SELECT * FROM user WHERE nickname='$nickname' LIMIT 1";
  	$result = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Check if nickname exists in database
	if ($user) {
		if ($user['nickname'] === $nickname) {
			array_push($error, "*** Nickname already exists, please use other nickname! *** ");
		}
	}

	// Insert new user record
	if (count($error) == 0) {

		$query = "INSERT INTO user (nickname, verification) VALUES ('$nickname', '$verification')";
		mysqli_query($con, $query);
		header('location: racestart.php');
	}

}
?>