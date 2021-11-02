<?php
require_once("pdo.php");
$sql= "SELECT *  FROM address_book where ondelete = 0";
$stmt =pdo()->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
foreach($rows as $row){
    echo $row['id'];
    echo '/';
    echo $row['name'];
    echo '/';
    echo $row['gender'];
    echo '/';
    echo $row['phone'];
    echo '/';
    echo $row['address'];
    echo '/';
    echo $row['email'];
    echo '/';
    echo $row['ondelete'];
    echo '*';
}