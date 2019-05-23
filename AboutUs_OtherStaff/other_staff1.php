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
              <td class="staff-table-name"><?php$admin[0]?></td>
              <td class="staff-table-title"><?php$admin[1]?></td>
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
            <tr>
              <td class="staff-table-name">Joemon John</td>
              <td class="staff-table-title">Superintendant Radiographer and RPS</td>
            </tr>
            <tr>
              <td class="staff-table-name">James Stirling</td>
              <td class="staff-table-title">Superintendant Radiographer</td>
            </tr>
            <tr>
              <td class="staff-table-name">Armidita Jacob</td>
              <td class="staff-table-title">PET-CT Lead</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sami Jeljeli</td>
              <td class="staff-table-title">PET-MR Lead Radiographer</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sofia Pereira</td>
              <td class="staff-table-title">Cross Site Senior PET Imaging Technologist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Nuno Martins</td>
              <td class="staff-table-title">Senior Imaging Technologist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Katharine Chalmers</td>
              <td class="staff-table-title">PET Radiographer</td>
            </tr>
            <tr>
              <td class="staff-table-name">Eva Rodr&iacute;guez D&iacute;az</td>
              <td class="staff-table-title">Imaging Technologist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Maryam Ahmed</td>
              <td class="staff-table-title">PET Radiographer</td>
            </tr>
            <tr>
              <td class="staff-table-name">Indre Vaitkute</td>
              <td class="staff-table-title">PET Radiographer/Imaging Technologist</td>
            </tr>
          </table>
        </div>

        <hr>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Clinical Scientist Team</h1></td>
              <td></td>
            </tr>
            <tr>
              <td class="staff-table-name">Jane MacKewn</td>
              <td class="staff-table-title">Senior Clinical Scientist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Joel Dunn</td>
              <td class="staff-table-title">Medical Physicist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Lucy Pike</td>
              <td class="staff-table-title">Clinical Scientist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sarah-May Gould</td>
              <td class="staff-table-title">Clinical Scientist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sorcha Curry</td>
              <td class="staff-table-title">Clinical Scientist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Georgios Krokos</td>
              <td class="staff-table-title">Clinical Scientist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Carola Houpt</td>
              <td class="staff-table-title">Medical Physicist</td>
            </tr>

          </table>
        </div>

        <hr>

        <div>
          <table class="staff-group-table">
            <tr>
              <td class="staff-table-sectionhead"><h1>Radiochemistry Team</h1></td>
              <td></td>
            </tr>
            <tr>
              <td class="staff-table-name">Farah Shah</td>
              <td class="staff-table-title">Radiochemistry Operations Manager</td>
            </tr>
            <tr>
              <td class="staff-table-name">Colin Steel</td>
              <td class="staff-table-title">Validation Manager</td>
            </tr>
            <tr>
              <td class="staff-table-name">Kam Kahlon</td>
              <td class="staff-table-title">Radiochemist/QA Liaison</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sambavi Ganeshamoorthy</td>
              <td class="staff-table-title">Radiochemist/QA Liaison</td>
            </tr>
            <tr>
              <td class="staff-table-name">Maite Jauregui-Osoro</td>
              <td class="staff-table-title">QC Manager</td>
            </tr>
            <tr>
              <td class="staff-table-name">Sheba Adu-Kwaako</td>
              <td class="staff-table-title">Lead Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Neria Ossoulyan</td>
              <td class="staff-table-title">Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Ray Khan</td>
              <td class="staff-table-title">Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Abdul Karim Haji Dheere</td>
              <td class="staff-table-title">Senior Translational Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Mitja Kovac</td>
              <td class="staff-table-title">PET Development Chemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Tomasz Lempert</td>
              <td class="staff-table-title">Translational QC PET Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Haeol Jo</td>
              <td class="staff-table-title">Production/QC Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Priyal Doshi</td>
              <td class="staff-table-title">QA Officer</td>
            </tr>
            <tr>
              <td class="staff-table-name">Maciej W&oacute;jcik</td>
              <td class="staff-table-title">Production/QC Radiochemist</td>
            </tr>
            <tr>
              <td class="staff-table-name">Rebecca Hendry</td>
              <td class="staff-table-title">Production/QC Radiochemist</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
