<!DOCTYPE HTML>
<html>

<head>
  <title>Huy Chung Watch</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style_home.css?version=2" title="style" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Huy Chung Watch</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
        <li><a href="index.php"><img id="home" src="icon/home.png"> Home</a></li>
        <li><a href="admin\index.php"><img src="icon/admin.png" > Admin</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Brand</h3>
        <ul>
           <?php
           include_once ('admin/functions.php');
           $sql = "SELECT * FROM brand";
           $rst = querySQL($sql);
           while ($cls = mysqli_fetch_array($rst)) { ?>
           <li><a href="brand_detail.php?brandID=<?= $cls['brand_id'] ?>"><?= $cls['brand_name'] ?></a></li>
           <?php } ?>
        </ul>
      </div>
      <div class="content">
      <?php
      if (isset($_GET['watchID'])) {
      $watchID = $_GET['watchID'];
      $sql1 = "SELECT * FROM watch WHERE watch_id = '$watchID'";
      $rst1 = querySQL($sql1);
      while ($std = mysqli_fetch_array($rst1)) { ?>
        <div class="std_detail1">
          <div class="std_info1">
            <img src='admin\images\watch\<?= $std['watch_image']?>' width="250" height="250"> 
            <br> <br>
            Name: <?= $std['watch_name'] ?> <br> <br>
            amount: <?= $std['watch_amount'] ?> <br> <br>
            Price: <?= $std['watch_price'] ?> VNĐ <br> <br>
            Year: <?= $std['watch_year'] ?> <br> <br>
            origin: <?= $std['watch_origin'] ?> <br> <br>
            <?php
            $sbrand = $std['watch_brand'];
            
            $sql2 = "SELECT brand_name FROM brand WHERE brand_id = '$sbrand'";
            $rst2 = querySQL($sql2);
            $brand = mysqli_fetch_array($rst2); ?>
            Brand: <?= $brand[0] ?> <br> <br>
          </div>     
        </div>
      <?php } } 
      ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    Copyright by Web design and development -2020
    </div>
  </div>
</body>
</html>
