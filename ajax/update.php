<?php
require_once("pdo.php");
$sql="UPDATE address_book SET name=?,gender=?,phone=?,address=?, email=? WHERE id=?";
$stmt =pdo()->prepare($sql);
$stmt->execute([$_REQUEST['name'],$_REQUEST['gender'],$_REQUEST['phone'],$_REQUEST['address'],$_REQUEST['email'],$_REQUEST['id']]);
header("refresh:0;url=../index.html");
