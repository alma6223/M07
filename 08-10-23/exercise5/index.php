<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <select name="country">
            <?php
                include 'functions.php';
                foreach(countries('countries.csv') as $country) {
                    echo "<option value='" . $country[0] . "'>" . $country[0] . "</option>";
                }
            ?>
        </select>
        <input type="submit">
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            form(countries('countries.csv'));
        }
    ?>
</body>
</html>