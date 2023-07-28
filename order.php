<!doctype html>
<html>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>PLACE AN ORDER</title>
</head>

<body>
	<form method="post" action="" enctype="multipart/form-data" novalidate>
	<section style="background-color: #000000;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: auto; height: auto; border-radius: 24px; border: 3px solid #D69F00;  " class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 30px; margin-bottom: 20px;" > PLACE AN ORDER</h3>
<div class="d-flex p-2 bd-highlight">
 <div class=" col-md-8 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" name="adname" style="border: 2px solid #D69F00; width: 250px" autofocus required>
  </div>
   <div class="col-mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>เบอร์โทรศัพท์</label>
    <input type="text" class="form-control" name="adEmail" style="border: 2px solid #D69F00; width: 150px" required>
  </div>
</div>
<div class="d-flex p-2 bd-highlight">
  <div class=" col-md-8">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ที่อยู่</label>
    <input type="text" class="form-control" name="adad" style="border: 2px solid #D69F00;  height: 100px; width: 250px" required>
  </div>
  <div class="col-mb-3">
    <label  class="form-label" style="color: white;  font-size: 17px; margin-bottom: 13px;" required>รหัสไปรษณีย์</label>
    <input type="text" class="form-control" name="adpd"  style="border: 2px solid #D69F00; width: 100px" required>
	  </div>
</div>
<div class="d-flex p-2 bd-highlight">
  <div class="col-mb-8">
	<label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>เลือกผู้จัดส่ง</label>
    <select class="form-select"   name="adod" required  style="border: 2px solid #D69F00; width: 250px">
      <option selected disabled value="">เลือก...</option>
      <option>DHL EXPRESS</option>
	  <option>ไปรษณีย์ไทย</option>
	  <option>KERRY EXPRESS</option>
	  <option>BEST EXPRESS</option>
	  <option>FLASH EXPRESS</option>
    </select>
<div class="col-mb-3">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>ไฟล์สลิปการโอน</label>
    <input type="file" class="form-control" name="ad_picture" required style="border: 2px solid #D69F00; width: 250px">
    <div class="invalid-feedback" >Example invalid form file feedback</div>
  </div>
	</div>
</div>
</div>
<input type="submit" name="Submit"  value="ORDER" class="btn btn-outline-warning" style="border-radius: 24px;">		
</div>
</form>
<?php
	
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
	
	$path = $_FILES['ad_picture']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);	
		
	$sql = "INSERT INTO `address` (`ad_id`, `ad_name`, `ad_tel`, `ad_ad`, `ad_pd`, `ad_od`,  `ad_picture`, `ad_ext`) VALUES (NULL,  '{$_POST['adname']}', '{$_POST['adtel']}', '{$_POST['adad']}', '{$_POST['adpd']}', '{$_POST['adod']}', '{$_POST['ad_picture']}', '.{$ext}')";
	
	mysqli_query($conn, $sql) or die ("ระบุที่อยู่ไปรษณีย์ไม่สำเร็จ");
	$bid = mysqli_insert_id($conn);
		
	copy($_FILES['ad_picture']['tmp_name'], "images2/".$bid.".".$ext);	
			
	echo "<script>" ;
	echo "alert('ระบุที่อยู่ไปรษณีย์สำเร็จ');" ;
	echo "window.location='index2.php';" ;
	echo "</script>" ;
}	
	
?>
	</section>

</body>
</html>