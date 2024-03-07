<?php
include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["Name"];
    $type = $_POST["Type"];
    $phone = $_POST["Phone"];

    $sql = "INSERT INTO telbook (Name,Type,Phone) VALUES ('$name', '$type' , '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='Add_Phonebook.php';</script>";
    } else {
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');</script>";
    }
}
?>

<!--?php
$sql = "SELECT * FROM telbook";
$result = mysqli_query($conn, $sql);
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $phone = $_POST['phone'];

    $insert_sql = "INSERT INTO telbook (Name,Type,Phone) VALUES ('$name', '$type', '$phone')";
    if (mysqli_query($conn, $insert_sql)) {
        header("Location: Phonebook_List.php"); // รีเดิร์กตำแหน่งหน้าหลัก
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?-->