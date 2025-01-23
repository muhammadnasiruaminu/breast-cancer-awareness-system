<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>

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
<div class="container content-space-2 content-space-lg-3">
  <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
    <!-- Heading -->
    <div class="text-center mb-5 mb-md-7">
      <h1 class="h2">Admin Login</h1>
    </div>
    <!-- End Heading -->

    <!-- Form -->
    <?php 
      session_start();
    	include'db_connection.php';

    	if(isset($_POST['login'])){
    		$emailAddress = $_POST['email'];
    		$password = $_POST['password'];

    		$sqlQuery = "SELECT * FROM admin WHERE email = '$emailAddress' AND password = '$password'";
    		$result = mysqli_query($conn, $sqlQuery);

    		if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);
          if ($row['email'] === $emailAddress && $row['password'] === $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['emailAddress'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['phoneNumber'] = $row['phone_number'];
            $_SESSION['gender'] = $row['gender'];

            header('Location: home.php');
            exit();

          }
    		}else{
    			header('Location: index.php?error=Incorrect Username or Password');
    		}
    	}
    ?>
    <form class="js-validate needs-validation" method="POST" action="">
      <!-- Form -->
      <?php if (isset($_GET['error'])) 
      { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <span class="fw-semi-bold">Holy guacamole!</span> <?php echo $_GET['error'] ?>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
     <?php } ?>
      <div class="mb-4">
        <label class="form-label" for="signupSimpleLoginEmail">Your email</label>
        <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
        <span class="invalid-feedback">Please enter a valid email address.</span>
      </div>
      <!-- End Form -->

      <!-- Form -->
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center">
          <label class="form-label" for="signupSimpleLoginPassword">Password</label>

          <a class="form-label-link" href="../page-reset-password-simple.html">Forgot Password?</a>
        </div>

        <div class="input-group input-group-merge" data-hs-validation-validate-class>
          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                data-hs-toggle-password-options='{
                 "target": "#changePassTarget",
                 "defaultClass": "bi-eye-slash",
                 "showClass": "bi-eye",
                 "classChangeTarget": "#changePassIcon"
               }'>
          <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
            <i id="changePassIcon" class="bi-eye"></i>
          </a>
        </div>

        <span class="invalid-feedback"></span>
      </div>
      <!-- End Form -->

      <div class="d-grid mb-3">
        <button type="submit" name="login" class="btn btn-primary btn-lg">Log in</button>
      </div>

    </form>
    <!-- End Form -->
  </div>
</div>
<!-- End Form -->

<!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/css/vendor.min.css">
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="./assets/css/theme.minc619.css?v=1.0">
</body>
</html>