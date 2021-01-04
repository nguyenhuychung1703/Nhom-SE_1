<!DOCTYPE HTML>
<html>

<head>
  <title>Huy Chung Watch</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style_home.css?version=3" title="style" />
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
           $result = querySQL($sql);
           while ($cls = mysqli_fetch_array($result)) { ?>
           <li><a href="brand_detail.php?brandID=<?= $cls['brand_id'] ?>"><?= $cls['brand_name'] ?></a></li>
           <?php } ?>
        </ul>
      </div>
      <div id="content">
      <?php
      $sql1 = "SELECT * FROM watch";
      $rst1 = querySQL($sql1);
      while ($std = mysqli_fetch_array($rst1)) { ?>
        <div class="std_detail">
          <div class="std_image">
            <a href="watch_detail.php?watchID=<?= $std['watch_id'] ?>">
            <img src='admin\images\watch\<?= $std['watch_image']?>' width="190" height="150"> 
            </a>
          </div> <br>
          <div class="std_info"> 
            <?= $std['watch_name'] ?> <br> <br>
          </div>     
        </div>
      <?php } ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Designer: Huy Chung <br>
      Phone: 0123456789

    </div>
  </div>
</body>
</html>
