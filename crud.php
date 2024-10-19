<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
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
        // Retrieve input values
        $firstname = $_POST["firstname"];
        $phoneno = $_POST["phoneno"];

        if (isset($_POST['insert'])) {
            // Insert query
            $sql = "INSERT INTO contactno (firstname, phoneno) VALUES ('$firstname', '$phoneno')";
            if (mysqli_query($connection, $sql)) {
                echo "New contact inserted successfully.<br>";
            } else {
                echo "Error inserting contact: " . mysqli_error($connection);
            }
        }

        if (isset($_POST['update'])) {
            // Update query (update phone number based on firstname)
            $sql = "UPDATE contactno SET phoneno='$phoneno' WHERE firstname='$firstname'";
            if (mysqli_query($connection, $sql)) {
                echo "Contact updated successfully.<br>";
            } else {
                echo "Error updating contact: " . mysqli_error($connection);
            }
        }

        if (isset($_POST['delete'])) {
            // Delete query (delete contact based on firstname)
            $sql = "DELETE FROM contactno WHERE firstname='$firstname'";
            if (mysqli_query($connection, $sql)) {
                echo "Contact deleted successfully.<br>";
            } else {
                echo "Error deleting contact: " . mysqli_error($connection);
            }
        }

        if (isset($_POST['list'])) {
            // Select query to list all contacts
            $sql = "SELECT * FROM contactno";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<h3>Contact List:</h3>";
                echo "<table border='1'>
                        <tr>
                            <th>First Name</th>
                            <th>Phone Number</th>
                        </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['firstname']}</td>
                            <td>{$row['phoneno']}</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "No contacts found.<br>";
            }
        }
    }

    // Close the database connection
    mysqli_close($connection);
    ?>

    <h2>Contact Management</h2>
    <form action="" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname"><br>

        <label for="phoneno">Phone Number:</label>
        <input type="tel" id="phoneno" name="phoneno"><br>

        <!-- Buttons for different actions -->
        <input type="submit" name="insert" value="Insert">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="list" value="List All Contacts">
    </form>
</body>
</html>
