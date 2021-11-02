<?php
require_once("pdo.php");
$sql="UPDATE address_book SET ondelete=1 WHERE id=?";
$stmt =pdo()->prepare($sql);
$stmt->execute([$_REQUEST['id']]);
header("refresh:0;url=../index.html");