<?php
include '../connect.php';

$unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
$plate_number = mysqli_real_escape_string($conn, $_POST['plate_number']);
$vehicle_type = mysqli_real_escape_string($conn, $_POST['vehicle_type']);
$time_in = mysqli_real_escape_string($conn, $_POST['time_in']);
$time_out = mysqli_real_escape_string($conn, $_POST['time_out']);
$fee = mysqli_real_escape_string($conn, $_POST['fee']);
$array = [];

    $stmt = $conn->prepare("INSERT INTO tbl_transaction (unique_id, plate_number, vehicle_type, time_in, time_out, amount) VALUES (?, ?, ?, ?, ?, ?) ");
    $stmt->bind_param("ssssss", $unique_id, $plate_number, $vehicle_type, $time_in, $time_out, $fee);

    $insert = $stmt->execute();
    
    if ($insert) { // Check the success of the first insert, not $stmt
        $stmt2 = $conn->prepare("UPDATE tbl_history SET vehicle_type = ?, time_in = ?, time_out = ?, amount = ? WHERE unique_id = ?");
        $stmt2->bind_param("ssssi", $vehicle_type, $time_in, $time_out, $fee, $unique_id);
        
        $stmt2->execute(); // Execute the second insert
        
        $array["status"] = "success";
    } else {
        $array["status"] = "error";
    }

    echo json_encode($array);
    
?>