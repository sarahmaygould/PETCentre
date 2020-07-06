<div id="page-header">
  <div class="logo-containers" id="pet-logo-container">
    <a href="/index.php"><img class="logos" id="logo-pet" src="/Header/images/logo_pet.jpg"  alt="PET Imaging Centre logo"></a>
  </div>
  <div class="logo-containers" id="other-logos-container">
    <div class="logo-containers" id="gstt-logo-container">
      <a href="http://www.guysandstthomas.nhs.uk" target="_blank"><img class="logos" id="logo-gstt" src="/Header/images/logo_gstt.jpg"  alt="Guy&#39;s and St Thomas' logo"></a>
    </div>
    <div class="logo-containers" id="gcc-logo-container">
      <a href="http://www.guysandstthomas.nhs.uk/our-services/cancer/overview.aspx" target="_blank"><img class="logos" id="logo-gcc" src="/Header/images/logo_gcc.jpg"  alt="Guy&#39;s Cancer logo"></a>
    </div>
    <div class="logo-containers" id="kcl-logo-container">
      <a href="http://www.kcl.ac.uk" target="_blank"><img class="logos" id="logo-kcl" src="/Header/images/logo_kcl.jpg"  alt="King&#39;s College London logo"></a>
    </div>
  </div>
</div>

<div id="menu-bar">
  <div id="hamburger-container" onclick="change_hamburger(this); toggle_menu();">
    <div id="hbbar1"></div>
    <div id="hbbar2"></div>
    <div id="hbbar3"></div>
  </div>
</div>

<div id="nav-container">
  <div class="navbar" id="navbar">
    <div class="subnav subnav-hover">
      <button class="subnavbtn">About Us</button>
      <div class="subnav-content">
        <a class="subnav-item" href="../AboutUs_WhatWeDo/what_we_do.php">What We Do</a>
        <a class="subnav-item" href="../AboutUs_Research/research.php">Our Research</a>
        <a class="subnav-item" href="../AboutUs_ClinicalManagementTeam/clinical_management.php">Clinical and Management Team</a>
        <a class="subnav-item" href="../AboutUs_OtherStaff/other_staff.php">Other Staff Members</a>
      </div>
    </div>
    <div class="subnav subnav-hover">
      <button class="subnavbtn">For Patients</button>
      <div class="subnav-content">
        <a class="subnav-item" href="../ForPatients_YourVisit/your_visit.php">Your Visit</a>
        <a class="subnav-item" href="../ForPatients_PETCTFAQ/petct_faq.php">FAQs for PET-CT</a>
        <a class="subnav-item" href="../ForPatients_PETMRFAQ/petmr_faq.php">FAQs for PET-MR</a>
      </div>
    </div>
    <a href="../ForClinicians_Referrals/referrals.php">For Clinicians</a>
    <div class="subnav subnav-hover">
      <button class="subnavbtn">For Researchers</button>
      <div class="subnav-content">
        <a class="subnav-item" href="../ForResearchers_SetUp/set_up.php">Setting Up a Study</a>
        <a class="subnav-item" href="../ForResearchers_CurrentStudies/current_studies.php">Current Studies</a>
        <a class="subnav-item" href="../ForResearchers_COVID19/covid19.php">COVID-19 Information</a>
      </div>
    </div>
    <!-- <a href="../CaseOfTheMonth/case_of_the_month.php">Case of the Month</a> -->
    <a href="../Courses/courses.php">Courses</a>
    <a href="../News/news.php">News</a>
    <a href="../Jobs/jobs.php">Jobs</a>
    <a href="../ContactUs/contact_us.php">Contact Us</a>
  </div>
</div>

<script>
  var acc = document.getElementsByClassName("subnavbtn");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      if (window.matchMedia("(max-width: 750px)").matches) {
        this.classList.toggle("selected_button");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.cssText = null;
        } else {
          panel.style.display = "block";
        }
      }
    });
  }

  window.addEventListener("resize", function() {
    remove_hover();
  });

  function change_hamburger(x) { //moves hamburger into cross
    x.classList.toggle("change");
  }

  function toggle_menu() { //shows and hides navbar
    var x = document.getElementById("nav-container");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  function remove_hover() { // stops subnavs appearing on hover
    if (window.matchMedia("(max-width: 750px)").matches) {
      var child_list = document.getElementById("navbar").childNodes;
      child_list = Array.from(child_list);
      var child;
      var i;
      for (i=1; i < child_list.length; i++){
        if (child_list[i].classList != null) {
          if (child_list[i].classList.contains("subnav-hover")) {
            child_list[i].classList.remove("subnav-hover");
          }
        }
      }
    } else {
      var child_list = document.getElementById("navbar").childNodes;
      child_list = Array.from(child_list);
      var child;
      var i;
      var j;
      for (i=1; i < child_list.length; i++){
        if (child_list[i].classList != null) {
          if (child_list[i].classList.contains("subnav")) {
            child_list[i].classList.add("subnav-hover");
          }
        }
      }
    }
  }

  window.onload = remove_hover;

</script>
