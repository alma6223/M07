<!DOCTYPE html>
<html lang="es">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <h2>Login form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" name="loginsubmit" class="btn btn-default">Submit</button>
    </form>
    <?php
      include 'fn/users.php';
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['username']);
        if (login('files/users.csv', $username, htmlspecialchars($_POST['password']))) {
          session_start();
          $user = user('files/users.csv', $username);
          $_SESSION['username'] = $user['username'];
          $_SESSION['rol'] = $user['rol'];
          $_SESSION['full_name'] = $user['name'] . ' ' . $user['surname'];
          header('Location: index.php');
        } else {
          echo 'Invalid credentials';
        }
      }
    ?>
  </div>
</body>
</html>