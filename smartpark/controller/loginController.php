<?php 
include '../connect.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];
$array = [];

$select = "SELECT * FROM tbl_registration WHERE username = '$username'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

    // Check if the password is correct
    if (password_verify($password, $row['password'])) {
        $array['status'] = 'success';
    } else {
        $array['status'] = 'password';
    }
} else {
    $array['status'] = 'username';
}

echo json_encode($array);
?>
