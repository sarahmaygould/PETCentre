<!DOCTYPE html>
<html>

  <head>
    <?php include_once 'head.php'; ?>
    <link rel="stylesheet" type="text/css" href="Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="common-style.css">
    <link rel="stylesheet" type="text/css" href="Index/index-style.css">
  </head>

  <body>
    <div class = "page-content">

      <?php include_once 'Header/header.php'; ?>

      <div class="page-body">
        <div class="strong-covid">
          The PET Centre remains open, but due to the COVID-19 pandemic we are having to make significant changes to our services. Please see specific advice in the tab relevant for you, e.g. <a href="../ForPatients_YourVisit/your_visit.php">For Patients</a>, <a href="../ForClinicians_Referrals/referrals.php">For Clinicians</a>, <a href="../ForResearchers_Overview/overview.php">For Researchers</a>, and updates under <a href="../Courses/courses.php">Courses</a>.
        </div>
        <div class="LR-container">
          <div class="LI-image">
            <img class="index-image" src="Index/images/reception_small.jpg" alt="PET Centre Reception" width="300">
            <img class="index-image" id="second-homepage-image" src="Index/images/PETCT_Emma_small.jpg" alt="PET-CT Scanner with patient" width="300">
          </div>
          <div class="LI-text">
            <p>
              With almost 30 years experience of PET and PET-CT scanning and now also PET-MR, the King&#39;s College London & Guy&#39;s and St Thomas&#39; PET Centre provides PET services for referred patients at a local and national level and performs clinically related research. We scan over 7000 patients per year. Enhancements and refurbishments over the last five years let us be there for our patients at every step of the experience and make it as smooth and comfortable as possible.
            </p>
            <p>
              Our PET Centre is a centre of excellence with an international reputation for delivering the best patient care, highest quality academic research, and training. We strive to make a difference for the patients we scan, and via the research we perform.
            </p>
            <p>
              <b>
                Our mission is to perform basic, translational and applied clinical PET research across all specialties including oncology, neurology/psychiatry, and cardiology. We welcome work with external collaborators, including industry. We aim to obtain the best possible quality and reliability for all studies we perform.
              </b>
            </p>
            <p>
              <b>
                The Centre develops exciting PET methodology (e.g. PET-MR), and also performs cutting-edge research into innovative radiochemistry using our in-house cyclotron and our wide range of multidisciplinary expertise.
              </b>
            </p>
          </div>
        </div>

        <div class="page-title" id="index_news_title">
          News Highlights
        </div>

        <?php include_once 'News/read_in_news.php'; ?>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
