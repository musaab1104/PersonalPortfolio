<?php
$con = mysqli_connect('localhost', 'root', 'Musaab@1104');

if ($con) {
    echo "Connection successful";
} else {
    echo "Not connected";
}

mysqli_select_db($con, 'portinformation');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message']; 
$query = "INSERT INTO inputdata (name, email, message) VALUES ('$name', '$email', '$message')";

mysqli_query($con, $query);

header('location:index.php')
?>