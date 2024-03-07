<?php
include 'connect.php';
    $Id=$_POST['Id'];
    $Name = $_POST['Name'];
    $Type = $_POST['Type'];
    $Phone = $_POST['Phone'];

    $sql = "UPDATE telbook SET Name='$Name', Type='$Type', Phone='$Phone' WHERE Id=$Id";
    $result=mysqli_query($conn,$sql);
    //if ($conn->query($sql) === TRUE) {
    if ($result) {
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='Phonebook_List.php';</script>";
    } else {
        echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');</script>";
    }
mysqli_close($conn);
?>
