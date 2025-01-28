<?php session_start() ?>
<?php 
// require_once('Connections/config.php');
include 'connection.php';

 ?>
<?php
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
?>
<?php
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

// mysql_select_db($db, $conn);
$query_Recordset1 = "SELECT * FROM disease";
$Recordset1 = mysqli_query($conn, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
$colname_re = "-1";
if (isset($_SESSION['username'])) {
  $colname_re = $_SESSION['username'];
}
mysqli_select_db($conn, $db);
$query_re = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_re, "text"));
$re = mysqli_query($conn, $query_re) or die(mysqli_error());
$row_re = mysqli_fetch_assoc($re);
$totalRows_re = mysqli_num_rows($re);

$colname_disease = "-1";
if (isset($_SESSION['disease'])) {
  $colname_disease = $_SESSION['disease'];
}
mysqli_select_db($conn, $db);
$query_disease = sprintf("SELECT * FROM treatment WHERE disease = %s", GetSQLValueString($colname_disease, "text"));
$disease = mysqli_query($conn, $query_disease) or die(mysqli_error());
$row_disease = mysqli_fetch_assoc($disease);
$totalRows_disease = mysqli_num_rows($disease);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
    <meta charset="utf-8">
    <title>Expert System on Breast Cancer</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">



<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-width:2px;border-top-style:solid;border-top-color:#BDBDBD;margin-top: 5px;margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { background: ; padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 48px;
	top: 351px;
}
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;       
} 
label img{
    margin-right: 100%;
    width: 100%;
    height: 100%;
    margin-top: 0%;
    margin-left: 0%;
    cursor: pointer;
}
    img{
    
    margin-right: 14;
    width: 100%;
    margin: 2px 0px;
}
</style></head>
<body>
<?php
  $_SESSION['disease'] = $row_disease['disease']; 
  $_SESSION['treatment'] = $row_disease['treatment'];
  $_SESSION['medication'] = $row_disease['medication']; 
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
  $disease = $_SESSION['disease'];
  $treatment = $_SESSION['treatment'];
  $medication = $_SESSION['medication'];
  $password = $_SESSION['password'];
  $username = $_SESSION['username'];

  $sql = "INSERT into users_test(username,password,disease,treatment,medication) values('$username','$password','$disease','$treatment','$medication')";
  mysqli_query($conn, $sql);
  
  ?>
<div id="art-main">
<header class="art-header clearfix">

<label><img src="DiagnosisWalpaper.png">  </label>
   
<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
    <li><a href="member.php">Home</a></li>
    <li><a href="History.php" class="active">Test History</a></li>
    <li><a href="changepassword.php">Change Password</a></li>
    <li><a href="<?php echo $logoutAction ?>">Log Out</a></li>
    </ul> 
    </div>
  </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
<div class="art-layout-cell layout-item-1" style="width: 20%" >
         <?php echo "Dear".$row_re['surname']; ?>
&nbsp;
<?php echo $row_re['othername']; ?>
&nbsp;<br>
<br>
<center>
<table width="510" height="80" border="0" align="center">
  <tr>
    <td width="162" height="38" align="left" valign="top">Disease:</td>
    <td width="478" align="left" valign="top"><?php echo $row_disease['disease']; ?></td>
  </tr>
  <tr>
    <td height="36" align="left" valign="top">Treatment/Medication:</td>
    <td align="left" valign="top"><?php echo $row_disease['treatment']; ?></td>
  </tr>
</table>

</center>



    </p>  </div>
    </div>
</div>
<div class="art-content-layout-br layout-item-0">
</div><div class="art-content-layout">
    <div class="art-content-layout-row">

    </div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">

</div>

<?php
	// include 'footer.php';
	?>

  </div>
  </div>
</footer>

</div>




</body></html>

