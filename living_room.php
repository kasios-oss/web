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
    <title>Livingroomboard</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark"style="background-color: rgb(2, 84, 171);"">
    <div class="container-fluid" style="background-color: rgb(2, 84, 171);">
        <!-- Logo -->
       
        <img src="LOGOimg.png" alt="Logo" class="logo">
      
        <!-- Navbar Brand (ข้อความ "Welcome To Smart Home") -->
         
        <a class="navbar-brand">
            <p class="h2">LIVING ROOM</p>
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <a class="home" href="Dashboard.php" class=>Dashboard</a>
                <a class="home" href="index.php" class=>Home</a>
                <a class="logout" href="index.php?logout='1'">Logout</a>
            </ul>
        </div>
    </div>
</nav>

    <div class="box">
        <a href="doorsensor.php" class="transparent-box"><h1>Door Sensor</h1>

        <a href="motionsensor.php" class="transparent-box"><h1>Motion sensor</h1>

        <a href="camera.php" class="transparent-box"><h1>Camera</h1> 
                
        <a href="page4.html" class="transparent-box"><h2>Box 4: Click to visit Page 4</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quas ea vel libero, officiis dolorum laborum quidem aut itaque neque eos modi fugit odit ratione deserunt? Ipsam debitis dolores in dolore quis repellat facilis ad porro aut nihil, quod praesentium odit ab nostrum iste illum dignissimos, rerum fugiat officia facere.</p>
                </a>
       
      
       
        
    </div>


</body>
</html>