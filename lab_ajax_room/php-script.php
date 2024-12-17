<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('database.php');
$db = $conn; // Database connection

// Check if the database connection is successful
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Legal input values
$roomname = legal_input($_POST['troomname']);
$detail = legal_input($_POST['tdetail']);
$roomtypeid = legal_input($_POST['troomtype']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($roomname) && !empty($detail) && !empty($roomtypeid)) {
        // SQL Query to insert user data into the database table
        insert_data($roomname, $detail, $roomtypeid);
    } else {
        echo "All fields are required";
    }
}

// Convert illegal input value to legal value format
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    return $value;
}

// Function to insert user data into the database table
function insert_data($roomname, $detail, $roomtypeid) {
    global $db;

    // Prepare SQL query with placeholders
    $query = "INSERT INTO tbroom (roomname, detail, roomtypeid) VALUES (?, ?, ?)";

    // Prepare statement
    if ($stmt = $db->prepare($query)) {
        // Bind parameters (s for string, i for integer)
        $stmt->bind_param("ssi", $roomname, $detail, $roomtypeid);

        // Execute the query
        if ($stmt->execute()) {
            // Display success message
            echo "User data was inserted successfully";

            // Refresh the page after 2 seconds or redirect to the form
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'user-form1.php'; 
                    }, 2000);
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing the query: " . $db->error;
    }
}
?>
