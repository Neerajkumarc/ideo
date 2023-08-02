<?php include "config/db_connection.php" ?>
<?php
// SQL query to fetch all app ideas from the database
$sql = "SELECT * FROM ideas_app";
$result = $connection->query($sql);
?>
<?php include "./inc/header.php" ?>
<div class="container text-center ">
    <h1 class="text-center">All App Ideas</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card text-bg-dark mb-3 mx-auto' style='max-width: 40rem;'>";
            echo "<h2 class='card-header'>" . $row['title'] . "</h2>";
            echo "<p class='card-body'>" . $row['description'] . "</p>";
            echo "<p class='card-footer fst-italic fw-lighter'>Submitted By: " . $row['submitted_by'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No app ideas submitted yet.";
    }
    ?>
</div>
</body>

</html>