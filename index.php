<?php include "config/db_connection.php" ?>

<?php include "./inc/header.php"?>

    <div class="container">
        <h1 class="text-center" >Submit Your App Idea</h1>
        <form action="submit_idea.php" method="post">
            <div class="mb-3">
            <label class="form-label" for="title">Title:</label>
            <input class="form-control"  type="text" name="title" required>
            </div>
            <div class="mb-3">
            <label class="form-label" for="description">Description:</label>
            <textarea  class="form-control" name="description" required></textarea>
            </div>
            <div class="mb-3">
            <label class="form-label" for="submitted_by">Submitted By:</label>
            <input class="form-control"  type="text" name="submitted_by" required>
            </div>
            <button class="btn btn-dark" type="submit">Submit Idea</button>
        </form>
    </div>
</body>
</html>
