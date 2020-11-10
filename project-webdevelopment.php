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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Full-Stack Responsive Web-Development</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">
        I have built and deployed multiple web platforms using technologies such as PHP, JavaScript, jQuery, CSS, Bootstrap, Flask, Jinja, HTML, Gulp. I deployed prototype machine learning models with connection to a database in less than 4 hours in a "quick and dirty" way. I have also deployed quick but responsive websites such as the one you are currently viewing. This gave me a basic understanding of UX, as well as how to effectively deploy prototype platforms on a production server.
        </p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-flask fa-5x orange-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Deploying Data Projects</h5>
            <p class="grey-text mb-md-0 mb-0">
            I have deployed our <a href="project-hackathon.php">model developed during the Copernicus Hackathon</a> to be viewed by the competition's jury. The website briefly presents our project, the problem we are solving, and the solution we propose. It also allows seeing a processed satellite picture for a given location. Technologies used here: Flask, Jinja, Python, Bootstrap. The website can be found <a href="https://web-platform-ccloc.ondigitalocean.app/#solution">here</a> (can occasionally be down if there is anyone working on the project at the moment).
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-webdevelopment-hydropatrol.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fab fa-bootstrap fa-5x blue-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Responsive Websites</h5>
            <p class="grey-text mb-md-0 mb-0">
              I have also got involved in Frontend development, with this website being the best example. Technologies I comfortably use nowadays: PHP, JS, jQuery, CSS, Bootstrap. While I definitely feel more comfortable in Backend development, it is nice to switch to Frontend from time to time.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-webdevelopment-portfolio.png" class="img-fluid rounded" alt="Database graph">
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
        <!-- <p class="text-center w-responsive mx-auto mb-5">Please note that I'm not allowed to share code for this project.</p> -->

        <!-- Grid row -->
        <div class="row mb-1">

         <!-- Grid column -->
         <div class="col-md-4 text-center">
            <a href="https://github.com/hydropatrol/web-platform">
                <i class="fab fa-github purple-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Github repository: myportfolio</div>
          </div>
          <!-- Grid column -->

           <!-- Grid column -->
         <div class="col-md-4 text-center">
            <a href="https://github.com/hydropatrol">
                <i class="fab fa-github purple-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Github repository: hydropatrol</div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 text-center">
            <a href="https://web-platform-ccloc.ondigitalocean.app">
                <i class="fas fa-file-alt blue-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Hydropatrol prototype website</div>
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