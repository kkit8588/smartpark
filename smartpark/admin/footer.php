  
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="../plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script src="../plugins/fontawesome/all.min.js" crossorigin="anonymous"></script>
  <!-- JS -->
  <script src="../assets/js/script.js" crossorigin="anonymous"></script>

  <!-- DATATABLE TABLE -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables/bs4/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables/responsive/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables/responsive/responsive.bootstrap4.min.js"></script>
  <!-- DATATABLE BUTTONS PRINT|PDF|CSV|EXCEL -->
  <script src="../plugins/datatables/buttons/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables/buttons/buttons.bootstrap4.min.js"></script>
  <script src="../plugins/buttons/jszip.min.js"></script>
  <script src="../plugins/buttons/pdfmake.min.js"></script>
  <script src="../plugins/buttons/vfs_fonts.js"></script>
  <script src="../plugins/datatables/buttons/buttons.html5.min.js"></script>
  <script src="../plugins/datatables/buttons/buttons.print.min.js"></script>
  <script src="../plugins/datatables/buttons/buttons.colVis.min.js"></script>
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#registerforms').submit(function(event) {
              event.preventDefault();

              var regData = $(this).serialize();

              $.ajax({
                  url: '../controller/registerController.php',
                  type: 'post',
                  data: regData,
                  dataType: 'json',
                  success: function(output) {
                    if (output.status === 'error') {
                         Swal.fire({
                          title: "Invalid Registration!",
                          text: "This username is already registered!",
                          icon: "error"
                        });
                    }else if(output.status === 'success'){
                        $('.form-control').val('');
                        Swal.fire({
                          title: "Register Successfully!",
                          icon: "success"
                        });
                    }
                  }
              });
        });

        $('#loginForms').submit(function(event) {
              event.preventDefault();

              var logData = $(this).serialize();

              $.ajax({
                  url: '../controller/loginController.php',
                  type: 'post',
                  data: logData,
                  dataType: 'json',
                  success: function(output) {
                    if (output.status === 'username') {
                        Swal.fire({
                          title: "Login Failed",
                          text: "Please check your username!",
                          icon: "error"
                        });
                    }else if(output.status === 'password') {
                        Swal.fire({
                          title: "Login Failed",
                          text: "Your password is wrong!",
                          icon: "error"
                        });
                    }else if (output.status === 'success'){
                        $('.loaderFather').removeClass('d-none');

                        setTimeout(function() {
                            window.location.href = 'dashboard.php';
                        }, 4900);
                    }
                  }
              });
          });

        // Add Client Form 
        $('#AddClientForm').submit(function(e) {
              e.preventDefault();

              var acfData = $(this).serialize();

              $.ajax({
                  url: '../controller/addClient.php',
                  type: 'post',
                  data: acfData,
                  dataType: 'json',
                  success: function(output) {
                    recordstbl();
                    if (output.status === 'success') {
                        Swal.fire({
                          title: "Done!",
                          text: "Client Added Successfully",
                          icon: "success"
                        });
                    }
                  }
              });
        });

        function recordstbl(){
          $.ajax({
                type: 'POST',
                url: 'records-table.php',
                success: function (output) {
                     $('.records-table').html(output)
                  },
            });
        }

        recordstbl();

        // Computation Form 
        $('#computationForm').submit(function(e) {
              e.preventDefault();

              var cfData = $(this).serialize();

              $.ajax({
                  url: '../controller/computation.php',
                  type: 'post',
                  data: cfData,
                  dataType: 'json',
                  success: function(output) {
                    recordstbl();
                    $('#computeModal').modal('hide');
                    $('#computationForm input').val('');
                    $('#computationForm select').prop('selectedIndex', 0);
                    if (output.status === 'success') {
                        Swal.fire({
                          title: "Transaction Successfully",
                          icon: "success"
                        });
                    }
                  }
              });
        });

        //Transactions Table Form

        function transactiontbl(){
          $.ajax({
                type: 'POST',
                url: 'transaction-table.php',
                success: function (output) {
                     $('.transaction-table').html(output)
                  },
            });
        }

        transactiontbl();

        //History Table

        function historytbl(){
          $.ajax({
                type: 'POST',
                url: 'history-table.php',
                success: function (output) {
                     $('.history-table').html(output)
                  },
            });
        }

        historytbl();
        
    });

  </script>

</body>
</html>