<?php
$course_array = array_map('str_getcsv', file("courses.csv"));
unset($course_array[0]);

foreach ($course_array as $course) {
  if ($course[6] == "TRUE") {
    $course_date = strtotime('dd "/" mm "/" YY',$course[5])
    console.log($course_date)
?>
    <div class="LR-container">
      <div class="LI-image">
        <img src="<?php echo "images/" . $course[2]?>" alt="<?php echo $course[2]?>" width="150">
      </div>
      <div class="LI-text">
        <h1><?php echo $course[0]?></h1>
        <?php echo $course[1]?>

        <p>
          This course will next be held on <b><?php echo $course[5]?></b>.
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

      </div>
    </div>
  <?php
    echo "<hr>";
  }
} ?>
