<?php
	@session_start();
	include("connectdb.php");
	$sql = "select * from product where p_id='".@$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['p_id'];
		$_SESSION['sname'][$id] = $data['p_name'];
		$_SESSION['sprice'][$id] = $data['p_price'];
		$_SESSION['sdetail'][$id] = $data['p_detail'];
		$_SESSION['spicture'][$id] = $data['p_picture'];
		@$_SESSION['sitem'][$id]++;
	}
?>
<!doctype html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body style="background-color: #000033">
<div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">⌁ TunderShop ⌁</a>
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
          <a class="nav-link" href="login.php">ADMIN VIEW</a>
        </li>		
      </ul>
    </div>
  </div>
</nav>	
	</div>
	</div>
	</div>
</body>


<body style="background-color: black">
<blockquote>
<h2 style="color: white">ตะกร้าสินค้า</h2>
<a href="index2.php"  class="btn btn-light">กลับไปเลือกสินค้า</a>  
<a href="clear.php" class="btn btn-light">ลบสินค้าทั้งหมด</a> 
<a href="record.php" class="btn btn-light">สั่งซื้อสินค้า</a> 


<br><br>
<table width="100%" class="table">
	<tr>
		<th width="5%" style="color: white">ที่</th>
		<th width="19%" style="color: white">รูปสินค้า</th>
		<th width="24%" style="color: white">ชื่อสินค้า</th>
		<th width="14%" style="color: white">ราคา/ชิ้น</th>
		<th width="15%" style="color: white">จำนวน(ชิ้น)</th>
		<th width="14%" style="color: white">รวม</th>
		<th width="9%" style="color: white">&nbsp;</th>
	</tr>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
		@$i++;
		$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
?>
	<tr>
		<td><?=$i;?></td>
		<td><img src="images/<?=$_SESSION['spicture'][$pid];?>" width="120" ></td>
		<td style="color: white"><?=$_SESSION['sname'][$pid];?></td>
		<td style="color: white"><?=number_format($_SESSION['sprice'][$pid],0);?></td>
		<td style="color: white"> <?=$_SESSION['sitem'][$pid];?></td>
		<td style="color: white"><?=number_format($sum[$pid],0);?></td>
		<td><a href="clear2.php?id=<?=$pid;?>" class="btn btn-danger" style="color: white">ลบ</a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right" style="color: white"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong style="color: white"><?=number_format($total,0);?></strong></td>
		<td><strong style="color: white">บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center" style="color: white">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>
</blockquote>
</body>
</html>



