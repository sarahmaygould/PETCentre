<!DOCTYPE html>
<html>

  <head>
    <?php include_once '../head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <link rel="stylesheet" type="text/css" href="other_staff-style.css">
  </head>

  <body>
    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>
      <?php
      $admin_array = array_map('str_getcsv', file("admin_team.csv"));
      $imaging_array = array_map('str_getcsv', file("imaging_team.csv"));
      $scientist_array = array_map('str_getcsv', file("scientist_team.csv"));
      $radiochemistry_array = array_map('str_getcsv', file("radiochemistry_team.csv"));
      ?>

      <div class="page-body">
        <div class="page-title">
          Other Staff Members
        </div>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Administrative/Reception Team</h1></td>
              <td></td>
            </tr>
            <?php foreach ($admin_array as $admin) { ?>
            <tr>
              <td class="staff-table-name"><?php echo $admin[0] ?></td>
              <td class="staff-table-title"><?php echo $admin[1] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>

        <hr>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Imaging Technologists and Radiographers</h1></td>
              <td></td>
            </tr>
            <?php foreach ($imaging_array as $imaging) { ?>
            <tr>
              <td class="staff-table-name"><?php echo $imaging[0] ?></td>
              <td class="staff-table-title"><?php echo $imaging[1] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>

        <hr>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Clinical Scientist Team</h1></td>
              <td></td>
            </tr>
            <?php foreach ($scientist_array as $scientist) { ?>
            <tr>
              <td class="staff-table-name"><?php echo $scientist[0] ?></td>
              <td class="staff-table-title"><?php echo $scientist[1] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>

        <hr>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Radiochemistry Team</h1></td>
              <td></td>
            </tr>
            <?php foreach ($radiochemistry_array as $radiochemistry) { ?>
            <tr>
              <td class="staff-table-name"><?php echo $radiochemistry[0] ?></td>
              <td class="staff-table-title"><?php echo $radiochemistry[1] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
