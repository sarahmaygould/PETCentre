<!DOCTYPE html>
<html>

  <head>
    <?php include_once '../head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <link rel="stylesheet" type="text/css" href="your_visit-style.css">
  </head>

  <body>
    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="strong-covid">
          The PET Centre remains open but with some changes to our services due to the COVID-19 pandemic. Please see specific information for patients <a href="../ForPatients_COVID19/covid19.php">here</a>.
        </div>

        <div class="page-title">
          Your Visit to the PET Centre
        </div>

        <div class="LR-container">
          <div class="LI-image">
            <img src="images/ConsultChild_small.jpg" alt="Consultation at the PET Centre" width="300">
          </div>
          <div class="LI-text">
            <p>
    					Our patient service is built upon more than 20 years' experience of clinical PET scanning. Staff at the PET Imaging Centre are all experts in their particular field and together provide a quality of service that we feel is second to none.
    				</p>
          </div>
        </div>

        <hr>

        <h1>Patient Information Video</h1>
        <div class="info-video-full">
          <p>
            This video was designed specifically to cover PET scans in cancer patients, but has some helpful general information about how PET scans work, including a walk through of the process.
          </p>
          <p>
            <iframe class="video-guide" width="610" height="300" src="//www.youtube.com/embed/JdlRoloYFVs"></iframe>
          </p>
        </div>
        <div class="info-video-link">
          <p>
            The NCRI Core Lab has developed a video to guide you through what will happen when you attend the department for your scan. The video was designed specifically to cover PET scans in cancer patients, but has some helpful general information about how PET scans work, including a walk through of the process.
          </p>
          <p>
            <a href="https://www.youtube.com/watch?v=JdlRoloYFVs">Click here to view the video.</a>
          </p>
        </div>

        <hr>

        <div class="LR-container">
          <div class="RI-text">
            <h1>Patient Satisfaction Survey</h1>
            <p>
              All patients who visit the PET Centre are encouraged to leave feedback to help us improve the service we provide.
            </p>
            <p>
              Click on the links below to download the results of our most recent Patient Satisfaction Surveys.
            </p>
            <?php include_once 'read_in_pss.php'; ?>
          </div>
          <div class="RI-image captioned-image-container">
            <img class="captioned-image" src="images/Chocolates_small.jpg" alt="Chocolates" width="300">
            <div class="caption-text">
                It was lovely to receive this box of chocolates from the family of a recent patient together with a thank-you card explaining how our service helped.
            </div>
          </div>
        </div>

        <hr>

        <h1>Image Use</h1>
        <p>
          The PET Centre often looks back at the images taken to help your doctors treat your illness. This is usually to teach other doctors, or sometimes to help with research into the type of illness you are being scanned for.
        </p>

        <hr>

        <h1>Contacting and Finding the Centre</h1>
        <p>
          The department can be contacted by telephone, e-mail or post.  Directions, travel information and building maps can be found <a href="http://www.guysandstthomas.nhs.uk/patients-and-visitors/getting-here/travel-st-thomas.aspx">here</a> (for the PET Centre at St Thomas&#39; Hospital), or <a href="http://www.guysandstthomas.nhs.uk/our-services/cancer/visiting/getting-here/finding-cancer-centre.aspx">here</a> (for the PET Suite within the Cancer Centre at Guy&#39;s Hospital). Visit our <a href="../ContactUs/contact_us.php">Contact Us</a> page for further details.
        </p>
      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
