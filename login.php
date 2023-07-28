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
	<section style="background-color: #000000;" class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div style="background-color:#2C2C2C; width: 400px; height: auto; border-radius: 24px;  border: 2px solid #BA0000;" class="card">
  <div class="card-body">
	  <h3 style="color: white; font-size: 30px; margin-bottom: 20px;" > LOGIN</h3>	
  <div class=" mb-3 ">
    <label class="form-label" style="color: white; font-size: 17px;  margin-bottom: 13px; " required>Username</label>
    <input type="text" class="form-control" name="auser" style=" border: 2px solid #BA0000;"  autofocus required>
  </div>
  <div class=" mb-3">
    <label  class="form-label" style="color: white;  font-size: 15px; margin-bottom: 15px; " required>Password</label>
    <input type="password" class="form-control" name="apwd"  style=" border: 2px solid #BA0000;" required>
  </div>
	  <input type="submit" name="Submit" value="LOGIN" class="btn btn-outline-danger">	
	   <a href="register.php"   class="btn btn-outline-success">REGISTER </a>
	   <a href="index2.php"  class="btn btn-outline-warning">HOME</a>
    </div>
</div>
</form>
<?php
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		
		$sql = "select * from admin where a_user='{$_POST['auser']}' and a_pwd='".md5($_POST['apwd'])."' ";
		$rs = mysqli_query ($conn, $sql);
		$num = mysqli_num_rows($rs);
		
		if($num > 0){
			$data = mysqli_fetch_array($rs);
			$_SESSION['aid'] = $data['a_id'];
			$_SESSION['aname'] = $data['a_name'];
			echo "<script>" ;
	        echo "window.location='view_order.php';" ;
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