<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="number" name="a">
        <input type="number" name="b">
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">x</option>
            <option value="divide">/</option>
        </select>
        <input type="submit">
    </form>
    <?php
        include('functions.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $operation = $_POST['operation'];
            if ($operation == 'add') {
                echo add($a, $b);
            } elseif ($operation == 'subtract') {
                echo subtract($a, $b);
            } elseif ($operation == 'multiply') {
                echo multiply($a, $b);
            } elseif ($operation == 'divide') {
                echo divide($a, $b);
            }
        }
    ?>
</body>
</html>