<?php
include('connect-db.php');
$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
$message = mysqli_real_escape_string($connection, htmlspecialchars($_POST['message']));
mysqli_query($connection, "INSERT INTO quito (name,email,message) VALUES ('$name','$email','$message')");
mysqli_close($connection);
?>