
<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<div class="content" id="load">
   <?php include_once("top-nav.php"); ?>
   <div class="p-3">
        <div class="card bg-white">
            <div class="card-header d-flex align-items-center px-4 py-3">
                <h5 class="card-title my-auto" style="color: #2B4162;">History</h5>
            </div>

            <div class="card-body p-4">
                <table id="transaction-table" class="table table-bordered table-striped">
                    <thead>
                        <tr class="py-5">
                            <th style="width: 30px;">#</th>
                            <th>Client Name</th>
                            <th>Plate Number</th>
                            <th>Vehicle</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Date</th>
                            <th>Paid Amount</th>
                        </tr>
                    </thead>

                    <tbody class="history-table">
                    </tbody>

                </table>

            </div>
            <!-- /.card-body -->
        </div>
   </div>
</div>

<?php include_once("footer.php"); ?>
<script type="text/javascript">
    $('#transaction-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "dom": 'Bfrtip',
      buttons: [
            {
                extend: 'csv',
                text: '<i class="fa-regular fa-circle-down"></i> Download Data as Excel ',
                exportOptions: {
                    modifier: {
                        search: 'none'
                    }
                }
            }
        ]
    });
</script>