<?php
$course_array = array_map('str_getcsv', file("courses.csv"));
unset($course_array[0]);

foreach ($course_array as $course) {
  if ($course[6] == "TRUE") {

    $course_date = date_create_from_format('d/m/Y', $course[5]);
    $today = new DateTime("now");
?>
    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo "images/" . $course[2]?>" alt="<?php echo $course[2]?>" width="150">
      </div>
      <div class="LI-text">
        <h1><?php echo $course[0]?></h1>
        <?php echo $course[1]?>

        <?php if ($course_date > $today) { ?>
          <p>
            This course will next be held on <b><?php echo date_format($course_date, 'jS F Y')?></b>.
          </p>

          <?php if ($course[7] == "TRUE") { ?>
            <p>
              <a href="pet_technology_course.php" target="_blank">Click here for more information about this course.</a>
            </p>
          <?php } ?>
            <p>
              <a href="<?php echo "documents/" . $course[3]?>" target="_blank">Click here to download the course flyer.</a>
            </p>
            <p>
              <a href="<?php echo $course[4]?>" target="_blank">Click here for more information and to apply.</a>
            </p>
          <?php } else { ?>
            <p>
              This course is usually held in <?php echo $course[8] ?>. Please check back later for details of how to apply.
            </p>
          <?php } ?>
      </div>
    </div>
  <?php
    echo "<hr>";
  }
} ?>
