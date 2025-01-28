<?php 

session_start();

include 'connection.php';

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}

// if (!function_exists("GetSQLValueString")) {
// function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
// {
//   if (PHP_VERSION < 6) {
//     $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
//   }

//   $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

//   switch ($theType) {
//     case "text":
//       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
//       break;    
//     case "long":
//     case "int":
//       $theValue = ($theValue != "") ? intval($theValue) : "NULL";
//       break;
//     case "double":
//       $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
//       break;
//     case "date":
//       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
//       break;
//     case "defined":
//       $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
//       break;
//   }
//   return $theValue;
// }
// }

mysqli_select_db($conn, $db);
$query_Recordset1 = "SELECT * FROM disease";
$Recordset1 = mysqli_query($conn, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
$colname_re = "-1"; 
if (isset($_SESSION['username'])) {
  $colname_re = $_SESSION['username'];
}

if (isset($_SESSION['username'])) {
  $colname_re = $_SESSION['username'];
}

mysqli_select_db($conn, $db);
$query_re = "SELECT * FROM users WHERE username='$colname_re'";
$re = mysqli_query($conn, $query_re) or die(mysqli_error());
$row_re = mysqli_fetch_assoc($re);
$totalRows_re = mysqli_num_rows($re);


if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
mysqli_select_db($conn, $db);
$dd = $_SESSION['username'];
$query_bs = "SELECT disease, treatment, medication FROM users_test where username ='$dd'";
$bs = mysqli_query($conn, $query_bs) or die(mysqli_error());
$row_bs = mysqli_fetch_assoc($bs);
$totalRows_bs = mysqli_num_rows($bs);




?>

<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/article-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:21:26 GMT -->
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>All about Breast Cancer</title>

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

    <!-- Card -->
    <div class="container content-space-b-2">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Card --> <br>
        <div class="card card-bordered p-4 p-md-7">
        <div class="right">
            <a href="self-diagnosis.php" class="active">Diagnosis</a>
          </div>
          <h1 class="card-title h2">Diagnosis Result</h1>
          <?php echo "Dear ".$_SESSION['surname'] .' '.$_SESSION['othername']; ?>

          <table class="table table-bordered" >
            <tr>
              <td >Disease:</td>
              <td width="" ><?php echo $row_bs['disease']; ?></td>
            </tr>
            <tr>
              <td>Treatment/Medication:</td>
              <td ><?php echo $row_bs['treatment']; ?></td>
            </tr>
          </table>

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



</body></html>


<?php
// mysqli_free_result($Recordset1);
?>
<?php
mysqli_free_result($re);
?>
<?php
mysqli_free_result($bs);
?>
