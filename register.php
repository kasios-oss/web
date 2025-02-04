<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="header">
        <h2>Register</h2> <style 2px 2px 4px rgba(0, 0, 0, 0.3);></style>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
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
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        
        <div class="input-group">
            
            <button type="submit" name="reg_user" class="btn">Register</button>
                <style>   
                    .btn {
                            width: 91%;
                            background: #5f9ea0;
                            color: white;
                            padding: 14px 15px;
                            border: none;
                            
                            font-size: 16px;
                            font-weight: bold;
                            cursor: pointer;
                            text-align: center;
                            transition: background-color 0.3s, transform 0.2s; /* เพิ่มเอฟเฟกต์ hover */
                        }

                    .btn:hover {
                            background-color: #538d8a; /* เปลี่ยนสีเมื่อ hover */
                            transform: translateY(-2px); /* ยกขึ้นเล็กน้อยเมื่อ hover */
                        }

                    .btn:active {
                            transform: translateY(0); /* ลดลงเมื่อกด */
                        }

                </style>

        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>