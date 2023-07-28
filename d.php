<?php
@session_start();

?>

<meta charset="utf-8">
 
<?php
if(isset($_GET['id'])){
	include_once("connectdb.php");
	$sql = "DELETE FROM `product` WHERE `product`.`p_id` = '{$_GET['id']}' " ;
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	unlink("images/".$_GET['id'].".".$_GET['ext']);
	
	echo "<script>";
	echo "alert('ลบข้อมูลสำเร็จ');";
	echo "window.location='fix.php';";
	echo "</script>";
	
}
?>