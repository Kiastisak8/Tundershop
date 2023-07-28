<?php

@session_start();

?>

<!doctype html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>REGISTER</title>
</head>

<body>
	<form method="post" action="" enctype="multipart/form-data">
	<section style="background-color: #000000;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: 400px; height: auto; border-radius: 24px; border: 2px solid #157515;" class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 30px; margin-bottom: 20px;" > REGISTER</h3>
 <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" name="aname" style=" border: 2px solid #157515;" autofocus required>
  </div>
   <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>Email</label>
    <input type="text" class="form-control" name="aEmail" style=" border: 2px solid #157515;" required>
  </div>
  <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px;" required>Username</label>
    <input type="text" class="form-control" name="auser"  style=" border: 2px solid #157515;" required>
  </div>
  <div class=" mb-3">
    <label  class="form-label" style="color: white;  font-size: 15px; margin-bottom: 15px;" required>Password</label>
    <input type="password" class="form-control" name="apwd"  style=" border: 2px solid #157515;" required>
  </div>
	   <input type="submit" name="Submit"  value="REGISTER" class="btn btn-outline-success">
	  <a href="login.php"   class="btn btn-outline-danger">CANCEL </a>
    </div>
</div>
</div>
</form>
<?php
	
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		
		
	$sql = "INSERT INTO `admin` (a_id, a_name, a_user, a_pwd, a_Email) VALUES 
	(NULL, '{$_POST['aname']}', '{$_POST['auser']}', md5('{$_POST[('apwd')]}'), '{$_POST['aEmail']}' )";
	
	mysqli_query($conn, $sql) or die ("สมัครสมาชิกไม่สำเร็จ");
	$bid = mysqli_insert_id($conn);
			
	echo "<script>" ;
	echo "alert('SUCCESS');" ;
	echo "window.location='login.php';" ;
	echo "</script>" ;
}	
	
?>
	</section>

</body>
</html>