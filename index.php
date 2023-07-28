<?php
	include("connectdb.php");
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<meta charset="utf-8">
<title>Home</title>
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
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
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

<?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>
        <li class="nav-item">
          <a class="nav-link active" href="index2.php?pt=<?=$data2['pt_id'];?>" class="btn btn-info"><?=$data2['pt_name'];?></a>
        </li>
<?php } ?>
		<li class="nav-item">
          <a class="nav-link" href="basket.php">ตะกร้าสินค้า</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="login_user.php">login</a>
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
<div class="col-md-12 col-xs-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://yotyiam.com/wp-content/uploads/2019/03/what-brand-of-stud-shoes-are-good.jpg" alt="devbanban">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/bltf07c315c2a22ef8d/60dbb1ac2e95e10f21f16702/0ec0f981b1304923ff5b41b0f20c383bd7604c73.jpg?quality=80&format=pjpg&auto=webp&width=1000" alt="devbanban">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://sport.mthai.com/app/uploads/2015/05/354763.0.jpg" alt="devbanban">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        </div>
      </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>