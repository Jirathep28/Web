<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VISITCOOKIE</title>
<style>
    body {
      background-image: url('background.jpg');
      font-family: JasmineUPC, sans-serif;
      margin: 0;
      padding: 0;
    }
    .header {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      padding: 70px;
      background-color: rgba(171, 235, 198, 0.95);
      color: #333;
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }
    .timeline {
      max-width: 800px;
      margin: 0 auto;
      padding: 70px;
      background-color: white;
      box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }
    .event {
      display: flex;
      align-items: center;
      margin-bottom: 40px;
    }
    .event-img {
      width: 25px;
      height: auto;
      margin-right: 20px;
      border-radius: 5px;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
    }
    .event-text {
      flex: 1;
    }
    h1 {
      margin: 0;
      font-size: 65px;
      color: #333;
    }
  
    h2 {
      margin: 0;
      font-size: 24px;
      color: #333;
    }
    p {
      margin: 10px 0;
      color: #666;
    }
    
    p1 {
      font-size: 35px;
      margin: 10px 0;
      color: #666;
    }
    
   .button_cal {
      width: 85px;
      height: 40px;
      font-size: 20px;
      border-radius: 50%;
      border: none;
      background-color: #1c3526;
      color: #fff;
      cursor: pointer;
   }

    .result {
      margin-top: 20px;
      font-size: 24px;
    }
    .BACK {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #df575e;
      color: #2f0c1e;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .NEXT {
      display: inline-block;
      padding: 5px 5px;
      border-radius: 20px;
      background-color: #1bcedb;
      color: #2f0c1e;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .tavel {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #e5bfca;
      color: #c36161;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .food {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #b6eae6;
      color: #0d3142;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .Educational {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #d3e29d;
      color: #6a9f75;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .home {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #dee97e;
      color: #333619;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .Profile {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #6e79dd;
      color: #221936;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>
</head>
<body>
<div class="header">
    <h1>★ VISITCOOKIE PROGRAM ❀</h1>
</div>
<div class="VISITCOOKIE">
    <div class="timeline">
    <div class="timeline">
        <center><h2><img src="cookie.png" class="event-img">VISITCOOKIE</h2>
        <?php
        // ตรวจสอบว่าคุกกี้ "visit_count" และ "last_visit_time" มีอยู่หรือไม่
        if (isset($_COOKIE['visit_count']) && isset($_COOKIE['last_visit_time'])) {
            $visitCount = $_COOKIE['visit_count'];
            $lastVisitTime = $_COOKIE['last_visit_time'];
            //echo "มี ";
        } else {
            $visitCount = 0;
            //$visitCount = $_COOKIE['visit_count'];
            $lastVisitTime = time(); // เวลาเริ่มต้นเมื่อคุกกี้ยังไม่มี
            //echo "ไม่มี ";
        }
        
        // ตรวจสอบว่าผู้ใช้กดปุ่ม Reset
        if (isset($_POST['reset'])) {
            $visitCount = 0;
            $lastVisitTime = time();
            
            // รีเซ็ตคุกกี้ "visit_count" และ "last_visit_time"
            setcookie('visit_count', $visitCount, time() + 3600, '/');
            setcookie('last_visit_time', $lastVisitTime, time() + 3600, '/');
        }
        
        // เพิ่ม visitCount เมื่อผู้ใช้เข้าเว็บ
        $visitCount++;
        
        // อัปเดตคุกกี้ "visit_count"
        setcookie('visit_count', $visitCount, time() + 3600, '/');
        
        // คำนวณระยะเวลาที่ผ่านไปตั้งแต่การเข้าชมก่อน
        $timePassed = time() - $lastVisitTime;
        
        // แสดงข้อความใน HTML
        echo "คุณเข้าชมเว็บไซต์นี้ครั้งที่: " . $visitCount . "<br>";
        echo "ระยะเวลาที่ผ่านไปตั้งแต่ครั้งล่าสด: " . $timePassed . " วินาที" . "<br>";
        echo "เวลาครั้งล่าสดที่เข้าดู: " . date("Y-m-d H:i:s", $lastVisitTime);
        ?>
        <form method="post">
            <input type="submit" name="reset" value="รีเซ็ต" class="button_cal">
        </form>
    </div>
    <br><br>
    <div class="event">
        <a href="me.html"><button class="home">HOME PAGE</button></a>
        <a href="Profile.html"><button class="Profile">PROFILE PAGE</button></a>
        <a href="tavel.html"><button class="tavel">TAVEL PAGE</button></a>
        <a href="food.html"><button class="food">FOOD PAGE</button></a><br><br>
        <a href="Educational.html"><button class="Educational">EDUCATIONAL PAGE</button></a>
    </div>
</div>
</div>
</body>
</html>
