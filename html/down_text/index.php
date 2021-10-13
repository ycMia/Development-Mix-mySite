<html>

<style>
p
{
	margin: 0 0 0 0;
	border-style:none;
}
</style>
<?php
$max_integer = 2147483647;
function showNormal()
{
	echo <<<EOF
	<body onload="opener.location.reload()">
<form method="post" target="/down_text/index.php">
<textarea name="box"></textarea>

<button style="width:10em; height:4em;" type="submit"></button>
</form>	

	</body>
EOF;
}

function showResult($time1)
{
	echo <<<EOF
	<body>
EOF;
	echo "<p>";
	echo $time1;
	echo "</p>";
//	echo "</br>";
	echo <<<EOF
	<a href="./file/" >file</a>
	</body>
EOF;
}

//echo $_COOKIE["submitted"];

if($_POST["box"] && $_COOKIE["submitted"]=="nope")
{
	$time1 = time();
	$file = fopen("./file/$time1.txt","w+");
	fwrite($file,$_POST["box"]);
	fclose($file);
	setcookie("submitted",'',time()-1);
	showResult($time1);
}
else
{
	setcookie("submitted","nope",$max_integer);
	showNormal();	
}
?>
</html>
