<?php
$pss_array = array_map('str_getcsv', file("pss.csv"));
unset($pss_array[0]);

foreach ($pss_array as $pss) {
  if ($pss[4] == "TRUE") {
?>
    <p>
      <a class="PSS_download" href="documents/PatientSatisfactionSurvey_Q<?php echo $pss[0]?>_<?php echo $pss[1]?>.pdf">Quarter <?php echo $pss[0]?>: <?php echo $pss[2]?> - <?php echo $pss[3]?> <?php echo $pss[1]?></a>
    </p>
        <p>
          This course will next be held on <b><?php echo $pss[5]?></b>.
        </p>
        <p>
          <a href="<?php echo "documents/" . $pss[3]?>" target="_blank">Click here to download the course flyer.</a>
        </p>
        <p>
          <a href="<?php echo $pss[4]?>" target="_blank">Click here for more information and to apply.</a>
        </p>

      </div>
    </div>
  <?php
  }
} ?>
