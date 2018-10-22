<?php
$news_item_array = array_map('str_getcsv', file("news_items.csv"));
unset($news_item_array[0]);
$start_loop = 1;
$counter = 1;

$page_name = basename($_SERVER['PHP_SELF']);
$display_tag = 3; // Index of News Page settings

if ($page_name == "index.php") {
  $display_tag = 3; // Index of Index Page settings
}

foreach ($news_item_array as $news_item) {
  if ($news_item[$display_tag] == "TRUE") {
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
