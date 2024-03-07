<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <title>Phonebook List</title>
        <style>
            body {
                background-image: url("background.jpg");
                background-size: cover;
                font-family: 'Itim', sans-serif;
            }
            h1 {
                text-align: center;
                font-size: 50px;
                color: #588C7E;
            }
            h2 {
                text-align: center;
                font-size: 30px;
                color: #588C7E;
            }
            label {
                text-align: center;
                font-size: 30px;
                color: #588C7E;
            }
            .button {
                background-color: #588C7E;
                border: none;
                color: rgb(255, 255, 255);
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 30px;
                margin: 4px 2px;
                cursor: pointer;
            }
            input[type=text] {
                width: 20%;
                padding: 10px 10px;
                margin: 4px white;
                box-sizing: border-box;
                border: 4px ;
                background-color: #FFFFFF;
                color: #588C7E;
                font-family: 'Itim', sans-serif;
                font-size: 28px;
            }

            input[type=submit] {
                width: 10%;
                padding: 12px 20px;
                margin: 8px white;
                box-sizing: border-box;
                border: 8px ;
                background-color: #FFFFFF;
                color: #588C7E;
                font-family: 'Itim', sans-serif;
                font-size: 30px;
            }

            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #588C7E;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                }

            .button:hover { 
                background-color: #588C7E;
                color: #FFFFFF;
             }

            .button:active {
                background-color: #588C7E;
                box-shadow: 0 5px #588C7F;
                transform: translateY(4px);
            }

            table {
                border-collapse: collapse;
                width: 79%; 
                margin-top: 6px;

            }

            td {
                font-size: 22px;
                text-align: left;
                padding: 50px; 
            }

            tr:nth-child(odd) {
                background-color: #588C7E; 
                color: #fff; 
            }

            tr:nth-child(even) {
                background-color: #FFFFFF; 
                color: #588C7E; 
            }
            td a:nth-child(odd){
                color: #37394F; 
                text-decoration: none;
            }
            td a:nth-child(even){
                color: #fff; 
                text-decoration: none;
            }
    .timeline {
      max-width: 800px;
      margin: 0 auto;
      padding: 70px;
      background-color: white;
      box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
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
    .event {
      display: flex;
      align-items: center;
      margin-bottom: 40px;
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
        <center><div class="timeline">
        <div class="header"><h1>★ Phonebook List ❀</h1></div>

            
            <div class="timeline">

            <a href="Add_Phonebook.php" class = "button">Add new contacts</a><br><br>
            <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            include 'connect.php';

            $sql = "SELECT * FROM telbook";
            $result=mysqli_query($conn,$sql);
            /*if (!$result) {
                die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . mysqli_error($conn));
            }*/
            while ($row = mysqli_fetch_array($result)){
            ?>
                <tr>

                <td style="font-size: 20px; padding: 10px;"><?=$row['Name']?></td>
                <td style="font-size: 20px; padding: 10px;"><?=$row['Type']?></td>
                <td style="font-size: 20px; padding: 10px;"><?=$row['Phone']?></td>
                <td style="font-size: 20px; padding: 10px;"><a href="Edit_Phone.php?Id=<?=$row["Id"]?>" class="">Edit</td>
                <td style="font-size: 20px; padding: 10px;"><a href="delete_contact.php?Id=<?=$row["Id"]?>" class="">Delete</a></td>
                </tr>

            <?php
            }
            mysqli_close($conn);
            ?>
            </table><br>
            <br>
            </div>
            
<br><br>
<div class="event">
<a href="me.html" ><button class="home">HOME PAGE</button></a>
<a href="Profile.html" ><button class="Profile">PROFILE PAGE</button></a>
<a href="tavel.html" ><button class="tavel">TAVEL PAGE</button></a>
<a href="food.html" ><button class="food">FOOD PAGE</button></a><br><br>
<a href="Educational.html" ><button class="Educational">EDUCATIONAL PAGE</button></a>

</div>
        
        </div>
        </center>
    </body>

    </html>

    