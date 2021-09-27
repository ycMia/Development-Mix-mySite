<html>
<?php
function showNormal()
{
	echo <<<EOF
	<body>
<form method="post" target="/down_text/index.php">
<textarea name="box"></textarea>

<button style="width:10em; height:4em;" type="submit"></button>
</form>	

	</body>
EOF;
}

function showResult()
{
	echo <<<EOF
	<body>
	</body>
EOF;
}


if($_POST["box"])
{
	$time1 = time();
	$file = fopen("./file/$time1.txt","w+");
	fwrite($file,$_POST["box"]);
	fclose($file);
	showResult();	
}
else
{
	
	showNormal();	
}
?>
</html>
