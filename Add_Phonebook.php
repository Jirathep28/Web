
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <title>Add contacts</title>
        <style>
            body {
                background-image: url("gnn.jpg");
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
                width: 50%;
                padding: 10px 10px;
                margin: 4px white;
                box-sizing: border-box;
                border: 4px solid #588C7E; /* เพิ่มสีกรอบเข้าไปที่นี่ */
                background-color: #FFFFFF;
                color: #588C7E;
                font-family: 'Itim', sans-serif;
                font-size: 28px;
            }

            input[type=submit] {
                width: 25%;
                padding: 15px 25px;
                margin: 10px Gray;
                box-sizing: border-box;
                border: 4px solid #588C7E; /* เพิ่มสีกรอบเข้าไปที่นี่ */
                background-color: #FFFFFF;
                color: #588C7E;
                font-family: 'Itim', sans-serif;
                font-size: 25px;
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
        </style>
    </head>
    <body>
        <div class="header"><h1>★ Add new Phonebook ❀</h1></div>
        <div class="timeline">
    <h1>Add new contacts</h1>
    <center>
    <form method = "post" action = "add_contact.php">

    <div class="timeline">

        <label for="Name">Name :  </label>
        <input type = "text" name = "Name" style="margin-left: 20px;"><br><br>

        <label for="Type">Type :  </label>
        <span style="margin-left: 10px;"> 
        <select id="Type" name="Type" style="font-size: 28px; color: #588C7E; font-family: 'Itim', sans-serif;">
                <option value="">Please select a Type</option>
                <option>Family</option>
                <option>Friend</option>
                <option>Business</option>
                <option>Emergency</option>
                <option>Other</option>
            </select>
        </span><br><br>
        
        <label for="Phone">Phone :  </label>

       
        <input type = "text" name = "Phone"  style="margin-left: 20px;"><br><br>
        <input type = "submit" value = "Add" name="add" class="button">
    </form><br> 

    </div>
    <a href="Phonebook_List.php" class="button">Back</a>

    </div>
        </center>
</body>
</html>