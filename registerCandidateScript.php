<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["contact"];

   
    // Check if the maximum limit of candidates is reached
    $count_query = "SELECT COUNT(*) AS count FROM candidate";
    $count_result = mysqli_query($con, $count_query);
    $row = mysqli_fetch_assoc($count_result);
    $candidate_count = $row['count'];

    if ($candidate_count >= 20) {
        echo "<div class='error'>Maximum limit of candidates reached. No more registrations allowed.</div>";
    } else {
        // Check if the name or phone number already exists
        $check_query = "SELECT * FROM candidate WHERE name='$name' OR contact='$phone'";
        $check_result = mysqli_query($con, $check_query);
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            echo "<div class='error'>Candidate with the same name or phone number already exists.</div>";
        } else {
            // Insert the candidate details into the database
            $insert_query = "INSERT INTO candidate (name, email, contact) VALUES ('$name', '$email', '$phone')";
            $insert_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));

            echo "<div class='success'>Your details have been successfully recorded.</div>";
        }
    }
}
?>