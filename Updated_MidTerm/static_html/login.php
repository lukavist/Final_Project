<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../static_css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <img src="../img/logo1.jpg" class="rounded-circle" alt="logo" style="width:80px">
        <h1>Coffee Shop</h1>
    </div>
    <div class="container">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1 style="color: #D2B48C;">Register</h1>
                <form action="../static_php/register.php" method="post">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password"><br>
                    <button class="btn btn-succes" type="submit">Register</button>
                </form>
            </div>
            <div class="col">
                <h1 style="color: #D2B48C;">Authorization</h1>
                <form action="../static_php/auth.php" method="post">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password"><br>
                    <button class="btn btn-succes" type="submit">Authorize</button>
                </form>
            </div>
        <?php else: ?>
            <h1 style="text-align:center;color: #D2B48C;"> Welcome <?=$_COOKIE['user']?>!</h1>
            <h2 style="text-align:center;color: #D2B48C;">To exit, press <a href="../static_php/exit.php">here</a>.</h2>
        <?php endif; ?>
        </div>
    </div>
</body>
</html>