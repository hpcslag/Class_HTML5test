<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HTML5 測試</title>
		<style type="text/css">
			html,body{
				font-family:'微軟正黑體';
				margin: 0;
				border: 0;
				position: relative;
			}
			#hd{
				background-image:  url(./kaneshiro.png);
				background-repeat:no-repeat;
				background-size:contain;
				background-position:left;
				position: relative;        
			    width: 85%;            
			    height: 610px;       
			    /*margin-left: auto;      
			    margin-right: auto; */
			}
			a{
				font-family: '微軟正黑體';
				font-size: 16px;
			}
			#ce{
				position: absolute;
				left: 50%;
				top: 40%;
			}
			.btn{
				text-transform: uppercase;
				-webkit-transition: 0.2s;
				-moz-transition: 0.2s;
				-ms-transition: 0.2s;
				transition: 0.2s;
				line-height: 1;
				border: 2px solid #0E8409;
				display: inline-block;
				padding: 15px 70px;
				font-family: "微軟正黑體";
				font-weight: bold;
				border-radius: 3px;
				color: #0E8409;
				text-decoration: none;
				-webkit-border-radius: 3px;
			}
			.btn:hover{
				color: #fff;
				background: #0E8409;
			}
		</style>
	</head>
	<body id="hd">
		<div id="ce">
			<?php if(isset($_GET["error"])) if($_GET["error"]==1) echo "<h3 style='color:#FF4031'>你根本沒有動作!</h3>"?>
			<h2>驗證你的HTML5實力</h2>
			<a href="code.php" class="btn">來吧!</a>
		</div>
	</body>
</html>