<?php 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="email" class="form-label">Put an email address</label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="mt-3">
                    <button type="submit" class="btn btn-secondary">Send</button>
                </div>
            </div>
            <?php
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo $email . ' is NOT a valid email adress';
                } else {
                    header("Location: index.php");
                }
            }
            ?>
        </form>
    </div>
</body>

</html>