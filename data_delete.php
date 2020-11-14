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
        <li><a href="data_delete.php">資料刪除</a></li>
        <li><a href="data_edit.php">資料異動</a></li>
      </ul>
    </div>
    <!-- End Menu -->

    
	</div>
	<!-- End Sidebar -->
	
	<!-- Begin Content -->
	<div id="content">
	<h1 class="title">Get in Touch</h1>
	<div class="line"></div>
	<div class="intro">Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

<div class="map">
   <iframe width="700" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/?ie=UTF8&amp;ll=40.959289,29.082184&amp;spn=0.012963,0.022659&amp;z=14&amp;output=embed"></iframe>
</div>
    <br /> <br />
    
    <h3>Ipsum Tortor Vestibulum Sollicitudin</h3>
    
    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
  
 <br />
    
    <!-- Begin Form -->
          <div class="form-container">
            <form class="forms" action="contact/form-handler.php" method="post">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row">
                    <label>Name</label>
                    <input type="text" name="name" value="" class="text-input required" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Email</label>
                    <input type="text" name="email" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Subject</label>
                    <input type="text" name="subject" value="" class="text-input required" title="" />
                  </li>
                  <li class="form-row text-area-row">
                    <label>Message</label>
                    <textarea name="message" class="text-area required"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Submit" name="submit" class="btn-submit" />
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