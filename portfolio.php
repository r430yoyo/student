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

mysql_select_db($database_infoconn, $infoconn);
$query_Recordset1 = "SELECT * FROM stud";
$Recordset1 = mysql_query($query_Recordset1, $infoconn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>學員資料管理系統</title>
  <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css" />
  <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet'
    type='text/css'>
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
      <h1 class="title">圖片總覽</h1>
      <div class="line"></div>
      <div class="intro">所有學員圖片</div>




      <!-- Begin Portfolio -->
      <div id="portfolio">
        <ul id="filtering-nav">
          <li class="show">分類:</li>
          <li><a class="all" href="#all">所有</a></li>
          <li><a class="M" href="#M">男</a></li>
          <li><a class="F" href="#F">女</a></li>
        </ul>
        <div class="clear"></div>
        <div class="items">
          <?php do { ?>
          <div class="box col4 <?php echo $row_Recordset1['stud_sex']; ?>">
            <div class="image">
              <a href="./images/<?php echo $row_Recordset1['stud_name']; ?>.jpg" rel="prettyPhoto[portfolio]" title="<?php echo $row_Recordset1['stud_name']; ?>"><span
                  class="overlay zoom"></span><img src="./images/<?php echo $row_Recordset1['stud_name']; ?>.jpg" alt="" width="183" height="247"/></a>
            </div>
            <h4><a href="detail.php?no=<?php echo $row_Recordset1['stud_no']; ?>"><?php echo $row_Recordset1['stud_name']; ?></a></h4>
          </div>
            <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </div>
        <!-- .wrap -->
      </div>
      <!-- End Portfolio -->



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
<?php
mysql_free_result($Recordset1);
?>
