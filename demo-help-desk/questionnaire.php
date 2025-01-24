<?php
session_start();
include 'connection.php';

  if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $gender = $_POST['gender'];
    $needles = $_POST['needles'];
    $condom = $_POST['condom'];
    $sexTransmitted = $_POST['sexTransmitted'];
    $bloodTransmitted = $_POST['bloodTransmitted'];
    $bloodScreened = $_POST['bloodScreened'];

      $sqlQuery = "INSERT INTO questionnaire(`user_id`, `gender`, `usedOfNeedles`, `useOfCondom`, `transmittedDisease`, `bloodTransmission`, `bloodScreened`) VALUES('$id', '$gender', '$needles', '$condom', '$sexTransmitted', '$bloodTransmitted', '$bloodScreened')";
      $result = mysqli_query($conn, $sqlQuery);

      if ($result) {
        header('Location: dashboard.php?sussess=Question Successfully submitted');
      }
  }

  $sqlQuery2 = "SELECT * FROM disease";
  $result2 = mysqli_query($conn, $sqlQuery2);

  $row_Recordset1 = mysqli_fetch_assoc($result2);

?>


<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Breast Cancer Risk Assessment</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/css/vendor.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">

  <style>
    /* body {
      font-family: Arial, sans-serif;
      margin: 20px;
    } */
    /* .question {
      margin-bottom: 20px;
    } */
    .result {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
    }
    .hidden {
      display: none;
    }
    .progress {
      margin-bottom: 20px;
      font-size: 16px;
    }
    button {
      margin-top: 10px;
    }
  </style>
  
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
    <!-- Topbar -->
    <div class="container">
       <?php include 'header-nav.php' ?>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Search -->
    <?php include 'welcome-msg.php' ?>
    <!-- End Search -->
    <br>
    <!-- Card -->
    <div class="container content-space-b-2">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Card -->
        <div class="card card-bordered p-4 p-md-7">
        <h1 class="card-title h2">Breast Cancer Awareness Tool</h1>
          <p>Answer the following questions to assess your risk and receive personalized prevention tips.</p>

          <!-- Progress Tracker -->
          <div class="progressm">
            Progress: <span id="currentStep">1</span>/<span id="totalSteps">8</span>
          </div>

          <form id="riskForm">
            <!-- Questions -->
            <div id="step-1" class="question">
              <label>What is your age?</label><br>
              <input type="radio" name="age" value="0"> Under 40<br>
              <input type="radio" name="age" value="1"> 40-49<br>
              <input type="radio" name="age" value="2"> 50+
            </div>

            <div id="step-2" class="question hidden">
              <label>Have you reached menopause?</label><br>
              <input type="radio" name="menopause" value="0"> No<br>
              <input type="radio" name="menopause" value="1"> Yes
            </div>

            <div id="step-3" class="question hidden">
              <label>Do you have a first-degree relative diagnosed with breast cancer?</label><br>
              <input type="radio" name="familyHistory" value="3"> Yes<br>
              <input type="radio" name="familyHistory" value="0"> No
            </div>

            <div id="step-4" class="question hidden">
              <label>Is there a history of ovarian cancer in your family?</label><br>
              <input type="radio" name="ovarianHistory" value="3"> Yes<br>
              <input type="radio" name="ovarianHistory" value="0"> No
            </div>

            <div id="step-5" class="question hidden">
              <label>Do you exercise regularly (at least 150 minutes per week)?</label><br>
              <input type="radio" name="exercise" value="-1"> Yes<br>
              <input type="radio" name="exercise" value="0"> No
            </div>

            <div id="step-6" class="question hidden">
              <label>Do you consume alcohol regularly?</label><br>
              <input type="radio" name="alcohol" value="1"> Yes<br>
              <input type="radio" name="alcohol" value="0"> No
            </div>

            <div id="step-7" class="question hidden">
              <label>Have you noticed unusual changes in your breasts (e.g., lumps, pain, or discharge)?</label><br>
              <input type="radio" name="symptoms" value="2"> Yes<br>
              <input type="radio" name="symptoms" value="0"> No
            </div>

            <div id="step-8" class="question hidden">
              <label>Have you undergone hormone replacement therapy?</label><br>
              <input type="radio" name="hormoneTherapy" value="2"> Yes<br>
              <input type="radio" name="hormoneTherapy" value="0"> No
            </div>

            <!-- Navigation Buttons -->
            <div>
              <button type="button" id="prevButton" class="btn btn-primary hidden" onclick="prevStep()">Previous</button>
              <button type="button" class="btn btn-primary" id="nextButton" onclick="nextStep()">Next</button>
            </div>
          </form>

          <!-- Results Section -->
          <div id="result" class="result hidden">
            <h2>Your Results</h2>
            <p id="riskLevel"></p>
            <p id="recommendations"></p>
            <p><strong>Note:</strong> This tool provides general guidance. Always consult a healthcare professional for a detailed evaluation.</p>
          </div>

        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Card -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">

      <div class="border-top border-white-10 my-7"></div>


      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">Made with <strong class="text text-danger">&#10083</strong> by Najat</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Log In -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
          <div id="loginModalFormLogin">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h3 class="modal-title">Log in to Front</h3>
              <p>Login to manage your account</p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="loginModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control" name="email" id="loginModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="loginModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="loginModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid gap-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Log in</button>

                <span class="divider-center">OR</span>

                <button type="submit" class="btn btn-ghost-secondary">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                    Log in with Google
                  </span>
                </button>

                <p>Don't have an account yet?
                  <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormSignup",
                       "groupName": "idForm"
                     }'>Sign up</a>
                </p>
              </div>
            </form>
          </div>
          <!-- End Log in -->

          <!-- Log in -->
          <div id="loginModalFormSignup" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h3 class="modal-title">Sign up</h3>
              <p>Fill out the form to get started</p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="loginModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="loginModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="loginModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="loginModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="loginModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="loginModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#loginModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="text-center mb-3">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>

              <div class="d-grid gap-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Sign up</button>

                <span class="divider-center">OR</span>

                <button type="submit" class="btn btn-ghost-secondary">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                    Sign up with Google
                  </span>
                </button>

                <p>Already have an account?
                  <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormLogin",
                       "groupName": "idForm"
                     }'>Log in</a>
                </p>
              </div>
            </form>
          </div>
          <!-- End Log in -->

          <!-- Reset Password -->
          <div id="loginModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h3 class="modal-title">Forgot password</h3>
              <p>Instructions will be sent to you</p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                         "targetSelector": "#loginModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid gap-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </form>
          </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="../assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()
  </script>

<script>
    let currentStep = 1;
    const totalSteps = 8;

    // Update progress display
    function updateProgress() {
      document.getElementById("currentStep").innerText = currentStep;
      document.getElementById("totalSteps").innerText = totalSteps;
    }

    // Show the next question
    function nextStep() {
      if (currentStep < totalSteps) {
        document.getElementById(`step-${currentStep}`).classList.add("hidden");
        currentStep++;
        document.getElementById(`step-${currentStep}`).classList.remove("hidden");
        document.getElementById("prevButton").classList.remove("hidden");
      }

      if (currentStep === totalSteps) {
        document.getElementById("nextButton").innerText = "Submit";
        document.getElementById("nextButton").onclick = calculateRisk;
      }
      updateProgress();
    }

    // Show the previous question
    function prevStep() {
      if (currentStep > 1) {
        document.getElementById(`step-${currentStep}`).classList.add("hidden");
        currentStep--;
        document.getElementById(`step-${currentStep}`).classList.remove("hidden");
      }

      if (currentStep === 1) {
        document.getElementById("prevButton").classList.add("hidden");
      }
      document.getElementById("nextButton").innerText = "Next";
      document.getElementById("nextButton").onclick = nextStep;

      updateProgress();
    }

    // Calculate risk and show results
    function calculateRisk() {
      let score = 0;
      const form = document.forms["riskForm"];

      // Collect all inputs
      score += parseInt(form["age"].value || 0);
      score += parseInt(form["menopause"].value || 0);
      score += parseInt(form["familyHistory"].value || 0);
      score += parseInt(form["ovarianHistory"].value || 0);
      score += parseInt(form["exercise"].value || 0);
      score += parseInt(form["alcohol"].value || 0);
      score += parseInt(form["symptoms"].value || 0);
      score += parseInt(form["hormoneTherapy"].value || 0);

      // Display results
      const resultDiv = document.getElementById("result");
      const riskLevel = document.getElementById("riskLevel");
      const recommendations = document.getElementById("recommendations");

      if (score <= 3) {
        riskLevel.innerText = "Your risk is LOW.";
        recommendations.innerText = "Maintain a healthy lifestyle and stay informed about breast health.";
      } else if (score <= 6) {
        riskLevel.innerText = "Your risk is MODERATE.";
        recommendations.innerText = "Schedule regular screenings and consider lifestyle changes.";
      } else {
        riskLevel.innerText = "Your risk is HIGH.";
        recommendations.innerText = "Consult a healthcare provider for genetic testing or preventive strategies.";
      }

      resultDiv.classList.remove("hidden");
      document.getElementById("riskForm").classList.add("hidden");
      updateProgress();
    }
  </script>

</body>

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
</html>