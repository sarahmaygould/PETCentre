<?php
$cotm_array = array_map('str_getcsv', file("cotm.csv"));
unset($cotm_array[0]);

foreach ($cotm_array as $cotm) {
  if ($cotm[3] == "TRUE") {
?>
  <tr>
    <td><b><?php echo $cotm[0] . " " . $cotm[1] ?>:</b></td>
    <td><a href="documents/COTM_<?php echo $cotm[0] . "_" . $cotm[1] ?>.pdf">Case Information</a></td>
    <td><a href="<?php echo $cotm[2] ?>" target="_blank">HybridViewer Link</a></td>
  </tr>
  <?php }
} ?>
