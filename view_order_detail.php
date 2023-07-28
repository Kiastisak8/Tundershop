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
<body>
<h1 style="color: white">รายละเอียดใบสั่งซื้อ เลขที่ <?=$_GET['a'];?></h1>
<table width="863" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="54" style="color: white" >ที่</td>
    <td width="318" style="color: white">สินค้า</td>
    <td width="141" style="color: white">จำนวน</td>
    <td width="149" style="color: white">ราคา/ชิ้น</td>
    <td width="173" style="color: white"->รวม (บาท)</td>
  </tr>
  
  <?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  orders_detail
INNER JOIN product ON orders_detail.pid = product.p_id
WHERE orders_detail.oid = '".$_GET['a']."'  ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		$sum = $data['p_price'] * $data['item'] ;
		@$total += $sum;
?>
  <tr>
    <td style="color: white"><?=$i;?></td>
    <td style="color: white"><img src="images/<?=$data['p_picture'];?>" width="80"> <br>
    รหัสสินค้า: <?=@$data['p_id'];?> <br>
	ชื่อสินค้า: <?=$data['p_name'];?> </td>
    <td style="color: white"><?=$data['item'];?></td>
    <td style="color: white"><?=number_format($data['p_price'],0);?></td>
    <td style="color: white"><?=number_format($sum,0);?></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td style="color: white">&nbsp;</td>
    <td style="color: white">&nbsp;</td>
    <td style="color: white">&nbsp;</td>
    <td style="color: white">รวมทั้งสิ้น</td>
    <td style="color: white"><?=number_format($total,0);?></td>
  </tr>
</table>
</body>
</html>