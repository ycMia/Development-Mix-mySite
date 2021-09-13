<?php
$temp = explode(".", $_FILES["file"]["name"]);
$path ="../down/";

$bytescount = $_FILES["file"]["size"];
$gcount = floor($bytescount/1024/1024/1024);
$mcount = floor($bytescount/1024/1024);
$kcount = floor($bytescount/1024);
//floor函数代表向下(地板)取整

$mcount = $mcount - $gcount*1024;
$kcount = $kcount - $gcount*1024*1024 - $mcount*1024;
$bytescount = ($bytescount - $gcount*1024*1024*1024 - $mcount*1024*1024 - $kcount*1024);
$extension = end($temp);     // 获取文件后缀名
if (($_FILES["file"]["size"] <= 0))
{
	echo("非法的页面访问操作<a href=\"index.html\">回到前页面</a>");
	die();
}

echo "$gcount G $mcount M $kcount K $bytescount B</br>\n";
if (($_FILES["file"]["size"] <= 1024*1024*1024))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误: 错误代码(\$_FILES[\"file\"][\"error\"]):  " . $_FILES["file"]["error"] . "</br>";
		echo "
UPLOAD_ERR_OK\n </br>
	值：0; 没有错误发生，文件上传成功。\n</br>
UPLOAD_ERR_INI_SIZE\n</br>
	值：1; 上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。\n</br>
UPLOAD_ERR_FORM_SIZE\n</br>
	值：2; 上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。\n</br>
UPLOAD_ERR_PARTIAL\n</br>
	值：3; 文件只有部分被上传。\n</br>
UPLOAD_ERR_NO_FILE\n</br>
	值：4; 没有文件被上传。\n</br>
	值：5; 上传文件大小为0.\n</br>
";
	}
	else
	{
		echo "上传文件名: ".$_FILES["file"]["name"]."<br>";
		echo "文件类型: ".$_FILES["file"]["type"]."<br>";
		echo "文件大小: ".($_FILES["file"]["size"]/1024)." kB<br>";
		echo "文件临时存储的位置: ".$_FILES["file"]["tmp_name"]."<br>";
		$afilename = "";	
		if (file_exists($path.$_FILES["file"]["name"]))
		{
			// 文件已经存在;
			$count=1;
			while(file_exists($path.$_FILES["file"]["name"].".".$count))
			{
				$count++;
    		}
			move_uploaded_file($_FILES["file"]["tmp_name"], $path.$_FILES["file"]["name"].".".$count);
			//echo "已存在的文件, 改名的文件存储在: "."../down.php?f=".$_FILES["file"]["name"].".".$count;
			echo "已经存在的文件,后缀名已更改";
			$afilename = $_FILES["file"]["name"].".".$count;
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],$path.$_FILES["file"]["name"]);
			//echo "文件存储在: "."../down.php?f=".$_FILES["file"]["name"];
			$afilename = $_FILES["file"]["name"];
		}
		echo "<a href=\"/down.php?f=" . $afilename . "\">点击跳转至文件地址</a>";
	}
}
else
{
	echo "文件过大(16GB)";
}
?>
