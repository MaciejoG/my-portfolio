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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Traceability System for Battery Factory</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">A robust project I have been developing for a Swedish company Northvolt for the duration of 1 year. The goal is to build from scratch a Manufacturing Execution system (MES) for the entire production of battery modules&packs.
          This system allows for decision-driver production, elimination of production bottlenecks, clear internal and external information flow, automated documentation generation and many more. Main challenges include ensuring high scaleability and availability, as well as conceptual design for the entire production floor. The implementation of the system involves multiple stakeholders across many departments.</p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-lightbulb fa-5x yellow-text animated tada"></i>
            <h5 class="font-weight-bold my-4">System Logic</h5>
            <p class="grey-text mb-md-0 mb-0">Prior to start with coding or database developemnt, I have conceptually designed the entire logic using a top-down approach. This included finding answers & optimizing to the following items:
              <li class="grey-text">what production data is to be captured,</li>
              <li class="grey-text">flow of products across process stations,</li>
              <li class="grey-text">changes of products' statuses, versions and genealogy,</li>
              <li class="grey-text">allowed and forbidden product operations,</li>
              <li class="grey-text">optimal UI design,</li>
              <li class="grey-text">backup and system maintanance.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-traceability-mes.jpg" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-database fa-5x blue-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Database</h5>
            <p class="grey-text mb-md-0 mb-0">One of the key components of every big-scale traceability system is the database design. I have designed a relation database in SQL, using the star-schema model. The main challanges which I successfully overcame:
              <li class="grey-text">high volume data storage,</li>
              <li class="grey-text">capturing data from both manual and automated stations,</li>
              <li class="grey-text">ensuring future scaleability and readiness to future changes,</li>
              <li class="grey-text">capturing products genealogy,</li>
              <li class="grey-text">enabling backtraceing of changes for products, raw materials, processes and genealogy.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-traceability-db.png" class="img-fluid rounded" alt="Database graph">
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
            <i class="fas fa-tachometer-alt fa-5x orange-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Business Inteligence</h5>
            <p class="grey-text mb-md-0 mb-0">The data has been provided to decision-makers using a BI tool (Power BI), which I have developed using SQL and DAX. The interactive live dashboard features:
              <li class="grey-text">key production KPIs,</li>
              <li class="grey-text">tool to search for products, theris status, genealogy, current production station etc.,</li>
              <li class="grey-text">process timings for every production station,</li>
              <li class="grey-text">bottlenecks.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-traceability-dashboard-2.jpg" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-tablet-alt fa-5x green-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Backend and Frontend Dev</h5>
            <p class="grey-text mb-md-0 mb-0">The vast part of the system is being used by factory operators for manual data insert. In order to facilitate ease of usage to the maximum, I have developed a series of simple interactive forms, specifically dedicated for mobile touchscreens.</br>
              The backend of the app is written in PHP and is based mainly of the communication with the database.</br>
              There is also a series of control panels used by priviliged quality inspectors and line managers, as well as a SCADA tool to be permamently visualized on the production hall. </br>
              Part of the system includes data being captured from automated machinery by communicating with PLCs or other automation equipment.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-traceability-technologies.jpg" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-code fa-5x grey-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Technologies Used and Developed Skills</h5>
            <p class="grey-text mb-md-0 mb-0">Given the high complexity of the problem, over the time I have strenghtened the following skills:
              <li class="grey-text">Project Management</li>
              <li class="grey-text">Backend dev (PHP, Python)</li>
              <li class="grey-text">Frontend dev (JavaScript, jQuery, HTML)</li>
              <li class="grey-text">Data Engineering (including SQL, DAX)</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-traceability-backend.png" class="img-fluid rounded" alt="Example image">
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