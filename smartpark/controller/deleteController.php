<?php
    include '../connect.php';

  
    $id = $_POST['deleteID'];  
    $query = mysqli_query($conn, "DELETE FROM ar_tbl WHERE id = $id");  
    

?>