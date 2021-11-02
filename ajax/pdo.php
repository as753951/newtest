<?php
function pdo(){
$db_host="localhost";//localhost
$db_user="admin";//帳號
$db_pw="admin";//密碼
$db_name="test";
$db_charset="utf8mb4";

$dsn="mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
//例外處理
try {
    $pdo= new PDO($dsn,$db_user,$db_pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
    //不主動報錯
    //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    //主動報錯
    //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //主動報例外
}catch(PDOException $e){
    echo $e->getMessage();
}
return $pdo;
}