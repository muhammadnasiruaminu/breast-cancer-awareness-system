<?php
session_start();
include 'functions.php';
if (isset($_SESSION['id']) && isset($_SESSION['emailAddress'])) 
	{ ?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Patient Record</title>

			<link rel="shortcut icon" href="./favicon.ico">

			<link rel="stylesheet" type="text/css" href="css/style.css">


			  <!-- Font -->
			  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

			  <!-- CSS Implementing Plugins -->
			  <link rel="stylesheet" href="../assets/css/vendor.min.css">
			  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

			  <!-- CSS Front Template -->
			  <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">
		</head>
		<body>
			<!-- navigation bar -->
			<div class="nav-bar">
		          <ul>
		               <li>
		                    <a href="home.php">Home</a>
		               </li>

		               <li>
		                    <a href="patient.php" class="active">Patients</a>
		               </li>

		               <li>
		                    <a href="profile.php">Profile</a>
		               </li>

		               <li>
		                    <a href="logout.php">logout</a>
		               </li>
		          </ul>
		     </div>
			<!-- Table -->
			<div class="mytbl mt-5">
				<table class="table mt-5">
				  <thead class="table-text-center">
				    <tr>
				      <th scope="col">S/N</th>

				      <th scope="col">
				        <span class="d-block">Firstname/</span>
				        <span class="d-block text-muted small">Othername</span>
				      </th>

				      <th scope="col">
				        <span class="d-block">Email</span>
				      </th>

				      <th scope="col">
				        <span class="d-block">Phone number</span>
				      </th>

				      <th scope="col">
				        <span class="d-block">Age</span>
				      </th>

				      <th scope="col">
				        <span class="d-block">Gender</span>
				      </th>

				      <th class="col"></th>

				      <th scope="col" >
				        <span class="d-block">Action</span>
				      </th>

				    </tr>
				  </thead>

				  <tbody>

				  	<?php echo usersInfor(); ?>

				    <!-- <tr>
				      <th scope="row" class="text-dark">Cross-platform UI toolkit
				      </th>
				      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
				      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
				      <td></td>
				    </tr>

				    <tr>				     
				     <td><button type="button" class="btn btn-primary btn-sm btn-transition">Contact us</button></td>
				    </tr> -->
				  </tbody>
				</table>
				<!-- End Table -->
			</div>
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
		</html>
<?php } ?>