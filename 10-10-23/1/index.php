<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form>
    <?php   
        include('functions.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = preg_replace('/[^0-9A-Za-z]/', '', $_POST['username']);
            $password = $_POST['password'];
            $users = users('users.csv');
            echo exists($users, $username, $password);
        }
    ?>
</body>
</html>