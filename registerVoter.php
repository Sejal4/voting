<?php
$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $studentid = $_POST["sid"];
    $pass = $_POST["pass"];
    $phone = $_POST["contact"];
    $error = "";

    if (preg_match("/^(98|97)\d{8}$/", $phone)) {
        $insert_query = "INSERT INTO users (name, studentid, pass_word, mobileNumber) VALUES ('$name', '$studentid', '$pass', '$phone')";
        $insert_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        header('Location: voterLogin.php');
        exit();
    } else {
        $error = "Invalid phone number. It must start with 98 or 97 and be 10 digits long.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home | Class Representative Selection System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container">
        <h1>Class Representative Selection System</h1>
        <p>New User Registration</p>
        <hr>
        <form action="registerVoter.php" method="post">
            <input type="text" placeholder="Name" name="name" required>
            <br>
            <input type="text" placeholder="StudentId" name="sid" required>
            <br>
            <input type="password" placeholder="Password" name="pass" required>
            <br>
            <input type="text" placeholder="Contact" name="contact" required>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Register">
            <?php
            if (!empty($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </form>
        <a href="index.php">Go to Home</a>

    </div>

</body>

</html>