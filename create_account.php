
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar bg-dark p-5 mt-30 " >
        <div class=" container  p-20">
            <a href="#" class="text-info"> Nova APP</a>
        </div>
    </nav>
    <main>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div>
                <p>Create Account</p>
                <hr>
            </div>
            <div class="form-group">
                <p>First Name:</p>
                <input type="text" name="firstname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <p>Last Name:</p>
                <input type="text" name="lastname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <p>Email:</p>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <p>Password:</p>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="form-group">
                <p>Upload Profile Image:</p>
                <input type="file" name="image" id="">
            </div>
            <div>
                <p><input type="submit" value="sign up"></p>
            </div>
            <div>
                <label>already have an account? <a href="sign_in.php">Log in</a></label>
            </div>
        </form>
    </main>
    
</body>
</html>