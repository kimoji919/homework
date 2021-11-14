<?php
$content =$_POST['content'];
$username=$_POST['username'];

//var_dump($content,$username);
include('db.php');
if(trim($content)==''or trim( $username)=='' )
{
    echo'用户名、留言内容不能为空';
    exit;
}
if($username=='admin' ||$username=='root'||$username=='领导人' ){
    echo'用户名、留言内容不能为敏感词汇';
    exit;
}

$sql="insert into msg (username,content) values ('{$username}','{$content}')";
write($pdo,$sql);
header('location: index.php');
?>