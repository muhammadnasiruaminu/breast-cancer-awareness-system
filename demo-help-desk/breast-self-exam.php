<?php
session_start();
include 'connection.php';


?>


<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Breast Cancer | Breast Self Exam</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/css/vendor.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">

    <div class="container">
       <?php include 'header-nav.php' ?>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- welcome -->
    <?php include 'welcome-msg.php' ?>
    <!-- End welcome -->
    <br>
    <!-- Card -->
    <div class="container content-space-b-2">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Card -->
        <div class="card card-bordered p-4 p-md-7">
          <h1 class="card-title h2">Overview of Breast self-exam</h1>          
          <p>
            A breast self-exam for breast awareness is a check of your breasts that you do on your own. 
            To help increase your breast awareness, you use your eyes and hands to learn if there are any changes to the look and feel of your breasts.
          </p>
          <p>
            If you notice new breast changes, discuss them with your healthcare professional. 
            Most breast changes detected during a self-exam for breast awareness aren't something serious. 
            However, some changes may signal something serious, such as breast cancer.
          </p>
          <p>
            Most medical experts don't recommend routine breast self-exams as a part of breast cancer screening. 
            That's because breast self-exams haven't been shown to be effective in reducing deaths from breast cancer.
          </p>
          <p>
            Still, healthcare professionals believe there is value in being familiar with your own breasts. 
            This way, you may understand what's typical and can report changes right away. Considering the new breast changes, 
            your healthcare professional can decide if you need diagnostic breast imaging. Finding a breast change and reporting 
            it to your healthcare team could help find breast cancer when it's small. 
            A small breast cancer that's caught early could require less intensive treatment.
          </p>

            <p>For a complete guide on how to perform breast self-exam, click any of the below links:</p>
            <p><a href="https://www.breastcancer.org/screening-testing/breast-self-exam-bse" target='_blank'>Breast Self-Exam: How To Check for Breast Lumps and Changes</a></p>
            <p><a href="https://www.mayoclinic.org/tests-procedures/breast-exam/about/pac-20393237">Breast self-exam for breast awareness - Mayo Clinic</a> </p>
            <p><a href="https://www.nationalbreastcancer.org/breast-self-exam/">Breast Self-Exam - National Breast Cancer Foundation</a></p>
          
        
          
        </div>
        <!-- End Card -->
        <br>
        <!-- <div class="card card-bordered p-4 p-md-7">
          <h1 class="card-title">Treatment</h1>
          <p>
            Breast cancer treatment often starts with surgery to remove the cancer. 
            Most people with breast cancer will have other treatments after surgery, such as radiation, chemotherapy and hormone therapy. 
            Some people may have chemotherapy or hormone therapy before surgery. These medicines can help shrink the cancer and make it easier to remove.
          </p>


        </div> -->
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
</body>

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
</html>