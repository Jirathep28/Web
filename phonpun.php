<?php
// Include the database connection file (dbconnect.php)
include('connect.php');

// Initialize variables for storing contact information
$name = '';
$phone = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Sanitize input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $phone = mysqli_real_escape_string($conn, $phone);

    // Insert the data into the 'telbook' table
    $sql = "INSERT INTO telbook (Name, Phone) VALUES ('$name', '$phone')";
    if (mysqli_query($conn, $sql)) {
        // Data has been successfully inserted
        $name = '';
        $phone = '';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Check if a delete request has been made
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    // Delete the record with the specified id from the 'telbook' table
    $sql = "DELETE FROM telbook WHERE Phone = '$id'"; // Use 'id_tel' to identify the record
    if (mysqli_query($conn, $sql)) {
        // Data has been successfully deleted
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Retrieve the list of contacts from the 'telbook' table
$sql = "SELECT * FROM telbook";
$result = mysqli_query($conn, $sql);
?>

<?php
// Check if the "visit_count" cookie is set
if(isset($_COOKIE['vc'])){
    $visit_count = $_COOKIE['vc'] + 1;
} else {
    $visit_count = 1;
}

// Set the "visit_count" cookie with an updated value
setcookie('vc', $visit_count, time() + 3600 * 24 * 30); // Expires in 30 days

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <link rel="stylesheet" href="customhome.css">
</head>

<body>

    <div class="wrapper">
        <center><h1>Phone Book</h1></center>
    </div>

    <!-- Form to add a new contact -->
    <div class="wrapper">
        <center>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $name; ?>" required>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" required>
                <button type="submit">Add Contact</button>
            </form>
        </center>
    </div>

    <!-- Display the list of contacts -->
    <div class="wrapper">
        <center>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td><a href='" . $_SERVER["PHP_SELF"] . "?delete=" . $row['Phone'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </center>
    </div>
    <div class="btn">
      <button class="btn align-items-center" type="submit" style="background-color: tomato; color: white;">
        <a href="me.html">กลับไปยังหน้าหลัก</a>
      </button>
    </div>
    <center><p>You have visited this page <?php echo $visit_count; ?> times.</p></center>
    </div>
</body>
</html>


