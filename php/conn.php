<?php
$conn = new mysqli("localhost","s0515630","LDY2000916","love_sentence");//数据库信息
if($conn->connect_error){
    die("数据连接失败");
}
?>