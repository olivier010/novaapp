<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark p-5 mt-40">
        <div class=" container ">
            <a href="" class="text-info">Nova App</a>
        </div>
    </nav>
    <main class="container  mt-30">
        <form action="login.php" method="post" class="container mt-30">
            <div class="container mt-30">
                <p><b>Log into Account</b></p>
                <hr>
            </div>
            <?php
            
            if(isset($_GET['message'])){
                echo '<div>
                <laber for="">'.$_GET['message'].'</label> 
                </div>';
            }

            ?>

            <div class="form-group">
                <p>Email:</p>
                <input type="email" name="email" id="mail" class="form-control">
            </div>
            <div class="form-group">
                <p>password:</p>
                <input type="password" name="password" id="pswd" class="form-control">
            </div>
            <button type="submit" class="btn btn-secondary"> Login</button>
            <div>
                <label>New here? <a href="create_account.php"> sign up</a></label>
            </div>
        </form>
    </main>
</body>
</html>