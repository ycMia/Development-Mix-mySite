<?php

$down = $_GET['f'];   //获取文件参数
$filename = $down; //获取文件名称
$dir ="down/";  //相对于网站根目录的下载目录路径
$down_host = $_SERVER['HTTP_HOST'].'/'; //当前域名


//判断如果文件存在,则跳转到下载路径
if(file_exists(__DIR__.'/'.$dir.$filename)){
    header('location:http://'.$down_host.$dir.$filename);
}else{
    print("404");
}
?>
