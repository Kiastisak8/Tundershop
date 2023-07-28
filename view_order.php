<?php

@session_start();

?>
<!doctype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
<title>รายการใบสั่งซื้อ</title>
</head>
<body style="background-color: #000000">
<div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">Zodiac Sport-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">ALLPRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="basket.php">ตะกร้าสินค้า</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="view_order.php">VIEW ORDER</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="view_address.php">VIEW ADDRESS</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="fix.php">FIX</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link" href="p.php">ADD</a>
        </li>
      </ul>
    </div>
  </div>
</nav>	
	</div>
	</div>
	</div>
</body>
<body>
<h1 style="color: white">รายการใบสั่งซื้อ</h1>
<table width="832" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="153" style="color: white">&nbsp;</td>
    <td width="153" style="color: white">เลขที่ใบสั่งซื้อ</td>
    <td width="193" style="color: white">วันที่</td>
    <td width="150" style="color: white">ราคารวม</td>
    <td width="155" style="color: white">ลูกค้า</td>
  </tr>
  
  <?php
	include("connectdb.php");
	$sql = "select  *  from  `orders`  order by oid  desc ";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>

  <tr>
    <td><a href="view_order_detail.php?a=<?=$data['oid'];?>" style="color: white">ดูรายละเอียด</a></td>
    <td style="color: white"><?=$data['oid'];?></td>
    <td style="color: white"><?=$data['odate'];?></td>
    <td style="color: white"><?=number_format($data['ototal'],0);?></td>
    <td style="color: white">---</td>
  </tr>
  
  <?php  }  ?>
  
</table>
</body>
</html>