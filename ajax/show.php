<?php
    require_once("pdo.php");
    $sql= "SELECT *  FROM address_book where id = ?";
    $stmt =pdo()->prepare($sql);
    $stmt->execute([$_REQUEST['id']]);
    $rows=$stmt->fetchAll();
    foreach($rows as $row){
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