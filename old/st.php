<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center><h1>PALINDROME</h1>

<form method = "get" action="st.php">
    <input type="text" name="m">
    <input type="submit" value="ADD">
</form>

<br>
<br>



<?php

function add($x,$y){
    return $x+$y;
}


$st = strrev($_REQUEST["m"]);
echo $st;

echo "<br>";

if($_REQUEST["m"] == $st)
{
    echo "PALINDROME";
}
else
{
    echo "No PALINDROME";
}



?>
</center>    
</body>
</html>