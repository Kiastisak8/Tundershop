<?php
	@session_start();

	session_destroy();

	echo "กำลังไปที่หน้าสั่งซื้อ กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=order.php\">";
	//header("Location: index.php");

?>
<meta charset="utf-8">