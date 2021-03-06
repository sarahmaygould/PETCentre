<!DOCTYPE html>
<html>

  <head>
    <?php include_once '../head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <link rel="stylesheet" type="text/css" href="jobs-style.css">
  </head>

  <body>

    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="page-title">
          Current Vacancies
        </div>

        <div class="LR-container">
          <div class="RI-text">
    				<p>
    					We are one of the leading PET centres in the UK with a substantial and expanding track record of clinical and basic research. Key to the operation of the centre is a team of specialist staff covering a wide range of disciplines including radiochemists, radiographers, physicists, computer science, administrative and technical staff.
    				</p>
            <p>
              Please see below for details of our current vacancies.
            </p>
          </div>
          <div class="RI-image">
            <img src="images/PET_team.jpg" alt="PET Centre Team" width="300">
          </div>
        </div>

        <?php include_once 'read_in_jobs.php'; ?>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
