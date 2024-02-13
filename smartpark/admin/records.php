
<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<div class="content" id="load">
   <?php include_once("top-nav.php"); ?>
   <div class="p-3">
        <div class="card bg-white">
            <div class="card-header d-flex align-items-center px-4 py-3">
                <h5 class="card-title my-auto" style="color: #2B4162;">List of New Clients</h5>

                <button class="btn btn-sm btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#AddClient"><i class="fa-solid fa-circle-plus"></i> Add Client</button>
            </div>

            <div class="card-body p-4">
                <table id="transaction-table" class="table table-bordered table-striped">
                    <thead>
                        <tr class="py-5">
                            <th style="width: 30px;">#</th>
                            <th>Client Name</th>
                            <th>Plate Number</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody class="records-table">

                    </tbody>

                </table>

            </div>
            <!-- /.card-body -->
        </div>
   </div>
</div>

<!-- add client modal -->
<div class="modal fade" id="AddClient" tabindex="-1">
  <div class="modal-dialog shadow">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 class="modal-title">ADD CLIENT</h5>
        <div type="button" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark fs-3"></i>
        </div>
      </div>
      <div class="modal-body">
        <form id="AddClientForm" class="form-group">
        
            <div class="mb-2">
                <label for="client_name" class="form-label text-secondary fw-bold">Client Name:</label>
                <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Input Client Name" required>
            </div>

            <div class="mb-2">
                <label for="plate_number" class="form-label text-secondary fw-bold">Plate Number:</label>
                <div class="input-group mb-2">
              <input type="text" name="plate_number" id="plate_number" class="form-control" placeholder="Input Plate Number" required>
              <button class="btn btn-outline-primary" type="button" id="button-addon2">Capture</button>
            </div>
            </div>

            <div class="mb-2">
                <label class="form-label text-secondary fw-bold">Entry Zone:</label>
                <select class="form-select" name="entry_zone" required>
                    <option hidden>Select Entry Zone</option>
                    <option value="A">ENTRY ZONE A</option>
                    <option value="B">ENTRY ZONE B</option>
                    <option value="C">ENTRY ZONE C</option>
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label text-secondary fw-bold">Status:</label>
                <select class="form-select" name="status" required>
                    <option hidden>Select Status</option>
                    <option value="In">In</option>
                    <option value="Out">Out</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>


<!-- compute modal -->
<div class="modal fade" id="computeModal" tabindex="-1">
  <div class="modal-dialog shadow">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 class="modal-title">TRANSACTION COMPUTATION</h5>
        <div type="button" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark fs-3"></i>
        </div>
      </div>
      <div class="modal-body">
        <form id="computationForm" class="form-group">
            <input type="text" name="unique_id" id="unique_id" hidden>
            <div class="mb-2">
                <label for="plate_number" class="form-label text-secondary fw-bold">Plate Number:</label>
                <input type="text" name="plate_number" id="compute_pn" class="form-control" placeholder="Input Plate Number" readonly>
            </div>

            <div class="mb-2">
                <label class="form-label text-secondary fw-bold">Vehicle Type:</label>
                <select class="form-select" name="vehicle_type">
                    <option hidden>Select Vehicle Type</option>
                    <option value="0.20">Motor - (0.20/M | 12/H)</option>
                    <option value="0.35">Car - (0.35/M | 21/H)</option>
                </select>
            </div>

            <div class="row mb-2 mx-0">
                <div class="col-md-6 ps-0">
                    <label for="time_in" class="form-label text-secondary fw-bold">Time In:</label>
                    <input type="time" name="time_in" id="time_in" class="form-control" required>
                </div>

                <div class="col-md-6 pe-0">
                    <label for="time_out" class="form-label text-secondary fw-bold">Time Out:</label>
                    <input type="time" name="time_out" id="time_out" class="form-control" required>
                </div>
            </div>

            <div class="mb-2">
                <label for="fee" class="form-label text-secondary fw-bold">Amount:</label>
                <div class="input-group">
                  <span class="input-group-text">₱</span>
                  <input type="text" name="fee" id="fee" class="form-control" placeholder="Amount to Paid" readonly>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Compute">
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

    // TRANSACTION COMPUTATION
    $(document).ready(function () {
        // Select elements
        const vehicleTypeSelect = $('[name="vehicle_type"]');
        const timeInInput = $('#time_in');
        const timeOutInput = $('#time_out');
        const totalMinutesInput = $('#fee');

        // Add event listener to vehicle type select
        vehicleTypeSelect.change(updateTotalMinutes);

        // Add event listener to time inputs
        timeInInput.on('input', updateTotalMinutes);
        timeOutInput.on('input', updateTotalMinutes);

        function updateTotalMinutes() {
            // Get selected vehicle type value
            const vehicleType = parseFloat(vehicleTypeSelect.val());

            // Get time in and time out values
            const timeIn = new Date("1970-01-01T" + timeInInput.val() + "Z");
            const timeOut = new Date("1970-01-01T" + timeOutInput.val() + "Z");

            // Calculate the time difference in minutes
            if (timeIn && timeOut) {
                const timeDifference = (timeOut - timeIn) / (1000 * 60); // Convert milliseconds to minutes
                const totalMinutes = timeDifference * vehicleType;

                // Update the total minutes input
                totalMinutesInput.val(totalMinutes.toFixed(2)); // Displaying two decimal places
            } else {
                // If either time in or time out is not selected, clear the total minutes input
                totalMinutesInput.val('');
            }
        }
    });

</script>
