<?php
include "db_conn.php";

// Check if the delete button was clicked
if (isset($_POST['deleteUsers'])) {
    // Retrieve the row id from the form
    $id = $_POST['id'];

    // SQL query to delete the row
    $sql = "DELETE FROM users WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('Location: indexAdmin.php?msg=Record deleted successfully');
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
