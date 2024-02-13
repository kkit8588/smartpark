<?php
    include "../connect.php";
    $sqlSelect = mysqli_query($conn, "SELECT * FROM tbl_history ORDER BY history_id DESC");
    while($row = mysqli_fetch_assoc($sqlSelect)){ 
?>
    <tr>
        <td><?php echo $row['history_id']; ?></td>
        <td><?php echo $row['client_name']; ?></td>
        <td><?php echo $row['plate_number']; ?></td>
        <td><?php echo $row['vehicle_type']; ?></td>
        <td><?php echo $row['time_in']; ?></td>
        <td><?php echo $row['time_out']; ?></td>
        <td>
            <?php
              $originalDate = $row['parking_date'];
              $formattedDate = date("F j, Y", strtotime($originalDate));

                echo $formattedDate;
            ?>
        </td>
        <td style="width: 150px;"><?php echo '₱'.$row['amount'].'.00'; ?></td>
    </tr>
<?php };?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.computeBtn').click(function() {
            $('#unique_id').val($(this).data('id'));
            $('#compute_pn').val($(this).data('pn'));
        });
    });
</script>