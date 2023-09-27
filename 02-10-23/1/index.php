<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name">
        <input type="submit">
    </form>
</body>
</html>