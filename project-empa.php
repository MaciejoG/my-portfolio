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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Innovative Heating System Time-Series Simulation</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">
            Ever wondered what happens with the water you use when showering? It is being removed to the sink, despite having a relatively high temperature. Isn't that a loss of energy we already paid for? Well, that's what we also found out at Empa - Swiss Federal Laboratories for Materials Science and Technology. We aimed to make use of that energy by extracting heat from grey water produced at residential buildings. In this project, my role was to make a computer simulation of the innovative heating system and to compare its performance to the one without the heat-recovery system equipped. This gave us indication of the potential benefits before we build the prototype. I have created a thermal model of the system, programmed the model in Matlab, and created a time-series prediction of temperatures inside and outside of the building. The model is based on real weather and ground data for Switzerland, as well as statistical data for residential buildings and water consumption.
        </p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-lightbulb fa-5x yellow-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Innovative Heat-Recovery System</h5>
            <p class="grey-text mb-md-0 mb-0">
                The system is based on heat recovery from grey water produced in the bathroom and kitchen. Used water comes down the pipes and goes through a heat-exchanger. Part of its heat is being removed and transferred to cold water coming from the fresh-water supply. As the cold water gets warmer, it is being stored in a hot water tank. The tank reduces the costs of water heating as well as provides a natural heater for the room. For example, it can be placed in the basement and keep its temperature high, thus reducing the costs of heating for the entire building.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-empa-gw.jpg" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-thermometer-half fa-5x red-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Thermal Model</h5>
            <p class="grey-text mb-md-0 mb-0">The system assumes that the grey water storage tank is placed in the basement. The building is equipped in a heat-pump. The thermal model includes all rooms and systems as part of the building and its environment and is based on principles of heat and mass transfer. The system has been dividen into four parts:
              <li class="grey-text">modelling of the grey water storage tank,</li>
              <li class="grey-text">detalied modelling of the basement,</li>
              <li class="grey-text">rough modelling of the rest of the building,</li>
              <li class="grey-text">modelling of the ground surrounding the basement.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-empa-system.png" class="img-fluid rounded" alt="Database graph">
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
            <i class="fas fa-chart-area fa-5x orange-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Time-Series Simulation</h5>
            <p class="grey-text mb-md-0 mb-0">
              The time-series simulation shows distribution of temperatures at various rooms over one year, as the result of heat and mass transfer being calculated by the thermal model. Long simulation time ensures that the effects of heat recovery are not narrowed down to initial benefits. The simulation is based on read lata for ground temperature and weather in Switzerland. The system compares both systems with and without grey water heat recovery. The results indicate that the system can substantially benefit from the upgrade, as the room temperature increases by roughly 5 C degrees over the entire year.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-empa-simulation.png" class="img-fluid rounded" alt="Example image">
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
          <div class="col-md-6 text-center">
              <a href="https://github.com/MaciejoG/Empa">
                  <i class="fab fa-github purple-text fa-3x"></i>
              </a>
              <div class="mt-1 mb-4">Github repository</div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 text-center">
            <a href="https://www.empa.ch">
              <img src="dist/img/empa_logo.png" class="img-fluid" alt="Example image">
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