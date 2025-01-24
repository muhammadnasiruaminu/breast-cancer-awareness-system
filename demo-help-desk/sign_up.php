<?php 
	include 'connection.php';

	if (isset($_POST['signUp'])) {
		echo "<script>alert('something')</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>

	<!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/css/vendor.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">
</head>
<body>
	<!-- Form -->
        <form method="POST" action="create.php">
          <!-- Card -->
          <div class="card">
            <div class="card-header bg-primary text-center">
              <h4 class="card-header-title text-white">Sign up now to find more information about <span class="badge bg-warning text-dark rounded-pill ms-1">Breast Cancer</span></h4>
            </div>

            <div class="card-body">
              <div class="row gx-3">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupHeroFormFirstName">First name:</label>
                    <input type="text" class="form-control form-control-lg" name="firstName" id="signupHeroFormFirstName" placeholder="First name" aria-label="First name" required>
                    <span class="invalid-feedback">Please enter your first name</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupHeroFormLasttName">Other name:</label>
                    <input type="text" class="form-control form-control-lg" name="otherName" id="signupHeroFormLasttName" placeholder="Last name" aria-label="Last name" required>
                    <span class="invalid-feedback">Please enter your last name</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupHeroFormWorkEmail">Email address:</label>
                <input type="email" class="form-control form-control-lg" name="emailAddress" id="signupHeroFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter your email address</span>
              </div>
              <!-- End Form -->

              <div class="row gx-3">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupHeroFormFirstName">Phone number:</label>
                    <input type="text" class="form-control form-control-lg" name="phoneNumber" id="signupHeroFormFirstName" aria-label="First name" required>
                    <span class="invalid-feedback">Please enter your first name</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupHeroFormLasttName">Age:</label>
                    <input type="text" class="form-control form-control-lg" name="age" id="signupHeroFormLasttName" aria-label="Last name" required>
                    <span class="invalid-feedback">Please enter your last name</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Select -->
              <div class="mb-4">
                <label class="form-label" for="hireUsFormBudget">Gender:</label>
                <select name="gender" id="hireUsFormBudget" class="form-select form-select-lg" aria-label="Tell us about your budget">
                  <option hidden>-- Select Gender --</option>
                  <option value="male">Male</option>
                  <option value="male">Female</option>
                </select>
              </div>
              <!-- End Select -->

              <div class="row gx-3">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupHeroFormSignupPassword">Password:</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="signupHeroFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                    <span class="invalid-feedback">Your password must include 8+ characters</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4" data-hs-validation-validate-class>
                    <label class="form-label" for="signupHeroFormSignupConfirmPassword">Confirm password:</label>
                    <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupHeroFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-hs-validation-equal-field="#signupHeroFormSignupPassword">
                    <span class="invalid-feedback">Password does not match the confirm password</span>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Check -->
              <div class="form-check mb-4">
                <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheckEg2" name="signupFormPrivacyCheck" required>
                <label class="form-check-label small" for="signupHeroFormPrivacyCheckEg2"> By submitting this form I have read and acknowledged the <a href=../page-privacy.html>Privacy Policy</a></label>
                <span class="invalid-feedback">Please accept our Privacy Policy.</span>
              </div>
              <!-- End Check -->

              <div class="row align-items-center">
                <div class="col-sm-7 mb-3 mb-sm-0">
                  <p class="card-text small">Already have an account? <a class="link" href="login.php">Log In</a></p>
                </div>
                <!-- End Col -->

                <div class="col-sm-5 text-sm-end">
                  <button type="submit" name="signUp" class="btn btn-primary btn-lg">Sign up now</button>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </form>
        <!-- End Form -->
</body>
</html>