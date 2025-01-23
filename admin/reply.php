<?php 
	include 'db_connection.php';
	if (isset($_GET['viewQ'])) {
		$id = $_GET['viewQ'];

		$sqlQuery = "SELECT * FROM users WHERE id = $id";
		$execute = mysqli_query($conn, $sqlQuery);

		if ($execute) {
			$row = mysqli_fetch_assoc($execute);
		}
	}
?>
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
		     <div>
		     	<h3><small>Client name: </small><?php echo $row['first_name'].' '.$row['other_name']; ?></h3>
		     </div>
		     <hr>
			<!-- Table -->
			<table class="table table-nowrap table-vertical-border-striped">
			  <thead class="table-text-center">
			    <tr>
			      <th scope="col" style="width: 40%;"></th>

			      <th scope="col" style="width: 20%;">
			        <span class="d-block">Patient Questionnaire</span>
			        <!-- <span class="d-block text-muted small">$0/mon</span> -->
			      </th>

			      <th scope="col" style="width: 20%;">
			        <span class="d-block">Gender <span class="badge bg-warning text-dark rounded-pill ms-1">M/F</span></span>
			        <!-- <span class="d-block text-muted small">$60/mon</span> -->
			      </th>

			      <th scope="col" style="width: 20%;">
			        <span class="d-block">Remark <span class="badge bg-warning text-dark rounded-pill ms-1">yes</span></span>
			        <!-- <span class="d-block text-muted small">$60/mon</span> -->
			      </th>

			      <th scope="col" style="width: 20%;">
			        <!-- <span class="d-block">Enterprise</span> -->
			        <span class="d-block">Remark <span class="badge bg-warning text-dark rounded-pill ms-1">no</span></span>
			        <!-- <span class="d-block text-muted small">Custom</span> -->
			      </th>
			    </tr>
			  </thead>

			  <tbody>
			    <tr>
			      <th scope="row" class="text-dark">What is your gender:</th>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"><?php echo $row['gender']; ?></td>
			      <td></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark">Have you ever shared injection drug needles:</th>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
			      <td class="table-text-center"></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark">Have you ever had sex without condom:</th>
			      <td></td>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark">Have you ever had sexually tranmitted disease, like chlamydia or gonorhea:</th>
			      <td></td>
			      <td></td>
			      <td class="table-text-center"></td>
			      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
			      <td class="table-text-center"></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark">Have you ever received a blood transfussion:</th>
			      <td></td>
			      <td></td>
			      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
			      <td></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark">Was the blood screened:</th>
			      <td></td>
			      <td></td>
			      <td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
			      <td></td>
			    </tr>

			    <tr>
			      <th scope="row" class="text-dark"></th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td>
			      	<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
					  Reply
					</button>
					<!-- End Button trigger modal -->
					<!-- Modal -->
					<?php 
		        		include 'db_connection.php';

		        		if (isset($_POST['saves'])) {
		        			$msg = $_POST['feedback'];
		        			$userId = $row['id'];

		        			$sqlQuery = "INSERT INTO replyMessage(user_id, message) VALUES('$userId', '$msg')";
		        			$execute = mysqli_query($conn, $sqlQuery);

		        			if ($execute) {
		        				echo "<script>alert('Message successfully sent!')</script>";
		        			}
		        		}
		        	?>
					<form method="POST">
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Reply to Questionnaire</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
					        	<div class="mb-3">
								    <label class="form-label" for="exampleFormControlTextarea1">Message.</label>
								    <textarea id="exampleFormControlTextarea1" name="feedback" class="form-control" placeholder="Textarea field" rows="4"></textarea>
							    </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
						        <button type="submit" name="saves" class="btn btn-primary">Reply</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- End Modal -->
					</form>
			      </td>
			    </tr>
			  </tbody>
			</table>
			<!-- End Table -->
			
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