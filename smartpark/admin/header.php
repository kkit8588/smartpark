<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title id="contactContent">
      <?php
          // Get Current File Name and Display
          $url = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);

          // Remove the prefix
          $removePrefix = str_replace('http://localhost/smartpark/', '', $url);

          // Get the file name without the ".php" extension
          $fileNameWithoutPhp = pathinfo(basename($removePrefix), PATHINFO_FILENAME);
          $cleanedString = preg_replace('/[^a-zA-Z0-9]/', ' ', $fileNameWithoutPhp);
          $sentencecase = ucwords($cleanedString);

          // Output the result
          echo $sentencecase;
      ?>
    </title>
    <!-- CUSTOMIZE FONT  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- BOOTSTRAP ICON ONLINE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- BOOTSTRAP CSS OFFLINE -->
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap5/bootstrap.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../upload/favicon.ico" type="image/x-icon">
    <!-- DATABLE CSS -->
    <link rel="stylesheet" href="../plugins/datatables/bs4/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables/responsive/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables/buttons/buttons.bootstrap4.min.css">
    <style type="text/css">
      .table td,
      .table th {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
      }
      .table th {
         background-color: #1a7bc2;
         color: white;
      }
      table{
         border: 1px solid #dee2e6;
      }
    </style>
</head>

<body>