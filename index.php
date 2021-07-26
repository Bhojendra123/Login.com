<?php
if (isset($_REQUEST["msg"]))
{
    $msg=$_REQUEST["msg"];
}
else{
    $msg="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Log In</h1>
            <div class="invalid">
            <?php echo $msg;
             ?>

            </div>
            <form action="action_form.php" method="POST">
                <div class="username">
                    <input type="text" name="username" id="username" required>
                    <label for="">Username</label>
                </div>
                <div class="pass">
                    <input type="password" name="password" id="pswd" required >
                    <label for="">Password</label>
                </div><br><br>
                <div class="submit">
                   <button>
                       <input type="submit" name="submit" value="Login">
                   </button>
                </div>

            </form>
        </div>

    </div>
</body>
</html>