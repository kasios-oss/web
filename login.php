<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="header">
        <h2>Login</h2> <style 2px 2px 4px rgba(0, 0, 0, 0.3);></style>
    </div>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username"  placeholder="username" >
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" >
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" style="width: 97%;" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>

</body>
</html>