<!DOCTYPE html>
<html>

  <head>
    <?php include_once '..head.php'; ?>
    <link rel="stylesheet" type="text/css" href="../Header/header-style.css">
    <link rel="stylesheet" type="text/css" href="../common-style.css">
    <link rel="stylesheet" type="text/css" href="case_of_the_month-style.css">
  </head>

  <body>

    <div class = "page-content">

      <?php include_once '../Header/header.php'; ?>

      <div class="page-body">
        <div class="page-title">
          Case of the Month
        </div>

        <p>
          Case of the Month (previously Case of the Quarter) is a collection of studies selected from interesting cases at the PET Imaging Centre at St Thomas' Hospital. It is designed to provide examples of important teaching cases and unusual phenomena and to discover whether other institutions have made similar observations. The cases are interactive and contain PET, CT and fused images. We encourage others to share the experience they have had in assessing any of these appearances and any evidence they have of the underlying causes.
        </p>
        <p>
          Each month a new case will be uploaded to this website and shown below. For each case click on Case Information to download a PDF containing a textual description of the study and click on HybridViewer Link to view of the PET and CT images interactively through Hermes HybridViewer.
        </p>
        <p>
          The Hermes HybridViewer will work on multiple platforms (for example, Windows, Linux and Mac) though all will require the latest version of <a href="https://java.com/en/download/index.jsp">Java</a> to be installed. You may need administrator rights to complete the installation of Java.
        </p>
        <p>
          <a href="documents/HybridViewerHandbook.pdf" target="_blank">Click here to download a handbook explaining how to use HybridViewer.</a>
        </p>

        <div id="spacer"></div>

        <div id="COTM-container">
          <table id="COTM-table">
            <?php include_once 'read_in_cotm.php'; ?>
          </table>
        </div>

      </div>
      <div class="page-end"></div>
    </div>
  </body>

</html>
