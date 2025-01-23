<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['emailAddress'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN | PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
     .container{
          margin-top: 50px;
          background-color: whitesmoke;
          height: 95%;
          width: 450px;
     }
     .form-control{
          padding: 10px;
     }
     .form-control label{
          font-size: 18px;
          font-family: sans-serif;
     }
     .form-control input{
          margin-top: 5px;
          width: 100%;
          padding: 4px;
          box-shadow: 1px 0 2px rgba(0, 0, 0, 0.2);
     }
     .plan{
          margin-top: 10px;
     }
     .hero-section{
          padding-top: 5px;
     }
     .hero-section h2{
          text-transform: uppercase;
          letter-spacing: 2px;
          font-family: sans-serif;
     }
</style>
<body>
     <div class="nav-bar">
          <ul>
               <li>
                    <a href="home.php">Home</a>
               </li>

               <li>
                    <a href="patient.php">Patients</a>
               </li>

               <li>
                    <a href="profile.php" class="active">Profile</a>
               </li>

               <li>
                    <a href="logout.php">logout</a>
               </li>
          </ul>
     </div>
     <?php
     include 'db_connection.php';

     $id = $_SESSION['id'];
     $sqlQuery = "SELECT * FROM admin WHERE id = '$id'";
     $execute = mysqli_query($conn, $sqlQuery);

     while ($fetch = mysqli_fetch_assoc($execute)) {
          $name = $fetch['name'];
          $username = $fetch['username'];
          $email = $fetch['email'];
          $phoneNumber = $fetch['phone_number'];
          $gender = $fetch['gender'];
     }
     ?>
     <section>
          <div class="container">
               <div class="hero-section">
                    <form method="POST">
                         <?php 
                              if (isset($_POST['update'])) {
                                   $name = $_POST['name'];
                                   $email = $_POST['email'];
                                   $phoneNumber = $_POST['phoneNumber'];
                                   $username = $_POST['username'];

                                   $sqlQuery = "UPDATE admin SET name = '$name', email = '$email', username = '$username', phone_number = '$phoneNumber'";
                                   $execute = mysqli_query($conn, $sqlQuery);

                                   if ($execute) {
                                        echo "<script>alert('Profile updated successfully')</script>";

                                        header('Location: home.php');
                                   }
                              }
                         ?>
                         <h2>Admin Profile</h2>
                         <hr>
                         <div class="form-control">
                              <label>Name:</label>
                              <input type="text" name="name" value="<?php echo $name; ?>">
                         </div>
                         <div class="form-control">
                              <label>Username:</label>
                              <input type="text" name="username" value="<?php echo $username; ?>">
                         </div>
                         <div class="form-control">
                              <label>Email Address:</label>
                              <input type="text" name="email" value="<?php echo $email; ?>">
                         </div>
                         <div class="form-control">
                              <label>Phone Number:</label>
                              <input type="text" name="phoneNumber" value="<?php echo $phoneNumber ?>">
                         </div>
                         <div class="form-control">
                              <label>Current password:</label>
                              <input type="password" name="password">
                         </div>
                         <div class="form-control">
                              <label>New password:</label>
                              <input type="password" name="newPassword">
                         </div>
                         <hr>
                         <div class="plan">
                              <button type="submit" name="update">Update</button>
                         </div>
                    </form>
               </div>
          </div>
     </section>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>