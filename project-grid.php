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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Detection of Outages in the Swedish Power Grid</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">
            The goal of the project was to apply Machine Learning in the Power Systems domain. The energy industry continues to be one of the least digitalized industries. Because of that, it is important to develop projects which can combine the newest technologies within the established system. Firstly, the grid's topology (originally modeled in CIM-XML) is parsed and stored in a relational database. Then, hand-coded Machine Learning algorithms are used in order to find popular outages in the system. The project is written in Java and combines XML and MySQL. The two ML algorithms developed are k-NN and k-Means, which were hand-coded for the purpose of learning the principles.
        </p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-plug fa-5x grey-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Parsing System's Topology</h5>
            <p class="grey-text mb-md-0 mb-0">
              Power System topology is typically modeled in CIM-XML. The developed algorithm takes the CIM-XML files of the 9-bus system and parses all information about the system (by creating relevant classes and attributes containing all system elements and their sequence). Next, these elements and their parameters are input into a relational database. Then, the admittance matrix of the system is calculated (Y matrix). The difficulty of this algorithm lies in parsing a relatively complex and long XML file. I have overcome this by writing proper logic functions based on my power systems knowledge.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-grid-topology.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-brain fa-5x red-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Detecting Outages</h5>
            <p class="grey-text mb-md-0 mb-0">The purpose of the second part of the project is to analyze the database containing the power system and identify different operational states: 
              <li class="grey-text">High load rate during peak hours,</li>
              <li class="grey-text">Shut down of generator for maintenance,</li>
              <li class="grey-text">Low load rate during night,</li>
              <li class="grey-text">Disconnection of a line for maintenance.</li>
              <div class="grey-text mb-md-0 mb-0">I have hand-written the k-Means clustering algorithm which identifies the states and chose suitable labels for logical reasons. Then, I have hand-written a k-NN algorithm that identifies a previously unknown state of the system based on voltage measurements. The results have been presented in an interactive GUI. All written in Java.</div>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-grid-outages.png" class="img-fluid rounded" alt="Database graph">
              <a>
                <div class="mask waves-effect rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->

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
          <div class="col-md-6 text-center">
              <a href="https://github.com/MaciejoG/powergrid-topology-parsing">
                  <i class="fab fa-github purple-text fa-3x"></i>
              </a>
              <div class="mt-1 mb-4">Github repository - topology</div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 text-center">
              <a href="https://github.com/MaciejoG/powergrid-outages-detection">
                  <i class="fab fa-github purple-text fa-3x"></i>
              </a>
              <div class="mt-1 mb-4">Github repository - outages</div>
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