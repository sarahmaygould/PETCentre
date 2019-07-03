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

        <?php foreach ($management_array as $management) { ?>
          <div class="LR-container">
            <div class="LI-image">
              <img src="images/<?php echo $management[0] ?>" alt="<?php echo $management[1] ?>" width="140">
            </div>
            <div class="LI-text staff-section">
              <h1><?php echo $management[1] ?></h1>
              <h2><?php echo $management[2] ?></h2>
              <?php echo $management[3] ?>
              <?php if ($management[4] == "TRUE") {?>
              <p>
                <a href="<?php echo $management[5] ?>">Research Profile</a>
              </p>
            <?php } ?>
            </div>
          </div>
          <hr>
        <?php } ?>

        <div>
          <p><b>Expertise is also provided by clinical colleagues from Nuclear Medicine and Radiology:</b></p>
          <ul id="colleagues-list">
            <?php foreach ($other_array as $other) { ?>
            <li><?php echo $other[0] ?></li>
          <?php } <?>
          </ul>
        </div>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
