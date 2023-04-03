<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <nav>
        <div><a href="">Nova App</a></div>
    </nav>
    <?php
    session_start();
    $user;
    if(isset($_SESSION['id'])){

        //connection inclusion
        include 'connection.php';
        $id = $_SESSION['id'];
        //query creation
        $sql = "select * from user where id='$id'";
        $result = mysqli_query($con,$sql);
        $user = mysqli_fetch_array($result);
    }else{
        header("location:sign_in.php");
    }
    
    ?>

    <form action="">
        <div>user profile</div>
        <hr>
        <div id="profilecontent">
            <div><img src="<?php echo"uploadedImage/".$user['image']?>" width="100px" alt="alt test"></div>
            <div>
                <?php
                echo
                '<div>First Name : '.$user['firstname'].'</div>
                <div>Last Name : '.$user['lastname'].'</div>
                <div>Email:'.$user['email'].'</div>
                '
                ?>
            </div>
        </div>
    </form>
    <a href="logout.php"><button>log out</button></a>    
</body>
</html>