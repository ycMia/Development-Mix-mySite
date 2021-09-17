<!-- this page is for PC -->

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scalr=1.0">
<head>
	<style>
	body
	{
		margin:0 0 0 0;
	}

	.gap
	{
		margin-top:30px;
	}

	.inputLabel
	{
		border:none;
	}
	
	.inputLabel:hover
	{
		background-color:#cceecc;
	}

	.inputLabel:active
	{
		background-color:#3e3e3e;	
	}

	.button1
	{
		width:100px;
		height:20px;
	}

	.container 
	{
		position: relative;
		
		border-radius: 15px;
		border-style:solid;
		border-color: #101247;
		
		background-color:#88adde;
		
		outline-style:none;
		margin: 5% 5% 5% 5%;
		border: 0px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
		content: 0px 0px 0px 0px;
		
		height:60em;
	}

	.containerInner
	{
		position:absolute;
		
		border-style:solid;
		border-color:#94aded;
		border-radius: 15px;
		background-color:#4273da;

		top:10%;
		left:5%;
		right:55%;
		bottom:10%;
		
		
/*
		margin: auto;
		border: auto;
		padding: auto;
		content: 10px 10px 10px 10px;
*/
	}

	.labelHint
	{
		margin:50px 0 0 0;
		position: float;
		
		left:50%;
		right:50%;
		margin:5px;	
	}
	</style>
</head>

<body>
<div class="container">
	<div class="containerInner">
<form action="main.php" method="post">
	<p class="labelHint">class:</p>
	<input type="text" name="t1" class="inputLabel">
	<p class="labelHint">second:</p>
	<!--<div class="gap"></div>-->
	<input type="text" name="t2" class="inputLabel">
	<div class="gap"></div>


	<button type="submit" class="button1">submit</button>
</form>
	</div>
</div>
<!--<p>abc</p>-->
</body>
</html>

<?php
//	phpinfo();
//	phpinfo();
?>
