<?php
$servername = 'localhost';
$db_name = 'student_db';
$username = 'root';
$password = '';

$connect = mysqli_connect($servername, $username, $password, $db_name);
if ($connect->connect_error) {
    exit("Connection error: " . $connect->connect_error);
} else {
    echo "Connected successfully!";
}
?>