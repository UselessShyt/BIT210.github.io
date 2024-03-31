<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>User Feedback</h1>
        <div class="row">
            <div class="col-md-12">
                <?php
                    $sql = "SELECT * FROM user_feedback";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Feedback ID: <?php echo $row["id"]; ?></h5>
                        <p class="card-text">User Interface Rating: <?php echo $row["user_interface"]; ?></p>
                        <p class="card-text">Feature Satisfaction Rating: <?php echo $row["feature_satisfaction"]; ?></p>
                        <p class="card-text">Preferences Rating: <?php echo $row["preferences"]; ?></p>
                        <p class="card-text">Feedback: <?php echo $row["feedback"]; ?></p>
                    </div>
                </div>
                <?php
                        }
                    } else {
                        echo "<p class='text-muted'>No feedback available.</p>";
                    }
                    // Close the database connection
                    $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
