<?php
    include_once 'user.php';
    session_start();
    if (!isset($_SESSION['UserList']))
    {
        $_SESSION['UserList'] = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="number" name="id" placeholder="ID">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="nif" placeholder="NIF">
        <input type="number" name="age" placeholder="Age">
        <input type="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $nif = $_POST['nif'];
            $age = $_POST['age'];
            
            $user = new User($id, $username, $name, $surname, $nif, $age);

            array_push($_SESSION['UserList'], $user);

            foreach($_SESSION['UserList'] as $users)
            {
                echo 'ID: ' . $users -> id . '<br>';
                echo 'Username: ' . $users -> username . '<br>';
                echo 'Name: ' . $users -> name . '<br>';
                echo 'Surname: ' . $users -> surname . '<br>';
                echo 'NIF: ' . $users -> nif . '<br>';
                echo 'Age: ' . $users -> age . '<br>';
            }
        }
    ?>
</body>
</html>
