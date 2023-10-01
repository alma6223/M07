<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="name"><br>
        <label>
            <input type="checkbox" name="sport[]" value="soccer"> Soccer
        </label><br>
        <label>
            <input type="checkbox" name="sport[]" value="basketball"> Basketball
        </label><br>
        <label>
            <input type="checkbox" name="sport[]" value="tennis"> Tennis
        </label><br>
        <label>
            <input type="checkbox" name="sport[]" value="golf"> Golf
        </label><br>
        <input type="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = preg_replace('/[^A-Za-z]/', '', $_POST['name']);
            $sport = $_POST['sport'];
            echo 'Name: ' . $name . '<br>';
            echo 'Sports: ';
            echo '<ul>';
            foreach($sport as $value) {
                echo '<li>' . $value . '</li>';
            }
            echo '</ul>';
        }
    ?>
</body>
</html>