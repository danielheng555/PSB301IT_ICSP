<?php
session_start();
include 'db_connect.php';

// Check if both TRUE
if (isset($_POST['nickname']) && isset($_POST['verification']))
    {
    $nickname = $_POST['nickname'];
    $verification = $_POST['verification'];
    
    // Check if nickname or password is empty, reflect the error message at Header.
    if (empty($nickname)) {
        header("Location: login.php?error=Nickname is required");
    }else if (empty($verification)) {
        header("Location: login.php?error=Verification Code is required");
    }else {
        // Prepare the connection to fetch data from db
        $stmt = $con->prepare("SELECT * FROM user WHERE nickname=?");
		$stmt->execute([$nickname]);

		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();

			$user_id = $user['id'];
			$user_name = $user['nickname'];
			$user_verification = $user['verification'];
			$user_score = $user['score'];
            
            // Check if nickname and password match in the db record
			if ($nickname === $user_name) {
				if ($verification === $user_verification) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['nickname'] = $user_name;
					$_SESSION['user_score'] = $user_score;
					header("Location: racestart.php");

				}else {
					header("Location: login.php?error=Incorrect Nickname or Verification Code");
				}
			}else {
				header("Location: login.php?error=Incorrect Nickname or Verification Code");
			}
		}else {
			header("Location: login.php?error=Incorrect Nickname or Verification Code");
		}
    }
    }
?>