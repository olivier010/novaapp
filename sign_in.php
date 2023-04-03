<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <nav>
        <div><a href="">Nova App</a></div>
    </nav>
    <main>
        <form action="login.php" method="post">
            <div>
                <p>Log into Account</p>
                <hr>
            </div>
            <?php
            
            if(isset($_GET['message'])){
                echo '<div>
                <laber for="">'.$_GET['message'].'</label> 
                </div>';
            }

            ?>

            <div>
                <p>Email:</p>
                <input type="email" name="email" id="">
            </div>
            <div>
                <p>password:</p>
                <input type="password" name="password" id="">
            </div>
            <div>
                <p><input type="submit" value="sign in"></p>
            </div>
            <div>
                <label>New here? <a href="create_account.php"> sign up</a></label>
            </div>
        </form>
    </main>
</body>
</html>