<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">

  <?php
  if (!isset($_SESSION)) {
    session_start();
  }
  ?>
</head>

<body>

  <div class="container">
    <h1>Class Representative Selection System</h1>
    <hr>
    <h2>Voter Login Form</h2>
    <form action="loginSubmit.php" method="post">
      <label for="uname"><b>Student ID</b></label>
      <input type="text" placeholder="Enter Student ID" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <?php if (isset($_GET['error'])) { ?>
        <p><mark><?php echo $_GET['error']; ?></mark></p>
      <?php } ?>

      <button type="submit">Login</button>
      <a href="index.php">New User? Register</a>
      <a href="index.php">Go to Home</a>

    </form>
  </div>

</body>

</html>