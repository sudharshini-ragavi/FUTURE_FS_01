<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Enter username" required>
  <input type="password" name="password" placeholder="Enter password" required>
  <button type="submit" name="login">Login</button>
</form>
<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == "admin" && $password == "1234") {
    $_SESSION['admin'] = true;
    header("Location: view_messages.php");
  } else {
    echo "Invalid login!";
  }
}
?>
</body>
</html>
<a href="index.php" class="btn">Go to Portfolio</a>