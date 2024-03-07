<?php
$servername = "localhost";
$username = "db630710735";
$password = "D-0609b";
$dbname = "std_u630710735";

/*// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);*/

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $dbname) 
or die("error!!!!!!!!!!!!!!!");
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>