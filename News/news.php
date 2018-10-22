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

    <?php $news_item_array = array_map('str_getcsv', file("news_items.csv"))?>

    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="page-title">
          News
        </div>

        <?php foreach ($news_item_array as $news_item) { ?>
          <?php echo $news_item[1] ?>
          <div class="LR-container">
            <div class="LI-image">
              <img src="images/<?php echo $news_item_array[$news_item][2]?>" alt="<?php echo $news_item_array[$news_item][2]?>" height="200">
            </div>
            <div class="LI-text staff-section">
              <h1><?php echo $news_item_array[$news_item][0]?></h1>
              <?php echo $news_item_array[$news_item][1]?>
            </div>
          </div>
          <hr>

        <?php } ?>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
