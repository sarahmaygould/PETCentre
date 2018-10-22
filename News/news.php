<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <title>The PET Centre</title>
  </head>

  <body>

    <?php

    $fileName = "news_items.csv"
    $csvData = file_get_contents($fileName);
    $lines = explode(PHP_EOL, $csvData);
    $array = array();
    foreach ($lines as $line) {
        $array[] = str_getcsv($line);
    }
    print_r($array);

      $itemImage = "PETMRCourse_small.jpg";
      $itemTitle = "Simultaneous PET-MR Course";
      $itemContent = "Some text here.";

    ?>

    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="page-title">
          News
        </div>

        <div class="LR-container">
          <div class="LI-image">
            <img src="images/<?php echo $itemImage?>" alt="<?php echo $itemImage?>" height="200">
          </div>
          <div class="LI-text staff-section">
            <h1><?php echo $itemTitle?></h1>
            <?php echo $itemContent?>
          </div>
        </div>

        <hr>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
