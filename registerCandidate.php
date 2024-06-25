<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">

        <h1>Class Representative Selection System</h1>
        <h3> <mark> Candidate Registration Portal </mark></h3>
        <hr>
        <h3>New Candidate's Details</h3>

        <?php include ('registerCandidateScript.php'); ?>

        <form action="" method="post">

            <input type="text" placeholder="Name" name="name">
            <br>
            <input type="email" placeholder="Email" name="email">
            <br>
            <input type="text" placeholder="Contact" name="contact">
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Register">
            
        </form>
        <a href="index.php">Go to Home</a>

    </div>
</body>

</html>