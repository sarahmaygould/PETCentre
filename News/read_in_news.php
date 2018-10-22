<?php
echo basename($_SERVER['PHP_SELF']);
$news_item_array = array_map('str_getcsv', file("news_items.csv"));
unset($news_item_array[0]);
$start_loop = 1;
$counter = 1;

foreach ($news_item_array as $news_item) {
  if ($news_item[3] == "TRUE") {
    if ($start_loop == 0) echo "<hr>";
    if ($counter % 2 != 0) {
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
  }
} ?>
