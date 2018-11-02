<?php
$pss_array = array_map('str_getcsv', file("pss.csv"));
unset($pss_array[0]);

foreach ($pss_array as $pss) {
  if ($pss[4] == "TRUE") {
?>
    <p>
      <a class="PSS_download" href="documents/PatientSatisfactionSurvey_Q<?php echo $pss[0]?>_<?php echo $pss[1]?>.pdf">Quarter <?php echo $pss[0]?>: <?php echo $pss[2]?> - <?php echo $pss[3]?> <?php echo $pss[1]?></a>
    </p>
  <?php
  }
} ?>
