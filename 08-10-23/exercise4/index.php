<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <select name="select_file">
            <?php
                foreach(scandir('files/') as $file) {
                    echo "<option value='" . $file . "'>" . $file . "</option>";
                }
            ?>
        </select>
        <input type="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<textarea>" . file_get_contents('files/' . $_POST['select_file']) . "</textarea>";
        }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <input type="file" name="input_file">
        <input type="submit">
    </form>
    <?php
        include 'functions.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo add_file($_FILES['input_file']['name'], $_FILES['input_file']['tmp_name']);
        }
    ?>
</html>