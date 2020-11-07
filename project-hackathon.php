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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Winning Solution during the Copernicus Hackathon</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">
        In Sweden there is about 96 000 lakes. The scale of economic dependency on lakes and water bodies gives an indicator of the extent of the damage that can be caused by lack of access to water resources. A comprehensive water quality monitoring system is essential to guarantee their sustainable use, yet it can be expensive and time-consuming.
        The goal of the competition was to utilize the publicly available earth observation data to develop a solution to help varies stakeholders to mitigate and adapt with the increase occurrence and intensity of harmful algal bloom. In order to achieve this goal, my team developed a <b>software tool aiming to predict the occurance of algal bloom based on satellite images, as well as a business plan integrating our solution in the swedish market. Our 1-month dedication was awarded 2nd place out of over 50 teams competing.</b>
        </p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-users fa-5x orange-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Leaderership</h5>
            <p class="grey-text mb-md-0 mb-0">
            In the project, my main role was a team-leader. The team consisted of 3 software developers and 1 entreprenour. I started from deciding on the work plan and divided the project into two parts: business and software. I then supervised both parts. Together with software engineers we aligned on the product's functionality, technologies and wrote down product backlog. I was then supervising their work, providing with guidance in terms of machine learning algorithms and getting help with industry experts. As for the business part, I used my startup experience and guided the team on how to write a business plan, conduct market analysis, competition analysis and prepare a pitch-deck. 
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middlem">
              <img src="dist/img/project-hackathon-leader.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-laptop-code fa-5x blue-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Software Development</h5>
            <p class="grey-text mb-md-0 mb-0">Our goal was to create a platform which provides real-time water monitoring. Users would search for their location and the platform would automatically:
              <li class="grey-text">find relevant space image for this geolocation,</li>
              <li class="grey-text">process the image (study area geometry, crop to study area, apply mask, resample to 10m resolution),</li>
              <li class="grey-text">detect water resources (using CI algorithm),</li>
              <li class="grey-text">use MCI algorith to detect algal bloom and label the zone as green, yellow or red.</li>
              <div class="grey-text mb-md-0 mb-0">Because of time contraints, we managed to accomplis the first 3 points, and to deploy a basic platform. Further work has to be done.</div>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay align-middle">
              <img src="dist/img/project-hackathon-software.png" class="img-fluid rounded" alt="Database graph">
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
            <i class="fas fa-user-tie fa-5x black-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Business Development</h5>
            <p class="grey-text mb-md-0 mb-0">
              By intervieing various stakeholders in the business, we have identified that algal bloom is not a localized phenomena, meaning that an algorithm relying solely on the satellite images will never be able to give accurate predictions for <b>any</b> queried location. Current algorithms do well only for <b>specific</b> locations and they fail to generalize. Our solution is to incorporate in-situ measurements. We would build simple IoT devices, moutable on fishery boats and capable of conducting basic water measurements. This, combined with space data, would enable us to create a global monitoring platform. We would also rely on tight colaboration among academia, government and space indsutry - something that doesn't exists yet. Data and knowledge sharing would benefit all parties. We would also turn algal waste into value by converting it to energy.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-hackathon-business.png" class="img-fluid rounded" alt="Example image">
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
            <a href="https://github.com/hydropatrol">
                <i class="fab fa-github purple-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Github repository</div>
          </div>
          <!-- Grid column -->

           <!-- Grid column -->
          <div class="col-md-4 text-center">
            <a href="https://1drv.ms/p/s!AisK-N5dTf4DhY9ZED8nt2nO_dhoYg">
                <i class="fas fa-file-powerpoint orange-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Pitchdeck</div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 text-center">
            <a href="https://copernicus-hackathon.confetti.events">
                <i class="fas fa-user-astronaut red-text fa-3x"></i>
            </a>
            <div class="mt-1 mb-4">Copernicus Hackathon</div>
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