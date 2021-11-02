<?php
require_once("pdo.php");
$sql="INSERT INTO address_book (name, gender, phone, address, email) VALUES (?,?,?,?,?)";
$stmt= pdo()->prepare($sql);;
$stmt->execute([$_REQUEST['name'],$_REQUEST['gender'],$_REQUEST['phone'],$_REQUEST['address'],$_REQUEST['email']]);
?>