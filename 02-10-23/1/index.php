<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="last_name" placeholder="Last name">
        <input type="submit">
        <input type="reset">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
            $name = preg_replace('/[^A-Za-z]/', '', $_GET['name']);
            $last_name = preg_replace('/[^A-Za-z]/', '', $_GET['last_name']);
            if (empty($name) || empty($last_name)) {
                echo 'Name & Last name is required';
            } else {
                echo ucfirst($name) . ' ' . ucfirst($last_name);
            }
        }
    ?>
</body>
</html>