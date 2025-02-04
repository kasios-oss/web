<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
            <p class="h2">Dashboard PKVC</p>
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


<div class="card d-flex flex-row align-items-center shadow-lg rounded overflow-hidden" style="width: 150%; max-width: 77%; padding: 10; margin:10%;">
    <img src="MotionSensor.png" class="card-img-left rounded" alt="Card Image" style="width: 23%; height: 50%; margin:10%; padding:20px; ">
    <div class="card-body">
        <h1 class="card-title">Camera</h1>
        <h3>Status</h3>
        <p class="card-text text-muted">
            สถานะการเชื่อมต่อ (Connectivity) Online/Offline</p>
        <p class="card-text text-muted">
        สถานะของแบตเตอรี่ (หากเซ็นเซอร์เป็นแบบไร้สาย) Battery Level แสดงเปอร์เซ็นต์แบตเตอรี่ เช่น 80%
        </p>
        <h3>การแจ้งเตือน (Notifications)</h3>
        <p class="card-text text-muted">
        เวลาล่าสุดที่สถานะของเซ็นเซอร์เปลี่ยน เช่น "ไฟถููกเปิดเมื่อ 10:30 น."</p>
        <button type="button" class="btn btn-success" style="margin: 5px;">Open</button>
        <button type="button" class="btn btn-danger" style="margin: 5px;">Close</button>

    </div>
</div>
</div>

