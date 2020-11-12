<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>學員資料管理系統</title>
  <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
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
          <li><a href="portfolio.html">圖片總覽</a></li>
          <li><a href="contact.html">好站連結</a></li>
          <li><a href="contact.html">資料刪除</a></li>
          <li><a href="contact.html">資料異動</a></li>
        </ul>
      </div>
      <!-- End Menu -->

      <div class="sidebox">
        <div class="search">
          <h3>Search</h3>
          <form class="searchform" method="get">
            <input type="text" id="s" name="s" value="type and hit enter" onfocus="this.value=''"
              onblur="this.value='type and hit enter'" />
          </form>
          <div class="clear"></div>
        </div>
      </div>

    </div>
    <!-- End Sidebar -->

    <!-- Begin Content -->
    <div id="content">
      <h1 class="title">資料查詢</h1>
      <div class="line"></div>
      <div class="intro">查詢學員資訊，輸入欲查詢的值，下方將列出查詢的結果。</div>

        <!-- Begin Form -->
        <br />
        <div class="line"></div>

        <div class="form-container">
          <form class="forms" action="contact/form-handler.php" method="post">
            <fieldset>
              <ol>
                <li class="form-row text-input-row">
                  <label>學號</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>姓名</label>
                  <input type="text" name="email" value="" class="text-input required email" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>性別</label>
                  <input type="text" name="subject" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>出生日期</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>身分證字號</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>畢業學校</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>科系</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>行動電話</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="搜尋" name="submit" class="btn-submit" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>
          <div class="response"></div>
        </div>
        <!-- End Form -->
        <!-- Begin Table -->
        <br />
        <h3 class="title">查詢結果</h3>
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
              <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td></td>
                <td></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
              </tr>
          </tbody>
        </table>
        <!-- End Table -->

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