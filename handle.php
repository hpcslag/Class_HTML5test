<?php 
	if(isset($_POST['subs']) && isset($_COOKIE["html5test"]) == null){
		if(isset($_POST["ra"])){
			if($_POST["ra"] == 'good'){
				setcookie("html5test","true",time()+36000);
				header("Location: result.php");
			}else{
				setcookie("html5test","true",time()+36000);
				setcookie("html5test-fail","true",time()+360000);
				header("Location: result.php");
			}
		}else{
			//header error please check!
			header("Location: code.php?error=1");
		}
	}else{
		header("Location: index.php?error=1");//no infomation
	}
?>