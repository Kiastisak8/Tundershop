<?php

@session_start();

?>

<!doctype html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>SUBMIT</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
	<section style="background-color: #000000;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: 400px; height: auto; border-radius: 24px; border: 2px solid #44FF46;" class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 30px; margin-bottom: 20px;" >SUBMIT</h3>
 <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ชื่อสินค้า</label>
    <input type="text" class="form-control" name="p_name" style=" border: 2px solid #157515;" autofocus required>
  </div>
   <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ลายละเอียด</label>
    <input type="text" class="form-control" name="p_detail" style=" border: 2px solid #157515;" required>
  </div>
  <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ราคา</label>
    <input type="text" class="form-control" name="p_price"  style=" border: 2px solid #157515;" required>
  </div>
  <div class=" mb-3">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>เลือกType</label>
    <select class="form-select"   name="p_type" required  style=" border: 2px solid #157515;">
      <option selected disabled value="">เลือก...</option>
      <option>1 Nike</option>
	  <option>2 Puma</option>
	  <option>3 Adidas</option>
	  <option>4 Mizuno</option>
    </select>
  </div>
<div class="col-mb-3">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>ไฟล์รูปภาพสินค้า</label>
    <input type="file" class="form-control" name="p_picture" required style="border: 2px solid #D69F00; width: 250px">
    <div class="invalid-feedback" >Example invalid form file feedback</div>
  </div>
	   <input type="submit" name="Submit"  value="SUBMIT" class="btn btn-outline-success">
	   <a href="fix.php"   class="btn btn-outline-danger">CANCEL </a>
    </div>
</div>
</div>
</form>
<?php
	
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
	
	$path = $_FILES['p_picture']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);	
		
	$sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`, `p_ext`) VALUES (NULL,  '{$_POST['p_name']}', '{$_POST['p_detail']}', '{$_POST['p_price']}', '{$_POST['p_picture']}', '{$_POST['p_type']}', '.{$ext}')";
	
	mysqli_query($conn, $sql) or die ("ไม่สามรถเพิ่มข้อมูลได้");
	$bid = mysqli_insert_id($conn);
		
	copy($_FILES['p_picture']['tmp_name'], "images/".$bid.".".$ext);	
			
	echo "<script>" ;
	echo "alert('เพิ่มข้อมูลสำเร็จ');" ;
	echo "window.location='fix.php';" ;
	echo "</script>" ;
}	
	
?>
	</section>

</body>
</html>