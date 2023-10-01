<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <select name="input">
            <option value="usd">USD</option>
            <option value="eur">EUR</option>
            <option value="jpy">JPY</option>
        </select>
        <select name="output">
            <option value="usd">USD</option>
            <option value="eur">EUR</option>
            <option value="jpy">JPY</option>
        </select>
        <input type="number" name="amount">
        <input type="submit">
    </form>
    <?php
        include('functions.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
            $amount = $_POST['amount'];
            $input = $_POST['input'];
            $output = $_POST['output'];
            if ($amount == 0 || empty($amount)) {
                echo 'enter a valid amount';
            } elseif ($input == $output) {
                echo 'The same currency exchange cannot be made';
            } else {
                if ($output == 'eur') {
                    echo eur($amount, $input);
                } elseif ($output == 'usd') {
                    echo usd($amount, $input);
                } elseif ($output == 'jpy') {
                    echo jpy($amount, $input);
                } 
            }
        }
    ?>
</body>
</html>