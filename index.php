<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="common-style.css">
    <link rel="stylesheet" type="text/css" href="Index/index-style.css">
    <title>The PET Centre</title>
  </head>

  <body>
    <div class = "page-content">

      <?php include_once 'Header/header.php'; ?>

      <div class="page-body">
        <div class="LR-container">
          <div class="LI-image">
            <img class="index-image" src="Index/images/reception_small.jpg" alt="PET Centre Reception" width="300">
            <img class="index-image" id="second-homepage-image" src="Index/images/PETCT_Emma_small.jpg" alt="PET-CT Scanner with patient" width="300">
          </div>
          <div class="LI-text">
            <p>
              With more than 20 years experience of PET and PET-CT scanning and now also PET-MR, the King&#39;s College London & Guy&#39;s and St Thomas&#39; PET Centre provides PET services for referred patients at a local and national level and performs clinically related research. We scan over 6000 patients per year, and the enhancements of our newly refurbished centre let us be there for our patients at every step of the experience and make it as smooth and comfortable as possible.
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
