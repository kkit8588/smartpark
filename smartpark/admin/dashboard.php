
<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<style type="text/css">
    #psa div.card,
    #psb div.card,
    #psc div.card{
        width: 290px;
        height: 535px;
    }
</style>
<div class="content" id="load">
   <?php include_once("top-nav.php"); ?>
   <div class="p-3 mb-5">
        <div class="mx-0 mt-5 row gap-4">
            <div class="card rounded-4 col-md-5 col-lg-4 col-xl-3 p-3 shadow">
              <div class="card-body d-flex align-items-center">
                <div class="text-bg-warning bg-opacity-50 rounded-4 p-3">
                    <i class="fa-solid fa-coins fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title fw-bold m-0">₱1234.00</h5>
                    <small class="card-subtitle mb-2 text-body-secondary fw-bold">Total Revenue</small>
                </div>
              </div>
            </div>

            <div class="card rounded-4 col-md-5 col-lg-4 col-xl-3 p-3 shadow">
              <div class="card-body d-flex align-items-center">
                <div class="text-bg-warning bg-opacity-50 rounded-4 p-3">
                    <i class="fa-solid fa-coins fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title fw-bold m-0">₱34.00</h5>
                    <small class="card-subtitle mb-2 text-body-secondary fw-bold">Today Income</small>
                </div>
              </div>
            </div>

            <div class="card rounded-4 col-md-5 col-lg-4 col-xl-3 p-3 shadow">
              <div class="card-body d-flex align-items-center">
                <div class="text-bg-primary bg-opacity-50 rounded-4 p-3">
                    <i class="fa-solid fa-users fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title fw-bold m-0">104</h5>
                    <small class="card-subtitle mb-2 text-body-secondary fw-bold">Total Client</small>
                </div>
              </div>
            </div>

            <div class="card rounded-4 col-md-5 col-lg-4 col-xl-3 p-3 shadow">
              <div class="card-body d-flex align-items-center">
                <div class="text-bg-danger bg-opacity-50 rounded-4 p-3">
                    <i class="fa-solid fa-car fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title fw-bold m-0">3</h5>
                    <small class="card-subtitle mb-2 text-body-secondary fw-bold">Total  Parked Today</small>
                </div>
              </div>
            </div>

        </div>
        <div class="row gap-4 mx-0 mt-5">
            <div class="card bg-white col-12 col-lg-8 p-0 shadow">
                <div class="card-header d-flex align-items-center px-4 py-3">
                    <h5 class="card-title my-auto" style="color: #2B4162;">Analytics of Revenue</h5>
                </div>

                <div class="card-body p-4">
                    <canvas id="myBarChart" width="400" height="150"></canvas>
                </div>
            </div>

            <div class="card bg-white col-12 col-lg-3 p-0 shadow">
                <div class="card-header d-flex align-items-center px-4 py-3">
                    <h5 class="card-title my-auto" style="color: #2B4162;">Chart of Parking Availability</h5>
                </div>

                <div class="card-body p-4">
                    <canvas id="myPieChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>

   </div>
</div>

<?php include_once("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sample data for the bar graph
    var data = {
      labels: ['7 Days', '1 Month', '3 Months', '4 Months'],
      datasets: [{
        label: 'Revenue',
        data: [12, 19, 3, 5], // Values for each bar
        backgroundColor: [
          'rgba(255, 99, 132, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
        ],
        borderWidth: 1
      }]
    };

    // Configuration options
    var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    // Get the context of the canvas element we want to select
    var ctx = document.getElementById('myBarChart').getContext('2d');

    // Create the bar chart
    var myBarChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });




     // Sample data for the pie chart
    var data = {
      labels: ['Parking Slot A', 'Parking Slot B', 'Parking Slot C'],
      datasets: [{
        data: [2, 3, 0], // Values for each sector
        backgroundColor: [
          'rgba(255, 99, 132, 0.7)',
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(75, 192, 192, 0.7)',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
        ],
        borderWidth: 1
      }]
    };

    // Configuration options
    var options = {};

    // Get the context of the canvas element we want to select
    var ctx = document.getElementById('myPieChart').getContext('2d');

    // Create the pie chart
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: data,
      options: options
    });
  </script>