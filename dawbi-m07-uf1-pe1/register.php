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
  <h2>Registration form</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="surname">Surname:</label>
      <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
    </div>
    <button type="submit" name="registersubmit" class="btn btn-default">Submit</button>
  </form>
<?php
    include 'fn/users.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
    	$user = array(
        	'username' => htmlspecialchars($_POST['username']),
        	'password' => htmlspecialchars($_POST['password']),
        	'rol' => 'registered',
        	'name' => htmlspecialchars($_POST['name']),
        	'surname' => htmlspecialchars($_POST['surname'])
		);
		if (!empty($user['username']) && !empty($user['password']) && !empty($user['name']) && !empty($user['surname'])) {
			$register = register('files/users.csv', $user);
			if ($register) {
        		header('Location: login.php');
      		} else {
        		echo 'Invalid username';
      		}
		} else {
			echo 'Invalid register';
		}
	}
?>
</div>
</body>
</html>
