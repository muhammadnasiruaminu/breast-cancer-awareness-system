<?php 
  session_start();

  // echo "Welcome ".$_SESSION['emailAddress']."!";
  if (isset($_SESSION['id']) && isset($_SESSION['emailAddress'])) {

 ?>

<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Breast Cancer Awareness System | Dashboard</title>

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
    <!--
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text">Topbar</span>

            <span class="navbar-toggler-default">
              <i class="bi-chevron-down ms-2"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-chevron-up ms-2"></i>
            </span>
          </span>
        </button>

        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              <span class="navbar-toggler-text small">Topbar</span>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              
            </div>
          </div>
        </div>
      </nav>
  
    </div>
  -->

    <div class="container">
      <?php include 'header-nav.php' ?>
    </div>
  </header>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasRightLabel">Quick Feedback From the Admin</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <?php 
                include 'connection.php';

                $user_id = $_SESSION['id'];

                $sqlQuery = "SELECT * FROM replyMessage WHERE user_id = '$user_id' AND message = 0";
                $execute = mysqli_query($conn, $sqlQuery);

                $message = array();

                while ($fetch = mysqli_fetch_assoc($execute)) 
                {
                  $message[] = $fetch;
                }
                echo json_encode($message);
              ?>
            </div>
          </div>

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
          <h1 class="card-title h2">What's Cancer and it types?</h1>
          <p class="card-text">How Front works, what it can do for your business and what makes it different to other solutions.</p>

          <!-- Media -->
          <div class="d-flex mb-5">
            <div class="flex-shrink-0">
              <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="flex-grow-1 ms-3">
              <p class="card-text text-dark small mb-0">1 article in this collection</p>
              <p class="card-text text-dark small">
                <span class="text-muted">Written by</span>
                Dr. Salihu Ismail Barde.
              </p>
            </div>
          </div>
          <!-- End Media -->

          <h3>HIV ans AIDs</h3>
          <p>HIV is a viral infection that attacks the body's immune system, specifically the CD4 cells(T cells). If left untreated, HIV can lead to AIDs(Acquired Immunodeficiancy Syndrome).</p>

          <h3>HIV</h3>
          <p>
            <ul class="list-py-1 list-unstyled list-pointer">
              <li><span class="fw-semi-bold">Attacks and weakens the immune system.</span></li>
              <li><span class="fw-semi-bold">Make the body vulnerable to opportunistic infection and diseases.</span></li>
              <li><span class="fw-semi-bold">Can be transmitted by: </span></li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Unprotected sex with an infected person.</span>
              </li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Sharing needles or syringes with infected person.</span>
              </li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Mother-to-child transmission during pregnancy, childbirth, or breastfeeding.</span>
              </li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Blood transmission fron an infected donor</span>
              </li>
            </ul>
          </p>

          <h3>AIDs</h3>
          <p>
            <ul class="list-py-1 list-unstyled list-pointer">
              <li><span class="fw-semi-bold">The most advanced stage of HIV infection.</span></li>
              <li><span class="fw-semi-bold">Occurs when the immune the system is severaly damage.</span></li>
              <li><span class="fw-semi-bold">Characterized by: </span></li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >CD4 cell count below 200 cell per cubic millimeter of blood.</span>
              </li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Presence of specific opportunistic infections or cancers.</span>
              </li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Severe symptoms such as:</span>
              </li>
              <ul>
                <li>Recurring Fever</li>
                <li>Fatigue</li>
                <li>Swollen lymph nodes</li>
                <li>Weight loss</li>
                <li>Diarrhea</li>
                <li>White spots in the mouth(thrush)</li>
                <li>Red, brown, pink, or purplish blotches on the skin.</li>
              </ul>
            </ul>
          </p>

          <h3>Key differences</h3>
          <p>
            <ul>
              <li>HIV is the virus, while AIDs is the condition caused by the virus.</li>
              <li>HIV can be manage with treatment, while AIDs is a more advance and sevare stage of the infection.</li>
            </ul>
          </p>

          <h3>Prevention and treatment</h3>
          <p>
            <ul class="list-py-1 list-unstyled list-pointer">
              <li>Prevention method include:</li>
              <li class="list-pointer-item">
                <span class="link link-secondary" >Safe sex practice.</span>
              </li>

              <li class="list-pointer-item">
                <span class="link link-secondary" >Using condom.</span>
              </li>

              <li class="list-pointer-item">
                <span class="link link-secondary" >Getting tested regularly.</span>
              </li>

              <li class="list-pointer-item">
                <span class="link link-secondary" >Avoid sharing needles or syringes.</span>
              </li>

              <li class="list-pointer-item">
                <span class="link link-secondary" >Pre-exposure prophylaxis(PrEP) medication.</span>
              </li>
            </ul>
          </p>

          <!-- Info -->
          <div class="border-top border-bottom text-center py-7 my-5">
            <div class="mb-3">
              <h3>Was this article helpful?</h3>
            </div>

            <div class="mb-3">
              <button type="button" class="btn btn-primary my-1 me-sm-2">
                <i class="bi-hand-thumbs-up me-1"></i> Yes, thanks!
              </button>
              <button type="button" class="btn btn-soft-primary my-1">
                <i class="bi-hand-thumbs-down me-1"></i> Not, really
              </button>
            </div>

            <p class="small mb-0">93 out of 132 found this helpful</p>
          </div>
          <!-- End Info -->

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
              <h3 class="modal-title">Send your personal question</h3>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="exampleFormControlTextarea1">Message.</label>
                <textarea id="exampleFormControlTextarea1" name="feedback" class="form-control" placeholder="Textarea field" rows="4"></textarea>
              </div>
              <!-- End Form -->

              <div class="d-grid gap-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Send</button>
              </div>
            </form>
          </div>
          <!-- End Log in -->
          
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

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>