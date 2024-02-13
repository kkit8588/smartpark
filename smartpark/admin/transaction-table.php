<?php
    include "../connect.php";
    $sqlSelect = mysqli_query($conn, "SELECT * FROM tbl_transaction ORDER BY tnx_id DESC");
    while($row = mysqli_fetch_assoc($sqlSelect)){ 
?>
    <tr>
        <td><?php echo $row['tnx_id']; ?></td>
        <td><?php echo $row['plate_number']; ?></td>
        <td><?php echo $row['time_in']; ?></td>
        <td><?php echo $row['time_out']; ?></td>
        <td style="width: 150px;"><?php echo '₱'.$row['amount'].'.00'; ?></td>
        <td class="col-auto text-center">
            <button data-bs-target="#penaltyModal"
                    data-bs-toggle="modal"
                    class="penaltyBtn btn btn-sm btn-warning" 
                    data-id="<?php echo $row['tnx_id']; ?>"
                    data-pn="<?php echo $row['plate_number']; ?>"
                    data-pf="<?php echo $row['amount']; ?>">
                    <i class="fa-solid fa-plus"></i> Penalty
            </button>
         </td>
    </tr>
<?php };?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.penaltyBtn').click(function() {
            $('#tnx_id').val($(this).data('id'));
            $('#plate_number').val($(this).data('pn'));
            $('#penalty_fee').val($(this).data('pf'));
            
        });
    });
</script>