<?php
           $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("UPDATE member SET password=?,name=?,address=?,mobile=?,email=?,username=?
WHERE username=?");
           $stmt->bindParam(1, $_POST["username"]);
           $stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->execute(); // เริ่มเพิ่มข้อมูล

if ($stmt->execute()) 
echo "แก้ไขสนค้า ิ " . $_POST["username"] . " success";
?>