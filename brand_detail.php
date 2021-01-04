<!DOCTYPE HTML>
<html>

<head>
  <title>Huy Chung Store</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style_home.css?version=2" title="style" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Huy Chung Store</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
        <li><a href="index.php"><img id="home" src="icon/home.png" width="9%" height="6%"> Home</a></li>
        <li><a href="admin\index.php"><img src="icon/admin.png" width="9%" height="6%"> Admin</a></li>
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
      if (isset($_GET['brandID'])) {
      $brandID = $_GET['brandID'];
      $sql1 = "SELECT * FROM watch WHERE watch_brand = '$brandID'";
      $rst1 = querySQL($sql1);
      $sql2 = "SELECT brand_name FROM brand WHERE brand_id = '$brandID'";
      $rst2 = querySQL($sql2);
      $cln = mysqli_fetch_array($rst2);
      $brand_name = $cln[0];
      while ($std = mysqli_fetch_array($rst1)) { ?>
        <div class="std_detail">
          <div class="std_image">
            <a href="watch_detail.php?watchID=<?= $std['watch_id'] ?>">
            <img src='admin\images\watch\<?= $std['watch_image']?>' width="150" height="150"> 
            </a>
          </div> <br>
          <div class="std_info"> 
            <?= $std['watch_name'] ?> <br> <br>
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
