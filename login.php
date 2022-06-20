<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="d-flex justify-content-center align-item-center" style="min-height: 95vh";>
        <form class="p-5 rounded shadow  p-3 mb-2 bg-dark text-white" action="login_action.php" method="post" style="width: 30rem">
            <h1 class="fw-bold text-center pb-5 display-5">LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                <?=htmlspecialchars($_GET['error'])?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Nickname</label>
                <input type="nickname" class="form-control" name="nickname" id="nickname">
            </div>
            <br>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Verification Code</label>
                <input type="password" class="form-control" name="verification" id="verification">
            </div>
            <button type="submit" class="btn btn-primary" style="float: right;">Login</button>
            <br>
            <br>
            <p>
                New Player? <a href="newuser.php">Register</a>
            </p>
        </form>

        </div>
    </div>
</body>
</html>