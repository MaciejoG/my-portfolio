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
        <h2 class="h1-responsive font-weight-bold text-center mb-2">Machine Learning Detecting Failures in Batteries</h2>
        <!-- Section description -->
        <p class="lead grey-text text-justify w-responsive mx-auto mb-5">This project has been realized at a swedish battery manufacturer Northvolt, as my Master Thesis: "Automated Detection of Wirebonding Failures for Li-Ion Batteries Using Machine Learning". The goal of the project was to build a novel testing method for detection of small mechanical failures occuring regurarly during production of battery modules. This problem has been recognized as a significant quality deterioration of the product, which causes major issues during field-operation of the batteries, requiring expensive reworks and resulting in dissatisifed customers. I have built, trained and validated a supervised Machine Learning model which has been implemented as an End-of-Line test during production. This method achieved relatively high accuracy while keeping the test time low. It saves money and time spent on testing. The thesis score was 16.5/20, placing it in top 10% of the students.</p>

        <!-- Grid row -->
        <div class="row mb-5">
          <!-- Grid column -->
          <div class="col-md-6">
            <i class="fas fa-battery-three-quarters fa-5x green-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Test Setup</h5>
            <p class="grey-text mb-md-0 mb-0">The first stage of the project - test setup. I have designed and built a manufacturing testing station, which precharges the battery module to the desired State of Charge, and applies short current pulses. These induce voltage curves which are then to be analyzed by the Machine Learning model in stage two. Key challanges solved in stage one:
              <li class="grey-text">manufacturing requirements (cycle-time, safety),</li>
              <li class="grey-text">product limitations (electrical parameters and mechanical build),</li>
              <li class="grey-text">software to control testing equipment and enable synchronized data capture,</li>
              <li class="grey-text">hardware.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-thesis-test.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-project-diagram fa-5x orange-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Model Structure</h5>
            <p class="grey-text mb-md-0 mb-0">The infrastructure of the model consists of a few steps. The rough data is firstly cleaned and preprocessed. Then, it is partitioned into training and test set. The training set is used for model optimization, evaluating its performance using cross-validation. I have built automatic model hypertuning and testing in order to automate the process and allow for online learning when more data is available. Finally, the best-performing algorithm is evaluated on the test set.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-thesis-infrastructure.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-chart-area fa-5x blue-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Data Analysis</h5>
            <p class="grey-text mb-md-0 mb-0">I have used numerous techniques do visualize the data. The charts produced both validated the concept as well as provided valuable insights about data quality. Having seen the data, I have identified points on the voltage curves (and their other properties) which looked promising and had to be monitored for in-depth analysis. It became clear that due to high noise and unbalanced data, preprocessing techniques had to be used. I used PCA to visualize the quality of data, the outliers and to which extend are the classes overlapping.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/thesis-data.png" class="img-fluid rounded" alt="Database graph">
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
            <i class="fas fa-cogs fa-5x grey-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Data Preprocessing</h5>
            <p class="grey-text mb-md-0 mb-0">In order to improve data quality and balance the dataset, I have compared numerous preprocessing techniques and applied the best-performing one. The techniques included:
              <li class="grey-text">change of performance metrics to Precision&Recall,</li>
              <li class="grey-text">resampling the data (eg. undersampling and oversampling),</li>
              <li class="grey-text">generating synthetic data (eg. SMOTE or kNN-SMOTE),</li>
              <li class="grey-text">trying cost-evaluated or penalized models.</li>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-thesis-preprocessing.png" class="img-fluid rounded" alt="Example image">
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
            <h5 class="font-weight-bold my-4">Machine Learning Model</h5>
            <p class="grey-text mb-md-0 mb-0">Finally, I have trained and validated a supervised Machine Learning model. I have compared three algorithms: Decision Tree, Support Vector Machine and Random Forests. The algorithms were hyper-tuned using cross-validation and exhaustive grid search. I have chosen Random Forests as the final model, achieving relatively high accuracy on the test set.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/thesis-ml.png" class="img-fluid rounded" alt="Example image">
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
            <i class="fas fa-chart-line fa-5x yellow-text animated tada"></i>
            <h5 class="font-weight-bold my-4">Performance Analysis</h5>
            <p class="grey-text mb-md-0 mb-0">The model achieved relatively high results on given test set. However, I have also analyzed the confidence intervals and concluded with the amount of data needed to improve the confidence in model's performance. It appeared that more production data was necessary in order to improve the model.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-6">
            <!--Mask with wave-->
            <div class="view overlay">
              <img src="dist/img/project-thesis-confidence.png" class="img-fluid rounded" alt="Example image">
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