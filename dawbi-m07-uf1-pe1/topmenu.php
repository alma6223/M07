<?php
session_start();
?>
<nav class="navbar navbar-default">
<div class="container col-md-10">
<div class="navbar-header">
<a class="navbar-brand" href="https://www.proven.cat">ProvenSoft</a>
</div>
<ul class="nav navbar-nav">
<li><a href='index.php'>Home</a></li>
<li><a href='daymenu.php'>Day Menu</a></li>
<?php
    if (!isset($_SESSION['rol'])) {
        echo "
            <li><a href='register.php'>Register</a></li>
            <li><a href='login.php'>Login</a></li>
        ";
    }
?>
<?php
    if (isset($_SESSION['username'])) {
        echo "<li><a href='logout.php'>Logout</a></li>";
    }
?>
<?php
    if (isset($_SESSION['full_name'])) {
        echo "<li><a href='#'>{$_SESSION['full_name']}</a></li>";
    }
?>
</ul>
</div>
</nav>