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
      $news_item_array = array_map('str_getcsv', file("news_items.csv"));
      unset($news_item_array[0]);
      $start_loop = 1;
      $counter = 1;
    ?>

    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="page-title">
          News
        </div>

        <?php foreach ($news_item_array as $news_item) {
          if ($start_loop==0) echo "<hr>";
          if ($counter % 2 == 0) {
        ?>
          <div class="LR-container">
            <div class="LI-image">
              <img src="images/<?php echo $news_item[2]?>" alt="<?php echo $news_item[2]?>" width="150">
            </div>
            <div class="LI-text">
              <h1><?php echo $news_item[0]?></h1>
              <?php echo $news_item[1]?>
            </div>
          </div>
        <?php } else {
        ?>
          <div class="LR-container">
            <div class="RI-text">
              <h1><?php echo $news_item[0]?></h1>
              <?php echo $news_item[1]?>
            </div>
            <div class="RI-image">
              <img src="images/<?php echo $news_item[2]?>" alt="<?php echo $news_item[2]?>" width="150">
            </div>
          </div>
        <?php }
          $start_loop = 0;
          $counter++;
        } ?>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
