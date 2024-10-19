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
        $enteredUsername = $_POST["username"];
        $enteredPassword = $_POST["password"];

        // Perform a simple query to check if the username and password match
        $query = "SELECT * FROM user WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Check if a row was returned (login successful)
            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Login Successful!</h2>";
            } else {
                echo "<p>Login failed. Please check your username and password.</p>";
            }

            // Free result set
            mysqli_free_result($result);
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }
    }
    
    // Close connection
    mysqli_close($connection);
    ?>

    <h2>Login Form</h2>
    <form action="login_onepage.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>