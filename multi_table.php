<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MULTIPLICATION TABLE</title>
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
      --background-color: #ABEBC6;--
      color: #333;
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      
      object-fit: cover;
      background-color: rgba(171, 235, 198, 0.95);
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
      width: 200px;
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
    p{
      margin: 10px 0;
      color: #666;
    }  
    
    p1{
      font-size: 35px;
      margin: 10px 0;
      color: #666;
    }
    
   .button_cal{
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
            padding: 10px 20px;
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
        /*ช่องสอง*/
        table {
            width: 40%;
            margin: 20px auto;
            background-color: #ffdfc0;         
            border-width: 5px;
            border-collapse: collapse;

        }
        /*กรอบ*/
        th, td {
            border: 5px solid #24074d;
            padding: 10px;
            text-align: center;
        }
        /*ช่องบน*/
        th {
            background-color: #93b2b7;
            
        }
        /*ช่องแรก*/
        tr:nth-child(even) {
            background-color: #8ac2f4;
        }

  </style>
</head>



<body>
  <div class="header"><h1>★ MULTIPLICATION TABLE ❀</h1></div>
<div class="calculator">


<div class="timeline">

<div class="timeline">
<center>
<h1>สูตรคูณ</h1>
    <form method="post" action="">
        <h3 for="number">ป้อนตัวเลข: </h3>
        <input type="number" id="number" name="number" required>
        <input type="submit" class="Profile" value="คำนวณ">
    </form></center>

    <?php
    // ตรวจสอบว่ามีการส่งค่าแบบ POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์ม
        $number = $_POST["number"];
        ?>

        <h3>สูตรคูณสำหรับ <?php echo $number; ?>:</h3>
        <table>
            <tr>
                <th>ตัวคูณ</th>
                <th>ผลคูณ</th>
            </tr>
            <?php
            // แสดงสูตรคูณในรูปแบบของตาราง
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$number x $i</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>
    <?php
    }
    ?>

</div>

 
<br>
<br><br>
<div class="event">
<a href="me.html" ><button class="home">HOME PAGE</button></a>
<a href="Profile.html" ><button class="Profile">PROFILE PAGE</button></a>
<a href="tavel.html" ><button class="tavel">TAVEL PAGE</button></a>
<a href="food.html" ><button class="food">FOOD PAGE</button></a><br><br>
<a href="Educational.html" ><button class="Educational">EDUCATIONAL PAGE</button></a>
</div>

</div>
</div>
</div>


</div>



</body>
</html>