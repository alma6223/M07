<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="number" name="kg">
        <input type="submit">
    </form>
    <?php
        include('functions.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
            $kg = $_POST['kg'];
            if ($kg == 0 || empty($kg)) {
                echo 'You must buy at least 1kg of potatoes';
            } else {
                echo amount($kg);
            }
        }
    ?>
</body>
</html>