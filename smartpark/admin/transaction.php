
<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<div class="content" id="load">
   <?php include_once("top-nav.php"); ?>
   <div class="p-3">
        <div class="card bg-white">
            <div class="card-header d-flex align-items-center px-4 py-3">
                <h5 class="card-title my-auto" style="color: #2B4162;">List of Transactions</h5>
            </div>

            <div class="card-body p-4">
                <table id="transaction-table" class="table table-bordered table-striped">
                    <thead>
                        <tr class="py-5">
                            <th>#</th>
                            <th>Plate Number</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Paid Amount</th>
                            <th>Penalty Fee</th>
                            <!-- <th class="col-auto text-center">Action</th> -->
                        </tr>
                    </thead>

                    <tbody class="transaction-table">
                    </tbody>

                </table>

            </div>
            <!-- /.card-body -->
        </div>
   </div>
</div>

<!-- Penalty modal -->
<div class="modal fade" id="penaltyModal" tabindex="-1">
  <div class="modal-dialog shadow">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 class="modal-title">PENALTY COMPUTATION</h5>
        <div type="button" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark fs-3"></i>
        </div>
      </div>
      <div class="modal-body">
        <form id="AddClientForm" class="form-group">
            <input type="text" name="tnx_id" id="tnx_id" hidden>

            <div class="mb-2">
                <label for="plate_number" class="form-label text-secondary fw-bold">Plate Number:</label>
                <input type="text" name="plate_number" id="plate_number" class="form-control" placeholder="Input Plate Number" required>
            </div>

            <div class="mb-2">
                <label for="fee" class="form-label text-secondary fw-bold">Exceeded Minutes:</label>
                <div class="input-group">
                  <input type="text" name="exceeded_minutes" id="exceeded_minutes" class="form-control" placeholder="Total Exceeded Minutes" readonly>
                  <span class="input-group-text">min</span>
                </div>
            </div>

            <div class="mb-2">
                <label for="fee" class="form-label text-secondary fw-bold">Penalty Fee:</label>
                <div class="input-group">
                  <span class="input-group-text">₱</span>
                  <input type="text" name="penalty_fee" id="penalty_fee" class="form-control" placeholder="Amount to Paid" readonly>
                </div>
            </div>
      </div>
      <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
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
      "responsive": true
      // "dom": 'Bfrtip',
      // "buttons": ["csv", "excel", "pdf", "print"]
    });
</script>