<?php
	include("connectdb.php");
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<meta charset="utf-8">
<title>รายการสินค้า</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        /* Note: Try to remove the following lines to see the effect of CSS positioning */
        .affix {
            top: 0;
            width: 75%;
            z-index: 9999 !important;
        }

        .affix + .container-fluid {
            padding-top: 70px;
        }
        </style>
</head>
<body style="background-color: #000033">
<div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
					
 <nav class="navbar navbar-expand-lg  navbar-dark bg-dark " data-spy="affix" > 
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">⌁ TunderShop ⌁</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">ALL PRODUCT</a>
        </li>
        </li>
<?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>
        <li class="nav-item">
          <a class="nav-link active"href="index2.php?pt=<?=$data2['pt_id'];?>" class="btn btn-info"><?=$data2['pt_name'];?></a>
        </li>
<?php } ?>
		  <li class="nav-item">
          <a class="nav-link" href="basket.php">ตะกร้าสินค้า</a>
        </li>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="login_user.php">login</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" action="index2.php" method="post">
        <input class="form-control me-2" name="kw" type="text" placeholder="กรอกคำค้น" class="form-control input-md">>
        <button id="singlebutton" name="singlebutton" class="btn btn-primary" >Search</button>
      </form>
	  	
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
    <div class="thumbnail" style="background-color: #2C2C2C; height: 420; border-radius: 14px; border: 2px solid #0000CC;">
      <img src="images/<?=$data['p_id'].$data['p_ext'];?>" width="200" style="border-radius: 14px;" >
      <div class="caption">
        <h4 style="color: white" ><?=$data['p_name'];?></h4>
        <h4 style="color: white" ><?=number_format($data['p_price'],0);?> บาท</h4>
        <a href="basket.php?id=<?=$data['p_id'];?>"  class="btn btn-primary" role="button">หยิบลงตะกร้า</a>
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