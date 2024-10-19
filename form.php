<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    // Database connection parameters
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "web";

    // Establish database connection
    $connection = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from the form
        $enteredName = $_POST["name"];
        $enteredPhoneno = $_POST["phoneno"];
        // Perform a simple query to check if the username and password match
        //$query = "SELECT * FROM user WHERE name = '$enteredName' AND phoneno = '$enteredPhoneno'";
        //$result = mysqli_query($connection, $query);

        if (isset($_POST['insert'])) {
            // Check if a row was returned (login successful)
            $sql = "INSERT INTO contacts (name, phone_number) VALUES ('$name', '$phone_number')";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<p>Inserted successfully<\p>";
            } else {
                echo "<p>Insertion failed. Please check again.</p>";
            }
        
            // Free result set
            mysqli_free_result($result);
        } 
        elseif (isset($_POST['update'])) {
            $sql = "UPDATE contacts SET phone_number='$phoneno' WHERE name='$name'";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<p>Updated successfully<\p>";
            } else {
                echo "<p>Updation failed. Please check again.</p>";
            }
        }
        elseif (isset($_POST['delete'])) {
            $sql = "UPDATE contacts SET phone_number='$phoneno' WHERE name='$name'";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<p>Updated successfully<\p>";
            } else {
                echo "<p>Updation failed. Please check again.</p>";
            }
        }
        
        else {
            echo "Query failed: " . mysqli_error($connection);
        }
    }
    
    // Close connection
    mysqli_close($connection);
    ?>

    <h2>Login Form</h2>
    <form action="form.php" method="post">
        <label for="username">Name:</label>
        <input type="text" name="username" required><br>

        <label for="password">Phone no::</label>
        <input type="submit" name="insert" value="Insert">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="display" value="Display Data">
    </form>
</body>
</html>