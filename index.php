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
        </form>
        <?php
        include_once __DIR__ . "/functions.php";
        ?>
        <div class="alert <?php
                            if ($email == true) {
                                echo "alert-success";
                            } else {
                                echo "alert-danger";
                            }
                            ?>" role="alert">

            <?php if ($email == true) {
                echo 'Email is Valid';
            } else {
                echo 'NOT a valid Email address';
            }
            ?>
        </div>
    </div>
</body>

</html>