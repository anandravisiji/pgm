  
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
        // Retrieve username and password from the forsm
        $enteredUsername = $_POST["user"];
        $enteredPassword = $_POST["pass"];

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
    