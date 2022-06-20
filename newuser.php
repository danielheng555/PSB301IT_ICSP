<?php
include 'newuser_start.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="d-flex justify-content-center align-item-center" style="min-height: 95vh";>
        <form class="p-5 rounded shadow p-3 mb-2 bg-dark text-white" method="post" action="newuser.php" style="width: 30rem">
            <?php include('error.php') ?>
            <h1 class="fw-bold text-center pb-5 display-5">Registration</h1>
            <?php ?>
            <div class="reg-1">
                <label for="exampleInputEmail1" class="form-label fw-bold">Nickname</label>
                <input type="text" class="form-control" name="nickname" value="<?php echo $nickname; ?>">
            </div>
            <br>
            
            <div class="reg-2">
                <p class="text-danger">The Verification Code is for us to verify if this is you only, DO NOT input your personal password!<p>
                <label for="exampleInputPassword1" class="form-label fw-bold">Verification Code</label>
                <input type="password" class="form-control" name="verification" maxlength="8" value="<?php echo ''; ?>">
            <br>
            <div class="reg-3">
                <p class="text-danger">The Verification Code is kept as plain test, DO NOT input your personal password!<p>
                <label for="exampleInputPassword1" class="form-label fw-bold">Confirm Verification Code</label>
                <input type="password" class="form-control" name="verification_2" maxlength="8" value="<?php echo ''; ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="float: right;" name="reg_user">Race Start</button>
            <br>
            <br>
            <p>
                Not Noob? <a href="login.php">Login</a>
            </p>
        </form>    
        </div>
    </div>
</body>
</html>
