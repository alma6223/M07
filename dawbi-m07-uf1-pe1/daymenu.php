
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DAWBI-M07-Pt11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/daymenu.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
        <?php include_once "topmenu.php";?>
        <div class="container">
        <h2>Day menu</h2>
        </div>
        <div id="menu">
			<?php
                include 'fn/menu.php';
                $categories = categories('files/categories.csv');
                $menu = menu('files/menu.csv');
				if ($categories && $menu) {
					table($categories, $menu);
                } else {
                    echo 'File not found';
                }
            ?>
        </div>
    </div>
    </body>
</html>
