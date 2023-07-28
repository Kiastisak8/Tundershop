<?php

@session_start();

?>

<!doctype html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>หน้าต่างล็อคอิน</title>
</head>

<body>
	<form method="post" action="">
	<section style="background-color: #000033;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: 500px; height: auto; border-radius: 24px;  border: 2px solid #000040;" class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 40px; margin-bottom: 20px;" > LOGIN</h3>	
  <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>Username</label>
    <input type="text" class="form-control" name="cususer" style=" border: 2px solid #000040;"  autofocus required>
  </div>
  <div class=" mb-3">
    <label  class="form-label" style="color: white;  font-size: 15px; margin-bottom: 15px; " required>Password</label>
    <input type="password" class="form-control" name="cuspwd"  style=" border: 2px solid #000040;" required>
  </div>
	  <input type="submit" name="Submit" value="LOGIN" class="btn btn-outline-danger">	
	   <a href="register_user.php"   class="btn btn-outline-success">REGISTER </a>
	   <a href="index2.php"  class="btn btn-outline-warning">HOME</a>
    </div>
</div>
</form>
<?php
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		
		$sql = "select * from cususer where cus_user='{$_POST['cususer']}' and cus_pwd='".md5($_POST['cuspwd'])."' ";
		$rs = mysqli_query ($conn, $sql);
		$num = mysqli_num_rows($rs);
		
		if($num > 0){
			$data = mysqli_fetch_array($rs);
			$_SESSION['cusid'] = $data['cus_id'];
			$_SESSION['cusname'] = $data['cus_name'];
			echo "<script>" ;
	        echo "window.location='index.php';" ;
	        echo "</script>" ;
			
		} else{
	echo "<script>" ;
	echo "alert('Login ไม่สำเร็จ');";
	echo "</script>" ;
		}
	}
?>
	</section>

</body>
</html>