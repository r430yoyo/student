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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_infoconn, $infoconn);
$query_Recordset1 = "SELECT * FROM stud ORDER BY stud_no ASC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $infoconn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1 / $maxRows_Recordset1) - 1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (
      stristr($param, "pageNum_Recordset1") == false &&
      stristr($param, "totalRows_Recordset1") == false
    ) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>學員資料管理系統</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
  <!-- <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script> -->
  <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
  <script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
  <script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="style/js/carousel.js"></script>
  <script type="text/javascript" src="style/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
  <script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
          <li><a href="blog.html">資料查詢</a></li>
          <li><a href="portfolio.html">圖片總覽</a></li>
          <li><a href="contact.html">好站連結</a></li>
          <li><a href="contact.html">資料刪除</a></li>
          <li><a href="contact.html">資料異動</a></li>
        </ul>
      </div>
      <!-- End Menu -->


    </div>
    <!-- End Sidebar -->

    <!-- Begin Content -->
    <div id="content">
      <h1 class="title">資料瀏覽</h1>
      <div class="line"></div>
      <div class="intro">相關學員資訊，當點按「姓名」欄位時，可至詳細頁面(detail)檢視該筆資料全部資訊。</div>


      <!-- Begin Table -->
      <br />
      <div class="line"></div>

      <table>
        <thead>
          <tr>
            <th class="text-center">
              <h4>學號</h4>
            </th>
            <th class="text-center">
              <h4>姓名</h4>
            </th>
            <th class="text-center">
              <h4>性別</h4>
            </th>
            <th class="text-center">
              <h4>出生日期</h4>
            </th>
            <th class="text-center">
              <h4>身分證字號</h4>
            </th>
            <th>
              <h4>畢業學校</h4>
            </th>
            <th>
              <h4>科系</h4>
            </th>
            <th class="text-center">
              <h4>行動電話</h4>
            </th>
            <th class="text-center">
              <h4>點擊率</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php do { ?>
            <tr>
              <td class="text-center"><?php echo $row_Recordset1['stud_no']; ?></td>
              <td class="text-center"><a href="detail.php?no=<?php echo $row_Recordset1['stud_no']; ?>"><?php echo $row_Recordset1['stud_name']; ?></a></td>
              <td class="text-center"><?php echo $row_Recordset1['stud_sex']; ?></td>
              <td class="text-center"><?php echo $row_Recordset1['stud_birthday']; ?></td>
              <td class="text-center"><?php echo $row_Recordset1['stud_idno']; ?></td>
              <td><?php echo $row_Recordset1['stud_school']; ?></td>
              <td><?php echo $row_Recordset1['stud_department']; ?></td>
              <td class="text-center"><?php echo $row_Recordset1['stud_phone']; ?></td>
              <td class="text-center"><?php echo $row_Recordset1['stud_hits']; ?></td>
            </tr>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </tbody>
      </table>
      <p>紀錄 <?php echo ($startRow_Recordset1 + 1) ?> 到 <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> 共 <?php echo $totalRows_Recordset1 ?> </p>
      <p>
        <span><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">第一頁</a> | </span><span><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">上一頁</a> | </span><span><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">下一頁</a> | </span><span><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">最後一頁</a></span>
      </p>

      <br />



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