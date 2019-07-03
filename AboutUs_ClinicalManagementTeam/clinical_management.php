<!DOCTYPE html>
<html>

  <head>
    <?php include_once '../head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <link rel="stylesheet" type="text/css" href="clinical_management-style.css">
  </head>

  <body>
    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <?php
        $management_array = array_map('str_getcsv', file("clinical_management.csv"));
        unset($management_array[0]);
        $other_array = array_map('str_getcsv', file("other_clinical.csv"));
      ?>

      <div class="page-body">
        <div class="page-title">
          Clinical and Management Team
        </div>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
