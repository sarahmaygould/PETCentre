<?php
$jobs_array = array_map('str_getcsv', file("jobs.csv"));
unset($jobs_array[0]);

$jobs_present = 0;
foreach ($jobs_array as $job) {
  if ($job[4] == "TRUE") {
?>
    <hr>
    <div>
      <table class="vacancy-table">
        <tr>
          <td class="vacancy-table-left">Post Title</td>
          <td class="vacancy-table-right"><?php echo $job[0]?></td>
        </tr>
        <tr>
          <td class="vacancy-table-left">Role Purpose</td>
          <td class="vacancy-table-right"><?php echo $job[1]?></td>
        </tr>
        <tr>
          <td class="vacancy-table-left">Closing Date</td>
          <td class="vacancy-table-right"><?php echo $job[2]?></td>
        </tr>
        <tr>
          <td class="vacancy-table-left">To Apply</td>
          <td class="vacancy-table-right"><a href="<?php echo $job[3]?>" target="_blank">Click here.</a></td>
        </tr>
      </table>
    </div>
  <?php
    $jobs_present = 1;
  }
} ?>
