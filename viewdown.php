<?php
    $path="down";                                   //初使化用户所操作目录
    $prevpath=dirname($path);                       //初使化当前脚本所在目录
    $dir_handle=opendir($path);                //打开文件系统所要处理的目录

    while($file=readdir($dir_handle)) {           //遍历目录下的所有对象
        if($file!="." && $file!="..") {           //去掉目录下当前目录和上一级目录
            if($path==".")
			{
				$filename=$file;
			}
			else
			{
            	$filename=$path."/".$file;         //将目录名和当前目录下的文件名相连
			}
            if(is_dir($filename))
			{           
                //echo 'is_dir'.$filename.'<br/>';
            }
            if(is_file($filename))
			{
//				echo '<li><ul>';
				echo "<a href=\""/*.$_SERVER["SERVER_NAME"]*/."/down.php?f=".$file."\">";
				echo '<li>'.iconv(/*"GB2312"*/"UTF-8","UTF-8",$file).'</li>';
				echo "</a>";
				echo '<li>'.date("Y-m-j H:i:s", filectime($filename)).'</li>';
				echo '</ul></li>';
//				$this->filenum++;          //将统计文件数所成员属性值自加1
//				echo "<a href=\"".$_SERVER["SERVER_NAME"]."/down.php?f=".$filename."\">";
            	echo "\n";
			}
            //array_push($files, $tmp);  //将遍历出来的文件和目录对象都压入数组
        }
    }
    closedir($dir_handle);                  //关闭目录资源指针
?>

