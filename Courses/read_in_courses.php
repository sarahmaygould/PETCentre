<?php
// $course_array = array_map('str_getcsv', file("courses.csv"));
// unset($course_array[0]);
// $today = new DateTime("now");
//
// $future_courses = array();

// foreach ($course_array as $course) {
//   $course_date = date_create_from_format('d/m/Y', $course[8]);
//   if ($course_date > $today) {
//     $future_courses[] = $course;
//     unset($course_array[$course]);
//   }
// }
?>

    <!-- <div class="LR-container">
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

        <?php if ($course_date > $today) { ?>
          <p>
            This course will next be held on&#47;from the <b><?php echo date_format($course_date, 'jS F Y')?></b>.
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
          <?php } else { ?>
            <p>
              The booking for this course is not yet open but please email <a href="mailto:teachingadmin-imaging@kcl.ac.uk">teachingadmin-imaging@kcl.ac.uk</a> to be added to the course mailing list.
            </p>
          <?php } ?>
        <?php } else { ?>
          <p>
            This course is usually held in <?php echo $course[11] ?>. Please check back later for details of how to apply.
          </p>
        <?php } ?>
      </div>
    </div>
  <?php
    echo "<hr>";
  }
} ?> -->
