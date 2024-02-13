<?php
    include "../connect.php";
    $sqlSelect = mysqli_query($conn, "SELECT * FROM tbl_clients ORDER BY clients_id DESC");
    while($row = mysqli_fetch_assoc($sqlSelect)){ 
?>
    <tr>
        <td><?php echo $row['clients_id']; ?></td>
        <td><?php echo $row['client_name']; ?></td>
        <td><?php echo $row['plate_number']; ?></td>
        <td><?php echo $row['entry_zone']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td class="col-auto text-center">
            <button data-bs-target="#computeModal"
                    data-bs-toggle="modal"
                    class="computeBtn btn btn-sm btn-success " 
                    data-id="<?php echo $row['unique_id']; ?>"
                    data-pn="<?php echo $row['plate_number']; ?>">
                    <i class="fa-solid fa-calculator"></i> Compute
            </button>
         </td>
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