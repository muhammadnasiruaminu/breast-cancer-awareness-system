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

    
  // mysql_select_db($database_config, $config);

  // $query_Recordset1 = "SELECT * FROM disease";

  // $Recordset1 = mysql_query($query_Recordset1, $config) or die(mysql_error());

  // $row_Recordset1 = mysql_fetch_assoc($Recordset1);

  // $totalRows_Recordset1 = mysql_num_rows($Recordset1);
  $sqlQuery2 = "SELECT * FROM disease";
  $result2 = mysqli_query($conn, $sqlQuery2);
  // if ($result){
  //   echo 'yes sdds'; print_r($result);
  //   exit;
  // }
  // if (mysqli_num_rows($result) > 0) {
  //   $row = mysqli_fetch_assoc($result);
  //   // echo 'yes sdds'; print_r($row);
  //   //  echo $row['id']; exit;

  // }
  $row_Recordset1 = mysqli_fetch_assoc($result2);
  // print_r($row_Recordset1); exit;

?>


<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Breast Cancer | Diagnosis & Treatment</title>

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
    <!-- Search -->
    <div class="bg-light" style="background-image: url(../assets/svg/components/wave-pattern-light.svg);">
      <div class="container py-4">
        <div class="w-lg-75 mx-lg-auto">
          <figure>
              <blockquote class="blockquote blockquote-left-border">
                <p>Dear <?php echo $_SESSION['emailAddress']; ?>, welcome to</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                <span class="blockquote-footer-source">Breast Cancer awareness<cite title="Source Title">System.</cite></span>
              </figcaption>
            </figure>
        </div>      </div>
    </div>
    <!-- End Search -->

    <!-- Card -->
    <div class="container content-space-b-2">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Card --> <br>
        <div class="card card-bordered p-4 p-md-7">
          <h1 class="card-title">Diagnosis</h1>          
          <p>
            Breast cancer diagnosis often begins with an exam and a discussion of your symptoms. 
            Imaging tests can look at the breast tissue for anything that's not typical. 
            To confirm whether there is cancer or not, a sample of tissue is removed from the breast for testing.
          </p>
         <h3>Breast exam</h3>
         <p>
          During a clinical breast exam, a healthcare professional looks at the breasts for anything that's not typical. 
          This might include changes in the skin or to the nipple. Then the health professional feels the breasts for lumps. 
          The health professional also feels along the collarbones and around the armpits for lumps.
         </p>

         <h3>Mammogram</h3>
         <p>
            A mammogram is an X-ray of the breast tissue. Mammograms are commonly used to screen for breast cancer. 
            If a screening mammogram finds something concerning, you might have another mammogram to look at the area more closely. 
            This more-detailed mammogram is called a diagnostic mammogram. It's often used to look closely at both breasts.
         </p>

         <h3>Breast ultrasound</h3>
          <p>
            Ultrasound uses sound waves to make pictures of structures inside the body. 
            A breast ultrasound may give your healthcare team more information about a breast lump. 
            For example, an ultrasound might show whether the lump is a solid mass or a fluid-filled cyst. 
            The healthcare team uses this information to decide what tests you might need next.
          </p>

          <h3>Breast MRI</h3>
          <p>
          MRI machines use a magnetic field and radio waves to create pictures of the inside of the body. 
          A breast MRI can make more-detailed pictures of the breast. Sometimes this method is used to look closely for any other areas of cancer in the affected breast. 
          It also might be used to look for cancer in the other breast. Before a breast MRI, you usually receive an injection of dye. The dye helps the tissue show up better in the images.
          </p>

          <h3>Removing a sample of breast cells for testing</h3>
          <p>
            A biopsy is a procedure to remove a sample of tissue for testing in a lab. 
            To get the sample, a healthcare professional puts a needle through the skin and into the breast tissue. 
            The health professional guides the needle using images created with X-rays, ultrasound or another type of imaging. 
            Once the needle reaches the right place, the health professional uses the needle to draw out tissue from the breast. 
            Often, a marker is placed in the spot where the tissue sample was removed. The small metal marker will show up on imaging tests. 
            The marker helps your healthcare team monitor the area of concern.
          </p>

          <h3>Testing cells in the lab</h3>
          <p>
            The tissue sample from a biopsy goes to a lab for testing. Tests can show whether the cells in the sample are cancerous. 
            Other tests give information about the type of cancer and how quickly it's growing. Special tests give more details about the cancer cells. 
            For example, tests might look for hormone receptors on the surface of the cells. Your healthcare team uses the results from these tests to make a treatment plan.
          </p>

          
        </div>
        <!-- End Card -->
        <br>
        <div class="card card-bordered p-4 p-md-7">
          <h1 class="card-title">Treatment</h1>
          <p>
            Breast cancer treatment often starts with surgery to remove the cancer. 
            Most people with breast cancer will have other treatments after surgery, such as radiation, chemotherapy and hormone therapy. 
            Some people may have chemotherapy or hormone therapy before surgery. These medicines can help shrink the cancer and make it easier to remove.
          </p>

          <p>
            Your treatment plan will depend on your particular breast cancer. Your healthcare team considers the stage of the cancer, 
            how quickly it's growing and whether the cancer cells are sensitive to hormones. 
            Your care team also considers your overall health and what you prefer.
          </p>

          <p>
            There are many options for breast cancer treatment. It can feel overwhelming to consider all the options and make complex decisions about your care. 
            Consider seeking a second opinion from a breast specialist in a breast center or clinic. Talk to breast cancer survivors who have faced the same decision.
          </p>

          <h2>Breast cancer surgery</h2>

          <p>
            Breast cancer surgery typically involves a procedure to remove the breast cancer and a procedure to remove some nearby lymph nodes. 
            Operations used to treat breast cancer include:
          </p>

          <h3>Removing the breast cancer (Lumpectomy)</h3>
          <p>
            A lumpectomy is surgery to remove the breast cancer and some of the healthy tissue around it. 
            The rest of the breast tissue isn't removed. Other names for this surgery are breast-conserving surgery and wide local excision. 
            Most people who have a lumpectomy also have radiation therapy. <br>

            Lumpectomy might be used to remove a small cancer. Sometimes you can have chemotherapy 
            before surgery to shrink the cancer so that lumpectomy is possible.
          </p>

          <h3>Removing all of the breast tissue (Mastectomy)</h3>
          <p>
            A mastectomy is surgery to remove all breast tissue from a breast. 
            The most common mastectomy procedure is total mastectomy, also called simple mastectomy. 
            This procedure removes all of the breast, including the lobules, ducts, fatty tissue and 
            some skin, including the nipple and areola. <br> <br>

            Mastectomy might be used to remove a large cancer. It also might be needed when there are 
            multiple areas of cancer within one breast. You might have a mastectomy if you can't have 
            or don't want radiation therapy after surgery. <br> <br>

            Some newer types of mastectomy procedures might not remove the skin or nipple. 
            For instance, a skin-sparing mastectomy leaves some skin. A nipple-sparing mastectomy 
            leaves the nipple and the skin around it, called the areola. These newer operations can 
            improve the look of the breast after surgery, but they aren't options for everyone.
          </p>

          <h3>Removing a few lymph nodes (Sentinel node biopsy)</h3>
          <p>
            A sentinel node biopsy is an operation to take out some lymph nodes for testing. 
            When breast cancer spreads, it often goes to the nearby lymph nodes first. 
            To see if the cancer has spread, a surgeon removes some of the lymph nodes near the cancer. 
            If no cancer is found in those lymph nodes, the chance of finding cancer in any of the other lymph nodes is small. 
            No other lymph nodes need to be removed.
          </p>

          <h3>Removing several lymph nodes</h3>
          <p>
            Axillary lymph node dissection is an operation to remove many lymph nodes from the armpit. 
            Your breast cancer surgery might include this operation if imaging tests show the cancer has spread to the lymph nodes. 
            It also might be used if cancer is found in a sentinel node biopsy.
          </p>

          <h3>Removing both breasts</h3>
          <p>
            Some people who have cancer in one breast may choose to have their other breast removed, even if it doesn't have cancer. 
            This procedure is called a contralateral prophylactic mastectomy. It might be an option if you have a high risk of getting cancer in the other breast. 
            The risk might be high if you have a strong family history of cancer or have DNA changes that increase the risk of cancer. 
            Most people with breast cancer in one breast will never get cancer in the other breast.
          </p>

          <h2>Radiation therapy</h2>
          <p>
            Radiation therapy treats cancer with powerful energy beams. The energy can come from X-rays, protons or other sources.
          </p>
          <p>
            For breast cancer treatment, the radiation is often external beam radiation. During this type of radiation therapy, you lie on a table while a machine moves around you. 
            The machine directs radiation to precise points on your body. Less often, the radiation can be placed inside the body. This type of radiation is called brachytherapy.
          </p>

          <h2>Chemotherapy</h2>
          <p>
           Chemotherapy treats cancer with strong medicines. Many chemotherapy medicines exist. Treatment often involves a combination of chemotherapy medicines. 
           Most are given through a vein. Some are available in pill form.
          </p>
          <p>
            Chemotherapy for breast cancer is often used after surgery. It can kill any cancer cells that might remain and lower the risk of the cancer coming back.
          </p>
          

          <h2>Hormone therapy</h2>
          <p>
            Hormone therapy uses medicines to block certain hormones in the body. It's a treatment for breast cancers that are sensitive to the hormones estrogen and progesterone. 
            Healthcare professionals call these cancers estrogen receptor positive and progesterone receptor positive. Cancers that are sensitive to hormones use the hormones as fuel for their growth. 
            Blocking the hormones can cause the cancer cells to shrink or die.
          </p>
          <h2>Immunotherapy</h2>
          <p>
            Immunotherapy is a treatment with medicine that helps the body's immune system to kill cancer cells. The immune system fights off diseases by attacking germs and other cells that shouldn't be in the body. 
            Cancer cells survive by hiding from the immune system. Immunotherapy helps the immune system cells find and kill the cancer cells.
          </p>

        </div>
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