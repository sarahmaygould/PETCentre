hello world

<?php
$course_array = array_map('str_getcsv', file("courses.csv"));
unset($course_array[0]);
$today = new DateTime("now");

$future_courses = array();

foreach ($course_array as $course) {
  $course_date = date_create_from_format('d/m/Y', $course[8]);
  if ($course_date > $today) {
    $future_courses[] = $course;
    unset($course_array[$course]);
  }
}

foreach ($future_courses as $course) {
  if ($course[9] == "TRUE") {
?>

    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo "images/" . $course[2]?>" alt="<?php echo $course[2]?>" width="150">
      </div>
      <div class="LI-text">
        <h1><?php echo $course[0]?></h1>
        <?php echo $course[1]?>
      </div>
    </div>
  <?php }
} ?>
