<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "root";
$my_db = 'omarali_db';
$con = new mysqli($servername, $username, $password, $my_db);

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

$sql = "INSERT INTO contact_form (first_name, last_name, phone, email, message) VALUES (' $first_name ', ' $last_name  ',' $phone  ',' $email  ',' $message ')";
$execute_query = mysqli_query($con, $sql);
$success = $execute_query ?  true  : false;
header('location:../index.php?success=' . $success . '');
