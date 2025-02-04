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
                    <a class="home" href="index.php" class=>Home</a>
                    <a class="logout" href="index.php?logout='1'">Logout</a>
                        
            </ul>
        </div>
    </div>
</nav>

<style>

        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #e0e0e0;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><strong>User</strong></h1>
        <h2>การแจ้งเตือน (Notifications)</h2>
        <hr>
        <h3><strong>วิธีการดึงข้อมูลจาก API</strong></h3>
        
        <ul>
            <li><strong>Authentication:</strong> ต้องมีการยืนยันตัวตน (Authentication) โดยใช้ Token หรือ API Key เพื่อเข้าถึงข้อมูลจาก Home Assistant</li>
            <li><strong>API Endpoints:</strong> ใช้ API endpoints ที่ Home Assistant มีเพื่อดึงข้อมูล เช่น <code>/api/states</code> สำหรับสถานะอุปกรณ์, <code>/api/history/period</code> สำหรับประวัติการใช้งาน</li>
            <li><strong>จัดเก็บข้อมูล:</strong> ข้อมูลที่ดึงมาจาก API สามารถจัดเก็บไว้ในฐานข้อมูลของเว็บไซต์เพื่อแสดงผลในหน้า Profile</li>
        </ul>
        
    </div>
</body>
</html>