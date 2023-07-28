<?php
	include("connectdb.php");
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<meta charset="utf-8">
<title>รายการสินค้า</title>
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
<body style="background-color: #000000">
<div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
<?php
	@$kw = $_POST['kw'] ;
	@$pt = $_GET['pt'] ;
	if (isset($_GET['pt'])) {
		$s = "and (p_type = '$pt')"; 
	} else {
		$s = "";	
	}
	$sql = "select * from product where ( p_name like '%$kw%' or p_detail like '%$kw%' ) $s ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		if( ($i % 3) == 1) {
			echo "<div class='row' align='center' style='width:100%;'>";
		}
?> 
 <div class="col-md-4" >
    <div class="thumbnail" style="background-color: #2C2C2C; height: 420; border-radius: 14px; border: 2px solid #FFC800;">
      <img src="images/<?=$data['p_id'].$data['p_ext'];?>" width="200" style="border-radius: 14px;" >
      <div class="caption">
        <h4 style="color: white" ><?=$data['p_name'];?></h4>
        <h4 style="color: white" ><?=number_format($data['p_price'],0);?> บาท</h4>
		<a href="c.php?id=<?=$data['p_id'];?>"  class="btn btn-outline-warning" role="button">แก้ไข</a>
		<a href="d.php?id=<?=$data['p_id'];?>"  class="btn btn-outline-danger" role="button">ลบข้อมูล</a>
      </div>
    </div>
  </div>

<?php 
		if ( ($i % 3 ) == 0){
			echo "</div>";	
		}
	} // end while

	mysqli_close($conn);
?>
		  </div>
	</div>
	</div>
</body>
</html>