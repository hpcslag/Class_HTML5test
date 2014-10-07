<?php
	if(isset($_COOKIE["html5test"]) != null){
	?>
		<h1 style="font-family:'微軟正黑體';color:#0E8409;position: absolute;
	left: 40%;
	top: 40%;">你已經測驗完了:<?php if(isset($_COOKIE["html5test-fail"])!=null){
		echo "<span style='color:#FF4031'> 錯誤!</span>";
		}else{
			echo "<span style='color:1BA139'> 正確!</span>";
		}?></h1>
	<?php
	}else{
		header("Location: index.php");
	}
?>