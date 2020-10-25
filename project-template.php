<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'header.php'; ?>
</head>

<body>

<!-- Main navigation -->
  <!-- <header> -->

  <!--Navbar-->
  <?php include 'navbar_project.php'; ?>
  <!-- Navbar -->

  <!-- </header> -->
  <!-- Main navigation -->

<!--Main layout-->
<main>

  <!--Section: project-->
  <section id="project" class="py-5 mt-5">

    <!-- Container -->
    <div class="container">
      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold text-center mb-2">Project Name</h2>
      <!-- Section description -->
      <p class="lead grey-text text-center w-responsive mx-auto mb-5">Technical project developed for company xyz. The goal was to build a traceability system for a factory manufacturing battery modules&packs. Main challenges was ensuring high scaleability and availability.</p>
      
  <!-- Grid row -->
  <div class="row mb-5">

    <!-- Grid column -->
    <div class="col-md-5">

      <i class="fas fa-hand-holding-usd fa-5x orange-text animated tada"></i>
      <h5 class="font-weight-bold my-4">Feature 1</h5>
      <p class="grey-text mb-md-0 mb-4">One of the crucial things for every startup is finance. I made sure we have a plan by developing a finacial model with 6-yrs projection: 
        <li class="grey-text">fixed and monthly expenses projection,</li> 
        <li class="grey-text">planned investment rounds,</li>
        <li class="grey-text">budget segmentation,</li>
        <li class="grey-text">scaleability.</li>
      </p>
      <div class="grey-text mb-md-0 mb-5">I have also been awarded 2nd place during the <a href="https://copernicus-hackathon.confetti.events" target="_blank">Copernicus Hackathon</a> for a business&technical solution to detect water contamination using space data.
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7">

        <!--Mask with wave-->
        <div class="view overlay">
            <img src="https://mdbootstrap.com/dist/img/Photos/Others/nature-sm.jpg" class="img-fluid" alt="Example image">
            <a>
            <div class="mask waves-effect rgba-white-slight"></div>
            </a>
        </div>

      </div>
      <!-- Grid column -->
  
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="row mb-5">

    <!-- Grid column -->
    <div class="col-md-5">

      <i class="fas fa-lightbulb fa-5x cyan-text animated tada"></i>
      <h5 class="font-weight-bold my-4">Feature 2</h5>
      <p class="grey-text mb-md-0 mb-0">One of the crucial things for every startup is finance. I made sure we have a plan by developing a finacial model with 6-yrs projection: 
        <li class="grey-text">fixed and monthly expenses projection,</li> 
        <li class="grey-text">planned investment rounds,</li>
        <li class="grey-text">budget segmentation,</li>
        <li class="grey-text">scaleability.</li>
      </p>
      <div class="grey-text mb-md-0 mb-0">I have also been awarded 2nd place during the <a href="https://copernicus-hackathon.confetti.events" target="_blank">Copernicus Hackathon</a> for a business&technical solution to detect water contamination using space data.
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7">

        <!--Mask with wave-->
        <div class="view overlay">
            <img src="https://mdbootstrap.com/dist/img/Photos/Horizontal/Nature/6-col/img%20(7).jpg" class="img-fluid" alt="Example image">
            <a>
            <div class="mask waves-effect rgba-white-slight"></div>
            </a>
        </div>

      </div>
      <!-- Grid column -->
  
  </div>
  <!-- Grid row -->

    </div>
    <!-- Container -->

  </section>
  <!--Section: project-->

  <!--Section: info-->
  <section id="info" class="py-5 mt-0" style="background-color: #eee;">

    <!-- Container -->
    <div class="container">
      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold text-center mb-5">Further Information</h2>

        <!-- Grid row -->
        <div class="row mb-1">

            <!-- Grid column -->
            <div class="col-md-3">

            <a href="">
                <i class="fab fa-github purple-text fa-3x"></i>
            </a>
            <div class="mb-4">Github repository</div>
            <!-- <img src="dist/img/github_logo.png" class="img-fluid" alt="Example image"> -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3">

                <a href="">
                    <i class="fab fa-linkedin blue-text fa-3x"></i>
                </a>
                <div class="mb-4">Linkedin page</div>
                <!-- <img src="dist/img/LinkedIn_Logo.png" class="img-fluid" alt="Example image"> -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3">

                <a href="https://land2plant.com">
                    <img src="dist/img/L2P-green.png" class="img-fluid" alt="Example image" >
                </a>
                <div class="mt-1 mb-4">Company website</div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3">

                <a href="https://northvolt.com">
                    <img src="dist/img/NV_vector.png" class="img-fluid" alt="Example image">
                </a>
                <div class="mt-1 mb-4">Company website</div>

            </div>
            <!-- Grid column -->
        
        </div>
        <!-- Grid row -->

        

    </div>
    <!-- Container -->

  </section>
  <!--Section: info-->

  <!--Section: contact-->
  <?php include 'contact_form.php'; ?>
    <!--Section: contact-->

</main>
<!--Main layout-->

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <?php include 'incl_scripts.php'; ?>
  <script>
    // Animations Init
    $( document ).ready(function() {
      new WOW().init();
    });
  
    // Adding animations to the sections
    $("section").addClass("wow fadeInUp");
  
  </script>
</body>

</html>
