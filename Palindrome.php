<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PALINDROME</title>
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
  <div class="header"><h1>★ PALINDROME PROGRAM ❀</h1></div>
<div class="PALINDROME">

<div class="timeline">

<div class="timeline">

  <center>
    <h2>Reverse & Palindrome</h2>
    <form method="get" action="Palindrome.php">
      <input type="text" name="text" placeholder="Enter text">
      <input type="submit" class="NEXT" value="CHECK">
    </form>
    <div class="result">

<?php
        function isPalindrome($text) {
          $text = str_replace(' ', '', $text);
          $text = strtolower($text);
          $reversedText = strrev($text);
          return $text === $reversedText;
        }

        if (isset($_REQUEST["text"])) {
          $inputText = $_REQUEST["text"];
          $reversedText = strrev($inputText);
          echo "Original Text: $inputText<br>";
          echo "Reversed Text: $reversedText<br>";
          if (isPalindrome($inputText)) {
            echo "✿ It's a PALINDROME ✿";
          } else {
            echo "❀ Not a PALINDROME ❀";
          }
        }
      ?>

<!--?php
function add($x,$y){
    return $x+$y;
}
$st = strrev($_REQUEST["text"]);
echo $st;
echo "<br>";
if($_REQUEST["text"] == $st)
{
    echo "PALINDROME";
}
else
{
    echo "No PALINDROME";
}?-->

</div></div>
 
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

</body>
</html>