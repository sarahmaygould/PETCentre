<?php
$page_name = basename($_SERVER['PHP_SELF']);

if ($page_name == "index.php") {
  $path_to_news = "News/";
}
else {
  $path_to_news = "";
}

$news_item_array = array_map('str_getcsv', file($path_to_news . "news_items.csv"));
unset($news_item_array[0]);
$start_loop = 1;

$display_tag = 3; // Index of News Page settings
if ($page_name == "index.php") {
  $display_tag = 4; // Index of Index Page settings
}

foreach ($news_item_array as $news_item) {
  if ($news_item[$display_tag] == "TRUE") {
    if ($start_loop == 0) echo "<hr>";
?>
    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo $path_to_news . "images/" . $news_item[2]?>" alt="<?php echo $news_item[2]?>" width="250">
      </div>
      <div class="LI-text">
        <h1><?php echo $news_item[0]?></h1>
        <?php echo $news_item[1]?>
      </div>
    </div>
  <?php
    $start_loop = 0;
    $counter++;
  }
} ?>
