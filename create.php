<?php
include 'connection.php';

if (isset($_POST['Submit'])) {
    $first_name = $_POST['Firstname'];
    $last_name = $_POST['Lastname'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $gender = $_POST['Gender'];

    $sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES('$first_name','$last_name','$email','$password','$gender')";

    $result = $connect->query($sql);

    if ($result == true) {
        echo "New record added successfully";
    } else {
        echo 'Error: ' . $sql . '<br>' . $connect->error;
    }

    $connect->close();
}
?><br>
<html>
    <a class="btn btn-info" href="signup.html">Back</a><br>
    <a class="btn btn-info" href="read.php">View in the DATABASE</a>
</html>
