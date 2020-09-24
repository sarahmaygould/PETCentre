<?php
$course_array = array_map('str_getcsv', file("courses.csv"));
unset($course_array[0]);
$today = new DateTime("now");

$future_courses = array();

foreach ($course_array as $key => $course) {
  $course_date = date_create_from_format('d/m/Y', $course[8]);
  if ($course_date > $today) {
    $future_array[] = $course;
    unset($course_array[$key]);
  }
}

$course_date_array_string  = array_column($future_array, 8);
$course_date_array = array();
foreach($course_date_array_string as $course_date_string) {
  $course_date = date_create_from_format('d/m/Y', $course_date_string);
  $course_date_array[] = $course_date;
}

array_multisort($course_date_array, SORT_ASC, $future_array);

foreach ($future_array as $course) {
  if ($course[9] == "TRUE") {
    $course_date = date_create_from_format('d/m/Y', $course[8]);
?>

    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo "images/" . $course[2]?>" alt="<?php echo $course[2]?>" width="150">
      </div>
      <div class="LI-text">
        <h1><?php echo $course[0]?></h1>
        <?php echo $course[1]?>

        <?php if ($course[10] == "TRUE") { ?>
        <p>
          <a href="pet_technology_course.php" target="_blank">Click here for more information about this course.</a>
        </p>
        <?php } ?>

        <?php if ($course[13] == "1") {
          $datePhrase = " is " . date_format($course_date, 'l jS F Y');
        } else {
          $datePhrase = "s are ". date_format($course_date, 'l jS F') . " to " . date_format(date_add($course_date, date_interval_create_from_date_string($course[13] - 1 . " days")), 'l jS F Y');
        } ?>

        <p>
          The next course date<?php echo $datePhrase ?>.
          This <?php echo $course[13] ?> day course will next be held <?php echo $datePhrase ?>.
        </p>

        <?php if ($course[12] == "TRUE") { ?>
          <?php if ($course[3] == "TRUE") { ?>
            <p>
              <a href="<?php echo "documents/" . $course[4]?>" target="_blank">Click here to download the flyer for the upcoming course.</a>
            </p>
          <?php } ?>
          <?php if ($course[5] == "TRUE") { ?>
            <p>
              <a href="<?php echo "documents/" . $course[6]?>" target="_blank">Click here to download the programme for the upcoming course.</a>
            </p>
          <?php } ?>
          <p>
            <a href="<?php echo $course[7]?>" target="_blank">Click here for more information and to apply.</a>
          </p>
        <?php } else {
          if ($course[15] !== "N/A") {?>
            <p>
              <a href="<?php echo $course[15]?>" target="_blank">Click here to register your interest.</a>
            </p>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
    <hr>
<?php }
} ?>

<?php
foreach ($course_array as $course) {
  if ($course[9] == "TRUE") {
?>

    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo "images/" . $course[2]?>" alt="<?php echo $course[2]?>" width="150">
      </div>
      <div class="LI-text">
        <h1><?php echo $course[0]?></h1>
        <?php echo $course[1]?>

        <?php if ($course[10] == "TRUE") { ?>
        <p>
          <a href="pet_technology_course.php" target="_blank">Click here for more information about this course.</a>
        </p>
        <?php } ?>

        <?php if ($course[14] == "TRUE") { ?>
        <p>
          This <?php echo $course[13] ?> day course is usually held in <?php echo $course[11] ?>.
        </p>
      <?php }
      if ($course[15] !== "N/A") {?>
        <p>
          <a href="<?php echo $course[15]?>" target="_blank">Click here to register your interest.</a>
        </p>
      <?php } ?>
      </div>
    </div>
    <hr>
  <?php }
} ?>
