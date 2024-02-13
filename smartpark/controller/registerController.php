<?php
include '../connect.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$sqlSelect = "SELECT * FROM tbl_registration WHERE username = '$username'";
$selectQuery = mysqli_query($conn, $sqlSelect);

$array = [];

if (mysqli_num_rows($selectQuery) > 0) {
    $array['status'] = 'error';
} else {
    $query = $conn->prepare("INSERT INTO tbl_registration (email, username, password) VALUES (?, ?, ?)");
    $query->bind_param("sss", $email, $username, $password);
    $insert = $query->execute();
    $array['status'] = 'success';
}
echo json_encode($array);
?>
