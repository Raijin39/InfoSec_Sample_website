<?php
include "db_conn.php";

// Check if the delete button was clicked
if (isset($_POST['delete'])) {
    // Retrieve the row email from the form
    $email = $_POST['email'];

    // SQL query to delete the row
    $sql = "DELETE FROM tblusers WHERE email = $email";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Row deleted successfully";
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
