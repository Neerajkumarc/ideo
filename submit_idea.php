<?php include "config/db_connection.php" ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $submitted_by = $_POST['submitted_by'];

    // SQL query to insert the data into the database
    $sql = "INSERT INTO ideas_app (title, description, submitted_by) VALUES ('$title', '$description', '$submitted_by')";

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        header('Location: view_ideas.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
?>
