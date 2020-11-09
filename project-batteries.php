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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Automated Testing For Batteries Production</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">As part of my role at Northvolt, I have successfully set up automated, high-volume testing stations for the production of battery cells and modules. These included Beginning of Line (BOL) and End of Line (EOL) stations, ensuring high-quality, reliable production. I have gained experience in prototyping, integrating automated systems, and supervising installations of fully-automated solutions. I also got my hands dirty in automation, PLC programming, and online data analysis. Finally, supervising the commissioning of automated solutions involved a big dose of project management.</p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-battery-three-quarters fa-5x green-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Process Owner</h5>
            <p class="grey-text mb-md-0 mb-0">As a process owner for BOL and EOL testing, I was responsibble for the complete design, implementation and documentation for both stations. These included:
              <li class="grey-text">design of the stations, tests, products movement and handling, automation,</li>
              <li class="grey-text">Equipment Specifications and SOPs,</li>
              <li class="grey-text">contact with suppliers and their supervision.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-testing-jot.png" class="img-fluid rounded" alt="Example image">
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
          <div class="col-md-6">
            <i class="fas fa-space-shuttle fa-5x blue-text animated tada"></i>
            <h5 class="font-weight-bold my-4">System Integration</h5>
            <p class="grey-text mb-md-0 mb-0">My work was not only about supervising. I also got my hand dirty in system integration. I have built control systems for electrical testing of cell&modules, integrated collaborative robots, vision systems and conveyor systems with a PLC, and implemented OK/NOK products handling. All this improved my skills in control&automation as well as in PLC programming.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-testing-integration.png" class="img-fluid rounded" alt="Database graph">
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
          <div class="col-md-6">
            <i class="fas fa-chart-bar fa-5x red-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Data Capture & Analysis</h5>
            <p class="grey-text mb-md-0 mb-0">
              Traceability is one of the key components of every production line. I have made sure that all process data and parameters are being properly stored and analyzed. This included connecting automated system with the database and creating online dashboards to gain insights into testing results, line status, line cycle-time, bottle-necks and KPIs.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-testing-data.png" class="img-fluid rounded" alt="Example image">
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
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Please note that I'm not allowed to share code for this project.</p>

        <!-- Grid row -->
        <div class="row mb-1">

          <!-- Grid column -->
          <div class="col-md-12 text-center">

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
    $(document).ready(function() {
      new WOW().init();
    });

    // Adding animations to the sections
    $("section").addClass("wow fadeInUp");
  </script>
</body>

</html>