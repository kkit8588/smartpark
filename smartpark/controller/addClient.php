<?php
include '../connect.php';

$client_name = mysqli_real_escape_string($conn, $_POST['client_name']);
$plate_number = mysqli_real_escape_string($conn, $_POST['plate_number']);
$entry_zone = mysqli_real_escape_string($conn, $_POST['entry_zone']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$unique_id = mt_rand(10000, 99999);
$array = [];

$stmt = $conn->prepare("INSERT INTO tbl_clients (client_name, unique_id, plate_number, entry_zone, status) 
                        VALUES (?, ?, ?, ?, ?) ");
$stmt->bind_param("sssss", $client_name, $unique_id, $plate_number, $entry_zone, $status);

$insert = $stmt->execute();

if ($insert) { // Check the success of the first insert, not $stmt
    $stmt2 = $conn->prepare("INSERT INTO tbl_history (client_name, unique_id, plate_number, entry_zone) 
                        VALUES (?, ?, ?, ?) ");
    $stmt2->bind_param("ssss", $client_name, $unique_id, $plate_number, $entry_zone);
    
    $stmt2->execute(); // Execute the second insert
    
    $array["status"] = "success";
} else {
    $array["status"] = "error";
}

echo json_encode($array);

?>
