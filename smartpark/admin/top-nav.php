<div class="bg-white d-flex border-secondary-subtle border-bottom p-3 " style="height: 65px; ">
      <h5 class="card-title fw-bold my-auto" style="color: #2B4162;">
            <?php
                // Get Current File Name and Display
                $url = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);

                // Remove the prefix
                $removePrefix = str_replace('http://localhost/smartpark/', '', $url);

                // Get the file name without the ".php" extension
                $fileNameWithoutPhp = pathinfo(basename($removePrefix), PATHINFO_FILENAME);
                $uppercase = strtoupper($fileNameWithoutPhp);
                // Output the result
                echo $uppercase;
            ?>
      </h5>
      <a href="logout.php" class="btn btn-sm btn-outline-danger ms-auto fw-bold">Logout</a>
</div>