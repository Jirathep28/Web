<!DOCTYPE html>
<html>
<head>
    <title>สูตรคูณ</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>สูตรคูณ</h2>
    <form method="post" action="">
        <label for="number">ป้อนตัวเลข: </label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="คำนวณ">
    </form>

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
</body>
</html>
