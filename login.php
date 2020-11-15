<?php require_once('Connections/infoconn.php'); ?>
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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "index.html";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_infoconn, $infoconn);
  
  $LoginRS__query=sprintf("SELECT username, password FROM studadmin WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $infoconn) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>學員資料管理系統</title>
  <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
  <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
  <!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
  <!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
  <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
  <script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
  <script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="style/js/carousel.js"></script>
  <script type="text/javascript" src="style/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
  <script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
</head>

<body>
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <!-- Begin Sidebar -->
    <div id="sidebar">
      <div id="logo"><a href="index.html"><img src="style/images/logo.png" alt="學員資料管理系統" /></a></div>

      <!-- Begin Menu -->
      <div id="menu" class="menu-v">
        <ul>
          <li><a href="index.html" class="active">首頁</a></li>
          <li><a href="tabs-toggle-table.php">資料瀏覽</a></li>
          <li><a href="blog.php">資料查詢</a></li>
          <li><a href="portfolio.php">圖片總覽</a></li>
          <li><a href="link.html">好站連結</a></li>
          <li><a href="login.php">資料刪除</a></li>
          <li><a href="login.php">資料異動</a></li>
        </ul>
      </div>
      <!-- End Menu -->


    </div>
    <!-- End Sidebar -->

    <!-- Begin Content -->
    <div id="content">
      <h1 class="title">登入</h1>
      <div class="line"></div>
      <div class="intro">請輸入系統管理者之帳號及密碼。</div>

      <br /> <br />

      <!-- Begin Form -->

      <div class="form-container">
        <img src="images/login.jpg" class="loginImage" width="250" height="250"  alt="">
        <form name="form1" class="forms" action="<?php echo $loginFormAction; ?>" method="POST">
          <fieldset>
            <ol>
              <li class="form-row text-input-row">
                <label>帳號</label>
                <input type="text" name="username" value="" class="text-input required nameInput" title="" />
              </li>
              <li class="form-row text-input-row">
                <label>密碼</label>
                <input type="text" name="password" value="" class="text-input required passwordInput" title="" />
              </li>
              <li class="form-row hidden-row">
                <input type="hidden" name="hidden" value="" />
              </li>
              <li class="button-row">
                <input type="submit" value="登入管理系統" name="submit" class="btn-submit" />
              </li>
            </ol>
            <input type="hidden" name="v_error" id="v-error" value="Required" />
            <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
          </fieldset>
        </form>
        <div class="response"></div>
      </div>
      <!-- End Form -->


      <!-- Begin Footer -->
      <div id="footer">
        <div class="footer-box one-third">
          <h3>網頁設計及維護</h3>
          <h4>陳珮瑜</h4>
        </div>
        <div class="footer-box one-third">
          <h3>最近更新日期</h3>
          <h4>2020/10/22</h4>
        </div>
      </div>
      <!-- End Footer -->


    </div>
    <!-- End Content -->

  </div>
  <!-- End Wrapper -->
  <div class="clear"></div>
  <script type="text/javascript" src="style/js/scripts.js"></script>
  <!--[if !IE]> -->
  <script type="text/javascript" src="style/js/jquery.corner.js"></script>
  <!-- <![endif]-->
</body>

</html>