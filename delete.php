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

if ((isset($_POST['delid'])) && ($_POST['delid'] != "") && (isset($_POST['delsure']))) {
  $deleteSQL = sprintf("DELETE FROM stud WHERE stud_no=%s",
                       GetSQLValueString($_POST['delid'], "int"));

  mysql_select_db($database_infoconn, $infoconn);
  $Result1 = mysql_query($deleteSQL, $infoconn) or die(mysql_error());

  $deleteGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

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

$colname_Recordset1 = "-1";
if (isset($_GET['no'])) {
  $colname_Recordset1 = $_GET['no'];
}
mysql_select_db($database_infoconn, $infoconn);
$query_Recordset1 = sprintf("SELECT * FROM stud WHERE stud_no = %s", GetSQLValueString($colname_Recordset1, "int"));
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
      <h1 class="title">資料刪除</h1>
      <div class="line"></div>

      <br />
      <form action="" id="form1" name="form1" method="POST">
        <table>
          <tr>
            <td class="text-center">相片</td>
            <td colspan="3"><img src="images/<?php echo $row_Recordset1['stud_photo']; ?>" alt="" title="" width="250" height="313" style="display:block; margin:auto;"></td>

          </tr>
          <tr>
            <td class="text-center">姓名</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_name']; ?></td>
          </tr>
          <tr>
            <td class="text-center">性別</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_sex']; ?></td>
          </tr>
          <tr>
            <td class="text-center">出生日期</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_birthday']; ?></td>
          </tr>
          <tr>
            <td class="text-center">身分證字號</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_idno']; ?></td>
          </tr>
          <tr>
            <td class="text-center">畢業學校</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_school']; ?></td>
          </tr>
          <tr>
            <td class="text-center">科系</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_department']; ?></td>
          </tr>
          <tr>
            <td class="text-center">行動電話</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_phone']; ?></td>
          </tr>
          <tr>
            <td class="text-center">地址</td>
            <td colspan="3"><?php echo $row_Recordset1['stud_address']; ?></td>
          </tr>
          <tr>
            <td class="text-center">是否確定刪除?</td>
            <td class="text-center">
              <input type="submit" name="button" id="button" value="確定" />
              <input type="button" name="button3" id="button3" value="回主頁面" onclick="window.location='admin.php'" />
                <input type="hidden" name="delid" id="delid" value="<?php echo $row_Recordset1['stud_no']; ?>">
                <input name="delsure" type="hidden" id="delsure" value="true" />
            </td>
          </tr>
        </table>
      </form>


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