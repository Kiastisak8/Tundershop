<?php
@session_start();
?>
<?php
	include_once("connectdb.php");

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM `product` WHERE p_id ='{$id}' ";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($rs);
?>

<!doctype html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูลสินค้า</title>
</head>

<body>
<form method="post" action="" enctype="multipart/form-data">
	<section style="background-color: #000000;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: 400px; height: auto; border-radius: 24px; border: 3px solid #D69F00;" class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 30px; margin-bottom: 20px;" > FIX</h3>
 <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ชื่อสินค้า</label>
    <input type="text" class="form-control" name="p_name" value="<?=$data['p_name'];?>" style="border: 2px solid #D69F00;" autofocus required>
  </div>
   <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ลายละเอียด</label>
    <input type="text" class="form-control" name="p_detail" value="<?=$data['p_detail'];?>" style="border: 2px solid #D69F00;" required>
  </div>
  <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ราคา</label>
    <input type="text" class="form-control" name="p_price"  value="<?=$data['p_price'];?>" style="border: 2px solid #D69F00;" required>
  </div>
  <div class=" mb-3">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>เลือกType</label>
    <select class="form-select"   name="p_type" required value="<?=$data['p_type'];?>" style="border: 2px solid #D69F00;">
      <option selected disabled value="">เลือก...</option>
      <option>1 Nike</option>
	  <option>2 Puma</option>
	  <option>3 Adidas</option>
	  <option>4 Mizuno</option>
    </select>
  </div>
<div class="col-mb-3">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>ไฟล์รูปภาพสินค้า</label>
    <input type="file" class="form-control" name="p_picture" required style="border: 2px solid #D69F00;">
    <div class="invalid-feedback" >Example invalid form file feedback</div>
  </div>
	   <input type="submit" name="Submit"  value="SUBMIT" class="btn btn-outline-warning">
	  <a href="fix.php"   class="btn btn-outline-danger">CANCEL </a>
    </div>
</div>
</div>
</form>
<?php
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		
	if(empty($_FILES['p_picture']['name'])){
		$sql = "UPDATE `product` SET `p_name` = '{$_POST['p_name']}', `p_detail` = '{$_POST['p_detail']}', `p_price` = '{$_POST['p_price']}', `p_type` = '{$_POST['p_type']}' WHERE `product`.`p_id` = '{$id}';";
		mysqli_query($conn, $sql) or die ("แก้ไขข้อมูลไม่ได้");
		
	}else{
		$path = $_FILES['p_picture']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		copy($_FILES['p_picture']['tmp_name'], "images/".$id.".".$ext);
		$sql = "UPDATE `product` SET `p_name` = '{$_POST['p_name']}', `p_detail` = '{$_POST['p_detail']}', `p_price` = '{$_POST['p_price']}', `p_type` = '{$_POST['p_type']}', `p_ext` = '.{$ext}' WHERE `product`.`p_id` = '{$id}';";
		mysqli_query($conn, $sql) or die ("แก้ไขข้อมูลไม่ได้");
	}
		
		
		echo "<script>";
		echo "alert('แก้ไขข้อมูลสำเร็จ');";
		echo "window.location='fix.php'";
		echo "</script>";
		
	}
	?>
	
	
</body>
</html>