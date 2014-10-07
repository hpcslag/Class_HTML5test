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
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <title>HTML5 is good!</title>
    <link rel="stylesheet" href="./highlight/styles/monokai_sublime.css">
    <script src="./highlight/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <style type="text/css">
    	html,body{
    		font-family: '微軟正黑體';
    	}
        .code{
			float: left;
			width: 28em;
			padding: 1em;
			background: #D6D4D1;
			border-width: 1px;
			border-style: solid;
			border-color: #82817F #82817F #82817F #82817F;
        }
        .btn{	
        		float: none;
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
				float: none;
				color: #fff;
				background: #0E8409;
			}
			.whit{
				background-color: white;
			}
    </style>
</head>

<body>
<div class="inside">
<form action="handle.php" method="post">
<?php 
	$qa = array('<div class="code">
    <pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;link charset="utf-8"&gt;
	&lt;title&gt;HTML5 is Good!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
	<input type="radio" name="ra" value="fail" />就決定是你了
</div>','<div class="code">
    <pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;title&gt;HTML5 is Good!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
	<input type="radio" name="ra" value="good" />就決定是你了
</div>','<div class="code">
    <pre><code class="html">&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd"&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;HTML5 is Good!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
	<input type="radio" name="ra" value="fail" />就決定是你了
</div>','<div class="code">
    <pre><code class="html">&lt;!--DOCTYPE html--&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;title&gt;HTML5 is Good!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
	<input type="radio" name="ra" value="fail" />就決定是你了
</div>');
	$arr = range(0,3);
	shuffle($arr);
	foreach($arr as $ran){
		echo $qa[$ran];
	}
?>
<div class="code whit" align="center">
<input href="#" onclick="form.submit();" class="btn" name="subs" type="submit" value="送出啦~~"/>
</div>
<?php if(isset($_GET["error"])) if($_GET["error"] == 1){?>
<div class="code whit" align="center">
<h2 style='color:#FF4031'>拜託選擇一下選項!</h3>
</div>
<?php } ?>
</form>
</div>
</body>

</html>
<?php }?>