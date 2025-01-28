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
          <h3>Hey there! </h3>
          <h3 class="card-title ">Welcome, <?php echo $_SESSION['surname'].' '. $_SESSION['othername']; ?></h3>
  
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
        <p class="text-white-50 small">Made with <strong class="text text-danger">&#10083</strong> by Khady</p>
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