<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(2, 84, 171);">
    <div class="container-fluid"style="background-color: rgb(2, 84, 171);" >
      
        

        <!-- Logo -->
        <a href="#">
    <img src="LOGOimg.png" alt="Logo" class="logo">
</a>

        <!-- Navbar Brand (ข้อความ "Welcome To Smart Home") -->
        <a class="navbar-brand" >
            <p class="h2">Welcome To Smart Home</p>
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <a class="home" href="notifications.php" class=>about me</a>
                        <a class="logout" href="index.php?logout='1'">Logout</a>
                        
            </ul>
        </div>
    </div>
</nav>

        <!--  notification message -->

        <div class="homecontent" id="messageBox">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['username'])) : ?>
            <p><strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>

    <script>
        // ซ่อนข้อความหลังจาก 5 วินาที
        setTimeout(() => {
            const messageBox = document.getElementById('messageBox');
            if (messageBox) {
                messageBox.classList.add('hidden'); // เพิ่มคลาสที่ซ่อนข้อความ
                setTimeout(() => messageBox.remove(), 1000); // ลบออกจาก DOM หลัง 1 วินาที
            }
        }, 5000);
    </script>
        <!-- logged in user information -->

    <div class="boxa">
        <a href="dashboard.php" class="transparent-box"><h2>Project PKVC Home</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quas ea vel libero, officiis dolorum laborum quidem aut itaque neque eos modi fugit odit ratione deserunt? Ipsam debitis dolores in dolore quis repellat facilis ad porro aut nihil, quod praesentium odit ab nostrum iste illum dignissimos, rerum fugiat officia facere.</p>
                </a>
        <a href="page2.html" class="transparent-box"><h2>.....</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quas ea vel libero, officiis dolorum laborum quidem aut itaque neque eos modi fugit odit ratione deserunt? Ipsam debitis dolores in dolore quis repellat facilis ad porro aut nihil, quod praesentium odit ab nostrum iste illum dignissimos, rerum fugiat officia facere.</p>
                </a>
       
    </div>

    
    </body>
</html>



