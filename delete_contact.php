<?php
include("connect.php");
$Id = $_GET['Id'];
$sql = "DELETE FROM telbook WHERE Id='$Id'";
if (mysqli_query($conn,$sql)) {
    echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='Phonebook_List.php';</script>";
} else {
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ');</script>";
}
?>
