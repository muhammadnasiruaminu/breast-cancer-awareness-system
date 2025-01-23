<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['emailAddress'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <div class="nav-bar">
          <ul>
               <li>
                    <a href="home.php" class="active">Home</a>
               </li>

               <li>
                    <a href="patient.php">Patients</a>
               </li>

               <li>
                    <a href="profile.php">Profile</a>
               </li>

               <li>
                    <a href="logout.php">logout</a>
               </li>
          </ul>
     </div>
     <h1><< Admin site >></h1>
     <h1>Hello, <?php echo $_SESSION['emailAddress']; ?></h1>
     <!-- <a href="logout.php" class="btn">Logout</a> -->
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>