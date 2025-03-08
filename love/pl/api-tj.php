<?php
//header('content-type:text/html;charset=utf-8');
//include "../../sakura/mysql.php";


$ip=$_SERVER["REMOTE_ADDR"];
$loveid=$_POST['id'];
$name=$_POST['name'];
$sakura=$_POST['sakura'];
$time=time();

$sql= "INSERT INTO pl(id,ip,loveid,name,sakura,time) VALUES (null,'{$ip}','{$loveid}','{$name}','$sakura','$time');";



echo $sql;
?>