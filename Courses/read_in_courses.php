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

$course_date_array  = array_column($future_array, 8);
array_multisort($course_date_array, SORT_ASC, $future_array);

foreach ($future_array as $course) {
  if ($course[9] == "TRUE") {
?>
<?php echo $course[8]; ?>

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

        <p>
          This course is usually held in <?php echo $course[11] ?>. Please check back later for details of how to apply.
        </p>
      </div>
    </div>

  <?php }
} ?>
